<html>
<head>
    <title>DESMEMBRA</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

    
<body>
<br>   
<div align="center">

<form name="jogo" method="post">
<input name = "nome" class="form-control" type = "text" placeholder="Digite aqui"/>
<br> 
<input type="submit" class="btn btn-success btn-lg" value = "verificar"/>
  
</form>

        <form action="index.php">
        <button class="btn btn-info btn-lg"> Voltar </button>
        </form> 
</div>
</body>
</html>
<?php
//////////////////////////////////////////////////////////////////////


$nome = $_POST['nome'];    

//////////////////////////////////////////////////////////////////////
$qtd = strlen($nome);



//////////////////////////////////////////////////////////////////////
for ($i  = 0 ; $i <= (strlen($nome))-1 ; $i++)
{
echo "<br>";
    if ($nome[$i] == " " )
        {
            echo "<br>";
            $i++;
        }
for ($s  = $i ; $s <= (strlen($nome))-1 ; $s++)
    {
        
        echo $nome[$s] ;        

    }
}
?>
