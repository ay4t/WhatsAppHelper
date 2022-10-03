<?php
/*
 * File: test.php
 * Project: WhatsAppHelper
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
 */

use ay4t\WhatsAppHelper\WhatsAppSG;

require 'vendor/autoload.php';

/* ------------------------ contoh penggunaan pertama ----------------------- */

$wa     = new WhatsAppSG();
$wa->setPort('6789')
    ->setSenderPhone('085791555506')
    ->setRecepient('082255879157')
    ->setMessage('test kirim wa?');

var_dump($wa->SendText());

/* ------------------------- contoh penggunaan kedua ------------------------ */

$wa     = new WhatsAppSG('082255879157', 'hallo ini coba kirim whatsapp');
$wa->setBaseUrl('http://127.0.0.1')
    ->setPort('6789')
    ->setSenderPhone('085791555506');

$result     = $wa->SendText();