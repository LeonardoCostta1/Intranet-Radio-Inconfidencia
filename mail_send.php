<html>
    
    <head>
    
    
    </head>
    <body>
<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$assunto=$_POST['assunto'];
$mensagem=$_POST['mensagem'];

?>

<?php

$to="email";
$subject="$assunto";
$message="<strong>$nome</strong> <br/><strong>$email</strong>>br/><strong> $assunto</strong> <br/><strong>$mensagem</strong>";
$header="MINE-Version: 1.0\n";
$header.="Content-Type: text/html; charset=iso8859-1\n";
$header.="From: $email";
echo "Mensagem Enviada Com Sucesso"


?>
        </body>
</html>