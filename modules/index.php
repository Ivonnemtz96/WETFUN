<style>
.video-container {
    width: 100vw;
    height: 95vh;
}

iframe {
    position: absolute;
    top: 8%;
    left: 50%;
    width: 100vw;
    height: 100vh;
    transform: translate(-50%, -50%);
    pointer-events: none;
}

#text {
    position: absolute;
    color: #FFFFFF;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}

@media (min-aspect-ratio: 16/9) {
  .video-container iframe {
    height: 56.25vw;
  }
}
@media (max-aspect-ratio: 16/9) {
  .video-container iframe {
    width: 177.78vh;
  }

  .video-container2 iframe {
    width: 57.78vh;
  }

  iframe{
    top: 4%;
  }
}


@media (max-width: 844px) and (min-width: 484px) {
    .video-container2 iframe {
    width: 97.78vh;
  }

 
}

#text {
    position: absolute;
    color: #FFFFFF;
    left: 50%;
    top: 6%;
    transform: translate(-50%, -50%);

}

.titulo {
    background: rgba(0, 0, 0, 0.5);
    padding: 10px;

}
</style>

<main>
    <div class="video-container d-none d-md-block">
        <!-- <div id="overlay"></div> -->
        <iframe
            src="https://www.youtube.com/embed/OuFox1cjDGs?controls=0&autoplay=1&mute=1&playsinline=1&loop=1&playlist=OuFox1cjDGs"></iframe>
    </div>


    <div class="video-container video-container2 d-block d-md-none">
        <!-- <div id="overlay"></div> -->
        <iframe
            src="https://www.youtube.com/embed/Cln0R-x2rUw?controls=0&autoplay=1&mute=1&playsinline=1&loop=1&playlist=Cln0R-x2rUw"></iframe>
    </div>

    <!-- <div id="text" class="text-center titulo">
        <h1 style="color: #fff;">¡Obtén tus entradas! <br> Directamente en las taquillas del parque</h1>
    </div> -->

    <div class="pattern_2">
        <div class="container margin_120_95" id="first_section">
            <div class="row justify-content-between flex-lg-row-reverse align-items-center">
                <div class="col-lg-5">
                    <div class="parallax_wrapper">
                        <img src="/img/home_2.jpg?=1" alt="" class="img-fluid rounded-img">
                        <div data-cue="slideInUp" class="img_over"><span data-jarallax-element="-30"><img
                                    src="/img/home_1.jpg?=1" alt="" class="rounded-img"></span></div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="intro">
                        <div class="title">
                            <!-- <small>About us</small> -->
                            <h2 style="color: #13304a;">¡Prepárate para la diversión salvaje en Wild Wet Fun!</h2>
                        </div>
                        <!-- <p class="lead">Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim.</p> -->
                        <p>Somos el lugar perfecto para escapar del calor y sumergirte en un mundo lleno de
                            diversión acuática. Ven y descubre por qué somos el parque favorito de todos los amantes del
                            agua.</p>
                        <p><em style="color: #13304a;">Wild Wet Fun</em></p>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>
        <div class="pinned-image pinned-image--medium">
            <div class="pinned-image__container" id="section_video">
                <video loop="loop" muted="muted" id="video_home">
                    <source src="/video/swimming_pool_2.mp4" type="video/mp4">
                    <source src="/video/swimming_pool_2.webm" type="video/webm">
                    <source src="/video/swimming_pool_2.ogv" type="video/ogg">
                </video>
                <div class="pinned-image__container-overlay"></div>
            </div>
            <div class="pinned_over_content">
                <div class="title white">
                    <small data-cue="slideInUp" data-delay="200">¿Ya tienes tus boletos?</small>
                    <h2 data-cue="slideInUp" data-delay="300">Obtén tus boletos<br> directamente en las taquillas del
                        parque</h2>
                </div>
            </div>
        </div>
        <!-- /pinned content -->
    </div>
    <!-- /Pattern  -->



    <div class="marquee">
        <div class="track">
            <div class="content">&nbsp;Wild Wet Fun Wild Wet Fun Wild Wet Fun Wild Wet Fun Wild Wet Fun</div>
        </div>
    </div>
    <!-- /marquee-->

    <div class="bg_white">
        <div class="container margin_120_95">
            <div class="row justify-content-between d-flex align-items-center add_bottom_90">
                <div class="col-lg-6">
                    <div class="pinned-image rounded_container pinned-image--small mb-4">
                        <div class="pinned-image__container">
                            <img src="/img/local_amenities_1.webp" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="title">
                        <small>Vive la adrenalina</small>
                        <h3>Zona Extreme</h3>
                        <p>
                            ¡No te quedes con las ganas de disfrutar de esta atracción! <br>
                            Horarios: <strong>11:00 am a 01:00 pm</strong>
                        </p>
                        <p><a href="/galeria" class="btn_1 mt-1 outline">Ver galería</a></p>
                    </div>
                </div>
            </div>
            <!-- /row-->
            <div class="row justify-content-between d-flex align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="pinned-image rounded_container pinned-image--small mb-4">
                        <div class="pinned-image__container">
                            <img src="/img/local_amenities_2.webp" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 order-lg-1">
                    <div class="title">
                        <small>¡Prepárate para el mejor día de tu vida en Wild Wet Fun!</small>
                        <h3>Zona Finisterra</h3>
                        <p>
                            ¡El aburrimiento se ahoga en nuestros toboganes! <br>
                            Horarios: <strong>02:00 pm a 03:30 pm</strong>
                        </p>
                        <p><a href="/galeria" class="btn_1 mt-1 outline">Ver galería</a></p>
                    </div>
                </div>
            </div>
            <!-- /row-->

            <div class="row justify-content-between d-flex align-items-center add_bottom_90">
                <div class="col-lg-6">
                    <div class="pinned-image rounded_container pinned-image--small mb-4">
                        <div class="pinned-image__container">
                            <img src="/img/local_amenities_3.webp" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="title">
                        <small>Donde la diversión y el agua se unen en armonía</small>
                        <h3>Zona Splash</h3>
                        <p>
                            Si te gusta el agua, la diversión y las carcajadas, entonces Wild Wet Fun es tu paraíso <br>
                            Horarios: <strong>04:00 am a 05:30 pm</strong>
                        </p>
                        <p><a href="/galeria" class="btn_1 mt-1 outline">Ver galería</a></p>
                    </div>
                </div>
            </div>
            <!-- /row-->
        </div>
        <!-- /container-->
    </div>
    <!-- /bg_white -->
    <div class="container">
        <img src="" alt="">
    </div>

    <div class="parallax_section_1 jarallax" data-jarallax data-speed="0.2">
        <img class="jarallax-img kenburns-2" src="/img/hero_home_1.jpg" alt="">
        <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center"
            data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="title white">
                            <small class="mb-1">Opiniones</small>
                            <h2>¿Qué dicen nuestros clientes?</h2>
                        </div>
                        <div class="carousel_testimonials owl-carousel owl-theme nav-dots-orizontal">
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="/img/testimonial_1.jpg" alt="" class="img-circle">
                                        </figure>
                                        <h4>Melany Urbina</h4>
                                    </div>
                                    <div class="comment">
                                        "Me encantó un lugar muy limpio y agradable para estar con amigos o familia."
                                    </div>
                                </div>
                                <!-- End box_overlay -->
                            </div>
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="/img/testimonial_1.jpg" alt="" class="img-circle">
                                        </figure>
                                        <h4>Patricio Estrella</h4>
                                    </div>
                                    <div class="comment">
                                        "Diversión a lo grande, solo como recomendación no vallan en domingo filas
                                        largas para subirte a un tobogán, calor extremo, filas para un helado, para una
                                        cerveza preparada., la lectura en el brazalete entre bajo su propio riesgo no se
                                        si es por marketing o por deslindar cual quier responsabilidad.
                                        En comida el cordon blue sigue siendo mi favorito, el SASHIMI muy rico el
                                        CEVICHE de pescando también muy rico
                                        En el tobogán del torbellino (escuzado) se requiere de dos personas atentas para
                                        ayuda al salir de la piscina en donde caes
                                        Saludos."
                                    </div>
                                </div>
                                <!-- End box_overlay -->
                            </div>
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="/img/testimonial_1.jpg" alt="" class="img-circle">
                                        </figure>
                                        <h4>FERNANDO DANIEL LOPEZ COSIO</h4>
                                    </div>
                                    <div class="comment">
                                        "Maravilloso increíble para pasar un buen día en familia y amigos, precios accesibles, un lugar para todo el público."
                                    </div>
                                </div>
                                <!-- End box_overlay -->
                            </div>
                        </div>
                        <!-- End carousel_testimonials -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /parallax_section_1-->
</main>