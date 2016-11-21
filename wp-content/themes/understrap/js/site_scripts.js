


jQuery(document).ready(function($) {
 
    $('.show-search').click(function(e) {
        $(this).parents('.form-group').toggleClass('show-search');
    });
    // =========== owl-heading-slider javascript ============
    if ($('.owl-heading-slider').length) {
        // statement
        $('.owl-heading-slider').owlCarousel({
           loop:true,
           margin:0,
           nav:true,
           navText: [
                 '<i class="fa fa-long-arrow-left"></i>',
                 '<i class="fa fa-long-arrow-right"></i>'
                 ],
           dots:false,
           // center:true,
           autoplay:true,
           autoplayTimeout:3000,
           autoplayHoverPause:false,
           responsive:{
               0:{
                   items:1
               },
               600:{
                   items:1
               },
               1000:{
                   items:1
               }
           }
       })
    }
    

         // =========== owl-heading-slider javascript ============\
    if ($('.owl-publication').length) {
        $('.owl-publication').owlCarousel({
           loop:true,
           margin:0,
           nav:true,
           navText: [
                 '<i class="fa fa-long-arrow-left"></i>',
                 '<i class="fa fa-long-arrow-right"></i>'
                 ],
           dots:false,
           // center:true,
           autoplay:true,
           autoplayTimeout:3000,
           autoplayHoverPause:false,
           responsive:{
               0:{
                   items:1
               },
               600:{
                   items:1
               },
               1000:{
                   items:1
               }
           }
       });
    }
       // =========== owl-partner-slider javascript ============
    if ($('.owl-partner-slider').length) {
        $('.owl-partner-slider').owlCarousel({
           loop:true,
           margin:0,
           nav:false,
           navText: [
                 '<i class="fa fa-long-arrow-left"></i>',
                 '<i class="fa fa-long-arrow-right"></i>'
                 ],
           dots:false,
           // center:true,
           autoplay:true,
           autoplayTimeout:3000,
           autoplayHoverPause:false,
           responsive:{
               0:{
                   items:1
               },
               600:{
                   items:4
               },
               1000:{
                   items:6
               }
           }
        });
    }


    // =========== owl-gallery javascript ============
    if ($('.owl-partner-slider').length) {
        $('.owl-gallery').owlCarousel({
           loop:true,
           margin:0,
           nav:true,
           navText: [
                 '<i class="fa fa-long-arrow-left"></i>',
                 '<i class="fa fa-long-arrow-right"></i>'
                 ],
           dots:false,
           // center:true,
           autoplay:true,
           autoplayTimeout:3000,
           autoplayHoverPause:false,
           responsive:{
               0:{
                   items:1
               },
               600:{
                   items:1
               },
               1000:{
                   items:1
               }
           }
       });
    }
    $(document).delegate('.action-bargar', 'click', function(event){
        $('.bargar-open').toggleClass('oppenned');
        event.stopPropagation();
    })
    // $(document).delegate('body', 'click', function(event) {
    //     $('.open').removeClass('oppenned');
    // })
    // $(document).delegate('.cls', 'click', function(event){
    //     $('.open').removeClass('oppenned');
    //     event.stopPropagation();
    //     console.log(this);
    // });

    $('.call-to-up').click(
        function (e) {
            $('html, body').animate({scrollTop: '0px'}, 5800);
        }
    );
});