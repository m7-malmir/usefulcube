
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
<script src="<?= ROOT_URL; ?>/js/main.js"></script>
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
