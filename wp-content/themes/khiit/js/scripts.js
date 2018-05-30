var $dropzone = null;

Dropzone.options.contactForm = {
    autoProcessQueue: false,
    uploadMultiple: true,
    maxFiles: 10,
    parallelUploads: 10,
    addRemoveLinks: true,
    autoDiscover: false,
    maxFilesize: 25,
    previewsContainer: '#dropzonePreview',
    clickable:'#dropzonePreview'
};

$(document).ready(function() {
    $('#fullpage').fullpage({
        loopHorizontal: false,
        onLeave: function(index, nextIndex, direction){
            $('.fp-enabled .menu .current-menu-item.current-menu-ancestor li').removeClass('active');
            $('.fp-enabled .menu .current-menu-item.current-menu-ancestor li').eq(nextIndex - 1).addClass('active');
        }, afterRender: function(){
            $(".fp-enabled .menu .sub-menu a").filter(function() { return this.hash == location.hash; }).parent().addClass('active');
        }
    });

    /*$.fn.fullpage.setMouseWheelScrolling(false);
    $.fn.fullpage.setAllowScrolling(false);*/

    $(document).on('click', '.lnk-next', function(e){
    	e.preventDefault();
        $.fn.fullpage.moveSectionDown();
    });

    /*--- Mobile menu ------------------------------------------*/
    if ( $(window).width() < 768 ) {

        if ($(".fp-enabled").length) {
            $.fn.fullpage.destroy('all');
            $('body').addClass('mobile-disabled-fullpage');
        }

        $('.mobile-nav-toggle').on('click', function () {
            $(this).toggleClass('active');
            $('.navbar').toggleClass('active');
        });

    }
});


