<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Register</h1>
    <ul>
    <?php foreach($menu as $item):?>
        <li><a href="<?php echo $item['url']?>"><?php echo $item['title']?></a></li>
    <?php endforeach; ?>
    </ul>

    <?php
        echo form_open('register/create', array('method' => 'POST'));
        echo form_label('Nombre Usuario');
        echo form_input('username');
        echo '<br>';
        echo form_label('Correo Electrónico');
        echo form_input(array('type' => 'email','name' => 'email'));
        echo '<br>';
        echo form_label('Contraseña');
        echo form_password('password');
        echo '<br>';
        echo form_label('Confirmación de Contraseña');
        echo form_password('password_confirm');
        echo '<br>';
        echo form_submit('submit','Enviar Datos');

    
        echo form_close();
    ?>

    <?= isset($msg) ? $msg : '' ?><!-- si existe la variable-->
</body>
</html>