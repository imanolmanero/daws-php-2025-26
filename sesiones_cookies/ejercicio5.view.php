<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones 05</title>
</head>
<body>
    
<?php if (isset($_SESSION['usuario'])): ?>
    <h1>¡Bienvenido, <?= htmlspecialchars($_SESSION['usuario']) ?>!</h1>
    <a href="login.php?cerrar=1">Cerrar sesión</a>
<?php else: ?>
    <h1>Inicia sesión</h1>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="post">
        <input type="text" name="usuario" placeholder="Usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Entrar</button>
    </form>
<?php endif; ?>

</body>
</html>