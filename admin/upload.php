<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Upload </title>

    <style> 
    body {
        background-color: purple;
    }

    b, a {
        color: white !important;
    }
</style>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">

<label for="arquivo"> <b> Selecione o arquivo escolhido: </b> </label> <br><br>
<input type="file" name="arquivo[]" id="" multiple>

<br><br> <button type="submit" name="enviar"> Enviar </button>
</form> 

</body>
<?php 
if (isset($_POST["enviar"])) {

$dir = "../imagens/";
$file = $_FILES['arquivo']['name'];

for ($i=0; $i < (count($_FILES['arquivo']['name'])); $i++) { 
    $file = $_FILES['arquivo']['name'][$i];

if (move_uploaded_file($_FILES['arquivo']['tmp_name'][$i], "$dir/".$file)) {
    echo "<br> Arquivo enviado com sucesso!";
}

else { echo "<br> Não foi possível enviar o arquivo."; }

}
}
echo "<br> <br>";
echo "<b> Retornar para a galeria: </b> 
<a href='http://localhost/web2/I unidade/photo-gallery/principal/galeria.php'> Retornar </a>";
?>
</html>

