<html>
<head>
     <link href="css/bootstrap.css" rel ="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
    
    <body>
<br>   
<div align="center">
    <form name="jogo" method="post">
        <label>Nome: </label>
        <input name = "nome" class="form-control btn-lg " type = "text" placeholder="Digite aqui" /><br>
        <input type="submit" class="btn btn-success btn-lg btn-block" value = "verificar"/>
   
</form>  
        <form action="index.php">
        <button class="btn btn-primary btn-lg btn-block"> Voltar </button>
        </form>  
</div> 
      
        
    </body>
</html>
<?php
//////////////////////////////////////////////////////////////////////

$nome = utf8_encode($_POST['nome']);    

//////////////////////////////////////////////////////////////////////
$qtd = strlen($nome);

//////////////////////////////////////////////////////////////////////
  for ($i = 0 ; $i <= (strlen($nome))-1 ; $i++)
    {
        $num = rand(1,5);
        if($nome[$i] == "a" || $nome[$i] == "â" || $nome[$i] == "ã" || $nome[$i] == "á" || $nome[$i] == "A")
        {
            if ($num == 1)
            {
            echo "Abbot<br>";
            }
            if ($num == 2)
            {
            echo "Aragogue<br>";
            }
            if ($num == 3)
            {
            echo "Amasso<br>";
            }
            if ($num == 4)
            {
            echo "Accio<br>";
            }
            if ($num == 5)
            {
            echo "Agripa<br>";
            }
        }
        
        if($nome[$i] == "b"  || $nome[$i] == "B" )
        {
            if ($num == 1)
            {
            echo "Bombarda<br>";
            }
            if ($num == 2)
            {
            echo "Bicuço<br>";
            }
            if ($num == 3)
            {
            echo "Bagman<br>";
            }
            if ($num == 4)
            {
            echo "Bichento<br>";
            }
            if ($num == 5)
            {
            echo "Belatriz<br>";
            }
        }
        
        if($nome[$i] == "c" || $nome[$i] == "C")
        {
            if ($num == 1)
            {
            echo "Crabbe<br>";
            }
            if ($num == 2)
            {
            echo "Centauro<br>";
            }
            if ($num == 3)
            {
            echo "Crouch<br>";
            }
            if ($num == 4)
            {
            echo "Canino<br>";
            }
            if ($num == 5)
            {
            echo "Confundo<br>";
            }       
        }
        
        if($nome[$i] == "d" || $nome[$i] == "D")
        {
            if ($num == 1)
            {
            echo "Delacour<br>";
            }
            if ($num == 2)
            {
            echo "Derek<br>";
            }
            if ($num == 3)
            {
            echo "Doby<br>";
            }
            if ($num == 4)
            {
            echo "Depulso<br>";
            }
            if ($num == 5)
            {
            echo "Desaparatar<br>";
            }        
        }
        
        if($nome[$i] == "e" || $nome[$i] == "E")
        {
            if ($num == 1)
            {
            echo "Edwiges<br>";
            }
            if ($num == 2)
            {
            echo "Errol<br>";
            }
            if ($num == 3)
            {
            echo "Erecto<br>";
            }
            if ($num == 4)
            {
            echo "Estupore<br>";
            }
            if ($num == 5)
            {
            echo "Evans<br>";
            } 
        }
        
        if($nome[$i] == "f" || $nome[$i] == "F")
        {
            if ($num == 1)
            {
            echo "Flamel<br>";
            }
            if ($num == 2)
            {
            echo "Filch<br>";
            }
            if ($num == 3)
            {
            echo "Fudge<br>";
            }
            if ($num == 4)
            {
            echo "Fênix<br>";
            }
            if ($num == 5)
            {
            echo "Fofo<br>";
            }         
        }
        
        if($nome[$i] == "g"|| $nome[$i] == "G")
        {
            if ($num == 1)
            {
            echo "Geminio<br>";
            }
            if ($num == 2)
            {
            echo "Gira-gira<br>";
            }
            if ($num == 3)
            {
            echo "Grifo<br>";
            }
            if ($num == 4)
            {
            echo "Godrico<br>";
            }
            if ($num == 5)
            {
            echo "Godelot<br>";
            } 
        }
        
        if($nome[$i] == "h" || $nome[$i] == "H")
        {
            if ($num == 1)
            {
            echo "Hagrid<br>";
            }
            if ($num == 2)
            {
            echo "Hipogrifo<br>";
            }
            if ($num == 3)
            {
            echo "Heliopatas<br>";
            }
            if ($num == 4)
            {
            echo "Horcruxes<br>";
            }
            if ($num == 5)
            {
            echo "Hermes<br>";
            }         
        }
        
        if($nome[$i] == "i" || $nome[$i] == "I")
        {
            if ($num == 1)
            {
            echo "Iéti<br>";
            }
            if ($num == 2)
            {
            echo "Inferius<br>";
            }
            if ($num == 3)
            {
            echo "Imperio<br>";
            }
            if ($num == 4)
            {
            echo "Incêndio<br>";
            }
            if ($num == 5)
            {
            echo "Impedimenta<br>";
            }         
        }
        
        if($nome[$i] == "j" || $nome[$i] == "J")
        {
            if ($num == 1)
            {
            echo "Jordan<br>";
            }
            if ($num == 2)
            {
            echo "Jorkins<br>";
            }
            if ($num == 3)
            {
            echo "Jacarandá<br>";
            }
            if ($num == 4)
            {
            echo "Javali<br>";
            }
            if ($num == 5)
            {
            echo "Jugson<br>";
            }         
        }
        
        if($nome[$i] == "k" || $nome[$i] == "K")
        {
            if ($num == 1)
            {
            echo "Krum<br>";
            }
            if ($num == 2)
            {
            echo "Kegg<br>";
            }
            if ($num == 3)
            {
            echo "Keppa<br>";
            }
            if ($num == 4)
            {
            echo "Karkus<br>";
            }
            if ($num == 5)
            {
            echo "Kneen<br>";
            } 
        }
        
        if($nome[$i] == "l"|| $nome[$i] == "L")
        {
            if ($num == 1)
            {
            echo "Lumos<br>";
            }
            if ($num == 2)
            {
            echo "Locomotor<br>";
            }
            if ($num == 3)
            {
            echo "Lobisomem<br>";
            }
            if ($num == 4)
            {
            echo "Lesmalenta<br>";
            }
            if ($num == 5)
            {
            echo "Longbottom<br>";
            }        
        }
               
        if($nome[$i] == "m"|| $nome[$i] == "M")
        {
            if ($num == 1)
            {
            echo "Murta<br>";
            }
            if ($num == 2)
            {
            echo "Minerva<br>";
            }
            if ($num == 3)
            {
            echo "Miadura<br>";
            }
            if ($num == 4)
            {
            echo "Murtisco<br>";
            }
            if ($num == 5)
            {
            echo  "Monstro<br>";
            }   
        }
        
         if($nome[$i] == "n" || $nome[$i] == "N")
        {
            if ($num == 1)
            {
            echo "Nox<br>";
            }
            if ($num == 2)
            {
            echo "Narcisos<br>";
            }
            if ($num == 3)
            {
            echo "Nundu<br>";
            }
            if ($num == 4)
            {
            echo  "Norberto<br>";
            }
            if ($num == 5)
            {
            echo "Nagini<br>";
            }         
        }
        
         if($nome[$i] == "o"|| $nome[$i] == "O")
        {
            if ($num == 1)
            {
            echo "Ogg<br>";
            }
            if ($num == 2)
            {
            echo "Obliviate<br>";
            }
            if ($num == 3)
            {
            echo "Oppugno<br>";
            }
            if ($num == 4)
            {
            echo "Olivaras<br>";
            }
            if ($num == 5)
            {
            echo "Oona<br>";
            }         
        }
        
         if($nome[$i] == "p" || $nome[$i] == "P")
        {
            if ($num == 1)
            {
            echo "Patil<br>";
            }
            if ($num == 2)
            {
            echo "Pelúcio<br>";
            }
            if ($num == 3)
            {
            echo "Pomorim Dourado<br>";
            }
            if ($num == 4)
            {
            echo "Protego<br>";
            }
            if ($num == 5)
            {
            echo "Petrificus Totalus<br>";
            }         
        }
        
         if($nome[$i] == "q" || $nome[$i] == "Q")
        {
            if ($num == 1)
            {
            echo "Quirrell<br>";
            }
            if ($num == 2)
            {
            echo "Queerditch<br>";
            }
            if ($num == 3)
            {
            echo "Quimeras<br>";
            }
            if ($num == 4)
            {
            echo "Querubim<br>";
            }
            if ($num == 5)
            {
            echo "Quince<br>";
            }  
        }
        
         if($nome[$i] == "r" || $nome[$i] == "R")
        {
            if ($num == 1)
            {
            echo "Rabicurto<br>";
            }
            if ($num == 2)
            {
            echo "Reducto<br>";
            }
            if ($num == 3)
            {
            echo "Relaxo<br>";
            }
            if ($num == 4)
            {
            echo "Riddle<br>";
            }
            if ($num == 5)
            {
            echo "Ravenclaw<br>";
            }  
        }
        
         if($nome[$i] == "s"|| $nome[$i] == "S")
        {
           if ($num == 1)
            {
            echo "Scamander<br>";
            }
            if ($num == 2)
            {
            echo "Skeeter<br>";
            }
            if ($num == 3)
            {
            echo "Salamandra<br>";
            }
            if ($num == 4)
            {
            echo "Sinistro<br>";
            }
            if ($num == 5)
            {
            echo "Sonorus<br>";
            }  
        }
        
         if($nome[$i] == "t" || $nome[$i] == "T")
        {
           if ($num == 1)
            {
            echo "Tonks<br>";
            }
            if ($num == 2)
            {
            echo "Trasgo<br>";
            }
            if ($num == 3)
            {
            echo  "Ted<br>";
            }
            if ($num == 4)
            {
            echo "Tronquilhos<br>";
            }
            if ($num == 5)
            {
            echo "Testrálio<br>";
            } 
        }
        
         if($nome[$i] == "u" || $nome[$i] == "U")
        {
           if ($num == 1)
            {
            echo "Umbridge<br>";
            }
            if ($num == 2)
            {
            echo "Unicórnio<br>";
            }
            if ($num == 3)
            {
            echo "Uédiuósi<br>";
            }
            if ($num == 4)
            {
            echo "Umfraville<br>";
            }
            if ($num == 5)
            {
            echo "Urtigas secas<br>";
            } 
        }
        
         if($nome[$i] == "v"|| $nome[$i] == "V")
        {
           if ($num == 1)
            {
            echo "Veritaserum<br>";
            }
            if ($num == 2)
            {
            echo "Vipera Evanesca<br>";
            }
            if ($num == 3)
            {
            echo "Vera Verto<br>";
            }
            if ($num == 4)
            {
            echo "Veela<br>";
            }
            if ($num == 5)
            {
            echo  "Vance<br>";
            } 
        }
        
         if($nome[$i] == "w" || $nome[$i] == "W")
        {
           if ($num == 1)
            {
            echo "Weasley<br>";
            }
            if ($num == 2)
            {
            echo "Wood<br>";
            }
            if ($num == 3)
            {
            echo "Winky<br>";
            }
            if ($num == 4)
            {
            echo "Willy Widdershins<br>";
            }
            if ($num == 5)
            {
            echo "Wilfred Elphick<br>";
            }         
        }
        
         if($nome[$i] == "x" || $nome[$i] == "X")
        {
           if ($num == 1)
            {
            echo "Xarope para tosse<br>";
            }
            if ($num == 2)
            {
            echo "Xadrez bruxo<br>";
            }
            if ($num == 3)
            {
            echo "Xarope para tosse<br>";
            }
            if ($num == 4)
            {
            echo "Xadrez bruxo<br>";
            }
            if ($num == 5)
            {
            echo "Xarope para tosse<br>";
            } 
        }
        
         if($nome[$i] == "y" || $nome[$i] == "Y")
        {
            if ($num == 1)
            {
            echo "Yaxley<br>";
            }
            if ($num == 2)
            {
            echo  "Youdle<br>";
            }
            if ($num == 3)
            {
            echo "Yen<br>";
            }
            if ($num == 4)
            {
            echo "Yaxley<br>";
            }
            if ($num == 5)
            {
            echo "Yaxley<br>";
            }
        }
        
         if($nome[$i] == "z" || $nome[$i] == "Z")
        {
            if ($num == 1)
            {
            echo "Zonzóbulo<br>";
            }
            if ($num == 2)
            {
            echo "Zonko's<br>";
            }
            if ($num == 3)
            {
            echo "Zograf<br>";
            }
            if ($num == 4)
            {
            echo  "Zabini<br>";
            }
            if ($num == 5)
            {
            echo "Zonko's<br>";
            }        
        }
        
        if ($nome[$i] == " " )
        {
            echo "<br>";
        }
  }

      
?>
 