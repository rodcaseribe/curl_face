<?php
$to = "guilherme_ab88@hotmail.com";
$resultado = file_get_contents("guiga");
//echo "VC:".$resultado;
//$resultado_f1 = "VC:".$resultado;
//echo $resultado_f1;
$resultado2 = file_get_contents("rival");
//echo "RIVAL:".$resultado2;
//$resultado_f3 = "RIVAL:".$resultado2;
$resultado_fim = "VC:".$resultado."\n RIVAL:".$resultado2;
//echo $resultado_fim;
//$header.="Content-type:text/html; charset=iso-8859-1\n";
mail($to,$subject,$resultado_fim,$header);
echo "mensagem ok";
?>
