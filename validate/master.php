<?php
$errores = array();
if (isset($_POST['user']) && isset($_POST['mail']) && isset($_POST['pass']) && isset($_POST['confirm_pass'])) {
    
    if(empty($_POST['user'])){
        $errores['user'] = 'No puede dejar este campo user vacio';
    }else if(is_numeric($_POST['user'])){
        $errores['user'] = 'No puede ser numerico';
    }
    
    if (empty($_POST['mail'])) {
        $errores['mail'] = 'No puede dejar este campo mail vacio';
    }else if(!filter_var(($_POST['mail']),FILTER_VALIDATE_EMAIL)){
        $errores['mail'] = 'No tiene formato de correo electronico';
    }else {
        $contenido = $_POST['mail'];
        $archivo = fopen('archivo.txt','a');
        fputs($archivo,$contenido."\r\n");
        fclose($archivo);
    }
    
    if(empty($_POST['pass'])){
        $errores['pass'] = 'No puede dejar este campo pass vacio'; 
    }else if (strlen($_POST['pass']) < 4) {
        $errores['pass'] = 'El password tiene que ser mayor que 4';
    }else if (strlen($_POST['pass']) > 10) {
        $errores['pass'] = 'El password tiene que ser menor que 10';
    }
    
    if (empty($_POST['confirm_pass'])){
        $errores['confirm_pass'] = 'No puede dejar este campo confirm pass vacio';
    }else if ($_POST['pass'] != $_POST['confirm_pass']) {
        $errores['confirm_pass'] = 'Los password no coinciden';
    }

    // var_dump($errores);
    var_dump(ctype_upper($_POST['pass']));
}

?>

