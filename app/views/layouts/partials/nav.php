<link rel="stylesheet" href="css/nav.css">

<section class="navbar-back">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <?php
                        $ruta = "assets/images/logo.png";
                        echo "<img src='$ruta' alt='Imagen local' class='img-fluid logo-nav'>";
                    ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse nav-align" id="navbarText">
                    <ul class="navbar-nav mb-1">
                        <li class="nav-item">
                        <a class="nav-link name-company" aria-current="page" href="#">Grupo Griffin</a>
                        </li>
                    </ul>
                    <span class="navbar-text left-side">
                        <input class="form-control" type="text" placeholder="Search something..." aria-label="">
                        <div class="location">
                            <div class="icon mx-2 mt-2">
                                <box-icon type='solid' name='map'></box-icon>
                            </div>
                            <div class="contenido">
                                <p class="lang-display">ES</p>
                                <p class="find-places">Find places</p>
                            </div>
                        </div>
                        <div class="singin">
                            <div class="login">
                                <div class="icon mx-2 mt-2">
                                    <box-icon type='solid' name='user'></box-icon>
                                </div>
                                <div class="contenido">
                                    <p class="lang-display">LOGIN</p>
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown link
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </div>
</section>