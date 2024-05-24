<?php
define('ROOT_URL','https://usefulcube.com/');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/usefulcube-icon.png">
    <title>UseFulCube</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <nav>
        <div class="container nav__container">
            <a href="index.html"><img class="nav__logo" src="./img/logo4.png" alt=""></a>
            <ul class="nav__links">
                <li><a href="#exhibition">توضیحات</a></li>
                <li><a href="#about">درباره ما</a></li>
                <li><a href="#gallery"> تصاویر</a></li>
                <li><a href="index">خانه</a></li>
            </ul>
            <ul class="nav__socials">
                <li><a href="https://telegram.me/dariush_designer" target="_blank"><i class="uil uil-telegram"></i></a> </li>
                <li><a href="#" target=""><i class="uil uil-twitter-alt"></i></a></li>
                <li><a href="#" target=""><i class="uil uil-instagram"></i></a> </li>
            </ul>
            <button class="nav__toggle-btn" id="nav__toggle-open"><i class="uil uil-bars"></i></button>
            <button class="nav__toggle-btn" id="nav__toggle-close"><i class="uil uil-multiply"></i></button>
        </div>
        <!--container-->
    </nav>
    <!--end nav-->

    <header>
        <div class="container header__container">
            <div class="header__left">
                <div class="header__image-bg"></div>
                <!--header__image-bg-->
                <div class="header__image-lg">
                    <img src="./img/autocad1.png" alt="">
                </div>
                <!--header__image-lg-->
                <div class="header__image-sm">
                    <img src="./img/autocad1.png" alt="">
                </div>
                <!--header__image-sm-->
            </div>
            <!--header__left-->

            <div class="header__right">
                <div class="header__head">
                    <div class="empty header__empty"></div>
                    <!--empty header__empty-->
                    <a href="" class="header__tag">بهترین آموزنده اتوکد در ایران#</a>
                </div>
                <!--header__head-->
                <h1>اتوکد چیست؟</h1>
                <p> 
                اتوکد چیست؟
 نرم افزاری برای طراحی در زمینه های مختلف می باشد و کاربرد های گوناگونی در 
