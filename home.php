<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Home</title>
    <style type="text/css">.button{
        text-align:center;
        align:center
    }
    div{
			border: 2px solid black;
			width: 25%;
			padding-left: 15%;
			padding-bottom: 3%;
			padding-top: 3%;
			margin-left: 25%;
		}
		h2{
			margin-left: 40%;
		}
    </style>
</head>
<body>
    
    <h2> Página inicial </h2>
    <hr>
    <br><br>
    <div>
        <form>
            <input type="button" name="cadastro" value = "Cadastrar" onclick="window.open('cadastrar.php','_top');">  </input> 
            
            <input type="button" name="busca" value = "Buscar" onclick="window.open('pesquisa.php','_top');"> </input>

    </form>
</body>
</html>