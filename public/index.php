<!DOCTYPE html>
<html class="wide wow-animation" lang="es">
  <head>
    <title>Home</title>
    <meta name="format-detection" content="telephone=no" />
    <meta
      name="viewport"
      content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <!-- Stylesheets-->
    <link
      rel="stylesheet"
      type="text/css"
      href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400"
    />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
      .ie-panel {
        display: none;
        background: #212121;
        padding: 10px 0;
        box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, 0.3);
        clear: both;
        text-align: center;
        position: relative;
        z-index: 1;
      }
      html.ie-10 .ie-panel,
      html.lt-ie-10 .ie-panel {
        display: block;
      }
    </style>
  </head>
  <body>
    <?php include 'src/includes/Navbar.php'; ?>
      <!-- Swiper-->
      <section
        class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2"
        data-loop="true"
        data-autoplay="5000"
        data-simulate-touch="true"
        data-nav="false"
        data-direction="vertical"
      >
        <div class="swiper-wrapper text-left">
          <div
            class="swiper-slide context-dark"
            data-slide-bg="images/noticias/primeira.jpg"
          >
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                    <h6
                      class="text-uppercase"
                      data-caption-animate="fadeInRight"
                      data-caption-delay="0"
                    >
                      Curitiba
                    </h6>
                    <h2
                      class="oh font-weight-light"
                      data-caption-animate="slideInUp"
                      data-caption-delay="100"
                    >
                      <span>Los barrios de Curitiba, Araucária y Fazenda Rio Grande podrían</span
                      ><span class="font-weight-bold"> estar sin agua hasta el lunes (22)</span>
                    </h2>
                    <a
                      class="button button-default-outline button-ujarak"
                      href="#"
                      data-caption-animate="fadeInLeft"
                      data-caption-delay="0"
                      >Ver noticia</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="swiper-slide context-dark"
            data-slide-bg="images/noticias/Grevee.jpg"
          >
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                    <h6
                      class="text-uppercase"
                      data-caption-animate="fadeInRight"
                      data-caption-delay="0"
                    >
                    São Paulo
                    </h6>
                    <h2
                      class="oh font-weight-light"
                      data-caption-animate="slideInUp"
                      data-caption-delay="100"
                    >
                      <span>Se cancela la huelga de conductores de autobuses y cobradores de pasajes </span
                      ><span class="font-weight-bold">tras acuerdo</span>
                    </h2>
                    <a
                      class="button button-default-outline button-ujarak"
                      href="#"
                      data-caption-animate="fadeInLeft"
                      data-caption-delay="0"
                      >Ver noticia</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="swiper-slide context-dark"
            data-slide-bg="images/noticias/geada-19104872.jpg"
          >
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                    <h6
                      class="text-uppercase"
                      data-caption-animate="fadeInRight"
                      data-caption-delay="0"
                    >
                    Rio Grande do Sul
                    </h6>
                    <h2
                      class="oh font-weight-light"
                      data-caption-animate="slideInUp"
                      data-caption-delay="100"
                    >
                      <span>RS puede tener </span
                      ><span class="font-weight-bold">-10ºC esta semana</span>
                    </h2>
                    <a
                      class="button button-default-outline button-ujarak"
                      href="#"
                      data-caption-animate="fadeInLeft"
                      data-caption-delay="0"
                      >Ver noticia</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper paginação-->
        <div class="swiper-pagination"></div>
      </section>
      <!-- Section Box Categories: as caixas abaixo do swiper-->
      <section class="section section-lg section-top-1 bg-gray-4">
        <div class="container offset-negative-1">
          <div class="box-categories cta-box-wrap">
            <div class="box-categories-content">
              <div class="row justify-content-center">
                <!-- Box 1-->
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li>
                      <a href="src/hogar.php"
                        ><img
                          src="images/hogar.jpg"
                          alt=""
                          width="368"
                          height="420"
                      /></a>
                      <h5 class="box-categories-title">Hogar</h5>
                    </li>
                  </ul>
                </div>
                <!-- Fim Box 1-->

                <!-- Box 2-->
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li>
                      <a href="src/empreabilidad.php"
                        ><img
                          src="images/empre.png"
                          alt=""
                          width="368"
                          height="420"
                      /></a>
                      <h5 class="box-categories-title">Empreabilidad</h5>
                    </li>
                  </ul>
                </div>
                <!-- Fim Box 2-->

                <!-- Box 3-->
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li>
                      <a href="src/consejos.php"
                        ><img
                          src="images/hogarf.jpg"
                          alt=""
                          width="368"
                          height="420"
                      /></a>
                      <h5 class="box-categories-title">Día a Día</h5>
                    </li>
                  </ul>
                </div>
                <!-- Fim Box 3-->
              </div>
            </div>
          </div>

          <!-- Fim Boxs-->
          <a class="link-classic wow fadeInUp" href="sobre.php"
            >Más Informaciones<span></span
          ></a>

          <!-- Terminação: Codigo box-->
        </div>
      </section>

      <!-- Discover New Horizons-->
      <section class="section section-sm section-first bg-default text-md-left">
        <div class="container">
          <div
            class="row row-50 align-items-center justify-content-center justify-content-xl-between"
          >
            <div class="col-lg-6 text-center wow fadeInUp">
              <img
                src="images/App.png"
                alt=""
                width="800"
                height="600"
              />
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
              <div class="box-width-lg-470">
                <h3>¿Descubriendo nuevos horizontes?</h3>
                <!-- Bootstrap tabs-->
                <div
                  class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left"
                  id="tabs-7"
                >
                  <!-- Nav tabs-->
                  <ul class="nav nav-tabs">
                    <li class="nav-item" role="presentation">
                      <a
                        class="nav-link active"
                        href="#tabs-7-1"
                        data-toggle="tab"
                        >nosotros</a
                      >
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" href="#tabs-7-2" data-toggle="tab"
                        >¿Por qué NC?</a
                      >
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" href="#tabs-7-3" data-toggle="tab"
                        >Nuestra misión</a
                      >
                    </li>
                  </ul>
                  <!-- Tab panes-->
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-7-1">
                      <p>
                        Nuevos Caminos apoya a inmigrantes españoles en Brasil, facilitando su integración con acceso a viviendas asequibles, empleo y adaptación cultural. Nos enfocamos en ofrecer un apoyo personalizado para ayudarles a construir un futuro próspero en su nuevo hogar.
                      </p>
                      <div class="group-md group-middle">
                        <a
                          class="button button-secondary button-pipaluk"
                          href="src/app.php"
                          >Bajar App</a
                        ><a
                          class="button button-black-outline button-md"
                          href="sobre.php"
                          >Saber mas</a
                        >
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-7-2">
                      <p>
                        Porque nos especializamos en apoyar a inmigrantes españoles en Brasil, brindando soluciones integrales en vivienda, empleo y adaptación. Con NC, te aseguras de recibir un apoyo confiable y personalizado para empezar una nueva vida con confianza.
                      </p>
                      <div class="group-md group-middle">
                        <a
                          class="button button-secondary button-pipaluk"
                          href="src/app.php"
                          >Bajar App</a
                        ><a
                          class="button button-black-outline button-md"
                          href="sobre.php"
                          >Saber mas</a
                        >
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-7-3">
                      <p>
                        Nuestra misión en NC es auxiliar a los inmigrantes españoles en Brasil, brindándoles apoyo en la búsqueda de vivienda accesible, oportunidades laborales y adaptación cultural. Estamos comprometidos a facilitar su transición y asegurar que puedan construir un futuro seguro y próspero.
                      </p>
                      <div class="group-md group-middle">
                        <a
                          class="button button-secondary button-pipaluk"
                          href="src/app.php"
                          >Bajar App</a
                        ><a
                          class="button button-black-outline button-md"
                          href="sobre.php"
                          >Saber mas</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--	Our Services-->
      <section class="section section-sm">
        <div class="container">
          <h3>¿Por qué utilizar nuestro sitio web?</h3>
          <div class="row row-30">
            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div
                  class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left"
                >
                  <div class="unit-left">
                    <div
                      class="box-icon-classic-icon fl-bigmug-line-hot67"
                    ></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title">
                      <a href="#">Personalized Matching</a>
                    </h5>
                    <p class="box-icon-classic-text">
                      Our unique matching system lets you find just the tour you
                      want for your next holiday.
                    </p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div
                  class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left"
                >
                  <div class="unit-left">
                    <div
                      class="box-icon-classic-icon fl-bigmug-line-circular220"
                    ></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title">
                      <a href="#">Información fiable</a>
                    </h5>
                    <p class="box-icon-classic-text">
                      Información tomada de sitios web y redes que son plenamente conocidos en Brasil
                    </p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div
                  class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left"
                >
                  <div class="unit-left">
                    <div
                      class="box-icon-classic-icon fl-bigmug-line-headphones32"
                    ></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title">
                      <a href="#">Foro y Suporute</a>
                    </h5>
                    <p class="box-icon-classic-text">
                      Tenemos un foro para que intercambies experiencias con personas que ya están dentro del territorio o incluso cualquier pregunta que tengas.
                    </p>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Cidades mais procuradas-->
      <section class="section section-sm bg-default">
        <div class="container">
          <h3 class="oh-desktop">
            <span class="d-inline-block wow slideInDown">Ciudades más populares</span>
          </h3>
          <div class="row row-sm row-40 row-md-50">
            <div class="col-sm-6 col-md-12 wow fadeInRight">
              <article class="product-big">
                <div
                  class="unit flex-column flex-md-row align-items-md-stretch"
                >
                  <div class="unit-left">
                    <a class="product-big-figure" href="#"
                      ><img
                        src="images/noticias/imgaereaSP.jpg"
                        alt=""
                        width="600"
                        height="366"
                    /></a>
                  </div>
                  <div class="unit-body">
                    <div class="product-big-body">
                      <h5 class="product-big-title">
                        <a href="#">São Paulo</a>
                      </h5>
                      <div class="group-sm group-middle justify-content-start">
                        <div class="product-big-rating">
                          <span class="icon material-icons-star"></span
                          ><span class="icon material-icons-star"></span
                          ><span class="icon material-icons-star"></span
                          ><span class="icon material-icons-star_half"></span>
                        </div>
                      </div>
                      <p class="product-big-text">
                        São Paulo se encuentra en el corazón de Brasil y es un importante centro financiero y cultural, que ofrece una animada vida nocturna, con bares, restaurantes y salas de conciertos...
                      </p>
                      <a
                        class="button button-black-outline button-ujarak"
                        href="#"
                        >Ver más</a
                      >
                      <div class="product-big-price-wrap">
                        <span class="product-big-price">SP</span>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-12 wow fadeInLeft">
  
              <article class="product-big">
                <div
                  class="unit flex-column flex-md-row align-items-md-stretch"
                >
                  <div class="unit-left">
                    <a class="product-big-figure" href="#"
                      ><img
                        src="images/noticias/imgaereaRJ.jpg"
                        alt=""
                        width="600"
                        height="366"
                    /></a>
                  </div>
                  <div class="unit-body">
                    <div class="product-big-body">
                      <h5 class="product-big-title">
                        <a href="#">Rio de Janeiro</a>
                      </h5>
                      <div class="group-sm group-middle justify-content-start">
                        <div class="product-big-rating">
                          <span class="icon material-icons-star"></span
                          ><span class="icon material-icons-star"></span
                          ><span class="icon material-icons-star_half"></span>
                        </div>
                      </div>
                      <p class="product-big-text">
                        Rio es famosa por sus atracciones icónicas, como el Cristo Redentor, el Pan de Azúcar y las playas de Copacabana, Ipanema y Leblon, pero existen profundas desigualdades sociales, visibles en diferentes partes de la metrópolis...
                      </p>
                      <a
                        class="button button-black-outline button-ujarak"
                        href="#"
                        >Ver más</a
                      >
                      <div class="product-big-price-wrap">
                        <span class="product-big-price">RJ</span>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      
      <!-- Algumas fotos do território Brasileiro-->
      <section class="section bg-default text-center offset-top-50">
        <div
          class="parallax-container"
          data-parallax-img="images/adicionais/banner.jpg"
        >
          <div
            class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21"
          >
            <div class="container">
              <h2 class="heading-2 oh font-weight-normal wow slideInDown">
                <span class="d-block font-weight-semi-bold"
                  >Primeras impresiones de Brasil</span
                ><span class="d-block font-weight-light"
                  >¡te estamos esperando!!</span
                >
              </h2>
              <p
                class="text-width-medium text-spacing-75 wow fadeInLeft"
                data-wow-delay=".1s"
              >
              Fotos tomadas directamente de las regiones brasileñas
              </p>
              <a class="button button-secondary button-pipaluk" href="#"
                >Ver más</a
              >
            </div>
          </div>
        </div>
      </section>

      <!-- Slider: fotos-->
      <section
        class="section section-sm section-top-0 section-fluid section-relative bg-gray-4"
      >
        <div class="container-fluid">
          <h6 class="gallery-title">Galería de fotos</h6>
          <!-- Carrossel das fotos-->
          <div
            class="owl-carousel owl-classic owl-dots-secondary"
            data-items="1"
            data-sm-items="2"
            data-md-items="3"
            data-lg-items="4"
            data-xl-items="5"
            data-xxl-items="6"
            data-stage-padding="15"
            data-xxl-stage-padding="0"
            data-margin="30"
            data-autoplay="true"
            data-nav="true"
            data-dots="true"
          >

            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure">
                <img
                  src="images/adicionais/maranhao.jpg"
                  alt=""
                  width="270"
                  height="195"
                />
              </div>
              <div class="thumbnail-mary-caption">
                <a
                  class="icon fl-bigmug-line-zoom60"
                  href="images/adicionais/maranhaoG.jpg"
                  data-lightgallery="item"
                  ><img
                    src="images/gallery-image-1-270x195.jpg"
                    alt=""
                    width="270"
                    height="195"
                /></a>
              </div>
            </article>

            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure">
                <img
                  src="images/adicionais/Rj.jpg"
                  alt=""
                  width="270"
                  height="195"
                />
              </div>
              <div class="thumbnail-mary-caption">
                <a
                  class="icon fl-bigmug-line-zoom60"
                  href="images/adicionais/RjG.jfif"
                  data-lightgallery="item"
                  ><img
                    src="images/gallery-image-2-270x195.jpg"
                    alt=""
                    width="270"
                    height="195"
                /></a>
              </div>
            </article>

            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure">
                <img
                  src="images/adicionais/Pi.jpg"
                  alt=""
                  width="270"
                  height="195"
                />
              </div>
              <div class="thumbnail-mary-caption">
                <a
                  class="icon fl-bigmug-line-zoom60"
                  href="images/adicionais/PiG.jpg"
                  data-lightgallery="item"
                  ><img
                    src="images/gallery-image-3-270x195.jpg"
                    alt=""
                    width="270"
                    height="195"
                /></a>
              </div>
            </article>

            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure">
                <img
                  src="images/adicionais/Ama.jpg"
                  alt=""
                  width="270"
                  height="195"
                />
              </div>
              <div class="thumbnail-mary-caption">
                <a
                  class="icon fl-bigmug-line-zoom60"
                  href="images/adicionais/AmaG.jpg"
                  data-lightgallery="item"
                  ><img
                    src="images/gallery-image-4-270x195.jpg"
                    alt=""
                    width="270"
                    height="195"
                /></a>
              </div>
            </article>
 
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure">
                <img
                  src="images/adicionais/Sp.jpg"
                  alt=""
                  width="270"
                  height="195"
                />
              </div>
              <div class="thumbnail-mary-caption">
                <a
                  class="icon fl-bigmug-line-zoom60"
                  href="images/adicionais/SpG.jpg"
                  data-lightgallery="item"
                  ><img
                    src="images/gallery-image-5-270x195.jpg"
                    alt=""
                    width="270"
                    height="195"
                /></a>
              </div>
            </article>
   
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure">
                <img
                  src="images/adicionais/Mg.jpg"
                  alt=""
                  width="270"
                  height="195"
                />
              </div>
              <div class="thumbnail-mary-caption">
                <a
                  class="icon fl-bigmug-line-zoom60"
                  href="images/adicionais/MgG.jpg"
                  data-lightgallery="item"
                  ><img
                    src="images/gallery-image-6-270x195.jpg"
                    alt=""
                    width="270"
                    height="195"
                /></a>
              </div>
            </article>

            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure">
                <img
                  src="images/adicionais/Nt.jpg"
                  alt=""
                  width="270"
                  height="195"
                />
              </div>
              <div class="thumbnail-mary-caption">
                <a
                  class="icon fl-bigmug-line-zoom60"
                  href="images/adicionais/NtG.jfif"
                  data-lightgallery="item"
                  ><img
                    src="images/gallery-image-7-270x195.jpg"
                    alt=""
                    width="270"
                    height="195"
                /></a>
              </div>
            </article>
          </div>
        </div>
      </section>

      <!-- Footer-->
      <footer class="section footer-corporate context-dark">
        <div class="footer-corporate-inset">
          <div class="container">
            <div class="row row-40 justify-content-lg-between">
              <!-- Repartição 1-->
              <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInRight" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">Contáctenos</h6>
                    <ul class="footer-contacts d-inline-block d-sm-block">
                      <li>
                        <div class="unit">
                          <div class="unit-left">
                            <span class="icon fa fa-envelope"></span>
                          </div>
                          <div class="unit-body">
                            <a class="link-aemail" href="mailto:#"
                              >nuevoscaminos02@gmail.com</a>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Fim Repartição 1-->

              <!-- Repartição 2-->
              <div class="col-sm-6 col-md-5 col-lg-3 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInDown" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">
                      Preguntas frecuentes
                    </h6>

                    <article class="post post-minimal-2">
                      <p class="post-minimal-2-title">
                        <a href="#"
                          >¿Qué empleos están aumentando en Brasil?</a>
                      </p>
                    </article>

                    <article class="post post-minimal-2">
                      <p class="post-minimal-2-title">
                        <a href="#"
                          >¿Cómo hacer un CV aceptable?</a
                        >
                      </p>
                    </article>
                  </div>
                </div>
              </div>
              <!-- Fim Repartição 2-->
              
              <!-- Repartição 3-->
              <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInLeft" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">Más links</h6>
                    <ul
                      class="row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2">
                      <li><a href="sobre.html">Sobre nosotros</a></li>
                      <li><a href="foro.html">Foro</a></li>
                      <li><a href="#">Galeria</a></li>
                    </ul>
                    <div class="group-md group-middle justify-content-sm-start">
                      <a class="button button-lg button-primary button-ujarak" href="#">Saber más</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Fim Repartição 3-->

            </div>
          </div>
        </div>
        <div class="footer-corporate-bottom-panel">
          <div class="container">
            <div
              class="row justfy-content-xl-space-berween row-10 align-items-md-center2"
            >
              <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
                <div>
                  <ul class="list-inline list-inline-sm footer-social-list-2">
                    <li><a class="icon fa fa-github" href="https://github.com/Nuevos-Caminos/NC"></a></li> 
                  <li><a class="icon fa fa-twitter" href="https://x.com/Nuevos_Caminos0"></a></li>
                  <li><a class="icon fa fa-instagram" href="https://www.instagram.com/tcc_nuevoscaminos/"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 order-sm-first">
                
                <!-- Considerações-->
                <p class="rights">
                  <span>&copy;&nbsp;</span><span class="copyright-year"></span
                  ><span>&nbsp;</span><span>Etec Zona leste</span>.
                  <span>TCC Nuevos Caminos</span>
                </p>
              </div>
              <div class="col-sm-6 col-md-4 text-md-right">
                <p class="rights"><a href="#">Privacy Policy</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    <!--Fim Footer-->

    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
