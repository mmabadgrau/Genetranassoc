<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>



<?php
include($_SERVER['DOCUMENT_ROOT'].'/readlanguage.php');
$idioma=readLanguage("es");?>	

<META content="3 days" name=Revisit>
	<META content=all name=robots>
	<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
 <link href="/css/normal.css" rel="stylesheet" type="text/css">
<title>

<?php if ($idioma=='es') 
  echo "Software Genetranassoc";
  else   echo "Software Genetranassoc";  ?>

</title>


<body bgcolor="#FFFFFF">




<body bgcolor="#FFFFFF" text="#000000">

<h1>

  Software Genetranassoc</h1>

<p>&nbsp;</p>

<h2>

<?php if ($idioma=='es') 
  echo "El software Genetranassoc 2.0, bajo licencia GPL 3.0 es proporcionado de las siguientes maneras:";
  else   echo "Software Genetranassoc 2.0 under GNU Public Licence 3.0, is provided in the following formats:";  ?>
</h2>


<p><a href=Genetranassoc2.0.tar.gz>

<?php if ($idioma=='es') 
  echo "C&oacute;digo fuente en c++";
  else   echo "Source code for Genetranassoc1.0 in c++";  ?>


</a> </p>
<p><a href=Genetranassoc2.0.gz>
<?php if ($idioma=='es') 
  echo "Versi&oacute;n compilada para linux x64";
  else   echo "Compiled version for linux x64";  ?>


</a> </p>
<p><a href=Genetranassoc2.0_x32.gz>
<?php if ($idioma=='es')
  echo "Versi&oacute;n compilada para linux x32";
  else   echo "Compiled version for linux x32";  ?>



</a> </p>
<p>&nbsp;</p>



<h2>
<?php if ($idioma=='es') 
  echo "Documentaci&oacute;n en l&iacute;nea:";
  else   echo "Online material:";  ?>
</h2>

<p><a href="GenetranassocHowtoInstall.html">

<?php if ($idioma=='es') 
  echo "Documentaci&oacute;n de Genetranassoc";
  else   echo "Documentation for Genetranassoc";  ?>



</a>

</p><p><a href="supplementary/index.php">

<?php 
if (1==0)
if ($idioma=='es')
  echo "Material suplementario";
  else   echo "Supplementary material";  ?>



</a></p>
<p>&nbsp;</p>

<h2>
<?php 
if ($idioma=='es')
echo "Referencia</h2><p>Genetranassoc puede ser citado mediante el siguiente art&iacute;culo:";
else echo "Citation</h2><p>Genetranassoc can be cited with the following paper:";
?>
<p>Antonio Alcina, Mar&iacute;a del Mar Abad-Grau, Mar&iacute;a Fedetz, Guillermo Izquierdo, Miguel Lucas, &Oacute;scar Fern&aacute;ndez, Dorothy Ndagire, Antonio Catal&aacute;-Rabasa, Agust&iaute;n Ruiz, Javier Gay&aacute;n, Concepci&oacute;n Delgado, Carmen Arnal, Fuencisla Matesanz (2012) <br>"Multiple Sclerosis Risk Variant HLA-DRB1*1501 Associates with High Expression of DRB1 Gene in Different Human Populations".<br> PLoS ONE 7(1): e29819. doi:10.1371/journal.pone.0029819.</p>
<!--<p>
Sebastiani P.; Abad-Grau M.M.<br>
"Bayesian estimates of Linkage Disequilibrium"<br>
BMC Genetics, 8, 1-13, 2007
-->
</body>

</html>

