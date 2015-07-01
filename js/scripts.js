
var imgLoaded = false;

if (document.querySelector('#slide-home') !== null) {
    imagesLoaded(document.querySelector('#slide-home'), function (instance) {

        imgLoaded = true;

        var elements = document.querySelectorAll('header, #botonera-container , #slide-home , #ultimos-proyectos')

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

    var hideIntervalID = setInterval(hideLoader, 500);


    $('#form-contacto input[type=submit]').mouseenter(function () {

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


    $('.mostrarContacto').click(function () {
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
            move: 1

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


    $(window).on('resize', function () {

        // $('#bg').height(alturaVentana - (alturaHeader + alturaFooter));
    });

    $('#form-contacto').submit(function (event) {
        event.preventDefault();

        var formOK = true;

        var borderOld = $(this).css('border');
        $('#form-contacto input[type=text] , #form-contacto textarea').each(function () {
            $(this).css('border', borderOld);
            if ($(this).val() === '') {
                formOK = false;
                $(this).css('border', '2px solid #E76F6F');
            }
        });

        if (!formOK) {
            alert("Debe completar todos los campos.");
            return false;
        }

        var url = $(this).attr('action');

        $.post(url, $('#form-contacto').serialize(), function (json) {
            if (json.enviado) {

                $('#form-contacto input , #form-contacto textarea ').hide(100);
                $('#form-contacto h3').html('Gracias por Enviar su Consulta !').css('margin', 0);
            } else {
                $('#form-contacto h3').html('Error al enviar su consulta. Intente nuevamente.');
            }
        });


    });

    $(document).ajaxStart(function () {
        $('#contacto-progress').show();
    });
    $(document).ajaxStop(function () {
        $('#contacto-progress').hide();
    });


    //$('.proyecto-over').height($('.proyecto').height() - 40);
    //$('.proyecto-over-contenido').height($('.proyecto').height() - 40);



    $(document).on('scroll', function () {
        var $window = $(window);


        //557 & 683


        if ($window.scrollTop() > 557) {
            $('#botonera-fixed').fadeIn();
        } else {
            $('#botonera-fixed').fadeOut();
        }


    });


});

