$(document).ready(function(){

    function animation_FadeIn(element, transition) {
        TweenMax.to( $(element), 0, {display:'block'});
        TweenMax.to( $(element), transition, {opacity:'1'});
    }

    function animation_FadeOut(element, transition) {
        TweenMax.to( $(element), transition, {opacity:'0'});
        TweenMax.to( $(element), 0, {css:{display:'none'}, delay: transition});
    }

    $('.header-menu-icon').on('click', function(){
        $(this).toggleClass('header-close-button');
        $('header').toggleClass('slidedown');
    });

    var current=$('.slider-dev-master .slide-development-single.current').attr('master');
    //var currentArrow=(current)*($('input[name="gambiarra"]').val()*0.9925);
    var currentArrow=($('.current').offset().left)-window.innerWidth*($('input[name="gambiarra"]').val()/100);

    $('.slider-dev-master .after').css({'left': currentArrow+'px', 'opacity': '1'});
    animation_FadeIn('.slider-development .slide-development-single[slave="'+current+'"]', 0.4);

    $('[masterslave-group][master]').on('click', function(){
        $('[masterslave-group][master]').removeClass('selecionado');
        $(this).addClass('selecionado');
        //alert($(this).attr('masterslave-group')+' - '+$(this).attr('master'));
        //currentArrow=($(this).attr('master'))*($('input[name="gambiarra"]').val()*0.9925);
        currentArrow=($(this).offset().left)-window.innerWidth*($('input[name="gambiarra"]').val()/100);
        $('.slider-dev-master .after').css('left', currentArrow+'px');
        animation_FadeOut('.slider-development .slide-development-single[slave]:not([slave="'+$(this).attr('master')+'"])', 0.4);
        animation_FadeIn('.slider-development .slide-development-single[slave="'+$(this).attr('master')+'"]', 0.4);
    });

    $(window).resize(function(){
        currentArrow=($('[masterslave-group][master].selecionado').offset().left)-window.innerWidth*($('input[name="gambiarra"]').val()/100);
        $('.slider-dev-master .after').css('left', currentArrow+'px');
    });

    $('.slider-dev-master .slide-development-single.current').prevAll().addClass('previous');

    //if($('.slide-development-single').length) {
        /*function animateImage() {
           $('.slider-development .slide-development-single .content-figures .sliderdev-figure').css({"margin-top":"0px"});
           TweenMax.to('.slider-development .slide-development-single .content-figures .sliderdev-figure',1,{
               marginTop: '2000px',
               onComplete: animateImage
           });
       }*/

       /*var a=TweenMax.fromTo($(".slider-development .slide-development-single .content-figures .sliderdev-figure"), 2, {marginTop: 60}, {marginTop: 0});*/
        TweenMax.fromTo($(".slider-development .slide-development-single .content-figures .sliderdev-figure"), 2, { marginTop: 0}, {ease: Sine.easeInOut, marginTop: 20, repeat: -1}).yoyo(true);
        TweenMax.fromTo($(".slider-development .slide-development-single .content-text"), 3, { marginTop: 5}, {ease: Sine.easeInOut, marginTop: 0, repeat: -1}).yoyo(true);
    //}

    if($('.main-home').length ){
        var controller1 = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "200%"}});
        var controller2 = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "1270px"}});
        var controller3 = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "200%"}});

        var controllerCharacters = new ScrollMagic.Controller();

        new ScrollMagic.Scene({triggerElement: ".main-home .section-home-1"})
                        .setTween(".main-home .section-home-1 .bg", {y: "70%", ease: Linear.easeNone})
                        .addIndicators()
                        .addTo(controller1);

        new ScrollMagic.Scene({triggerElement: ".main-home .section-home-1"})
                        .setTween(".main-home .section-home-1 #particles-js-1", {y: "-20%", ease: Linear.easeNone})
                        .addIndicators()
                        .addTo(controller1);

        new ScrollMagic.Scene({triggerElement: ".main-home .section-home-3"})
                        .setTween(".main-home .section-home-3 .bg", {y: "50%", ease: Linear.easeNone})
                        .addIndicators()
                        .addTo(controller3);

        new ScrollMagic.Scene({triggerElement: ".main-home .section-home-4"})
                        .setTween(".main-home .section-home-4 .bg", {x: "10%", ease: Linear.easeNone})
                        .addIndicators()
                        .addTo(controller1);

        new ScrollMagic.Scene({triggerElement: ".main-home .section-home-4"})
                        .setTween(".main-home .section-home-4 #particles-js", {x: "-20%", ease: Linear.easeNone})
                        .addIndicators()
                        .addTo(controller1);

        new ScrollMagic.Scene({triggerElement: ".main-home .section-home-5"})
                        .setTween(".main-home .section-home-5 .bg", {y: "-30%", ease: Linear.easeNone})
                        .addIndicators()
                        .addTo(controller1);

        new ScrollMagic.Scene({triggerElement: ".main-home .section-home-6"})
                        .setTween(".main-home .section-home-6 .bg", {y: "60%", ease: Linear.easeNone})
                        .addIndicators()
                        .addTo(controller2);

        /*var scene = new ScrollMagic.Scene({triggerElement: ".main-home .section-home-3"})
                        // trigger a velocity opaticy animation
                        .setVelocity(".main-home .section-home-3 .content-figures-characters .content-figures-characters-wrapper .character", {opacity: 1, top: 0}, {duration: 400})
                        .addIndicators() // add indicators (requires plugin)
                        .addTo(controllerCharacters);*/
        var tl = new TimelineMax()
                    .to('.main-home .section-home-3 .content-figures-characters .content-figures-characters-wrapper .character.character-1', 0.2, {opacity:1, marginBottom:0, ease: Power0.easeNone})
                    .to('.main-home .section-home-3 .content-figures-characters .content-figures-characters-wrapper .character.character-2', 0.2, {opacity:1, marginBottom:0, ease: Power0.easeNone})
                    .to('.main-home .section-home-3 .content-figures-characters .content-figures-characters-wrapper .character.character-3', 0.2, {opacity:1, marginBottom:0, ease: Power0.easeNone})
                    .to('.main-home .section-home-3 .content-figures-characters .content-figures-characters-wrapper .character.character-4', 0.2, {opacity:1, marginBottom:0, ease: Power0.easeNone})
                    .to('.main-home .section-home-3 .content-figures-characters .content-figures-characters-wrapper .character.character-5', 0.2, {opacity:1, marginBottom:0, ease: Power0.easeNone})
                    .to('.main-home .section-home-3 .content-figures-characters .content-figures-characters-wrapper .character.character-6', 0.2, {opacity:1, marginBottom:0, ease: Power0.easeNone});

        /*var tl2 = new TimelineMax()
                    .to('.main-home .section-home-3 .content-figures-characters', 2, {right:'4%'});*/

        /*var tl2 = new TimelineMax().add([
                    TweenMax.to('.main-home .section-home-3 .content-figures-characters .content-figures-characters-wrapper .character.character-1', 0, {className:'-=appear', delay: 0}),
                    TweenMax.to('.main-home .section-home-3 .content-figures-characters .content-figures-characters-wrapper .character.character-2', 0, {className:'-=appear', delay: 0.15}),
                    TweenMax.to('.main-home .section-home-3 .content-figures-characters .content-figures-characters-wrapper .character.character-3', 0, {className:'-=appear', delay: 0.3}),
                    TweenMax.to('.main-home .section-home-3 .content-figures-characters .content-figures-characters-wrapper .character.character-4', 0, {className:'-=appear', delay: 0.45}),
                    TweenMax.to('.main-home .section-home-3 .content-figures-characters .content-figures-characters-wrapper .character.character-5', 0, {className:'-=appear', delay: 0.6}),
                    TweenMax.to('.main-home .section-home-3 .content-figures-characters .content-figures-characters-wrapper .character.character-6', 0, {className:'-=appear', delay: 0.75})
                ]);*/
                    //TweenLite.to(element, 0, {class:'+=newclass'});

        var pin = new ScrollMagic.Scene({
                triggerElement: '.main-home .section-home-3 .content-text'
            }).setTween(tl).addIndicators().addTo(controllerCharacters);

        /*var pin = new ScrollMagic.Scene({
                triggerElement: '.main-home .section-home-3 .content-text'
            }).setTween(tl2).addIndicators().addTo(controllerCharacters);*/

        /*var pin2 = new ScrollMagic.Scene({
                triggerElement: '.main-home .section-home-3, .main-home .section-home-4'
            }).setTween(tl2).addIndicators().addTo(controllerCharacters);*/

        /*var scene = new ScrollMagic.Scene({triggerElement: ".main-home .section-home-3 .content-text"})
                    // trigger animation by adding a css class
                    .setClassToggle(".character.character-1", "appear")
                    .setClassToggle(".character.character-2", "appear")
                    .setClassToggle(".character.character-3", "appear")
                    .setClassToggle(".character.character-4", "appear")
                    .setClassToggle(".character.character-5", "appear")
                    .setClassToggle(".character.character-6", "appear")
                    .addIndicators() // add indicators (requires plugin)
                    .addTo(controllerCharacters);*/


    }

    //==========PARTICLES==========//
    if($('#particles-js').length ){
        particlesJS("particles-js", {
            "particles":{
                "number":{
                    "value":90,
                    "density":{
                        "enable":true,
                        "value_area":1736.124811591}
                    },
                    "color":{
                        "value":"#fff"
                    },
                    "shape":{
                        "type":"circle",
                        "stroke":{
                            "width":0,
                            "color":"#000000"
                        },
                        "polygon":{
                            "nb_sides":5
                        },
                        "image":{
                            "src":"img/github.svg",
                            "width":100,
                            "height":100
                        }
                    },
                    "opacity":{
                        "value":0.5,
                        "random":true,
                        "anim":{
                            "enable":false,
                            "speed":1,
                            "opacity_min":0.1,
                            "sync":false
                        }
                    },
                    "size":{
                        "value":3,
                        "random":true,
                        "anim":{
                            "enable":false,
                            "speed":40,
                            "size_min":0.1,
                            "sync":false
                        }
                    },
                    "line_linked":{
                        "enable":false,
                        "distance":500,
                        "color":"#ffffff",
                        "opacity":0.4,
                        "width":2
                    },
                    "move":{
                        "enable":true,
                        "speed":1.9,
                        "direction":"none",
                        "random":true,
                        "straight":false,
                        "out_mode":"bounce",
                        "bounce":false,
                        "attract":{
                            "enable":false,
                            "rotateX":2919.846274039409,
                            "rotateY":1200
                        }
                    }
                },
                "interactivity":{
                    "detect_on":"canvas",
                    "events":{
                        "onhover":{
                            "enable":false,
                            "mode":"bubble"
                        },
                        "onclick":{
                            "enable":false,
                            "mode":"repulse"
                        },"resize":true
                    },
                    "modes":{
                        "grab":{
                            "distance":400,
                            "line_linked":{
                                "opacity":0.5
                            }
                        },
                        "bubble":{
                            "distance":400,
                            "size":4,
                            "duration":0.3,
                            "opacity":1,
                            "speed":3
                        },
                        "repulse":{
                            "distance":200,
                            "duration":0.4
                        },
                        "push":{
                            "particles_nb":4
                        },
                        "remove":{
                            "particles_nb":2
                        }
                    }
                },
                "retina_detect":true
            });
        var update;
        update = function() {
            requestAnimationFrame(update);
        };
        requestAnimationFrame(update);;
    }

    if($('#particles-js-1').length ){
        particlesJS("particles-js-1", {
            "particles":{
                "number":{
                    "value":90,
                    "density":{
                        "enable":true,
                        "value_area":1736.124811591}
                    },
                    "color":{
                        "value":"#fff"
                    },
                    "shape":{
                        "type":"circle",
                        "stroke":{
                            "width":0,
                            "color":"#000000"
                        },
                        "polygon":{
                            "nb_sides":5
                        },
                        "image":{
                            "src":"wp-content/themes/perfectharmony/assets/images/particle.png",
                            "width":100,
                            "height":100
                        }
                    },
                    "opacity":{
                        "value":0.5,
                        "random":true,
                        "anim":{
                            "enable":false,
                            "speed":1,
                            "opacity_min":0.1,
                            "sync":false
                        }
                    },
                    "size":{
                        "value":3,
                        "random":true,
                        "anim":{
                            "enable":false,
                            "speed":40,
                            "size_min":0.1,
                            "sync":false
                        }
                    },
                    "line_linked":{
                        "enable":false,
                        "distance":500,
                        "color":"#ffffff",
                        "opacity":0.4,
                        "width":2
                    },
                    "move":{
                        "enable":true,
                        "speed":1.9,
                        "direction":"none",
                        "random":true,
                        "straight":false,
                        "out_mode":"bounce",
                        "bounce":false,
                        "attract":{
                            "enable":false,
                            "rotateX":2919.846274039409,
                            "rotateY":1200
                        }
                    }
                },
                "interactivity":{
                    "detect_on":"canvas",
                    "events":{
                        "onhover":{
                            "enable":true,
                            "mode":"bubble"
                        },
                        "onclick":{
                            "enable":false,
                            "mode":"repulse"
                        },"resize":true
                    },
                    "modes":{
                        "grab":{
                            "distance":400,
                            "line_linked":{
                                "opacity":0.5
                            }
                        },
                        "bubble":{
                            "distance":200,
                            "size":0,
                            "duration":3.0,
                            "opacity":0.4,
                            "speed":1
                        },
                        "repulse":{
                            "distance":72,
                            "duration":8.0
                        },
                        "push":{
                            "particles_nb":4
                        },
                        "remove":{
                            "particles_nb":2
                        }
                    }
                },
                "retina_detect":true
            });
        requestAnimationFrame(update);;
    }
});