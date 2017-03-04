$ = jQuery;
$masonry = {} ;
$(document).ready(function () {
   $('.btn-menu').on('click', function (event) {
       event.preventDefault();
       if ( $('body').hasClass('open-menu') ) {
            $('.overlay-menu').fadeOut('fast');
            $('body').removeClass('open-menu'); 
       } else {
            $('.overlay-menu').fadeIn('fast');
            $('body').addClass('open-menu'); 
       }
       
   });
   $('.overlay-menu').on('click', function (event) {
       event.preventDefault();
       $('.overlay-menu').fadeOut('fast');
       $('body').removeClass('open-menu');
   });

    $('.btn-open-filter').on('click', function (event) {
        event.preventDefault();
        var id = $(this).data().target;
        $(this).toggleClass('active');
        $('#' + id).slideToggle('fast');
    });

    $(document).on('click', '.page_navigation_ajax .next', function (event) {
        event.preventDefault();
        $reciever = $('#reciever-listing');

        var link = $(this).attr('href');
        $(this).text('Loadding...');
        $.get(link, function (data) {
            $('.page_navigation_ajax').html($(data).find('.page_navigation_ajax').html());
            
            if ($(window).width() < 768 || $('.page_navigation_ajax').hasClass('none-masonry')) {
                $('#reciever-listing').append( $(data).find('#reciever-listing').html() );
                $('.frame-square').each(function () {
                    $(this).height( $(this).width() / 1.3333);
                });
            } else {
                var $elems = $( $(data).find('#reciever-listing').html() );
                setTimeout(function(){
                    $masonry.append( $elems ).masonry( 'appended', $elems );
                }, 500);
            }

        });
    });

    $('.frame-square').each(function () {
        $(this).height( $(this).width() / 1.333);
    });


    if ($(window).width() < 992) {
        $('.menu-mega a').on('click', function (event) {
            var li = $(event.target).closest('li');
            if (li.children('.sub-menu').length > 0){
                event.preventDefault();
                li.children('.sub-menu').slideToggle()
            }
        });

        $(window).scroll(function () {
            if ($(window).scrollTop() > 5) {
                $('.header-site').addClass('is-scroll')
            } else {
                $('.header-site').removeClass('is-scroll')
            }
        });


    } else {
        if ($('#sidebar-single-product .single-left').length > 0) {
            $(window).load(function () {
                if ( $('#primary-product').outerHeight() > $('#sidebar-single-product').outerHeight() ) {
                    $('#sidebar-single-product').outerHeight($('#primary-product').outerHeight());
                }
                $('#sidebar-single-product .single-left').stick_in_parent({
                    'offset_top' : $('.header-site').height() - 50
                });
            });
        }
        if ($('.sidebar-fix').length > 0) {
            $(window).load(function () {
                if ( $('.primary-fix').outerHeight() > $('.sidebar-fix').outerHeight() ) {
                    $('.sidebar-fix').outerHeight($('.primary-fix').outerHeight());
                }
                $('.sidebar-fix .single-left').stick_in_parent({
                    'offset_top' : $('.header-site').height() - 30
                });
            });
        }

        $('.header-site').stick_in_parent();
    }

});

$(window).load(function(){
    if ($(window).width() >= 768) {
        $masonry = $('.list-masonry').masonry({
            columnWidth: 1,
            itemSelector: '.item'
        });
    }
});

