<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="correo.php">

        <input type="text" placeholder="name" name="name" required>
        <input type="email" placeholder="email" name="email" required>
        <input type="text" placeholder="asunto" name="asunto" required>
        <textarea name="msg" id="" cols="30" rows="10" placeholer="mensaje"></textarea>
        <input type="submit" name="enviar">

    </form>

    
</body>
</html>