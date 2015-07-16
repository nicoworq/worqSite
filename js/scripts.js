
var imgLoaded = false;

if (document.querySelector('#slide-home') !== null) {
    imagesLoaded(document.querySelector('#slide-home'), function (instance) {

        imgLoaded = true;

        var elements = document.querySelectorAll('header, #botonera-container , #slide-home , #ultimos-proyectos, #pro-web')

        for (var elm in elements) {
            elements[elm].className = '';
        }
        document.querySelector("#page-loader").className = 'hide';

    });
} else {

    imgLoaded = true;
    $('header, #botonera-container , #slide-home , #ultimos-proyectos').removeClass('loaderAnim');
    $("#page-loader").fadeOut({easing: 'easeOutCubic', duration: 500, done: function () {
            $("#page-loader").hide()
        }});
}


$(document).ready(function () {
    var hideLoader = function () {
        if (imgLoaded) {
            $("#page-loader").hide();
            clearInterval(hideIntervalID);
        }
    };

    $('.shake').mouseenter(function () {
        $('header').addClass('flashh')
    });
    $('.shake').mouseleave(function () {
        $('header').removeClass('flashh')
    });

    var hideIntervalID = setInterval(hideLoader, 500);


    $('#form-contacto input[type=submit]').mouseenter(function () {

    });

    $('#contacto').not('#form-contacto').click(function (e) {

        $('#contacto').removeClass('mostrar');

    });

    $('#form-contacto').click(function (e) {
        e.stopPropagation();
    });

    $('#botonera a , #navegacion-fixed a, #logo-botonera a').click(function (e) {
        e.preventDefault();
        var nav = $(this).attr('href');

        if (nav !== '#contacto') {
            $(nav).animatescroll({scrollSpeed: 2000, easing: 'easeOutQuart'});
        }
    });


    $('input[type=text]').focus(function () {
        $(this).parent().addClass('activo');
    });

    $('input[type=text]').blur(function () {
        $(this).parent().removeClass('activo');
    });



    var topMenu = $("#navegacion-fixed"),
            topMenuHeight = topMenu.outerHeight() + 40,
            // All list items
            menuItems = topMenu.find("li a"),
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function () {
                var item = $($(this).attr("href"));
                if (item.length && item.selector !== '#contacto') {
                    return item;
                }
            });



    /*
     var alturaHeader = $('header').innerHeight();
     var alturaFooter = $('#botonera').innerHeight();
     var alturaVentana = $(window).height();*/

    $(window).scroll(function () {
        // get the height of #wrap
        /*
         if ($('#pro-web').length > 0) {
         var h = $('#pro-web').position().top;
         var y = $(window).scrollTop();
         if (y > (h * .25) && y < (h * .75)) {
         // if we are show keyboardTips
         } else {
         
         }
         }*/

        var fromTop = $(this).scrollTop() + topMenuHeight;

        var cur = scrollItems.map(function () {
            if ($(this).offset().top < fromTop)
                return this;
        });

        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";

        menuItems
                .parent().removeClass("activo")
                .end().filter("[href=#" + id + "]").parent().addClass("activo");
    });


    $('.mostrarContacto').click(function (e) {
        e.preventDefault();
        $('#contacto').toggleClass('mostrar');
    });



    var slider = $('.flexslider');

    if (slider.length > 0) {
        slider.flexslider({
            animation: "fade",
            animationLoop: true,
            itemWidth: 1,
            minItems: 1,
            maxItems: 1,
            directionNav: false,
            move: 1,
            controlNav: false,
            slideshowSpeed: 3500

        });
    }


    //$('#bg').height(alturaVentana - (alturaHeader + alturaFooter) - 40);


    var timeOut;

    var animarWorq1 = function () {
        $('.slide1').fadeOut(function () {
            $('.slide2').fadeIn(function () {
                timeOut = setTimeout(animarWorq2, 2500);
            });
        });
    };

    var animarWorq2 = function () {
        $('.slide2').fadeOut(function () {
            $('.slide1').fadeIn(function () {
                timeOut = setTimeout(animarWorq1, 2500);
            });
        });
    }

    //timeOut = setTimeout(animarWorq1, 2500)

    $('#cerrar-form').click(function (e) {
        e.preventDefault();
        $('#contacto-ok').fadeOut(function () {
            $('#form-contacto')[0].reset()
        });
    });
    $(window).on('resize', function () {

        // $('#bg').height(alturaVentana - (alturaHeader + alturaFooter));
    });


    $('#form-contacto input, #form-contacto textarea ').keydown(function () {
        $(this).removeClass('input-error');
        $('.form-invalid').stop().fadeOut();
    });

    $('#form-contacto').submit(function (event) {
        event.preventDefault();

        var formOK = true;


        $('#form-contacto input[type=text] , #form-contacto textarea').not('input[name=sex]').each(function () {
            if ($(this).val() === '') {
                formOK = false;
                $(this).addClass('input-error');
            }
        });

        if (!validateEmail($('#form-contacto input[name=email]').val())) {
            formOK = false;
            $('#form-contacto input[name=email]').addClass('input-error');
        } else {
            $('#form-contacto input[name=email]').removeClass('input-error');
        }

        if (!formOK) {
            $('.form-invalid').stop().fadeIn();
            return false;
        }
        $('.form-invalid').stop().fadeOut();
        var url = $(this).attr('action');

        $('#contacto-progress').stop().fadeIn();
        $.post(url, $('#form-contacto').serialize(), function (json) {
            $('#contacto-progress').stop().fadeOut();
            if (json.enviado) {
                $('#contacto-ok').fadeIn();
                $('#contacto').removeClass('mostrar');
            } else {
                alert('Ocurrio un error');
            }
        });


    });


    $(document).on('scroll', function () {
        var $window = $(window);

        if ($window.scrollTop() > 557) {
            $('#botonera-fixed').stop().fadeIn();
        } else {
            $('#botonera-fixed').stop().fadeOut();
        }


    });


});


function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
