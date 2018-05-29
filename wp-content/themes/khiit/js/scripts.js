$(document).ready(function() {
    $('#fullpage').fullpage({
        loopHorizontal: false,
        onLeave: function(index, nextIndex, direction){

        }
	});

    $.fn.fullpage.setMouseWheelScrolling(false);
    $.fn.fullpage.setAllowScrolling(false);

    $(document).on('click', '.lnk-next', function(e){
    	e.preventDefault();
        $.fn.fullpage.moveSectionDown();
    });
});


