<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<?php
$ch = curl_init();

$caller = $_POST['caller'];
$called = $_POST['called'];
// $token = $_POST['token'];

curl_setopt($ch, CURLOPT_URL, "https://api.nvoip.com.br/v1/calls");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);


curl_setopt($ch, CURLOPT_POSTFIELDS, "{
  \"caller\": \"$caller\",
  \"called\": \"$called\"
}");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "token_auth: c7a6cb6c2b7c4989144902a24ef064417023e"
));

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);

$data = json_decode(file_get_contents("callid"), true);


?>
<form action="prc.php" method="post">
    <div class="row-fluid"><br>
        <button class="btn btn-primary enviar2" type="submit" id="botaosaldo">Consultar saldo</button>
    </div>
</form>

<?php



?>
?>

</body>



</html>




