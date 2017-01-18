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


                        <!--<div class="slide-development-single" slave="2" masterslave-group="dev">
                            <div class="content-text">
                                <h3>Fase 2 - Database</h3>
                                <p>
                                    Armazenamento de todos os dados sobre status (tanto de personagens jogáveis quanto de monstros), ataques, Skills, itens, equipamentos e condições em um banco de dados.
                                </p>
                                <p>
                                    Com exceção dos dados de status, todos os dados supracitados já foram definidos, mas estão em planilhas .xlsx e precisam ser armazenados em um banco de dados. A tecnologia usada ainda não foi definida, mas o candidato mais provável é o MySQL.
                                </p>
                                <p>
                                    Essa é a fase atual do desenvolvimento do jogo.
                                </p>
                            </div>
                            <div class="content-figures">
                                ARA
                            </div>
                        </div>
                        <div class="slide-development-single" slave="3" masterslave-group="dev">
                            <div class="content-text">
                                <h3>Fase 3 - Sprites e Trilha Sonora</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                            <div class="content-figures">
                                ARA
                            </div>
                        </div>
                        <div class="slide-development-single" slave="4" masterslave-group="dev">
                            <div class="content-text">
                                <h3>Fase 4 - Level Design</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                            <div class="content-figures">
                                ARA
                            </div>
                        </div>
                        <div class="slide-development-single" slave="5" masterslave-group="dev">
                            <div class="content-text">
                                <h3>Fase 5 - Códigos</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                            <div class="content-figures">
                                ARA
                            </div>
                        </div>
                        <div class="slide-development-single" slave="6" masterslave-group="dev">
                            <div class="content-text">
                                <h3>Fase 6 - Testes</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                            <div class="content-figures">
                                ARA
                            </div>
                        </div>
                        <div class="slide-development-single" slave="7" masterslave-group="dev">
                            <div class="content-text">
                                <h3>Fase 7 - Lançamento</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                            <div class="content-figures">
                                ARA
                            </div>
                        </div>-->

                    <!--<div class="container">
                        <div class="slider-dev-master">
                            <div class="slider-dev-master-content">
                                <div class="slide-development-single" master="1" masterslave-group="dev"><div class="number-wrapper"><span class="number"><span class="no">1</span><span class="text">Criação e Design</span></span></div></div>
                                <div class="slide-development-single current" master="2" masterslave-group="dev"><div class="number-wrapper"><span class="number"><span class="no">2</span><span class="text">Database</span></span></div></div>
                                <div class="slide-development-single" master="3" masterslave-group="dev"><div class="number-wrapper"><span class="number"><span class="no">3</span><span class="text">Sprites e Trilha Sonora</span></span></div></div>
                                <div class="slide-development-single" master="4" masterslave-group="dev"><div class="number-wrapper"><span class="number"><span class="no">4</span><span class="text">Level Design</span></span></div></div>
                                <div class="slide-development-single" master="5" masterslave-group="dev"><div class="number-wrapper"><span class="number"><span class="no">5</span><span class="text">Códigos</span></span></div></div>
                                <div class="slide-development-single" master="6" masterslave-group="dev"><div class="number-wrapper"><span class="number"><span class="no">6</span><span class="text">Testes</span></span></div></div>
                                <div class="slide-development-single" master="7" masterslave-group="dev"><div class="number-wrapper"><span class="number"><span class="no">7</span><span class="text">Lançamento</span></span></div></div>
                            </div>
                            <span class="after"></span>
                        </div>
                    </div>-->
                </div>
            </section>

            <div class="divisory"></div>
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
