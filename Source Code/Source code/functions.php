<?php
function currencyConverter($fromConvert,$toConvert,$amount) {
$fromConvert = urlencode($fromConvert);
$toConvert = urlencode($toConvert);
$url = "https://www.google.com/search?q=".$fromConvert."+to+".$toConvert;
$get = file_get_contents($url);
$data = preg_split('/\D\s(.*?)\s=\s/',$get); 
$exchangeRate = (float) substr($data[1],0,7);
$convertedAmount = $amount*$exchangeRate;

$data =  array('$fromConvert' => strtoupper($fromConvert), 'toConvert' => strtoupper($fromConvert).   " to "   .strtoupper($toConvert),
'exchangeRate' => $exchangeRate, 'convertedAmount' =>$convertedAmount);
echo json_encode($data);
}
?>
