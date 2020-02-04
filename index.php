<?php
session_start();
?>
<html>
<head>
<title>Project</title>
</head>
<body>
<?php
if(isset($_SESSION['nao_autenticado'])):
?>
    <p style="color:red"> Erro, usuario ou senha invalido</p>
<?php
endif;
unset($_SESSION['nao_autenticado']);
?>
    <form action="login.php" method="POST">
        <input name="usuario" type="text">
        <input name="senha" type="password">
        <input type="submit">
    </form>
    <h4><a href="registro.php">Registrar</a></h4>
</body>
</html>