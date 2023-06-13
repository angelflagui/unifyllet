<!DOCTYPE html>
<html lang="en">

<head>
    <title>Unifyllet - Documentos</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
                <div class="wallets wallets_container">
                    <h1>Opciones de wallets</h1>
                    <button onclick="Connect()" class="btn btn-primary  mt-4 rounded-pill px-3 mb-2 mb-lg-0">
                        <img src="assets/img/metamask_logo.png" alt="">
                        <span>Iniciar sesión con MetaMask</span>
                    </button>
                </div> 



                <h3 class="font-alt">Este es un prototipo de cómo será la vista para usuarios de sus documentos
                    almacenados en IPFS
                    (Interplatenary File System).</h3>
                <p class="lead fw-normal text-muted mb-5">* Los códigos QR presentados a continuación son totalmente
                    funcionales.</p>

                <br><br><br>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Instrucciones de uso:
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Para obtener tu documento en formato QR selecciona una de las siguientes opciones, la
                                cual desplegara el código con tu documento.
                                Puedes escanear tu código para ver el documento, o compartir el código para que alguien
                                pueda ver una copia del mismo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Credencial de elector (INE/IFE)
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <img src="assets/img/ine.png" alt="" width="720px" height="240px">
                                <div class="qr_ine">
                                    <center><img src="assets/img/ine_qr.jpeg" alt="" width="256px" height="256px">
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Acta de nacimiento
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="acta_nacimiento">
                                    <img src="assets/img/acta_nacimiento.jpeg" alt="" width="720px" height="240px">
                                </div>
                                <br>
                                <div class="acta_nacimiento_qr">
                                    <center><img src="assets/img/acta_nacimiento qr.jpeg" alt="" width="256px"
                                            height="256px"></center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Clave Única de Registro de Población (CURP)
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <img src="assets/img/curp.jpeg" alt="" width="720px" height="240px">
                            </div>
                            <div class="curp_qr">
                                <center><img src="assets/img/curp_qr.png" alt="" width="256px" height="256px"></center>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Registro Federal de Constituyentes (RFC)
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="rfc">
                                    <img src="assets/img/rfc.jpeg" alt="" width="720px" height="240px">
                                </div>
                                <br>
                                <div class="rfc_qr">
                                    <center><img src="assets/img/rfc_qr.png" alt="" width="256px" height="256px">
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
    </script>
    <script src="js/main.js"></script>
    <script src="js/block.js"></script>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <?php
     include('footer.php');
     ?>
</body>

</html>