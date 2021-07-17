<?php
$page="Home";
?>
<!DOCTYPE html>
  <html lang="en">
    <head>

      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <meta name="keywords" content="Student Day 2021" />
      <meta name="description" content="Student Day 2021">
      <meta name="author" content="Tim Web Development 3D SDU 2021">

      <title><?= $page ?> | SDU 2021 </title>
      <?php if ($page == 'Object not found!') {
        http_response_code(404);
        include('404.php'); // provide your own HTML for the error page
        die();
      } ?>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('img/logo/logo nav.png')}}" type="image/x-icon" />
      <link rel="apple-touch-icon" href="{{asset('img/logo/logo nav.png')}}">

      <!-- Mobile Metas -->
      

      <!-- Web Fonts  -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7COpen+Sans:400,700,800" rel="stylesheet" type="text/css">

      <!-- Css for loader -->
      <link rel="stylesheet" href="css/loader.css" type="text/css">

      <!-- Web Fonts  -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7COpen+Sans:400,700,800" rel="stylesheet" type="text/css">

      <!-- Vendor CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.0/venobox.min.css">

      <!-- Main CSS -->
      <link rel="stylesheet" href="css/style.css" type="text/css">
      <!-- <link rel="stylesheet" href="css/temp.css" type="text/css"> -->

      <!-- Vendor Js File -->
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.js"></script>
      <script src="https://kit.fontawesome.com/170c7b125d.js" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/ScrollTrigger.js"></script> -->


    </head>
    <body class="pace-done" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
      <div class="overlay-load" >
        <div class="loader" style="display: none;">
        </div>
        <div class="text-center" style="margin-top: 230px;">
          <img src="asset/umum/info-facultas.png" alt="" class="mr-5" style="display: inline;">
          <img src="asset/umum/info-facultas.png" alt="" style="display: inline;">
        </div>
      </div>






      <!-- Navigation -->
      <div id="navigate">
          <div id="menu" class="title-menu">
              <div class="d-flex align-items-center pl-1">
                STUDENT DAY 
                <span class="font-weight-normal ml-1">
                    2021 
                </span>
                <button id="menu-button">
                  <span class="line-hamburger"></span>
                  <span class="line-hamburger"></span>
                  <span class="line-hamburger"></span>
                </button>
              </div>
          </div>
          <div id="menu-content" style="justify-content: center; align-items:center;">
            <div class="container-fluid">
              <div class="row d-flex align-items-center">
                <div class="col-sm-12 col-lg-6 px-4">
                  <ul>
                    <a href="#"><li>Beranda</li></a>
                    <a href="#"><li>Beranda</li></a>
                    <a href="#"><li>Beranda</li></a>
                    <a href="#"><li>Beranda</li></a>
                    <a href="#"><li>Beranda</li></a>
                    <a href="#"><li>Beranda</li></a>
                  </ul>
                </div>
              </div>
            </div>
          </div>
      </div>
















      <main class="content-page" data-aos-delay="400">
      <section id="banner" class="d-flex align-items-center">
        <div class="container text-center align-items-center aos-init aos-animate">
          <h1 class="title kalimat-pertama" data-aos="fade-right" data-aos-delay="2000">Coming Soon <span class="font-weight-normal">Student Day 2021</span></h1>
          <h3 class="title" data-aos="fade-right" data-aos-delay="2200">Pantau terus ya teman-teman untuk informasi selanjutnya<span></span></h3>    
        </div>
      </section>










      <!-- Start Section Sambutan -->
      <section id="video-awal">
        <div class="sambutan">
          <div class="container">        
            <div class="row" data-aos="fade-right"> 
              <h1 class="title aos-init aos-animate "><span class
            ="font-weight-normal" >selamat datang,</span> maba unud!</h1>      
            </div>
            <div id="main-video"  class="row px-5 py-3 aos-init aos-animate">
              <div class="col-sm-12 col-md-6" data-aos="zoom-in-up">
                <div class="d-flex w-100 justify-content-center card card-video align-items-center" style="background-image:url('../asset/umum/15.jpg');background-size:cover; background-position:top center; height:315px;">
                  <div class="overlay justify-content-center align-items-center">
                    <h2 style="color:white;" class="title">MARS SDU</h2>
                  </div>
                  <a href="https://www.youtube.com/watch?v=aVXZLyVRJVM&t=57s" class="venobox play-btn mb-4 vbox-item" data-vbtype="video" data-autoplay="true">
                  </a>
                </div>
              </div>
              <div class="col-sm-12 col-md-6" data-aos="zoom-in-up">
                  <div class="d-flex w-100 justify-content-center card card-video align-items-center" style="background-image:url('../asset/umum/banner.jpg');background-size:cover; background-position:top center; height:315px;">
                    <div class="overlay justify-content-center align-items-center">
                      <h2 style="color:white;" class="title">after event SDU
                      </h2>        
                    </div>
                    <a href="https://www.youtube.com/watch?v=aVXZLyVRJVM&t=57s" class="venobox play-btn mb-4 vbox-item" data-vbtype="video" data-autoplay="true">
                    </a>
                  </div>          
                </div>
            </div>
          </div>   
        </div>
      </section>
      <!-- End Section Sambutan -->





      <!-- Info Fakultas -->
      <section id="info-falkutas" class="bg-aqua">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-lg-6 py-2 my-auto text-center">
              <img onclick="" src="{{asset('asset/umum/info-facultas.png')}}" alt="Logo UNUD & Fakultas" class="img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200">
            </div>
            <div class="col-sm-12 col-lg-6 py-2 my-auto aos-init aos-animate" data-aos="fade-right" data-aos-delay="300">
              <h1 class="title mb-0 aos-init aos-animate" data-aos="fade-right">
                <span class="font-weight-normal">Info </span><span>Fakultas</span>
              </h1>
              <p data-aos="fade-right" data-aos-delay="400" class="aos-init aos-animate" style="margin-top:50px;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea quod maxime totam excepturi aliquam non doloribus voluptas adipisci! Veritatis culpa accusantium fugiat nostrum cumque rerum. Soluta recusandae nam nisi rem.<br>
              <br>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, ipsum voluptatum molestias enim architecto pariatur praesentium quasi harum voluptatem magnam nulla exercitationem ea, autem, quis aspernatur veniam doloremque laborum non.
              </p>
              <ol>
                <li data-aos="fade-right" data-aos-delay="150" class="aos-init aos-animate">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum nihil excepturi, doloremque rem ab ad est amet! Sapiente mollitia et.
                </li>
                <li data-aos="fade-right" data-aos-delay="350" class="aos-init aos-animate">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum nihil excepturi, doloremque rem ab ad est amet! Sapiente mollitia et.
                </li>
                <li data-aos="fade-right" data-aos-delay="550" class="aos-init aos-animate">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum nihil excepturi, doloremque rem ab ad est amet! Sapiente mollitia et.
                </li>
                <li data-aos="fade-right" data-aos-delay="750" class="aos-init aos-animate">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum nihil excepturi, doloremque rem ab ad est amet! Sapiente mollitia et.
                </li>
                <li data-aos="fade-right" data-aos-delay="950" class="aos-init aos-animate">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum nihil excepturi, doloremque rem ab ad est amet! Sapiente mollitia et.
                </li>
              </ol>
              <p></p>
              <hr data-aos="fade-right" data-aos-delay="200" style="border-top: 3px solid #fff;" class="aos-init aos-animate">
            </div>
          </div>
        </div>
      </section>
      <!-- End Info Fakultas -->





      <!-- Start Section Podcast -->
      <section id="podacast">
        <div class="container">
          <div class="row" style="margin-left:-30px;">
            <div class="col-sm-12">
              <h1 class="title aos-init aos-animate" data-aos="fade-right">Mengenal Lebih Dekat SDU</h1>
              <h6 class="pb-2 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">Podcast menarik yang dapat membantu dalam mengenal lebih jauh mengenai SDU.</h6>
            </div>
            <div class="main-podcast aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="300">
              <iframe id="video_id" src="https://www.youtube.com/embed/okIQYRE_t3s?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="gallery-podcast aos-init aos-animate" data-aos="fade-left" data-aos-delay="500">
              <div class="item-podcast">
                <img src="asset/umum/banner.jpg" data-id="https://www.youtube.com/embed/okIQYRE_t3s?rel=0" alt="main podcast">
                <div class="youtube-icon active">
                  <img src="asset/umum/yt_icon.png" alt="icon yt">
                </div>
              </div>
              <div class="item-podcast">
                <img src="asset/umum/banner.jpg" data-id="https://www.youtube.com/embed/iceS6BvhuQ8?rel=0" alt="main podcast">
                <div class="youtube-icon">
                  <img src="asset/umum/yt_icon.png" alt="icon yt">
                </div>
              </div>
              <div class="item-podcast">
                <img src="asset/umum/banner.jpg" data-id="https://www.youtube.com/embed/ECQywFhw6oc?rel=0" alt="main podcast">
                <div class="youtube-icon">
                  <img src="asset/umum/yt_icon.png" alt="icon yt">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Section Podcast -->
        
      </main>






      



      


      <!-- JQuery -->
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

      <!-- Popper -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

      <!-- Venobox -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.0/venobox.min.js"></script>

      <script type="text/javascript" src="js/script.js"></script>
    </body>
  </html>

    
