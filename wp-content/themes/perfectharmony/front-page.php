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

            <section class="section section-home section-home-2">
                <div class="content-text">
                    <h2>Status do Jogo</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="content-figures">
                    ARA
                </div>
            </section>

            <div class="divisory"></div>

            <section class="section section-home section-home-3">
                <div class="bg"></div>
                <div class="content-text">
                    <h2>Personagens</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="content-figures">
                    ARA
                </div>
            </section>

            <div class="divisory"></div>

            <section class="section section-home section-home-4">
                <div class="bg"></div>
                <div id="particles-js"></div>
                <div class="content-text">
                    <h2>Enredo</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="content-figures">
                    ARA
                </div>
            </section>

            <div class="divisory"></div>

            <section class="section section-home section-home-5">
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
                    <div class="slider-development">
                        <div class="slide-development-single" slave="1" masterslave-group="dev">
                            <div class="content-text">
                                <h3>Fase 1 - Criação e Design</h3>
                                <p>
                                    Essa fase envolveu toda a concepção artística dos elementos do jogo: criação de personagens, habilidades, cenários e enredo do jogo foram feitos nessa fase.
                                </p>
                                <p>
                                    Para os personagens, foi aqui que foram definidas as personalidades, aparência (roupas, cabelo etc.) e características especiais.
                                </p>
                            </div>
                            <div class="content-figures">
                                ARA
                            </div>
                        </div>
                        <div class="slide-development-single" slave="2" masterslave-group="dev">
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
                                    Lorem ipsum dolor sit amet.
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
                                    Lorem ipsum dolor sit amet.
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
                                    Lorem ipsum dolor sit amet.
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
                                    Lorem ipsum dolor sit amet.
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
                                    Lorem ipsum dolor sit amet.
                                </p>
                            </div>
                            <div class="content-figures">
                                ARA
                            </div>
                        </div>
                    </div>
                    <div class="container">
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
                    </div>
                </div>
            </section>

            <div class="divisory"></div>

            <section class="section section-home section-home-6">
                <div class="bg"></div>
                <div class="content-text">
                    <h2>Screenshots</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="content-figures">
                    ARA
                </div>
            </section>

            <div class="divisory"></div>
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
