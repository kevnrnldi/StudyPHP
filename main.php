<?php

$curl = curl_init();


$inputUser = "-";
if(!empty($_GET['input'])){
    $inputUser = $_GET['input'];
}

$data = [
    "name" => "dari input " . $inputUser,
    "avatar" => "https://static.vecteezy.com/system/resources/previews/020/502/754/non_2x/porsche-brand-logo-car-symbol-with-name-black-design-german-automobile-illustration-free-vector.jpg",
];


curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://6820a30e259dad2655ad212d.mockapi.io/dataDiri',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>json_encode($data),
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
