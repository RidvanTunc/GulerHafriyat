<?php include "panel/user/ayar.php" ?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <!--------------------------------------------Google Tag Manager----------------------------------------------------------->
  <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NG775TW');
  </script>
  <!---------------------------------------------Google Analytics------------------------------------------------------------->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-V3QPY50B3E"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-V3QPY50B3E');
  </script>
  <!--------------------------------------------------------------Meta Tags---------------------------------------------->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!----------------------------------------------------Google Search---------------------------------------------------->
  <meta name="google-site-verification" content="GCRjVREF_qgQpQ7vHab-orHfhnatTpDCvaBETBX1lT8">
  <!-----------------------------------------------------Title----------------------------------------------------------->
  <title>GÜLER HAFRİYAT | Hafriyat ve Nakliye Firması</title>
  <link rel="icon" type="image/x-icon" href="img/guler-hafriyat-logo.png">
  <!-----------------------------------------------------Meta İnfo-------------------------------------------------------->
  <meta name="author" content="GÜLER HAFRİYAT">
  <meta name="keywords" content="güler hafriyat,hafriyat,gölcük hafriyat,kocaeli hafriyat,güler,hafriyat firması,hafriyat şirketi,şirket,firma,nakliye">
  <meta name="description" content="Güler Hafriyat olarak kuruluşumuzun ilk anından itibaren kaliteye verdiğimiz önem ve zoru başarma azmimiz sayesinde kısa sürede sektörde yerimizi aldık...">
   <!--------------------------------------------------Phone Touch İcon--------------------------------------------------->
  <link rel="apple-touch-icon" sizes="192x192"  href="img/guler-hafriyat-logo.png">
  <link rel="icon" sizes="162x162" href="img/guler-hafriyat-logo.png">
  <!-----------------------------------------------------CSS Pages-------------------------------------------------------->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/fancybox-3.5.7-jquery.min.css">
</head>
<body>
<!------------------------------------------------Google Tag Manager (noscript)------------------------------------------>
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NG775TW" height="0" width="0" class="tag-manager-hide"></iframe></noscript>
    <!---------------------------------------------------------ÜST BÖLÜM-------------------------------------------------------->
    <div class="container-fluid p-3 text-end header-info-background">
      <div class="header-info">
        <a href="https://www.sektor.gen.tr/list/insaat/index.php" target="_blank" class="tag-manager-hide">İNŞAAT</a>
        <a href="tel:+905385937784" class="text-black"><i class="fas fa-phone pe-1"></i><hide>+90 539 791 19 50</hide></a>
        <a href="mailto:y-gulerhafriyat@hotmail.com" class="text-black"><i class="fas fa-envelope pe-1"></i><hide>info@gulerhafriyat.com.tr</hide></a>
        <a href="https://facebook.com/" class="text-black" target="_blank"><i class="fab fa-facebook pe-1"></i><hide>facebook</hide></a>
        <a href="https://instagram.com/" class="text-black" target="_blank"><i class="fab fa-instagram pe-1"></i><hide>instagram</hide></a>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="https://gulerhafriyat.com.tr"><img src="img/guler-hafriyat-logo.png" alt="nf-insaat-üst-logo" width="300" height="250" id="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-home pe-1"></i>AnaSayfa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#hakkimizda"><i class="fas fa-address-card pe-1"></i>Hakkımızda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#hizmetlerimiz"><i class="fa-solid fa-person pe-1"></i>Hizmetlerimiz</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projeler"><i class="fa-solid fa-list-check pe-1"></i>Projeler</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#parkur"><i class="fa-solid fa-car pe-1"></i>Parkur</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#galeri"><i class="fas fa-image pe-1"></i>Galeri</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="#iletisim"><i class="fa-solid fa-address-book pe-1"></i>İletişim</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-------------------------------------------------------------SLAYT----------------------------------------------------->
  <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <?php
        $sql=$connect->query("select * from slayt");
        while($row=$sql->fetch_object()) {
          $image=$row->slayt_resim;
          $baslik=$row->slayt_baslik;
          $arialabel=$row->slayt_alabel;
          $slideto=$row->slayt_sto;
          echo "
            <button type='button' data-bs-target='#carouselExampleFade' data-bs-slide-to='$slideto' aria-label='$arialabel'></button>
          ";
        }
      ?>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/slayt/guler-hafriyat-proje-slayt-resmi (5).jpg" class="d-block w-100" alt="golcuk-topcular-mahallesi-konut-projesi">
        <div class="carousel-caption d-md-block">
          <h5 class="animate__animated  animate__fadeIn rounded--0">VARSAYILAN PROJE</h5>
          <p class="animate__animated  animate__fadeIn animate__slow"><a href="#projeler" class="rounded--0">DETAY <i class="fas fa-arrow-circle-down"></i></a></p>
        </div>
      </div>
      <?php
        $sql=$connect->query("select * from slayt");
        while($row=$sql->fetch_object()) {
          $image=$row->slayt_resim;
          $baslik=$row->slayt_baslik;
          echo "
          <div class='carousel-item'>
            <img src='$image' class='d-block w-100' alt='$baslik'>
            <div class='carousel-caption d-md-block'>
              <h5 class='animate__animated  animate__fadeIn rounded--0'>$baslik</h5>
              <p class='animate__animated  animate__fadeIn animate__slow'><a href='#projeler' class='rounded--0'>DETAY <i class='fas fa-arrow-circle-down'></i></a></p>
            </div>
          </div>'";
        }
      ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <i class="fa-solid fa-angle-left carousel-next-font"></i>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <i class="fa-solid fa-angle-right carousel-prev-font"></i>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!--------------------------------------------------------------HAKKIMIZDA------------------------------------------------>
  <div id="hakkimizda"></div>
  <div class="container mt-4 hakkimizda">
    <div class="line"></div>
    <div class="row headline">
      <div class="col-lg-6 text-start">
        <?php
          $sql1=$connect->query("select * from hakkimizda");
          $row1=$sql1->fetch_object();
          $image1=$row1->hakkimizda_resim;
          $title1=$row1->resim_baslik;
          echo "";
        ?>
        <h1 class="display-6 w-100">HAKKIMIZDA</h1>
        <img src='img/guler-hafriyat-hakkimizda.jpg' alt='guler-hafriyat-hakkimizda' width='100%' height='320'> 
      </div>
      <div class="col-lg-6 p-3">
        <?php echo $row1->hakkimizda_yazi; ?>
      </div>
    </div>
  </div>
  <!-------------------------------------------------------------HİZMETLERİMİZ---------------------------------------------->
  <div id="hizmetlerimiz"></div>  
