<?php

include_once "conexao.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site com slide</title>
</head>

<body>




<p>Filmes:.</p>
    <iframe id='slide' src="slider html funcional com touch/slide1/index.php" style="border:none; height:320px; width:100%; overflow-y:hidden;"></iframe>


<p>séries:.</p>
    <iframe id='slide' src="slider html funcional com touch/slide2/index.php" style="border:none; height:320px; width:100%; overflow-y:hidden;"></iframe>


</body>

<style type='text/css'>

body{
    padding: 0;
    margin: 0;
}

#slide:nth-child(2){
    position: relative;
    top:0px;
    margin: 0;
    padding: 0;
}

#slide{
    position: relative;
    top:-30px;
    margin: 0;
    padding: 0;
}



p:first-child{
    position: relative;
    top:10px;
    margin:0;
}

p{
    position: relative;
    top:-30px;
    margin: 0;
}

</style> 

</html>