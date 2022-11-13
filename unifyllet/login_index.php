<!DOCTYPE html>
<html lang="en">

<head>
    <title>Unifyllet - Iniciar sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="assets/img/logo.png" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- Íconos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap"
        rel="stylesheet" />
    <!-- CSS (y Bootstrap) -->
    <link href="css/style.css" rel="stylesheet" />

</head>

<body>
    <?php
include('header.php');
?>
    <div class="limiter">
		<br><br><br>
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="assets/img/logo.png" alt="IMG">
                </div>

                <form class="login100-form validate-form">
                    <span class="login100-form-title">
                        Inicio de sesión
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="">
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="">
                    </div>

                    <div class="meta">
                        <center><img class="metalogo" src="assets/img/metamask.png" alt="logo de metamask"></center>
                    </div>

                    <div class="container-login100-form-btn">
                        <button onclick="Connect()" class="login100-form-btn">
                            Iniciar sesión con MetaMask
                        </button>

                        
                    </div>

                    <div class="text-center p-t-10">
                        <span class="txt1">
                            ¿Qué es
                        </span>
                        <a class="txt2" href="https://metamask.io/">
                            MetaMask?
                        </a>
                    </div>

                    <div class="text-center p-t-100">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                            He leído y acepto los <a href=terycon.php>términos y condiciones</a>, además del <a href="avisodeprivacidad.php">aviso de privacidad</a>.
                        </label>
                        </div>
                    </div>
					<br>
                </form>
				<br>
            </div>
        </div>
    </div>




    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
    </script>
    <script src="js/main.js"></script>
    <?php
     include('footer.php');
     ?>
</body>

</html>