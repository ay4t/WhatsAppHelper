<?php
/*
 * File: WhatsAppSG.php
 * Project: src
 * Created Date: Mo Oct 2022
 * Author: Ayatulloh Ahad R
 * Email: ayatulloh@indiega.net
 * Phone: 085791555506
 * -------------------------
 * Last Modified: Mon Oct 03 2022
 * Modified By: Ayatulloh Ahad R
 * -------------------------
 * Copyright (c) 2022 Indiega Network 

 * -------------------------
 * HISTORY:
 * Date      	By	Comments 

 * ----------	---	---------------------------------------------------------
 * 
 * Program ini dibuat dan dikembangkan untuk dapat mengirim pesan Whatsapp melalui whatsApp api yang dapat diinstal sendiri di dalam server kita. 
 * untuk lebih detailnya anda dapat melihat dokumentasi pada homepage library ini di
 * 
 * https://github.com/ay4t/WhatsAppHelper
 * 
 * Jika anda ingin membantu dan mengembangkan program ini untuk lebih baik kedepan anda dapat Fork repository ini
 * dan pull-request fitur atau update terbarunya.
 */

namespace ay4t\WhatsAppHelper;

use ay4t\WhatsAppHelper\Traits\FormatPhoneTrait;
use ay4t\WhatsAppHelper\Traits\GetSetTrait;
use ay4t\WhatsAppHelper\Traits\GlobalTrait;
use Exception;

class WhatsAppSG
{
    use GetSetTrait, FormatPhoneTrait, GlobalTrait;

    /**
     * __construct
     *
     * @return parent::__construct()
     */
    public function __construct(int $recepient = null, string $message = null)
    {
        $this->recepient    = $recepient;
        $this->message      = $message;
    }

    /**
     * SendText
     *
     * @return this 
     * @author Ayatulloh Ahad R <ayatulloh@indiega.net>
     * @throws Exception
     */
    public function SendText()
    {
        $recepient  = $this->FormatPhone($this->recepient);
        $sender     = $this->FormatPhone($this->senderPhone);

        if ($recepient == $sender) {
            throw new Exception('Nomor tujuan tidak boleh kedalam nomor yang sama dengan pengirim, dikarenakan bisa menyebabkan server whatsapp mati !');
        }

        $params     = [
            'number'    => $recepient,
            'message'   => $this->message,
        ];
        return $this->_exce('/send-message', $params);
    }
}