<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo Griffin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <?php include 'partials/nav.php' ?>
    
    <div class="container">
        
        <div class="main-contet">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="welcome-site">
                        Soluciones que <span class="welcome-site-orange">convierte</span> visitantes en clientes
                    </h1>
                    <p class="slogan">Conectando con las empresas más sobresalientes del mercado</p>
                    <div class="contact">
                        <input class="form-contact" type="text" placeholder="tuempresa@correo.com" aria-label="default input example">
                        <button type="submit" class="btn-contact">Empezar <box-icon name='right-arrow-alt' color='#ffffff' ></box-icon></button>
                    </div>
                    <div class="row">
                        <div class="col-md-12 items-check-inside">
                            <div class="items-check">
                                <p class="text-check">Prueba gratuita por 14 días</p>
                                <box-icon name='check' color='#FFA500' ></box-icon>
                            </div>

                            <div class="items-check">
                                <p class="text-check">Sin tarjetas de crédito</p>
                                <box-icon name='check' color='#FFA500' ></box-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="imagen-center">
                        <?php
                            $ruta_main = "assets/images/main.png";
                            echo "<img src='$ruta_main' alt='Imagen local' class='img-fluid main-img'>";
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include 'partials/footer.php' ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"  
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>