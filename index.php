

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nr-theme
 */

get_header();

?>
<!-- слайд-шоу -->
<div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block mx-auto" src="https://nr.kh.ua/wp-content/uploads/2021/04/diagnostika_komputera.jpg" alt="First slide">
            <div class="carousel-caption">
                <h2>text</h2>
                <p>text</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block mx-auto" src="https://nr.kh.ua/wp-content/uploads/2021/04/remont_komputera.jpg" alt="Second slide ">
            <div class="carousel-caption">
                <h2>text</h2>
                <p>text</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block mx-auto" src="https://nr.kh.ua/wp-content/uploads/2021/04/pochinka_telefona.jpg" alt="Third slide">
            <div class="carousel-caption">
            <span class="carousel-title">
               <h2>text</h2>
            </span>
                <p>text</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
</div>
<!-- услуги -->
<h2 class="title">Наши услуги</h2>
<hr class="hr-title">
<div class="row">
    <div class="card card-size col-sm d-flex mb-4">
        <img class="card-img-top" src="https://nr.kh.ua/wp-content/uploads/2021/04/master_remontiruet_komputer.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">text</h5>
            <p class="card-text">text</p>
            <a href="#" class="btn btn-primary">Подробнее</a>
        </div>
    </div>
    <div class="card card-size col-sm d-flex mb-4">
        <img class="card-img-top" src="https://nr.kh.ua/wp-content/uploads/2021/04/remont_noutbuka.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">text</h5>
            <p class="card-text">text</p>
            <a href="#" class="btn btn-primary">Подробнее</a>
        </div>
    </div>
    <div class="card card-size col-sm d-flex mb-4">
        <img class="card-img-top" src="https://nr.kh.ua/wp-content/uploads/2021/04/razobranniy_planshet.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">text</h5>
            <p class="card-text">text</p>
            <a href="#" class="btn btn-primary">Подробнее</a>
        </div>
    </div>
    <div class="card card-size col-sm d-flex mb-4">
        <img class="card-img-top" src="https://nr.kh.ua/wp-content/uploads/2021/04/remont_telefona.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">text</h5>
            <p class="card-text">text</p>
            <a href="#" class="btn btn-primary">Подробнее</a>
        </div>
    </div>
</div>
<!-- о нас -->
<div class="about">
    <div class="row">
        <div class="col-md-auto p-0">
            <img class="img-fluid mb-4" src="https://nr.kh.ua/wp-content/uploads/2021/04/banner_with_logo_noutrem.jpg" alt="Placeholder image">
        </div>
        <div class="col">
            <div class="jumbotron">
                <h2>text</h2>
                <hr class="hr-title2">
                <p>text</p>
                <hr class="my-4">
                <p>text</p>
                <p class="lead"> <a class="btn btn-primary mb-4" href="#" role="button">Подробнее</a> </p>
            </div>
        </div>
    </div>
</div>
<!-- Почему мы -->
<div class="whyus">
    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <h2>text</h2>
                <hr class="hr-title3">
                <p>text</p>
            </div>
        </div>
        <div class="col-md-auto p-0">
            <img class="img-fluid mb-4" src="https://nr.kh.ua/wp-content/uploads/2021/04/computer.jpg" alt="Placeholder image">
        </div>
    </div>
</div>
<!-- Часто задаваемые вопросы-->
<div class="jumbotron">
    <h2 class="title">Вопросы и ответы</h2>
    <hr class="hr-title">
    <div id="accordion1" role="tablist">
        <div class="card">
            <div class="card-header bg-dark" role="tab" id="headingOne1">
                <h4> <img src="https://nr.kh.ua/wp-content/uploads/2021/04/plus.png" alt="Placeholder image">&nbsp;<a class="faqtitle" data-toggle="collapse" href="#collapseOne1" role="button" aria-expanded="true" aria-controls="collapseOne1"> Работаете ли вы выходные и праздники?</a> </h4>
            </div>
            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordion1">
                <div class="card-body">text</div>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-dark" role="tab" id="headingTwo1">
                <h5 class="mb-0"><img src="https://nr.kh.ua/wp-content/uploads/2021/04/plus.png" alt="Placeholder image">&nbsp;<a class="faqtitle" data-toggle="collapse" href="#collapseTwo1" role="button" aria-expanded="false" aria-controls="collapseTwo1">Работаете ли вы выходные и праздники?</a> </h5>
            </div>
            <div id="collapseTwo1" class="collapse" role="tabpanel" aria-labelledby="headingTwo1" data-parent="#accordion1">
                <div class="card-body">text</div>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-dark" role="tab" id="headingThree1">
                <h5 class="mb-0"><img src="https://nr.kh.ua/wp-content/uploads/2021/04/plus.png" alt="Placeholder image">&nbsp;<a class="faqtitle" data-toggle="collapse" href="#collapseThree1" role="button" aria-expanded="false" aria-controls="collapseThree1">Работаете ли вы выходные и праздники?</a> </h5>
            </div>
            <div id="collapseThree1" class="collapse" role="tabpanel" aria-labelledby="headingThree1" data-parent="#accordion1">
                <div class="card-body">text</div>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-dark" role="tab" id="headingFour1">
                <h5 class="mb-0"><img src="https://nr.kh.ua/wp-content/uploads/2021/04/plus.png" alt="Placeholder image">&nbsp;<a class="faqtitle" data-toggle="collapse" href="#collapseFour1" role="button" aria-expanded="false" aria-controls="collapseFour1">Работаете ли вы выходные и праздники? </a> </h5>
            </div>
            <div id="collapseFour1" class="collapse" role="tabpanel" aria-labelledby="headingFour1" data-parent="#accordion1">
                <div class="card-body">text</div>
            </div>
        </div>
    </div>
    <hr class="my-4">
    <p class="lead"> <a class="btn btn-more btn-lg mb-4" href="#" role="button">Подробнее</a> </p>
</div>
<!-- banner -->
<div class="d-flex justify-content-center align-items-center mt-5">
    <a class="btn btn-expert" href="https://nr.kh.ua/contacts" role="button">Спросить у эксперта</a>
    <img src="https://nr.kh.ua/wp-content/uploads/2021/04/banner.jpg" class="img-fluid mt-5" alt="Placeholder image">
</div>
<div id="upbutton"></div>
<?php get_footer();

