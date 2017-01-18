<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<!--<div class="count-particles"> <span class="js-count-particles">--</span> particles </div>-->

<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main main-home" role="main">
            <section class="section section-home section-home-1">
                <div class="bg"></div>
                <div id="particles-js-1"></div>
                <div class="content-text">
                    <?php
                        $post = get_post(get_the_ID());
                        $content = apply_filters('the_content', $post->post_content);
                        echo $content;
                    ?>
                </div>
            </section>

            <div class="divisory"></div>

            <?php
                if( have_rows('topico') ){
                    $counter=1;
                    ?>
                    <?php while ( have_rows('topico') ){
                        $counter++;
                        the_row();
                    ?>
                        <section class="section section-home section-home-<?php echo $counter; ?>">
                            <div class="bg" style="background-image: url(<?php echo get_sub_field('bg'); ?>);"></div>
                            <img class="fg" src="<?php echo get_sub_field('bg_frente'); ?>" alt="ARA">
                            <?php if($counter==4){ ?> <div id="particles-js"></div> <?php } ?>
                            <div class="content-text">
                                <h2><?php the_sub_field('titulo'); ?></h2>
                                <p>
                                    <?php the_sub_field('corpo_de_texto'); ?>
                                </p>
                            </div>
                            <div class="content-figures">
                                <img class="content-figure-single" src="<?php echo get_sub_field('figura'); ?>" alt="ARA">
                            </div>
                        </section>
                        <div class="divisory"></div>
                    <?php } ?>
            <?php }
            ?>

            <section class="section section-home section-home-6">
                <div class="bg"></div>
                <div class="content-foreground">
                    <div class="container">
                        <div class="content-main">
                            <h2>Desenvolvimento</h2>
                            <p>
                                O jogo ainda está nos estágios iniciais de desenvolvimento. Por isso, estamos aceitando pessoal para trabalhar conosco. Acompanhe a seguir cada fase do processo de desenvolvimento e veja a fase atual.
                            </p>
                        </div>
                    </div>
                    <?php
                        if( have_rows('fase') ){
                            $counter=0;
                            $foo=array();?>
                            <div class="slider-development">
                            <?php while ( have_rows('fase') ){
                                $counter++;
                                the_row();
                                $foo[$counter]=get_sub_field('titulo');
                                 ?>
                                <div class="slide-development-single" slave="<?php echo $counter; ?>" masterslave-group="dev">
                                    <div class="content-text">
                                        <h3>Fase <?php echo $counter; ?> - <?php the_sub_field('titulo'); ?></h3>
                                        <p>
                                            <?php the_sub_field('corpo_de_texto'); ?>
                                        </p>
                                    </div>
                                    <div class="content-figures">
                                        <img class="sliderdev-figure" src="<?php echo get_sub_field('figura'); ?>" alt="ARA">
                                    </div>
                                </div>
                            <?php } ?>
                            </div>

                            <div class="container">
                                <div class="slider-dev-master">
                                    <div class="slider-dev-master-content">
                                        <?php
                                            $tam=100/count($foo);
                                            ?>

                                                <input name="gambiarra" type="hidden" value="<?php echo $tam; ?>">
                                            <?php
                                            for($i=0;$i<count($foo);$i++) {
                                                $current="";
                                                if($i+1==2) $current="current";
                                            ?>
                                            <div class="slide-development-single <?php echo $current; ?>" master="<?php echo $i+1; ?>" masterslave-group="dev"
                                                <?php if($i<count($foo)-1){ ?> style="width:<?php echo $tam; ?>%;" <?php } ?> >
                                                <div class="number-wrapper">
                                                    <span class="number">
                                                        <span class="no"><?php echo $i+1; ?></span>
                                                        <span class="text"><?php echo $foo[$i+1]; ?></span>
                                                    </span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <span class="after"></span>
                                </div>
                            </div>

                    <?php } ?>
                </div>
            </section>

            <div class="divisory"></div>
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
