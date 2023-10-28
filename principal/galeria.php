<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Revalia&display=swap" rel="stylesheet">

    <title> Galeria </title>

    <style>
        body {
            background-image: url("../image-principal/fundototal.png");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="cabeca">
            <h1>Galeria</h1>
        </div>
    </header>
</body>

<?php
$imagens = glob("../imagens/*");
$op = 0;

echo '<div class="semNada">';
if (count($imagens) <= 0) {            //se o vetor não tiver imagens, executa:
    echo "No imagens found! </br>";
    echo "Please, send an image:</br></br> <a href='http://localhost/web2/I unidade/photo-gallery/admin/upload.php'> > Upload < </a>";
}
echo '</div>';

echo '<div class="imprimir">';
foreach ($imagens as $indice => $img) {      
    echo "<div class='box'> <img src='$img'>";
    echo '<a href="galeria.php?op=' . $indice . '"> Remover </a> </div>';
}
echo '</div>';

echo '<div class="add">';
if (count($imagens) > 0) {    //com o vetor já preenchido com alguma img, dá a opção de add mais
    echo "<br><br> Adicionar mais imagens: <br> <a href='../photo-gallery/admin/upload.php'> Fazer upload </a>";
}
echo '</div>';

if (isset($_GET["op"])) {      //deletar a img que o usuário escolher
    $op = $_GET["op"];
    unlink($imagens[$op]);
    header('Location:galeria.php');   //redireciona o usuário para a mesma página após executar a instrução
}

?>

</html>