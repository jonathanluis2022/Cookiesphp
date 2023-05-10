
<?php

if(isset($_POST['nome'])) {
 
    $venc = time() + (30 * 24 * 60 * 60);
    setcookie("nome", $_POST['nome'], $venc);
    header("Location: boasvindas.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies </title>
</head>
<body>
    <form action="" method="POST">
        <h1>Qual é seu nome ? </h1>
        <input type="text" name='nome'>
        <button type='submit'>ENVIAR</button>
    </form>
</body>
</html>