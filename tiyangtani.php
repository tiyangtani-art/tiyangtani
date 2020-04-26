<?php
///////////////////////////////////////////
/////////////TIYANGTANI////////////////////
/////////////😁😁😁😁😁😁😁😁😁😁😁😁😁😁
include 'tri_req.php';

$tri = new tri();
$imei = "868880043302499";
echo "Masukkan Tytyd Mu mbah : ";
$msisdn = trim(fgets(STDIN));
$otp = $tri->request_otp($msisdn,$imei);
echo $otp[1] . "\r\n";
echo "Sperma crot : ";
$otp = trim(fgets(STDIN));
$login = $tri->login($msisdn,$otp);
$login = json_decode($login,true);
$bearer = $login['access_token'];
$id = $tri->trans($bearer);
$id = json_decode($id,true);
$id = $id['data'][0]['rewardTransactionId'];
for($id1 = 10; $id1 < 20;$id1++)
{
  $tiyangtani = $tri->claim($bearer,$id,$id1);
  echo $tiyangtani . "\r\n";
  sleep(2);
}


?>
