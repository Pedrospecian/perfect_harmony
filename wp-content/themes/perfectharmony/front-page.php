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
                <img src="" alt="Perfect Harmony" class="logo">
                <div class="goto-bottom">Veja a História</div>
            </section>

            <div class="divisory"></div>

            <article class="plot">
                <section class="plot-1">
                    <p>
                        O universo se mantém de pé graças à harmonia entre os opostos.
                    </p>
                    <p>
                        Ao criar tudo, o Criador estabeleceu quatro Balanças Primordiais, as quais mantêm o equilíbrio do universo:
                    </p>
                    <p>
                        A Balança do Tempo e do Espaço.
                    </p>
                    <p>
                        A Balança do Calor e do Frio.
                    </p>
                    <p>
                        A Balança da Natureza e do Conhecimento.
                    </p>
                    <p>
                        E por fim...
                    </p>
                    <p>
                        A Balança da Vida e da Morte.
                    </p>
                    <p>
                        Ao criar as Quatro Balanças, o Criador se dividiu em oito entidades para cuidar de cada prato de cada balança. Essas oito entidades são chamadas Guardiões.
                    </p>
                    <p>
                        Os Guardiões da balança da vida e da morte, a balança do topo, são Agna e Eigengrau.
                    </p>
                </section>
                <section class="plot-2">
                    <p>
                        O trabalho de cada Guardião é zelar para que seu prato esteja sempre em equilíbrio em relação ao prato oposto. Logo, Agna é a responsável por manter a vida e Eigengrau é o responsável por assegurar que haverá um fim a cada vida feita.
                    </p>
                    <p>
                        Ambos os Guardiões sempre foram extremamente dedicados para com sua tarefa. No entanto...
                    </p>
                </section>
                <section class="plot-3">
                    <p>
                        Há 400 anos, uma bruxa poderosa tentou
                        enfeitiçar o Guardião da Morte para que pudesse
                        controlá-lo e se tornar a Guardiã da Morte. Porém, logo após lançar o feitiço contra o Guardião da Morte, os outros seis Guardiões foram convocados e selaram a alma dela.
                    </p>
                    <p>
                        O Guardião da Morte ainda estava enfeitiçado e, graças ao feitiço, se tornou violento. Por isso, os Guardiões tiveram que selar ele e a Guardiã da Vida para garantir que Eigengrau fosse temporariamente pacificado e ao mesmo tempo o equilíbrio entre a vida e a morte fosse mantido.
                    </p>
                </section>
                <section class="plot-4">
                    <p>
                        Este é Kyrag.
                        ele perdeu a mulher e seu filho em um acidente ocorrido.
                    </p>
                    <p>
                        Ver sua esposa e filho sendo mortos fez com que ele perdesse a sanidade. Desde esse momento, a única coisa em que ele pensava era em sua família que perdeu.
                    </p>
                    <p>
                        Ao ouvir rumores de que o Guardião da Morte teria a
                        capacidade de trazer de volta à vida aqueles que partiram, ele ficou louco e foi à procura do lugar onde o Guardião da Morte havia sido selado.
                    </p>
                    <p>
                        Kyrag estava disposto a fazer qualquer sacrifício por sua mulher e seu filho.
                    </p>
                </section>
                <section class="plot-5">
                    <p>
                        Porém, o preço pago para quebrar o selo do Guardião da Morte é alto, e pessoas de todo o mundo
                        serão prejudicadas para que o contrafeitiço seja
                        feito.
                    </p>
                    <p>
                        Além disso, romper o selo do Guardião, que está enfeitiçado e pronto
                        para destruir tudo, significará o fim dos tempos.
                    </p>
                </section>
                <section class="plot-6">
                    <p>
                        Para impedir que o selo seja quebrado e o equilíbrio entre a vida e a morte seja mantido, Agna te
                        pede ajuda.
                    </p>
                    <p>
                        Agora cabe a você impedir Kyrag e Eigengrau de destruir tudo.
                    </p>
                </section>
            </article>

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
                            <?php //if($counter==4){ ?> <!--<div id="particles-js"></div>--> <?php //} ?>
                            <div class="content-text">
                                <h2><?php the_sub_field('titulo'); ?></h2>
                                <p>
                                    <?php the_sub_field('corpo_de_texto'); ?>
                                </p>
                            </div>
                            <?php if($counter==2){ ?>
                                <div class="content-figures content-figures-characters">
                                    <div class="content-figures-characters-wrapper">
                                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/personagem.png" alt="" class="character character-6">
                                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/personagem.png" alt="" class="character character-5">
                                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/personagem.png" alt="" class="character character-4">
                                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/personagem.png" alt="" class="character character-3">
                                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/personagem.png" alt="" class="character character-2">
                                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/personagem.png" alt="" class="character character-1">
                                    </div>
                                </div>
                            <?php }else{ ?>
                                <div class="content-figures">
                                    <img class="content-figure-single" src="<?php echo get_sub_field('figura'); ?>" alt="ARA">
                                </div>
                            <?php } ?>
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
                                                if($i+1==2) $current="current selecionado";
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
