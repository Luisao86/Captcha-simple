<?php
session_start();

?>
<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/index.css">

<title>Hello, world!</title>
</head>
<body>
    <div class="centrar">

        <h1>CAPTCHA SIMPLE</h1>

    </div>
    <div class="container">

        <div class="row">
            <?php function txt_captcha()
            {
                $elementos = "0123456789abcdefghijklmnopqrstuvwxyz";

                $codigo = '';

                for ($i=0; $i<5; $i++) {
                    $codigo .= $elementos[rand(0, 35)];
                }
                return $codigo;
            }

                $_SESSION['captcha'] = txt_captcha();

            ?>
        <div class="form">
        <form method="POST" >
            <img src="captcha.php">
            <input type="text" name="codigo_captcha" class="captcha">
            <input type="submit" value="Entrar" class="btn">
        </form>
        </div>
    </div>
        
    </div>


</body>

</html>