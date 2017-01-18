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
    var currentArrow=(current-1)*14.95;

    $('.slider-dev-master .after').css({'left': currentArrow+"%", 'opacity': '1'});
    animation_FadeIn('.slider-development .slide-development-single[slave="'+current+'"]', 0.4);

    $('[masterslave-group][master]').on('click', function(){
        //alert($(this).attr('masterslave-group')+' - '+$(this).attr('master'));
        currentArrow=($(this).attr('master')-1)*14.95;
        $('.slider-dev-master .after').css('left', currentArrow+"%");
        animation_FadeOut('.slider-development .slide-development-single[slave]:not([slave="'+$(this).attr('master')+'"])', 0.4);
        animation_FadeIn('.slider-development .slide-development-single[slave="'+$(this).attr('master')+'"]', 0.4);
    });

    $('.slider-dev-master .slide-development-single.current').prevAll().addClass('previous');

    /*var tween = TweenMax.staggerFromTo(".container", 2, {
        backgroundPosition: "0 0"
    }, {
        backgroundPosition: "0 150px"
    });
    var scene = new ScrollMagic.Scene({
        duration: 100
    })
    scene.setTween(tween);
    scene.addTo(controller);
    scene.addIndicators();*/
    /*var controller = new ScrollMagic.Controller();

    var scene = new ScrollMagic.Scene({
        triggerElement: "#trigger1"
    })
    .setTween("#animate1", 0.5, {backgroundColor: "green", scale: 2.5}) // trigger a TweenMax.to tween
    .addIndicators({name: "1 (duration: 0)"}) // add indicators (requires plugin)
    .addTo(controller);*/

    if($('.main-home').length ){
        var controller1 = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "200%"}});
        var controller2 = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "1270px"}});
        var controller3 = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "200%"}});

        // build scenes
        new ScrollMagic.Scene({triggerElement: ".main-home .section-home-1"})
                        .setTween(".main-home .section-home-1 .bg", {y: "70%", ease: Linear.easeNone})
                        .addIndicators()
                        .addTo(controller1);

        // build scenes
        new ScrollMagic.Scene({triggerElement: ".main-home .section-home-1"})
                        .setTween(".main-home .section-home-1 #particles-js-1", {y: "-20%", ease: Linear.easeNone})
                        .addIndicators()
                        .addTo(controller1);

        // build scenes
        new ScrollMagic.Scene({triggerElement: ".main-home .section-home-3"})
                        .setTween(".main-home .section-home-3 .bg", {y: "50%", ease: Linear.easeNone})
                        .addIndicators()
                        .addTo(controller3);

        // build scenes
        new ScrollMagic.Scene({triggerElement: ".main-home .section-home-4"})
                        .setTween(".main-home .section-home-4 .bg", {x: "10%", ease: Linear.easeNone})
                        .addIndicators()
                        .addTo(controller1);

        // build scenes
        new ScrollMagic.Scene({triggerElement: ".main-home .section-home-4"})
                        .setTween(".main-home .section-home-4 #particles-js", {x: "-20%", ease: Linear.easeNone})
                        .addIndicators()
                        .addTo(controller1);

        // build scenes
        new ScrollMagic.Scene({triggerElement: ".main-home .section-home-5"})
                        .setTween(".main-home .section-home-5 .bg", {y: "-30%", ease: Linear.easeNone})
                        .addIndicators()
                        .addTo(controller1);

        // build scenes
        new ScrollMagic.Scene({triggerElement: ".main-home .section-home-6"})
                        .setTween(".main-home .section-home-6 .bg", {y: "60%", ease: Linear.easeNone})
                        .addIndicators()
                        .addTo(controller2);

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
            //stats.begin();
            //stats.end();
            /*if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
                count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
            }*/
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
                            "enable":true,
                            "mode":"repulse"
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
                            "distance":72,
                            "duration":4
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
        /*var count_particles, stats;
        stats = new Stats;
        stats.setMode(0);
        stats.domElement.style.position = 'absolute';
        stats.domElement.style.left = '0px';
        stats.domElement.style.top = '0px';
        document.body.appendChild(stats.domElement);
        count_particles = document.querySelector('.js-count-particles');*/
        /*update = function() {
            stats.begin();
            stats.end();
            if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
                count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
            }
            requestAnimationFrame(update);
        };*/
        requestAnimationFrame(update);;
    }
});