const responsive = {
    0: {
        items: 1
    },

    320: {
        items: 1
    },

    560: {
        items: 1
    },

    960: {
        items:3
    }
}
 
 
 $(document).ready(function () {

    $('.addtocart').click(function (e) {
        e.preventDefault();
        var jobPostId = $(this).attr('val');
        var companyId = $(this).attr('val2');
        $.get('addtocart?jobPostId='+jobPostId, 'companyId='+companyId, function (data) {
            $('#addtocart').modal('show')
                .find('#addtocartContent')
                .html(data);
        });
    });

    $('.applyn').click(function (e) {
        e.preventDefault();
        var jobPostId = $(this).attr('val');
        $.get('applyn?jobPostId='+jobPostId, function (data) {
            $('#applyn').modal('show')
                .find('#applynContent')
                .html(data);
        });
    });







    //owl-carousel for blog
    $('#works-carousel').owlCarousel({
        loop: true,
        autoplay: false,
        autoplayTimeout: 3000,
        dots: false,
        nav: true,
        navText: [$('.owl-navigation .owl-nav-prev'),$('.owl-navigation .owl-nav-next')],
        responsive: responsive
    });

    $("#team-carousel").owlCarousel({
        items:1,
        loop:true,
        nav:true,
        dots:true,
        autoplay:true,
        autoplaySpeed:1000,
        smartSpeed:1500,
        autoplayHoverPause:true,
       
    });

    $("#home-carousel").owlCarousel({
        items:1,
        loop:true,
        autoplayTimeout: 2000,
        nav:true,
        dots:true,
        autoplay:true,
        autoplaySpeed:1000,
        smartSpeed:1500,
        autoplayHoverPause:true, 
        responsive: responsive,
    });

    $("#owlc").owlCarousel({
        items:1,
        loop:true,
        autoplayTimeout: 2000,
        nav:true,
        dots:true,
        autoplay:true,
        autoplaySpeed:1000,
        smartSpeed:1500,
        autoplayHoverPause:true,
        responsive: responsive,
    });

    $("#cand-carousel").owlCarousel({
        items:1,
        loop:true,
        autoplayTimeout: 2000,
        nav:true,
        dots:true,
        autoplay:true,
        autoplaySpeed:1000,
        smartSpeed:1500,
        autoplayHoverPause:true,
     
    })

});

const counters = document.querySelectorAll('.counter');
const speed = 100;

counters.forEach(counters => {
    const updateCount = () => {
        const target = +counters.getAttribute('data-target');
        const count = +counters.innerText;

        const inc = target/speed;

        if(count < target) {
            counters.innerText = count + inc;
            setTimeout(updateCount, 300)
        }
        else {
            count.innerText = target
        }
    }
    updateCount();
});