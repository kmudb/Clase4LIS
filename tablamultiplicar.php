<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="numero1" id="numero1">
        <input type="submit" name="mostrar" value="mostrar">
    </form>
</body>
</html>

<?php 
    if(isset($_POST["mostrar"])){
        $numero=$_POST["numero1"];
        echo "Tabla de multiplicar del numero ".$numero. "<br>";
        /*
        $i=0;
        do{
            $i++;  
            if($i > 3)   break;     
            echo $numero ."X". $i ."=" . $i*$numero. "<br>";
        }while($i<10);*/

        for($i=20;$i>=0;$i=$i-5){
            //if($i %3)   continue; 
            echo $numero ."X". $i ."=" . $i*$numero. "<br>";
        }

        $nombres=array("Carlos","María","Ana","Pedro","Luis","Oscar","Alexander","Rosa");
        foreach($nombres as $dato){
            if($dato == "María") continue;
            echo $dato. "<br>";
        }
    }
?>