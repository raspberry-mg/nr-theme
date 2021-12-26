<?php
get_header();

while (have_posts()):
    the_post(); ?>
    <div class="d-flex justify-content-center align-items-center mt-5 mb-4">
        <img class="img-fluid d-block mx-auto" src="https://nr.kh.ua/wp-content/uploads/2021/04/planshet.jpg" width="100%" alt="Абстракция в технологичном стиле" title="Абстракция, технологии">
    </div>
    <div class="jumbotron">
        <div class="card-deck">
                    <?php the_content(); ?>
            <div class="card col-md-6 col-lg-5">
                <div class="card-body">
                    <?php echo do_shortcode('[contact-form-7 id="76" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
    </div>

<?php
endwhile;

get_footer();
