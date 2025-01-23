<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/indexStyle.css">
    <script src="js/IndexJs.js"></script>
    <title>Iniciar sesion</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION['user'] = null;

        include "element/formElements.php";
        $form1 = new formElementClass;
        $form2 = $form1 -> logFormElementfunction();
        if (!empty($_GET['e'])) {
            ?>
            <script>error1();</script>
            <?php
        }
    ?>
    
    
</body>
</html>
