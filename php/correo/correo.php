<?php

    if(isset($_POST['enviar'])){

        if( !empty($_POST['email'])){

            $name=$_POST['name'];
            $asunto=$_POST['asunto'];
            $msg=$_POST['msg'];
            

            $email = $_POST['email'];

            $header = "From: postulacionesfic@hood.cl"   .  "\r\n";

            $header .= "Reply-to: porellana@tecnotec.cl"   .  "\r\n";

            $header .= "X-Mailer: PHP/"  .  phpversion();

            $mail = @mail($email,$asunto,$msg,$header);

        }
            echo "GG EZ";
    }