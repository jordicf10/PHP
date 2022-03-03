<?php
  
$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

echo "We started with {$riel} riels.\n";
echo "We started with {$kyat} kiats.\n";
echo "We started with {$krones} krones.\n";
echo "We started with {$lek} leks.\n";

$riel_usd = 0.00025;
$kyat_usd = 0.00056;
$krones_usd = 0.11238;
$lek_usd = 0.0091;

$array_exchange = array(
    1 => $riel_exchange = round(($riel_usd * $riel),2), 
    2 => $kyat_exchange = round(($krones_usd * $krones),2), 
    3 => $krones_exchange = round(($krones_usd * $krones),2), 
    4 => $lek_exchange = round(($lek_usd * $lek),2),
    5 => $fee_conversion = 1
);
for ($i=1;$i<=count($array_exchange);$i++){
    echo "\n{$array_exchange[$i]}";
}

$array_length = count($array_exchange);
echo "\n\nThis is length of array : {$array_length}\n";
// FALTA ESTO PARA ACABARLO//
$total_amount = $array_exchange[1] + $array_exchange[2] + $array_exchange[3] + $array_exchange[4] - ($array_length-1);
// FALTA ESTO PARA ACABARLO//

echo "We had {$riel} riels, so if riel values {$riel_usd} dollars, we have {$array_exchange[1]} dollars, but we have to apply a sustraction of fee per conversion of {$array_exchange[5]} dollar, so, in fact, we have " . ($riel_exchange - $array_exchange[5]) . " dollars.\n";
echo "We had {$kyat} kyats, so if kyat values {$kyat_usd} dollars, we have {$array_exchange[2]} dollars, but we have to apply a sustraction of fee per conversion of {$array_exchange[5]} dollar, so, in fact, we have " . ($kyat_exchange - $array_exchange[5]) . " dollars.\n";
echo "We had {$krones} krones, so if krones values {$krones_usd} dollars, we have {$array_exchange[3]} dollars, but we have to apply a sustraction of fee per conversion of {$array_exchange[5]} dollar, so, in fact, we have " . ($krones_exchange - $array_exchange[5]) . " dollars.\n";
echo "We had {$lek} leks, so if lek values {$lek_usd} dollars, we have {$array_exchange[4]} dollars, but we have to apply a sustraction of fee per conversion of {$array_exchange[5]} dollar, so, in fact, we have " . ($lek_exchange - $array_exchange[5]) . " dollars.\n";
echo "\nAfter doing every currency exchange, we can say that we have a total of {$total_amount}.\n";