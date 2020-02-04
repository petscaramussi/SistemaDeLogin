<?php
session_start();
?>
<html>
<body>
<head>
    <title>Registro</title>
</head>
<?php
if(isset($_SESSION['menor'])):
?>
    <p style="color:red"> A senha deve conter pelo menos 6 caracteres.</p>
<?php
endif;
unset($_SESSION['menor']);
?>
<?php
if(isset($_SESSION['branco'])):
?>
    <p style="color:red"> Não é permitido deixar nenhum campo em branco</p>
<?php
endif;
unset($_SESSION['branco']);
?>
<?php
if(isset($_SESSION['senha_diferente'])):
?>
    <p style="color:red"> As senhas não coincidem.</p>
<?php
endif;
unset($_SESSION['senha_diferente']);
?>
<?php
if(isset($_SESSION['usuario_existe'])):
?>
    <p style="color:red"> Erro, o usuario já existe.</p>
<?php
endif;
unset($_SESSION['usuario_existe']);
?>
<?php
if(isset($_SESSION['status_cadastro'])):
?>
    <p style="color:green;">cadastrado com sucesso</p>
    <a href="index.php">ir para login</a>
<?php
endif;
unset($_SESSION['status_cadastro']);
?>
<form action="registra.php" method="POST">
<input name="nome" type="text" placeholder="Nome"><br>
<input name="usuario" type="text" placeholder="Usuario"><br>
<input name="senha" type="password" placeholder="senha"><br>
<input name="rsenha" type="password" placeholder="repetir senha"><br>
<input type="submit">
</form>

</body>
</html>