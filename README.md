
# WhatsAppHelper
module untuk mengirim notifikasi WhatsApp menggunakan Whatsapp gateway service dengan HTTP
module ini di buat untuk Framework codeigniter atau OOP PHP untuk mengirim pemneritahuan lewat WhatsApp service dengan POST data

# Requirment

# Cara Install

# Contoh Penggunaan
Berikut adalah contoh penggunaan pada PHP

    /* ------------------------ contoh penggunaan pertama ----------------------- */
    
    use ay4t\WhatsAppHelper\WhatsAppSG;
    
    $wa     = new WhatsAppSG();
    $wa->setPort('6789')
	    ->setSenderPhone('085791555506')
	    ->setRecepient('082255879157')
	    ->setMessage('test kirim wa?');
	    
	var_dump($wa->SendText());

	/**
	* jika anda menggunakan nomor diluar indonesia 
	* Anda dapat mengatur locale dengan cara
	* 
	* catatan:
	* lihat kode negara aplha-2-code di link berikut
	* https://www.iban.com/country-codes
	*/
	$wa     = new WhatsAppSG();
	$wa->setPort('6789')
		->setLocale('US')
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
	



