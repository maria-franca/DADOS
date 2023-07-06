<?php

$data=$_POST["op1"];

if (isset($_POST["op2"]))
{
    $op2 = "F";
}else{
    $op2 = "M";
}

$nomehospital=$_POST["op3"];

$nome=$_POST["op4"];


if (isset($_POST["op5"]))
{
    $op6 = "A";
}
else{
    $op7 = "M";
}
else{
    $op8 = "RN";
}

$numero=$_POST["op9"];

$telefone=$_POST["op10"];


$acompanhante=$_POST["op11"];

$idadeAC=$_POST["op12"];

$localOcorrencia$_POST["op13"];





// Vamos mostrar na tela o que essas variáveis pegaram:
echo ("$op1 <br>");
echo ("$op2 <br>");
echo ("$op3 <br>");
echo ("$op4 <br>");
echo ("$op5 <br>");
echo ("$op6 <br>");
echo ("$op7 <br>");
echo ("$op8 <br>");
echo ("$op9 <br>");
echo ("$op10 <br>");
echo ("$op11<br>");
echo ("$op12<br>");
echo ("$op13<br>");
?>