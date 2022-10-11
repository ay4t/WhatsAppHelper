<?php
/*
* File: FormatPhoneTrait.php
* Project: Traits
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
 * update:
 * 1. menambahkan locale untuk kode negara. Default ID
 */

namespace ay4t\WhatsAppHelper\Traits;

use Exception;

trait FormatPhoneTrait
{

    /**
     * @var string
     * @author Ayatulloh Ahad R <ayatulloh@indiega.net>
     */
    protected $locale   = 'ID';

    /**
     * Helper berfungsi untuk memformat nomor telepon 
     *
     * @param  int|null $phone
     *
     * @return void            
     * @author Ayatulloh Ahad R <ayatulloh@indiega.net>
     * @throws Exception
     */
    public function FormatPhone(int $phone = null)
    {
        $phoneUtil              = \libphonenumber\PhoneNumberUtil::getInstance();
        try {

            $NumberFormat       = $phoneUtil->parse($phone, $this->locale);
            return $NumberFormat->getCountryCode() . $NumberFormat->getNationalNumber();
            var_dump($NumberFormat);
        } catch (\libphonenumber\NumberParseException $e) {
            throw new Exception($e->getMessage());
        }
    }

	/**
	 * Set the value of locale
	 * @param   string  $locale  
	 * @return  self
	 */
	public function setLocale(string $locale)
	{
		$this->locale = $locale;
		return $this;
	}
}