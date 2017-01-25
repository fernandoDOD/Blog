jQuery(document).ready(function($) {
        
    // Clase active

    $('img.slide:first').addClass('active');

    //Metodos tutorial
/*-----------------------------------------------*/

    
   // Objeto del Banner
    var banner = {
        padre: $('#banner'),
        numeroSlides: $('#banner').children('.slide').length,
        posicion: 1
    };

    // Objeto del Slider de Info
    var info = {
        padre: $('#info'),
        numeroSlides: $('#info').children('.slide').length,
        posicion: 1
    }

    // Establecemos que el primer slide aparecera desplazado
    banner.padre.children('.slide').first().css({
        'left': 0
    });

    // Establecemos que el primer slide aparecera desplazado
    info.padre.children('.slide').first().css({
        'left': 0
    }); 
    
    // Funcion para calcular el alto que tendran los contenedores padre
    var altoBanner = function(){
        var alto = banner.padre.children('.slide').outerHeight();
        banner.padre.css({
            'height': alto + 'px'
        });
    }

    var altoInfo = function(){
        var alto = info.padre.children('.active').outerHeight();
        info.padre.animate({
            'height': alto + 'px'
        });
    }

    // Establecemos que el #contenedor tenga el 100% del alto de la pagina. 
    // Para despues centrarlo verticalente con flexbox.
    var altoContenedor = function(){
        var altoVentana = $(window).height();

        if (altoVentana <= $('.contenedor').outerHeight() + 200) {
            $('#contenedor').css({'height': ''});
        } else {
            $('#contenedor').css({'height': altoVentana + 'px'});
        }
    }

    // Ejecutamos las funciones para calcular los altos.
    altoBanner();
    altoContenedor();
    altoInfo();

    // Si cambiamos el tamaño de la pantalla se
    // ejecuta esta funcion para saber el nuevo
    // tamaño del elemento padre
    $(window).resize(function(){
        altoBanner();
        altoContenedor();
    });

    // Agregamos un puntito por cada slide que tengamos
    $('#info').children('.slide').each(function(){
        $('#botones').append('<span>');
    });

    // Declaramos que el primer elemento inicie con su clase active
    $('#botones').children('span').first().addClass('active');

// ---------------------------------------
// ----- Banner
// ---------------------------------------

    // Boton Siguiente

    $('#banner-next').on('click', function(e){
        e.preventDefault();

        if (banner.posicion < banner.numeroSlides){
            // Nos aseguramos de que las demas slides empiecen desde la derecha.
            banner.padre.children().not('.active').css({
                'left': '100%'
            });

            // Quitamos la clase active y se la ponemos al siguiente elemento.Y lo animamos
            $('#banner .active').removeClass('active').next().addClass('active').animate({
                'left': 0
            });

            // Animamos el slide anterior para que se deslaza hacia la izquierda
            $('#banner .active').prev().animate({
                'left': '-100%'
            });

            banner.posicion = banner.posicion + 1;
        } else {
            // Hacemos que el slide activo (es decir el ultimo), se anime hacia la derecha
            $('#banner .active').animate({
                'left': '-100%'
            });

            // Seleccionamos todos los slides que no tengan la clase .active
            // y los posicionamos a la derecha
            banner.padre.children().not('.active').css({
                'left': '100%'
            });

            // Eliminamos la clase active y se la ponemos al primer elemento.
            // Despues lo animamos.
            $('#banner .active').removeClass('active');
            banner.padre.children().first().addClass('active').animate({
                'left': 0
            });

            // Reseteamos la posicion a 1
            banner.posicion = 1;
        }
    });

    // Boton Anterior
        $('#banner-prev').on('click', function(e){
            e.preventDefault();

            if (banner.posicion > 1){

                // Nos asegramos de todos los elementos hijos (que no sean) .active
                // se posicionen a la izquierda
                banner.padre.children().not('.active').css({
                    'left': '-100%'
                });

                // Deslpazamos el slide activo de izquierda a derecha
                $('#banner .active').animate({
                    'left': '100%'
                });

                // Eliminamos la clase active y se la ponemos al slide anterior.
                // Y lo animamos
                $('#banner .active').removeClass('active').prev().addClass('active').animate({
                    'left': 0
                });

                // Reiniciamos la posicion a 1
                banner.posicion = banner.posicion - 1;
            } else {

                // Nos aseguramos de que los slides empiecen a la izquierda
                banner.padre.children().not('.active').css({
                    'left': '-100%'
                });

                // Animamos el slide activo hacia la derecha
                $('#banner .active').animate({
                    'left': '100%'
                });

                // Eliminamos la clase active y se la ponemos al primer elemento.
                // Despues lo animamos.
                $('#banner .active').removeClass('active');
                banner.padre.children().last().addClass('active').animate({
                    'left': 0
                });

                // Reseteamos la posicion a 1
                banner.posicion = banner.numeroSlides;
            }

        });
        

// ---------------------------------------
// ----- Slider Info
// ---------------------------------------
// Boton Siguiente

    $('#info-next').on('click', function(e){
        e.preventDefault();

        if (info.posicion < info.numeroSlides){
            // Nos aseguramos de que las demas slides empiecen desde la derecha.
            info.padre.children().not('.active').css({
                'left': '100%'
            });

            // Quitamos la clase active y se la ponemos al siguiente elemento.Y lo animamos
            $('#info .active').removeClass('active').next().addClass('active').animate({
                'left': 0
            });

            // Animamos el slide anterior para que se deslaza hacia la izquierda
            $('#info .active').prev().animate({
                'left': '-100%'
            });

            // Eliminamos la clase active y se la ponemos al siguiente elemento
            $('.botones').children('.active').removeClass('active').next().addClass('active');
                
            // Incrementamos la posicion en 1
            info.posicion = info.posicion + 1;
        } else {
            // Hacemos que el slide activo (es decir el ultimo), se anime hacia la derecha
            $('#info .active').animate({
                'left': '-100%'
            });

            // Seleccionamos todos los slides que no tengan la clase .active
            // y los posicionamos a la derecha
            info.padre.children().not('.active').css({
                'left': '100%'
            });

            // Eliminamos la clase active y se la ponemos al primer elemento
            // Despues lo animamos.
            $('#info .active').removeClass('active');
            info.padre.children().first().addClass('active').animate({
                'left': 0
            });

            // Eliminamos la clase active y se la ponemos al primer elemento
            $('.botones').children('.active').removeClass('active');
            $('.botones').children('span').first().addClass('active');

            // Reseteamos la posicion a 1
            info.posicion = 1;
        }

        altoInfo();
    });

    // Boton Anterior
        $('#info-prev').on('click', function(e){
            e.preventDefault();

            if (info.posicion > 1){

                // Nos asegramos de todos los elementos hijos (que no sean) .active
                // se posicionen a la izquierda
                info.padre.children().not('.active').css({
                    'left': '-100%'
                });

                // Deslpazamos el slide activo de izquierda a derecha
                $('#info .active').animate({
                    'left': '100%'
                });

                // Eliminamos la clase active y se la ponemos al slide anterior.
                // Y lo animamos
                $('#info .active').removeClass('active').prev().addClass('active').animate({
                    'left': 0
                });

                $('#botones').children('.active').removeClass('active').prev().addClass('active');

                // Reiniciamos la posicion a 1
                info.posicion = info.posicion - 1;
            } else {

                // Nos aseguramos de que los slides empiecen a la izquierda
                info.padre.children().not('.active').css({
                    'left': '-100%'
                });

                // Animamos el slide activo hacia la derecha
                $('#info .active').animate({
                    'left': '100%'
                });

                // Eliminamos la clase active y se la ponemos al primer elemento.
                // Despues lo animamos.
                $('#info .active').removeClass('active');
                info.padre.children().last().addClass('active').animate({
                    'left': 0
                });

                $('#botones').children('.active').removeClass('active');
                $('#botones').children('span').last().addClass('active');

                // Reseteamos la posicion a 1
                info.posicion = info.numeroSlides;
            }

            altoInfo();
        });

    setInterval(function(){
        $('#banner-next').trigger('click');   //con esto simulamos el click en el boton
        }, 6000); 

    $(".button-collapse").sideNav();
    $('.button-collapse').sideNav({
        menuWidth: 300, // Default is 240
        edge: 'left', // Choose the horizontal origin
        closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
        }
      );

    // ---------------------------------------

    // Metodos Sergio
/*-----------------------------------------------*/
    $('.js-resizing').each(function(index, el) {
        $.resizing($(this));
    });

    $('.btn-menu').on('click', function(event) {
        event.preventDefault();
        if($($(this).attr('data-menu')).hasClass('active'))
            $($(this).attr('data-menu')).removeClass('active');
        else
            $($(this).attr('data-menu')).addClass('active');
    });

  $('.to-svg').each(function(index, el) {
        $.imgToSvg($(this));
    });
     $('.form__ajax').on('submit', function(event) {
        event.preventDefault();

        $.activeLoading();
        $form = $(this);

        $.ajax({
            url: $form.attr('action'),
            type: $form.attr('method'),
            dataType: 'json',
            data: $form.serialize(),
        })
        .done(function(data) {
            $.showMessage(data.message);
            if(data.status){
                $form.find('input, textarea').val('');
            }
        })
        .fail(function() {
            $.showMessage('Fallo durante la conexión al servidor. Intente mas tarde');
        })
        .always(function() {
            $.deactiveLoading();
        });
        
    });
});

$.resizing = function(element){
    $(window).resize(function() {
        var width = element.outerWidth();
        element.css({
            "height": width * eval(element.attr('data-resizing'))
        });
        if(element.hasClass('panel')){
            element.parent().find('.panel').css({
                "height": width * eval(element.attr('data-resizing'))
            });
        }
    }).resize();
}

$.imgToSvg = function(image){
    var $img = image;
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    $.get(imgURL, function(data) {
        var $svg = jQuery(data).find('svg');
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }
        $svg = $svg.removeAttr('xmlns:a');
        $img.replaceWith($svg);

        if($img.hasClass('map-animate'))
            $.myScrollAnimate();
    }, 'xml');
}


$.activeLoading = function(){
    $('.modal__loading').addClass('active');
}
$.deactiveLoading = function(){
    $('.modal__loading').removeClass('active');
}
$.showMessage = function($message, $type){
    $type = $type || '';
    $box = $('.message__popup');

    $box.find('.message__text').text($message);
    $box.addClass('active');
    
    setTimeout(function(){
        $box.removeClass('active');
        setTimeout(function(){
            $box.find('.message__text').text('');
        }, 400)
    }, 8000);
}

