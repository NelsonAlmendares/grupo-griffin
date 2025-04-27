<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo Griffin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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
                                <box-icon name='check' color='#FF6B35' ></box-icon>
                            </div>

                            <div class="items-check">
                                <p class="text-check">Sin tarjetas de crédito</p>
                                <box-icon name='check' color='#FF6B35' ></box-icon>
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

    <div class="first-blank">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="blank-header">Características diseñadas para convertir</h1>
                    <h5 class="blank-text">Nuestro enfoque combina estética y funcionalidad para crear experiencias que convierten visitantes en clientes.</h5>
                </div>
                <div class="squares">
                    <div class="row">
                        <div class="col-md-3 mt-3">
                            <div class="card-custom">
                                <i class='bx bxs-dashboard' style='color:#FF6B35' id="blank-icon"></i>
                                <h5 class="blank-title">Diseño Modular</h5>
                                <p class="blank-paragraph">Componentes reutilizables que facilitan la actualización y mantenimiento de tu sitio.</p>
                            </div>
                        </div>
                        <div class="col-md-3 mt-3">
                            <div class="card-custom">
                                <i class='bx bx-signal-4' id="blank-icon" style='color:#FF6B35' ></i>
                                <h5 class="blank-title">Enfoque en Conversiones</h5>
                                <p class="blank-paragraph">Elementos estratégicamente ubicados para maximizar las tasas de conversión.</p>
                            </div>
                        </div>
                        <div class="col-md-3 mt-3">
                            <div class="card-custom">
                                <i class='bx bxs-plus-circle' id="blank-icon" style='color:#FF6B35' ></i>
                                <h5 class="blank-title">Diseño Limpio</h5>
                                <p class="blank-paragraph">Interfaces minimalistas que mejoran la experiencia de usuario y la legibilidad.</p>
                            </div>
                        </div>
                        <div class="col-md-3 mt-3">
                            <div class="card-custom">
                                <i class='bx bx-laptop' id="blank-icon" style='color:#FF6B35'  ></i>
                                <h5 class="blank-title">Totalmente Responsivo</h5>
                                <p class="blank-paragraph">Adaptado a todos los dispositivos para una experiencia consistente.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 spacing-blank">
                            <div class="card-custom mb-4">
                                <h4 class="blank-title">Para Negocios</h4>
                                <div class="items-blank">
                                    <i class='bx bx-badge-check' id="blank-icon-large" style='color:#FF6B35'  ></i>
                                    <p class="blank-paragraph">Aumento en tasas de conversión</p>
                                </div>
                                <div class="items-blank">
                                    <i class='bx bx-badge-check' id="blank-icon-large" style='color:#FF6B35'  ></i>
                                    <p class="blank-paragraph">Reducción del rebote de visitantes</p>
                                </div>
                                <div class="items-blank">
                                    <i class='bx bx-badge-check' id="blank-icon-large" style='color:#FF6B35'  ></i>
                                    <p class="blank-paragraph">Mayor tiempo de permanencia</p>
                                </div>
                                <div class="items-blank">
                                    <i class='bx bx-badge-check' id="blank-icon-large" style='color:#FF6B35'  ></i>
                                    <p class="blank-paragraph">Experiencia de usuario mejorada</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 spacing-blank">
                            <div class="card-custom mb-4">
                                <h4 class="blank-title">Para Desarrolladores</h4>
                                <div class="items-blank">
                                    <i class='bx bx-badge-check' id="blank-icon-large" style='color:#FF6B35'  ></i>
                                    <p class="blank-paragraph">Componentes reutilizables</p>
                                </div>
                                <div class="items-blank">
                                    <i class='bx bx-badge-check' id="blank-icon-large" style='color:#FF6B35'  ></i>
                                    <p class="blank-paragraph">Código limpio y mantenible</p>
                                </div>
                                <div class="items-blank">
                                    <i class='bx bx-badge-check' id="blank-icon-large" style='color:#FF6B35'  ></i>
                                    <p class="blank-paragraph">Optimizado para rendimiento</p>
                                </div>
                                <div class="items-blank">
                                    <i class='bx bx-badge-check' id="blank-icon-large" style='color:#FF6B35'  ></i>
                                    <p class="blank-paragraph">Fácil de personalizar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="comments">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="blank-header">Lo que dicen nuestros clientes</h1>
                    <h5 class="blank-text">Empresas que han transformado su presencia digital con nuestro enfoque modular y orientado a conversiones.</h5>
                </div>
            </div>

            <div class="comments-area">
                <swiper-container class="mySwiper" init="false">
                    <swiper-slide>
                        <div class="card-comment">
                            <div class="img-person">
                                <img src="https://t4.ftcdn.net/jpg/03/64/21/11/360_F_364211147_1qgLVxv1Tcq0Ohz3FawUfrtONzz8nq3e.jpg" alt="" class="person-profile">
                            </div>
                            <p class="comment-paragrah">"Este diseño modular transformó nuestro sitio web. Las conversiones aumentaron un 45% en el primer mes."</p>
                            <h6 class="name-comement">María González</h6>
                            <p class="comment-paragrah">CEO, TechStart</p>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="card-comment">
                            <div class="img-person">
                                <img src="https://media.istockphoto.com/id/1303206558/photo/headshot-portrait-of-smiling-businessman-talk-on-video-call.jpg?s=612x612&w=0&k=20&c=hMJhVHKeTIznZgOKhtlPQEdZqb0lJ5Nekz1A9f8sPV8=" alt="" class="person-profile">
                            </div>
                            <p class="comment-paragrah">"La limpieza del diseño y el enfoque en conversiones ha sido clave para nuestro crecimiento online."</p>
                            <h6 class="name-comement">Carlos Rodríguez</h6>
                            <p class="comment-paragrah">Director de Marketing, GrowthCo</p>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="card-comment">
                            <div class="img-person">
                                <img src="https://img.freepik.com/free-photo/front-view-business-male-with-laptop_23-2148479543.jpg?semt=ais_hybrid&w=740" alt="" class="person-profile">
                            </div>
                            <p class="comment-paragrah">"Nunca había visto un diseño tan limpio que al mismo tiempo generara tantas conversiones."</p>
                            <h6 class="name-comement">Ana Martínez</h6>
                            <p class="comment-paragrah">Fundadora, DigitalPlus</p>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="card-comment">
                            <div class="img-person">
                                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dXNlciUyMHByb2ZpbGV8ZW58MHx8MHx8fDA%3D" alt="" class="person-profile">
                            </div>
                            <p class="comment-paragrah">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, culpa, voluptatem ratione neque eligendi sapiente ad quia fugiat recusandae</p>
                            <h6 class="name-comement">María González</h6>
                            <p class="comment-paragrah">CEO, TechStart</p>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="card-comment">
                            <div class="img-person">
                                <img src="https://www.shutterstock.com/image-photo/happy-handsome-caucasian-man-casual-260nw-2378378987.jpg" alt="" class="person-profile">
                            </div>
                            <p class="comment-paragrah">"Corrupti consequuntur doloremque quaerat tempora. Hic nesciunt ad quibusdam vel aspernatur!"</p>
                            <h6 class="name-comement">María González</h6>
                            <p class="comment-paragrah">CEO, TechStart</p>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="card-comment">
                            <div class="img-person">
                                <img src="https://www.shutterstock.com/image-photo/profile-picture-smiling-successful-young-260nw-2040223583.jpg" alt="" class="person-profile">
                            </div>
                            <p class="comment-paragrah">"Este diseño modular transformó nuestro sitio web. Las conversiones aumentaron un 45% en el primer mes."</p>
                            <h6 class="name-comement">María González</h6>
                            <p class="comment-paragrah">CEO, TechStart</p>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="card-comment">
                            <div class="img-person">
                                <img src="https://www.shutterstock.com/image-photo/profile-picture-smiling-successful-young-260nw-2040223583.jpg" alt="" class="person-profile">
                            </div>
                            <p class="comment-paragrah">"Este diseño modular transformó nuestro sitio web. Las conversiones aumentaron un 45% en el primer mes."</p>
                            <h6 class="name-comement">María González</h6>
                            <p class="comment-paragrah">CEO, TechStart</p>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="card-comment">
                            <div class="img-person">
                                <img src="https://www.shutterstock.com/image-photo/profile-picture-smiling-successful-young-260nw-2040223583.jpg" alt="" class="person-profile">
                            </div>
                            <p class="comment-paragrah">"Este diseño modular transformó nuestro sitio web. Las conversiones aumentaron un 45% en el primer mes."</p>
                            <h6 class="name-comement">María González</h6>
                            <p class="comment-paragrah">CEO, TechStart</p>
                        </div>
                    </swiper-slide>
                </swiper-container>
            </div>
            
        </div>
    </div>

    <div class="first-blank" id="comments-spacing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="blank-header">Planes que se adaptan a tus necesidades</h1>
                    <h5 class="blank-text">Elige el plan perfecto para tu negocio y comienza a aumentar tus conversiones hoy mismo.</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="custom-card-info">
                        <div class="pricing-info">
                            <h4 class="title-comments">Básico</h4>
                            <p class="commetns-p">Ideal para pequeños negocios que buscan mejorar su presencia online.</p>
                            <div class="pricing">
                                <h1 class="pricing-number">29€</h1>
                                <span class="months">/mes</span>
                            </div>
                            <ul class="clean-li">
                                <li class="clean-p"><i class='bx bx-check' style='color:#FF6B35'  ></i> <p class="clean-paragraph">Diseño modular básico</p></li>
                                <li class="clean-p"><i class='bx bx-check' style='color:#FF6B35'  ></i> <p class="clean-paragraph">Optimización para conversiones</p></li>
                                <li class="clean-p"><i class='bx bx-check' style='color:#FF6B35'  ></i> <p class="clean-paragraph">Soporte por email</p></li>
                                <li class="clean-p"><i class='bx bx-check' style='color:#FF6B35'  ></i> <p class="clean-paragraph">Actualizaciones mensuales</p></li>
                            </ul>
                        </div>
                        <button type="submit" class="btn-pricing">Comenzar gratis</button>
                    </div>
                </div>
                <div class="col-md-4 center-badge">
                    <div class="badges">
                        <span class="badge-info">Más popular</span>
                    </div>
                    <div class="custom-card-info-selected">
                        <div class="pricing-info">
                            <h4 class="title-comments">Profesional</h4>
                            <p class="commetns-p">Perfecto para negocios en crecimiento que necesitan maximizar conversiones.</p>
                            <div class="pricing">
                                <h1 class="pricing-number">79€</h1>
                                <span class="months">/mes</span>
                            </div>
                            <ul class="clean-li">
                                <li class="clean-p"><i class='bx bx-check' style='color:#FF6B35'  ></i> <p class="clean-paragraph">Diseño modular avanzado</p></li>
                                <li class="clean-p"><i class='bx bx-check' style='color:#FF6B35'  ></i> <p class="clean-paragraph">Optimización premium para conversiones</p></li>
                                <li class="clean-p"><i class='bx bx-check' style='color:#FF6B35'  ></i> <p class="clean-paragraph">Soporte prioritario</p></li>
                                <li class="clean-p"><i class='bx bx-check' style='color:#FF6B35'  ></i> <p class="clean-paragraph">Actualizaciones semanales</p></li>
                                <li class="clean-p"><i class='bx bx-check' style='color:#FF6B35'  ></i> <p class="clean-paragraph">Análisis de conversión</p></li>
                            </ul>
                        </div>
                        <button type="submit" class="btn-pricing-orange">Comenzar prueba gratuita</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="custom-card-info">
                        <div class="pricing-info">
                            <h4 class="title-comments">Empresarial</h4>
                            <p class="commetns-p">Solución completa para grandes empresas con necesidades específicas.</p>
                            <div class="pricing">
                                <h1 class="pricing-number">149€</h1>
                                <span class="months">/mes</span>
                            </div>
                            <ul class="clean-li">
                                <li class="clean-p"><i class='bx bx-check' style='color:#FF6B35'  ></i> <p class="clean-paragraph">Diseño modular personalizado</p></li>
                                <li class="clean-p"><i class='bx bx-check' style='color:#FF6B35'  ></i> <p class="clean-paragraph">Estrategia de conversión a medida</p></li>
                                <li class="clean-p"><i class='bx bx-check' style='color:#FF6B35'  ></i> <p class="clean-paragraph">Soporte 24/7</p></li>
                                <li class="clean-p"><i class='bx bx-check' style='color:#FF6B35'  ></i> <p class="clean-paragraph">Actualizaciones ilimitadas</p></li>
                                <li class="clean-p"><i class='bx bx-check' style='color:#FF6B35'  ></i> <p class="clean-paragraph">Análisis avanzado de conversión</p></li>
                                <li class="clean-p"><i class='bx bx-check' style='color:#FF6B35'  ></i> <p class="clean-paragraph">Consultoría estratégica</p></li>
                            </ul>
                        </div>
                        <button type="submit" class="btn-pricing">Contactar ventas</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cta-content">
        <div class="container">
            <div class="cta">
                <div class="banner">
                    <div class="col-md-12">
                        <h1 class="blank-header-white">Listo para transformar tu presencia digital</h1>
                        <h5 class="blank-text-white">Únete a cientos de empresas que ya están aumentando sus conversiones con nuestro enfoque modular y limpio.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'partials/footer.php' ?>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <script>
    const swiperEl = document.querySelector('swiper-container')
    Object.assign(swiperEl, {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
        clickable: true,
        },
        breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 5,
            spaceBetween: 50,
        },
        },
    });
    swiperEl.initialize();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"  
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>