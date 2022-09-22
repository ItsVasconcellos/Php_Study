<?php
    //Conectando ao BD
    try{
        //Conexão PDO
        //IP, nomeBD(clRA), usuario(clRA), senha(cl*Dtnasc)
        $pdo = new PDO('mysql:host=143.106.241.3;dbname=cl200128;charset=utf8','cl200128','cl*10092004');
        //ativar o depurador de erros
    }catch(PDOException $e){
        echo 'IMpossível conectar BD: ' . $e . '<br>';
    }
    ?>