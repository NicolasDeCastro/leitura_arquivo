<?php
//$arquivo=fopen('teste.txt','r');
/*while(!feof($arquivo)){

$coleta=fgets($arquivo);

echo $coleta;
}
fclose($arquivo);*/

/*$tamanhoArquivo=filesize('C:/Php_certo/arquivosPhp/teste.txt');

$coleta=fread($arquivo,$tamanhoArquivo);
echo $coleta;
fclose($arquivo);*/


//$coleta=file_get_contents('teste.txt');
//echo $coleta;

$teste=file('teste.txt');
var_dump($teste);

foreach($teste as $outroteste){

    echo $outroteste;
}



