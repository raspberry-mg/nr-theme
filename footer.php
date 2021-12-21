<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nr-theme
 */

?>
<div class="container-fluid-footer">
    <div class="row">
        <div class="col-lg-3 col-md-auto col-sm-auto mt-5 mb-1">
            <img src="https://nr.kh.ua/wp-content/uploads/2021/04/logowhite.png" class="img-fluid" width="250" alt="Placeholder image">
            <i class="sprite sprite-phone-call"></i>
            <p class="info mt-4"><a href="tel:095-936-6300">text</a>
                <br> <a href="tel:096-625-1010">text</a>
                <br> <a href="tel:093-938-5050">text</a>
            </p>
            <i class="sprite sprite-email"></i>
            <p class="info"><a href="mailto:noutrem@gmail.com"> text</a></p>
            <i class="sprite sprite-skype"></i>
            <p class="info"><a href="skype: noutrem?chat">text</a></p>
        </div>
        <div class="col-lg-4 col-md-auto col-sm-auto mt-5 mb-2">
            <p class="info">Как к нам добраться:<br><br>text<br><br>Наш график работы:<br><br><?php echo $mycontacts ['timework']; ?></p>
        </div>
        <div class="col-lg-4 col-md-auto col-sm-auto mt-5 "><iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10254.921447837383!2d36.2276691!3d50.0164089!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcd3ab2a7b70d8e7!2z0J3QvtGD0YLQoNC10Lw!5e0!3m2!1sru!2sua!4v1615317857708!5m2!1sru!2sua" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
    </div>
</div>
<div class="container-fluid-copywrite">
    <div class="row">
        <div class="col-md-auto col-sm-auto">
            <p class="copywriteinfo"><a class="copywriteinfo" href="">Политика конфиденциальности</a><a class="copywriteinfo" href="">Условия использования сайта</a></p>
            <p class="copywriteinfo">&copy; 2021 Noutrem — сервис ремонта электроники.</p>
        </div>
        <div class="col-md-auto col-sm-auto offset-md-4">
            <p class="myprofile">Разработка сайта и SEO - <a class="myprofile" rel="nofollow" href="https://freelancehunt.com/freelancer/dolche_vita.html?r=1yO4">Маргарита Морозова</a></p>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>