رشته هایی همچون ؛ معماری ، عمران ، طراحی داخلی ، طراحی صنعتی ، شهری و منظر، برق ، مکانیک و... دارد و کاربران در این محیط امکان استفاده از محیط های دو بعدی و سه بعدی را دارند و به فراخور نیاز می توانند از امکانات Autodesk auto cad بهره مند شوند.
                </p>
                <a href="" class="header__btn-md">Let"s talk</a>
            </div>
            <!--header__right-->
        </div>
        <!--container header__container-->
    </header>
    <!--end of header-->
    <!-- <div class="haeder__frames">
        <div class="header__frame">
            <img src="./img/frame1.jpg" alt="">
        </div>
        <div class="header__frame">
            <img src="./img/frame2.jpg" alt="">
        </div>
    </div> -->
    <!--haeder__frames-->

    <!-------------header end-------------->

    <section id="about">
        <div class="container about__container">
            <h2 class="about__title">درباره<br/>داریوش سلگی</h2>
            <!--about__title-->
            <a href="usefulcube@gmail.com" class="contact__btn about__btn">
                <i class="uil uil-arrow-up-right"></i>
                <p>CONTACT - SEND ME AN EMAIL</p>
            </a>
            <div class="about__left">
                <div class="about__image">
                    <div class="about__image-bg"></div>
                    <!--about__image-bg-->
                    <div class="about__image-lg">
                        <img src="./img/transparent2-3.png" alt="">
                    </div>
                    <!--about__image-lg-->
                    <div class="about__image-sm">
                        <img src="./img/transparent2-3.png" alt="">
                    </div>
                    <!--about__image-sm-->
                </div>
                <!--about__image-->
            </div>
            <!--about left-->
            <div class="about__right">
                <div class="empty about__empty"></div>
             
                <p>
                    در دوره ای قرار داریم که تکنولوژی سهم و تاثیر بسزایی در زندگی هر فرد دارد و من بیشتر از همیشه با انگیزه و پرتلاش با مهارت هایی که طی سال های تحصیلی وکاری در زمینه هایی همچون طراحی و نظارت معماری،
                    بازدید از پروژه های اجرایی،سابقه همکاری با شهرداری ها و شرکت های خصوصی گوناگون به دست آورده ام امیدوارم بتوانم سهم کوچک مفیدی در جهت هرچه بهتر آموزش و ارائه آن 
                    ایفا نمایم واتفاق های مثبت خوبی برای خود وهمراهانم رقم بزنم.
                </p>
            </div>
            <!--about right-->
        </div>
        <!--container about__container-->
    </section>
    <!--end of about-->

    <section id="gallery">
        <div class="container gallery__container swiper mySwiper">
            <div class="gallery__head">
                <h2 class="gallery__title">اهداف آموزشی</h2>
                <div class="empty gallery__empty"></div>
                <!--empty gallery__empty-->
            </div>
            <!--gallery__head-->
            <p>
                قصد داریم که دراین نرم افزار به ابزارهای پرکاربرد و مفید آن برای انجام
                هرچه بهتر پروژها بپردازیم به گونه ای که بعد از اتمام دوره آموزشی توانای ی
                کار و استفاده راحت از ابزارهای نرم افزا ر اتوکد را در پروژهای شخصی
                خود در سطح خوبی به دست آورید.
            </p>
            <div class="swiper-wrapper">
                <article class="swiper-slide">
                    <img src="./img/121212.jpg" alt="">
                </article>
                <article class="swiper-slide">
                    <img src="./img/131313.jpg" alt="">
                </article>
                <article class="swiper-slide">
                    <img src="./img/141414.jpg" alt="">
                </article>
                <article class="swiper-slide">
                    <img src="./img/151515.jpg" alt="">
                </article>
                <!-- <article class="swiper-slide">
                    <img src="./img/161616.jpg" alt="">
                </article>
                <article class="swiper-slide">
                    <img src="./img/171717.jpg" alt="">
                </article> -->
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <!--container gallery__container-->
    </section>
    <!--gallery-->

    <section id="exhibition">
        <div class="container exhibition__container">
            <h2 class="exhibition__title ">درباره ما</h2>
            <!-- <div class="empty exhibition__empty"></div> -->
            <!--empty about__empty-->
            <div class="exhibition__haed">
                <p>
                    برای ارتباط هرچه بهتر در جهت یادگیری وتعامل درفضای مجازی بایک دیگر برآن شدیم تا تجربیات مفید خود را در یک وب سایت تحت عنوان Usefulcube یا همان( مکعب مفید ) به شما عزیزان ارائه دهیم قطعا همراهی شما در این مسیر باعث انگیزه ودل گرمی ما درجهت تولید محتوایی هرچه بهتر ومفید تر یاری خواهد کرد.
                </p>
                <a href="usefulcube@gmail.com" class="contact__btn exhibition__btn">
                    <i class="uil uil-arrow-up-right"></i>
                    <p>CONTACT - SEND ME AN EMAIL</p>
                </a>
            </div>
            <!--exhibition__head-->
            <!-- <div class="exhibition__gallery">
                <article><img src="./img/HD-wallpaper-nature-beautiful.jpg" alt=""></article>
                <article><img src="./img/nature-names.jpg" alt=""></article>
                <article><img src="./img/man-walking-dog.jpg" alt=""></article>
                <article><img src="./img/nature-1024x682.jpeg" alt=""></article>
                <article><img src="./img/rfrf.jpg" alt=""></article>
                <article><img src="./img/images (14).jpg" alt=""></article>
                <article><img src="./img/1653929.jpg" alt=""></article>
            </div> -->
        </div>
        <!--container exhibition__container-->
    </section>
    <!--exhibition-->



    <footer>

        <div class="container footer__container">
            <div class="footer__head">
                <h2 class="footer__title">usefulcube@gmail.com</h2>
                <a href="" class="footer__btn"> <i class="uil uil-arrow-up-right"></i></a>
            </div>
            <!-- <ul class="footer__links">
                <li> <a href="index.html">Home</a></li>
                <li> <a href="#">About</a></li>
                <li> <a href="#">Gallery</a></li>
                <li> <a href="#">Exhibition</a></li>
            </ul> -->
        </div>
    </footer>


</body>

</html>
<script src="./main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            599: {
                slidesPerView: 1,
                spaceBetween: 40
            },
            1023: {
                slidesPerView: 1,
                spaceBetween: 60
            }
        }
    });
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yekan-font@1.0.0/css/yekan-font.min.css">