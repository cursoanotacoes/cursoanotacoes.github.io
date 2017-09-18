
<form name="jogo" method="post">
<input name = "nome" type = "text"/>
<input  type="submit" class= "btn" value = "verificar"/>
 
</form>
        <form action="index.php">
        <button class="btn btn-info btn-lg"> Voltar </button>
        </form> 
<?php
//////////////////////////////////////////////////////////////////////


$nome = $_POST['nome'];    

//////////////////////////////////////////////////////////////////////
$qtd = strlen($nome);
$qtd = $qtd - 1;
//////////////////////////////////////////////////////////////////////
echo $qtd. "<br>"; 
echo $nome[$qtd] . "<br>";
echo $nome . "<br>";


$antigo = $nome[$qtd];
$nomeAntigo = $nome;
$i =1;




while ($i != 0){
$num = rand(1,5);
  

if ($nome[$qtd] == $nomeAntigo[0])
{
    $i = 0;
    echo $nomeAntigo . "<br>";
    break;
}
    
   
elseif ($nome[$qtd] == "a")
{
            if ($num == 1)
            {
            echo "Abbot<br>";
                $nome[$qtd] = "t";
            }
    
            elseif ($num == 2)
            {
            echo "Aragogue<br>";
                $nome[$qtd] = "e";
            }
            elseif ($num == 3)
            {
            echo "Amasso<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 4)
            {
            echo "Accio<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 5)
            {
            echo "Agripa<br>";
                $nome[$qtd] = "a";
            }
    
    continue;
}

elseif ($nome[$qtd] == "b")
{
            if ($num == 1)
            {
            echo "Bombarda<br>";
                $nome[$qtd] = "a";
            }
            elseif ($num == 2)
            {
            echo "Bicuço<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 3)
            {
            echo "Bagman<br>";
                $nome[$qtd] = "n";
            }
            elseif ($num == 4)
            {
            echo "Bichento<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 5)
            {
            echo "Belatriz<br>";
                $nome[$qtd] = "z";
            }
        continue;
}

elseif ($nome[$qtd] == "c")
{
            if ($num == 1)
            {
            echo "Crabbe<br>";
                $nome[$qtd] = "e";
            }
            elseif ($num == 2)
            {
            echo "Centauro<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 3)
            {
            echo "Crouch<br>";
                $nome[$qtd] = "h";
            }
            elseif ($num == 4)
            {
            echo "Canino<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 5)
            {
            echo "Confundo<br>";
                $nome[$qtd] = "o";
            } 
    continue;

}
    
    elseif ($nome[$qtd] == "d")
{
            if ($num == 1)
            {
            echo "Delacour<br>";
                $nome[$qtd] = "r";
            }
            elseif ($num == 2)
            {
            echo "Derek<br>";
                $nome[$qtd] = "k";
            }
            elseif ($num == 3)
            {
            echo "Doby<br>";
                $nome[$qtd] = "y";
            }
            elseif ($num == 4)
            {
            echo "Depulso<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 5)
            {
            echo "Desaparatar<br>";
                $nome[$qtd] = "r";
            } 
        continue;
}
    
    elseif ($nome[$qtd] == "e")
{
            if ($num == 1)
            {
            echo "Edwiges<br>";
                $nome[$qtd] = "s";
            }
            elseif ($num == 2)
            {
            echo "Errol<br>";
                $nome[$qtd] = "l";
            }
            elseif ($num == 3)
            {
            echo "Erecto<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 4)
            {
            echo "Estupore<br>";
                $nome[$qtd] = "e";
            }
            elseif ($num == 5)
            {
            echo "Evans<br>";
                $nome[$qtd] = "s";
            } 
        continue;
}
    
    elseif ($nome[$qtd] == "f")
{
            if ($num == 1)
            {
            echo "Flamel<br>";
                $nome[$qtd] = "l";
            }
            elseif ($num == 2)
            {
            echo "Filch<br>";
                $nome[$qtd] = "h";
            }
            elseif ($num == 3)
            {
            echo "Fudge<br>";
                $nome[$qtd] = "e";
            }
            elseif ($num == 4)
            {
            echo "Fênix<br>";
                $nome[$qtd] = "x";
            }
            elseif ($num == 5)
            {
            echo "Fofo<br>";
                $nome[$qtd] = "o";
            }   
        continue;
}
    
    elseif ($nome[$qtd] == "g")
{
            if ($num == 1)
            {
            echo "Geminio<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 2)
            {
            echo "Gira-gira<br>";
                $nome[$qtd] = "a";
            }
            elseif ($num == 3)
            {
            echo "Grifo<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 4)
            {
            echo "Godric<br>";
                $nome[$qtd] = "c";
            }
            elseif ($num == 5)
            {
            echo "Godelot<br>";
                $nome[$qtd] = "t";
            } 
        continue;
}
    
    elseif ($nome[$qtd] == "h")
{
            if ($num == 1)
            {
            echo "Hagrid<br>";
                $nome[$qtd] = "d";
            }
            elseif ($num == 2)
            {
            echo "Hipogrifo<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 3)
            {
            echo "Heliopatas<br>";
                $nome[$qtd] = "s";
            }
            elseif ($num == 4)
            {
            echo "Horcruxes<br>";
                $nome[$qtd] = "s";
            }
            elseif ($num == 5)
            {
            echo "Hermes<br>";
                $nome[$qtd] = "s";
            }  
        continue;
}
    
    elseif ($nome[$qtd] == "i")
{
            if ($num == 1)
            {
            echo "Iéti<br>";
                $nome[$qtd] = "i";
            }
            elseif ($num == 2)
            {
            echo "Inferius<br>";
                $nome[$qtd] = "s";
            }
            elseif ($num == 3)
            {
            echo "Imperio<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 4)
            {
            echo "Incêndio<br>";
                $nome[$qtd] = "o";
            }
    
            elseif ($num == 5)
            {
            echo "Impedimenta<br>";
                $nome[$qtd] = "a";
            } 
        continue;
}
    
    elseif ($nome[$qtd] == "j")
{
            if ($num == 1)
            {
            echo "Jordan<br>";
                $nome[$qtd] = "n";
            }
            elseif ($num == 2)
            {
            echo "Jorkins<br>";
                $nome[$qtd] = "s";
            }
            elseif ($num == 3)
            {
            echo "Jacarandá<br>";
                $nome[$qtd] = "a";
            }
            elseif ($num == 4)
            {
            echo "Javali<br>";
                $nome[$qtd] = "i";
            }
            elseif ($num == 5)
            {
            echo "Jugson<br>";
                $nome[$qtd] = "n";
            } 
        continue;
}
    
    elseif ($nome[$qtd] == "k")
{
            if ($num == 1)
            {
            echo "Krum<br>";
                $nome[$qtd] = "m";
            }
            elseif ($num == 2)
            {
            echo "Kegg<br>";
                $nome[$qtd] = "g";
            }
            elseif ($num == 3)
            {
            echo "Keppa<br>";
                $nome[$qtd] = "a";
            }
            elseif ($num == 4)
            {
            echo "Karkus<br>";
                $nome[$qtd] = "s";
            }
            elseif ($num == 5)
            {
            echo "Kneen<br>";
                $nome[$qtd] = "n";
            } 
    continue;
}
    
    elseif ($nome[$qtd] == "l")
{
         if ($num == 1)
            {
            echo "Lumos<br>";
                $nome[$qtd] = "s";
            }
            elseif ($num == 2)
            {
            echo "Locomotor<br>";
                $nome[$qtd] = "r";
            }
            elseif ($num == 3)
            {
            echo "Lobisomem<br>";
                $nome[$qtd] = "m";
            }
            elseif ($num == 4)
            {
            echo "Lesmalenta<br>";
                $nome[$qtd] = "a";
            }
            elseif ($num == 5)
            {
            echo "Longbottom<br>";
                $nome[$qtd] = "m";
            }  
        continue;
        }
               
    
    
    elseif ($nome[$qtd] == "m")
{
            if ($num == 1)
            {
            echo "Murta<br>";
                $nome[$qtd] = "a";
            }
            elseif ($num == 2)
            {
            echo "Minerva<br>";
                $nome[$qtd] = "a";
            }
            elseif ($num == 3)
            {
            echo "Miadura<br>";
                $nome[$qtd] = "a";
            }
            elseif ($num == 4)
            {
            echo "Murtisco<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 5)
            {
            echo  "Monstro<br>";
                $nome[$qtd] = "o";
            } 
        continue;
}
    
    elseif ($nome[$qtd] == "n")
{
        if ($num == 1)
            {
            echo "Nox<br>";
                $nome[$qtd] = "x";
            }
            elseif ($num == 2)
            {
            echo "Narcisos<br>";
                $nome[$qtd] = "s";
            }
            elseif ($num == 3)
            {
            echo "Nundu<br>";
                $nome[$qtd] = "u";
            }
            elseif ($num == 4)
            {
            echo  "Norberto<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 5)
            {
            echo "Nagini<br>";
                $nome[$qtd] = "i";
            } 
        continue;
}
    
    elseif ($nome[$qtd] == "o")
{
    $num = rand(1,10); 
            if ($num == 1)
            {
            echo "Ogg<br>";
                $nome[$qtd] = "g";
            }
            elseif ($num == 2)
            {
            echo "Obliviate<br>";
                $nome[$qtd] = "e";
            }
            elseif ($num == 3)
            {
            echo "Obalonsk<br>";
                $nome[$qtd] = "k";
            }
            elseif ($num == 4)
            {
            echo "Olivaras<br>";
                $nome[$qtd] = "s";
            }
            elseif ($num == 5)
            {
            echo "Oona<br>";
                $nome[$qtd] = "a";
            }  
            elseif ($num == 6)
            {
            echo "Occami<br>";
                $nome[$qtd] = "i";
            }
    
            elseif ($num == 7)
            {
            echo "Ollerton<br>";
                $nome[$qtd] = "n";
            }
    
            elseif ($num == 8)
            {
            echo "Oraqui-Oralá<br>";
                $nome[$qtd] = "a";
            }
    
            elseif ($num == 9)
            {
            echo "Ouruços<br>";
                $nome[$qtd] = "s";
            } 
    
            if ($num == 10 )
            {
            echo "Oliphant<br>";
                $nome[$qtd] = "t";
            }
        continue;
}
    
    elseif ($nome[$qtd] == "p")
{
           if ($num == 1)
            {
            echo "Patil<br>";
                $nome[$qtd] = "l";
            }
            elseif ($num == 2)
            {
            echo "Pelúcio<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 3)
            {
            echo "Pogrebin<br>";
                $nome[$qtd] = "n";
            }
            elseif ($num == 4)
            {
            echo "Protego<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 5)
            {
            echo "Petrificus Totalus<br>";
                $nome[$qtd] = "s";
            }
        continue;
}
    
    elseif ($nome[$qtd] == "q")
{
           if ($num == 1)
            {
            echo "Quirrell<br>";
                $nome[$qtd] = "l";
            }
            elseif ($num == 2)
            {
            echo "Queerditch<br>";
                $nome[$qtd] = "h";
            }
            elseif ($num == 3)
            {
            echo "Quimeras<br>";
                $nome[$qtd] = "s";
            }
            elseif ($num == 4)
            {
            echo "Querubim<br>";
                $nome[$qtd] = "m";
            }
            elseif ($num == 5)
            {
            echo "Quince<br>";
                $nome[$qtd] = "e";
            } 
        continue;
}
    
    elseif ($nome[$qtd] == "r")
{
            if ($num == 1)
            {
            echo "Rabicurto<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 2)
            {
            echo "Reducto<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 3)
            {
            echo "Relaxo<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 4)
            {
            echo "Riddle<br>";
                $nome[$qtd] = "e";
            }
            elseif ($num == 5)
            {
            echo "Ravenclaw<br>";
                $nome[$qtd] = "w";
            }  
        continue;
}
    
    elseif ($nome[$qtd] == "s")
{
            if ($num == 1)
            {
            echo "Scamander<br>";
                $nome[$qtd] = "r";
            }
            elseif ($num == 2)
            {
            echo "Skeeter<br>";
                $nome[$qtd] = "r";
            }
            elseif ($num == 3)
            {
            echo "Salamandra<br>";
                $nome[$qtd] = "a";
            }
            elseif ($num == 4)
            {
            echo "Sinistro<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 5)
            {
            echo "Sonorus<br>";
                $nome[$qtd] = "s";
            } 
        continue;
}
    
    elseif ($nome[$qtd] == "t")
{
           if ($num == 1)
            {
            echo "Tonks<br>";
                $nome[$qtd] = "s";
            }
            elseif ($num == 2)
            {
            echo "Trasgo<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 3)
            {
            echo  "Ted<br>";
                $nome[$qtd] = "d";
            }
            elseif ($num == 4)
            {
            echo "Tronquilhos<br>";
                $nome[$qtd] = "s";
            }
            elseif ($num == 5)
            {
            echo "Testrálio<br>";
                $nome[$qtd] = "o";
            } 
        continue;
}
    
    elseif ($nome[$qtd] == "w")
{
            if ($num == 1)
            {
            echo "Weasley<br>";
                $nome[$qtd] = "y";
            }
            elseif ($num == 2)
            {
            echo "Wood<br>";
                $nome[$qtd] = "d";
            }
            elseif ($num == 3)
            {
            echo "Winky<br>";
                $nome[$qtd] = "y";
            }
            elseif ($num == 4)
            {
            echo "Willy Widdershins<br>";
                $nome[$qtd] = "s";
            }
            elseif ($num == 5)
            {
            echo "Wilfred Elphick<br>";
                $nome[$qtd] = "k";
            } 
        continue;
}
    
    elseif ($nome[$qtd] == "x")
{
        if ($num == 1)
            {
            echo "Xarope para tosse<br>";
                $nome[$qtd] = "e";
            }
            elseif ($num == 2)
            {
            echo "Xadrez bruxo<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 3)
            {
            echo "Xarope para tosse<br>";
                $nome[$qtd] = "e";
            }
            elseif ($num == 4)
            {
            echo "Xadrez bruxo<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 5)
            {
            echo "Xarope para tosse<br>";
                $nome[$qtd] = "e";
            } 
        continue;
}
    
    elseif ($nome[$qtd] == "y")
{
            if ($num == 1)
            {
            echo "Yaxley<br>";
                $nome[$qtd] = "y";
            }
            elseif ($num == 2)
            {
            echo  "Youdle<br>";
                $nome[$qtd] = "e";
            }
            elseif ($num == 3)
            {
            echo "Yen<br>";
                $nome[$qtd] = "e";
            }
            elseif ($num == 4)
            {
            echo "Yaxley<br>";
                $nome[$qtd] = "y";
            }
            elseif ($num == 5)
            {
            echo "Yaxley<br>";
                $nome[$qtd] = "y";
            }
        continue;
}
    
    elseif ($nome[$qtd] == "z")
{
           if ($num == 1)
            {
            echo "Zonzóbulo<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 2)
            {
            echo "Zonko's<br>";
                $nome[$qtd] = "s";
            }
            elseif ($num == 3)
            {
            echo "Zograf<br>";
                $nome[$qtd] = "f";
            }
            elseif ($num == 4)
            {
            echo  "Zabini<br>";
                $nome[$qtd] = "i";
            }
            elseif ($num == 5)
            {
            echo "Zonko's<br>";
                $nome[$qtd] = "s";
            }
        continue;
}
    
    elseif ($nome[$qtd] == "v")
{
           if ($num == 1)
            {
            echo "Veritaserum<br>";
                $nome[$qtd] = "m";
            }
            elseif ($num == 2)
            {
            echo "Vipera Evanesca<br>";
                $nome[$qtd] = "a";
            }
            elseif ($num == 3)
            {
            echo "Vera Verto<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 4)
            {
            echo "Veela<br>";
                $nome[$qtd] = "a";
            }
            elseif ($num == 5)
            {
            echo  "Vance<br>";
                $nome[$qtd] = "e";
            } 
        continue;
}
    
    elseif ($nome[$qtd] == "u")
{
           if ($num == 1)
            {
            echo "Umbridge<br>";
                $nome[$qtd] = "e";
            }
            elseif ($num == 2)
            {
            echo "Unicórnio<br>";
                $nome[$qtd] = "o";
            }
            elseif ($num == 3)
            {
            echo "Uédiuósi<br>";
                $nome[$qtd] = "i";
            }
            elseif ($num == 4)
            {
            echo "Umfraville<br>";
                $nome[$qtd] = "e";
            }
            elseif ($num == 5)
            {
            echo "Urtigas secas<br>";
                $nome[$qtd] = "s";
            } 
        continue;

}
     
elseif ($nome[$qtd] == $nomeAntigo[0])
{
    echo $nomeAntigo . "<br>";
    $i = 0;
    break;
}
        
}
?>