<div class="container mt-3 hizmetlerimiz">
  <div class="line"></div>
  <div class="row headline">
      <h1 class="col-12 display-6">HİZMETLERİMİZ</h1>
      <div class="col-12">
        <card class="card text-center">
          <?php
            $sql2=$connect->query("select * from hizmetler");
             while($row2=$sql2->fetch_object()) {
                $title2=$row2->hizmetler_baslik;
                $text2=$row2->hizmetler_tanitim;
                echo "
                <div class='card-body m-1'>
                  <h5 class='card-title fs-7'>$title2</h5>
                  <p class='card-text'>$text2</p>
                </div>";
              }
          ?>
        </card>
      </div>
    </div>
  </div>
<!----------------------------------------------------------------PROJELER------------------------------------------------>
<div id="projeler"></div>
<div class="container mt-4 projeler">
  <div class="line"></div>
  <div class="row headline">
    <h1 class="col-12 display-6">PROJELER</h1>
    <div class="col-12 d-flex flex-wrap">
      <?php
        $sql3=$connect->query("select * from projeler");
        while($row3=$sql3->fetch_object()) {
          $image3=$row3->proje_resim;
          $title3=$row3->proje_baslik;
          $text3=$row3->proje_tanitim;
          echo "
          <div class='proje-box m-1'>
            <img src='$image3' alt='$title3'>
            <div class='proje-yazısı'>
              <h4 class='card-title pt-4 fs-7'>$title3</h4>
              <p class='card-text'>$text3</p>
            </div>
          </div> ";
        }
      ?>
    </div>
  </div>
</div>
  <!-----------------------------------------------------------------PARKUR---------------------------------------------->
<div id="parkur"></div>  
<div class="container mt-4 parkur">
  <div class="line"></div>
  <div class="row headline">
    <h1 class="col-12 display-6">MAKİNE PARKURU</h1>
    <div class="col-12">
      <card class="card text-center">
        <?php
          $sql4=$connect->query("select * from parkur");
          while($row4=$sql4->fetch_object()) {
            $title4=$row4->makine_baslik;
            $property4=$row4->makine_ozellik;
            $model4=$row4->makine_model;
            echo "
            <div class='card-body m-1'>
              <p><span class='card-title h5 fs-7'>$title4</span></p>
              <p class='card-title parkur-ozellik'>$property4</p>
              <p class='card-text'>$model4</p>
            </div>";
          }
        ?>
      </card>
    </div>
  </div>
</div>
<!-----------------------------------------------------------------GALERİ------------------------------------------------->
<div id="galeri"></div>  
<div class="container mt-4 galeri">
  <div class="line"></div>
  <div class="row headline">
    <h1 class="col-12 display-6">GALERİ</h1>
    <div class="col-12">
      <?php
        $sql5=$connect->query("select * from galeri");
        while($row5=$sql5->fetch_object()) {
          $image5=$row5->galeri_resim;
          $baslik5=$row5->galeri_baslik;
          echo "
          <a href='$image5' class='fancybox' data-fancybox='gallery'>
            <img src='$image5' alt='$baslik5' width='100%' height='100%' class='image'>
          </a>";
        }
      ?>
    </div>
    <!--div class="col-12 text-end px-4 py-3">
      <a href="#" type="button" class="btn btn-outline-secondary">Devamı..</a>
    </div-->
  </div>
