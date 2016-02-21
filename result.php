<?php
$to = "pam_francelin@yahoo.com.br";
$resultadox = file_get_contents("guiga");
//echo "VC:".$resultado;
//$resultado_f1 = "VC:".$resultado;
//echo $resultado_f1;
$resultado2x = file_get_contents("rival");
//echo "RIVAL:".$resultado2;
//$resultado_f3 = "RIVAL:".$resultado2;
$resultado_fimx = "VC:".$resultadox."\n RIVAL:".$resultado2x;
//echo $resultado_fim;
//$header.="Content-type:text/html; charset=iso-8859-1\n";
mail($to,$subject,$resultado_fimx,$header);
echo "mensagem ok";
?>
