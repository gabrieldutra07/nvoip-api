<?php
$ch = curl_init();

$callertorpedo = $_POST['calledtorpedo'];
$msgtorpedo = $_POST['msgtorpedo'];

curl_setopt($ch, CURLOPT_URL, "https://api.nvoip.com.br/v1/torpedovoz");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, "{
  \"caller\": \"37575001\",
  \"called\": \"$callertorpedo\",
  \"audio\": \"$msgtorpedo\"
}");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "token_auth: c7a6cb6c2b7c4989144902a24ef064417023e"
));

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);