var supports3DTransforms =  document.body.style['webkitPerspective'] !== undefined || 
                            document.body.style['MozPerspective'] !== undefined;

function linkify( selector ) {
    if( supports3DTransforms ) {
        
        var nodes = document.querySelectorAll( selector );

        for( var i = 0, len = nodes.length; i < len; i++ ) {
            var node = nodes[i];

            if( !node.className || !node.className.match( /roll/g ) ) {
                node.className += ' roll';
                node.innerHTML = '<span data-title="'+ node.text +'">' + node.innerHTML + '</span>';
            }
        };
    }
}

linkify( '#botonera a' );


$(document).ready(function() {

    $('#form-contacto input[type=submit]').mouseenter(function() {

    });


    var alturaHeader = $('header').innerHeight();

    var alturaFooter = $('#botonera').innerHeight();

    var alturaVentana = $(window).height();

    $(window).scroll(function() {
        // get the height of #wrap

        if ($('#pro-web').length > 0) {
            var h = $('#pro-web').position().top;
            var y = $(window).scrollTop();
            if (y > (h * .25) && y < (h * .75)) {
                // if we are show keyboardTips
                console.log('mostrar')
            } else {
                console.log('no mostrar')
            }
        }


    });


    $('.mostrarContacto').click(function() {
        $('#contacto').toggleClass('mostrar');
    });



    var slider = $('.flexslider');

    if (slider.length > 0) {
        slider.flexslider({
            animation: "slide",
            animationLoop: true,
            itemWidth: 1,
            minItems: 1,
            maxItems: 1,
            move: 1
            
        });
    }


    $('#bg').height(alturaVentana - (alturaHeader + alturaFooter) - 40);

    $(window).on('resize', function() {
        console.log('res')
        $('#bg').height(alturaVentana - (alturaHeader + alturaFooter));
    })

    $('#form-contacto').submit(function(event) {
        event.preventDefault();

        var formOK = true;

        var borderOld = $(this).css('border');
        $('#form-contacto input[type=text] , #form-contacto textarea').each(function() {
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

        $.post(url, $('#form-contacto').serialize(), function(json) {
            if (json.enviado) {

                $('#form-contacto input , #form-contacto textarea ').hide(100);
                $('#form-contacto h3').html('Gracias por Enviar su Consulta !').css('margin', 0);
            } else {
                $('#form-contacto h3').html('Error al enviar su consulta. Intente nuevamente.');
            }
        });


    });

    $(document).ajaxStart(function() {
        $('#contacto-progress').show();
    });
    $(document).ajaxStop(function() {
        $('#contacto-progress').hide();
    });

    $('.proyecto-over').height($('.proyecto').height() - 40);
    $('.proyecto-over-contenido').height($('.proyecto').height() - 40);



    $('.proyecto').mouseenter(function() {
        $(this).find('.proyecto-over').css('opacity', 1)
    });
    $('.proyecto-over').mouseleave(function() {
        $(this).css('opacity', 0);
    });


    $(document).on('scroll', function() {
        var $window = $(window);


        //557 & 683


        if ($window.scrollTop() > 557) {
            $('#botonera-fixed').fadeIn();
        } else {
            $('#botonera-fixed').fadeOut();
        }


    });


});

