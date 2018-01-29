$(document).ready(function(){

/* Filter */
var filterizd = $('.filtr-container').filterizr({
});
        
var selector = '.portfolio__categories li';
$(selector).on('click', function(){
    $(selector).removeClass('active');
    $(this).addClass('active');
});
});