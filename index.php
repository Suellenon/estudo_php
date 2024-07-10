<?php         //inicia o php 
// isso é um comentario
echo "Hello World ";
echo"<b> Olá Mundo </b>";    // aceitta tags




// para acessar o php vai em um navegador e localhost/ e nome da pasta em que está o arquivo que quer ver

$nome ='Fulano';  // sempre com cifrao
define('PI' ,3.14);

echo PI;            // sempre terminar com ;
echo $nome;        // sempre coloca cifrao qnd cria e quando usa 

echo "Meu nome é : " . $nome . "<br>";     // br quebra de linha   . concatena
echo "Meu nome é: $nome<br>";

echo strlen($nome);
// echo "</pre>";            // pre organizar em coluna
var_dump($nome);          // declara o que está na variável , define o que está nela 
echo "<br>";
echo rand(0,10);           // minimo e maximo randorizar um numero

echo "<br>";
$frutas = array('maça', 'banana','manga');
echo $frutas[0];
foreach($frutas as $elemento){                   // "as" significa "como"
    // esse elemento pode ser qualquer palavra
    echo $elemento . "<br>";
}
$idades = array("pedro" => 18, "magno"=>40);          // array indexado, 
echo $idades['magno'] . "<br>";
foreach($idades as $nome =>$idade){
    echo "$nome tem $idade anos <br>";

}

?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estudo.php</title>
</head>
<body>
    <h1>
        Hello world
    </h1>
</body>
</html>