</div>
<!------------------------------------------------------------İLETİŞİM----------------------------------------------------->
<div id="iletisim"></div>  
<div class="container mt-4 iletisim">
  <div class="line"></div> 
  <div class="row headline">
     <h1 class="col-12 display-6 px-5">İLETİŞİM</h1>
     <div class="col-lg-6 col-sm-6 col-md-6">
        <h2 class="display-5">İletişim Formu</h2>
        <form action="https://formspree.io/f/xgedjyby" method="post">
          <div class="row mt-3">
            <div class="col">
              <input type="text" class="form-control" name="Ad" placeholder="Adınız" aria-label="First name" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="Soyad" placeholder="Soyadınız" aria-label="Last name" required>
            </div>
          </div>
          <input type="email" class="form-control mt-3" id="formGroupExampleInput" name="E-Posta Adresi" placeholder="E-Posta Adresiniz" required>
          <input type="tel" class="form-control mt-3" id="formGroupExampleInput2" name="Telefon Numarası" placeholder="Telefon Numaranız">
          <textarea class="form-control mt-3" id="formGroupExampleInput2" name="Mesaj" placeholder="Mesajınız" required></textarea>
          <button class="btn btn-outline-secondary mt-3">Gönder</button>
        </form>  
      </div>
      <div class="col-lg-6 col-sm-6 col-md-6">
        <h2 class="display-5 mx-3 h2iletisimbilgi">İletişim Bilgileri</h2>
        <ul class="text-start mt-3">
          <li class="mb-2">
            <a href="tel:+905385937784"><i class="fas fa-phone pe-2"></i>+90 539 791 19 50</a>
          </li>
          <li class="mb-2">
            <a href="mailto:info@nfinsaat.com"><i class="fas fa-envelope pe-2"></i>info@gulerhafriyat.com.tr</a>
          </li>
          <li class="mb-2">
            <a href="https://goo.gl/maps/9RN6t4UXpbf1TcNc8"><i class="fas fa-map-marker-alt pe-2"></i>Merkez Mah. Atatürk Bulv. Merkez Kapalı Çarşı No:123/46 Gölcük/KOCAELİ</a>
          </li>
        </ul>
      </div>
      <div class="col-12">
        <h2 class="display-5 mt-3">Konum</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.030319332098!2d29.821778414873066!3d40.71734904522618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb40d206635cd9%3A0x7545f5adaf9ea9e6!2zTWVya2V6IEthcGFsxLEgw4dhcsWfxLE!5e0!3m2!1str!2str!4v1656075098830!5m2!1str!2str" width="100%" height="400" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</div>
<!----------------------------------------------------------------ALT BÖLÜM------------------------------------------------->
    <footer class="container-fluid">
      <div class="row p-4">
        <div class="col-sm-6 col-md-6 col-lg-6 text-start sayfalar w-50">
          <a href="#" class="pe-2">AnaSayfa</a>
          <a href="#hakkimizda" class="pe-2">Hakkımızda</a>
          <a href="#hizmetlerimiz" class="pe-2">Hizmetlerimiz</a>
          <a href="#projeler" class="pe-2">Projeler</a>
          <a href="#parkur" class="pe-2">Parkur</a>
          <a href="#galeri" class="pe-2">Galeri</a>
          <a href="#iletisim" class="pe-2">İletişim</a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 text-end w-50 iconlar">
          <a href="tel:+905397911950" class="pe-3" title="+90 539 791 19 50"><i class="fas fa-phone"></i></a>
          <a href="mailto:y-gulerhafriyat@hotmail.com" class="pe-3" title="info@gulerhafriyat.com.tr"><i class="fas fa-envelope"></i></a>
          <a href="https://facebook.com/" class="pe-3" title="@facebook"><i class="fab fa-facebook"></i></a>
          <a href="https://instagram.com/" class="pe-3" title="@instagram"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="text-center p-2 telif">
        © 2022 <a href="#">Tüm hakları saklıdır.</a>
      </div>
    </footer>
  </div>
  <!----------------------------------------------Google Backlink Tunçhasyapi------------------------------------------>
  <div class="tag-manager-hide">
    <a href="https://www.google.com/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.ac/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.ad/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.ae/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.com.af/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.com.ag/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.com.ai/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.al/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.am/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.co.ao/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.com.ar/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.as/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.at/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.com.au/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.az/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.ba/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.com.bd/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.be/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.bf/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.bg/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.com.bh/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.bi/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.bj/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.com.bn/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.com.bo/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.com.br/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.bs/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.bt/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.co.bw/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.by/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.com.bz/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.ca/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.com.kh/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.cc/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.cd/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.cf/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.cat/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.cg/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.ch/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.ci/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.co.ck/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.cl/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.cm/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.cn/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.g.cn/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.com.co/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.co.cr/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.com.cu/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.cv/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.com.cy/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.cz/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.de/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.dj/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.dk/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.dm/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
    <a href="https://www.google.com.do/url?sa=i&url=http://www.tunchasyapi.com/">tunçhas yapı</a>
  </div>
 <!-------------------------------------------------------JS SAYFALARI------------------------------------------------> 
 <script src="js/cdnjs-scripts.js"></script>
 <script src="js/scrollreveal.js"></script>
 <script src="js/bootstrap.js"></script>
 <script src="js/main.js"></script>
</body>
</html>