$(function () {

    $('.main_slide').on('init afterChange', function (e, s, c) {
        // c = 0,1,2
        var current = $('.main_slide .slick-current');
        current.addClass('on').siblings().removeClass('on');
    });

    $('.main_slide').slick({
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 4000,
        pauseOnHover: false,
        pauseOnFocus: false,
    });

    $('.main_visual .arrows i:first-child').on('click', function () {
        $('.main_slide').slick('slickPrev')
    });

    $('.main_visual .arrows i:last-child').on('click', function () {
        $('.main_slide').slick('slickNext')
    });


    $('.main_conslide').slick({
        arrows: false,
        dots: true,
        autoplay: false,
        speed: 0,
        // autoplaySpeed: 4000,
        // pauseOnHover: false,
        // pauseOnFocus: false,
    });

    $('.main_conslide').on('afterChange', function (e, s, c) {
        $('.main_dots li').eq(c).addClass('on')
            .siblings().removeClass('on');
        // $('.main_content .main_num').text(c + 1)
    });


    $('.con_dots li').on('mouseenter', function () {
        var idx = $(this).index();
        $(this).addClass('on').siblings().removeClass('on');
        $('.main_conslide').slick('slickGoTo', idx)
    });




    $('.youtube_slide').slick({
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 4000,
        pauseOnHover: false,
        pauseOnFocus: false,
    });
    $('.youtube .arrows i:first-child').on('click', function () {
        $('.youtube_slide').slick('slickPrev')
    });

    $('.youtube .arrows i:last-child').on('click', function () {
        $('.youtube_slide').slick('slickNext')
    });




    // to top button
    $(window).on('scroll', function () {
        var sct = $(window).scrollTop();
        console.log(sct);

        if (sct > 500) {
            //$('.toTop').fadeIn();
            $('.to_top').addClass('on')
        } else {
            $('.to_top').removeClass('on')
        }
    });

    $('.to_top').on('click', function () {
        $('html, body').animate({ scrollTop: 0 })
    });




    //mopen
    $('.mopen').on('click', function () {
        $('.header').toggleClass('on')
    });


    $('.header .gnb>ul>li>a').on('click', function (e) {
        if ($('.header').hasClass('on')) {
            // header??? on??? ??????????????? ????????? ????????????
            e.preventDefault();
        };
        // return false;     a ????????? ????????? ?????????
        console.log(e, e.currentTarget, $(this));
        $('.header .gnb>ul>li .smenu').removeClass('on');
        $(this).next().addClass('on');
        // ?????? ????????? this ??? next???(??????) on??? ?????????
    });


    // ????????? ?????????????????? ?????? ????????? ???????????????
    $('.header').on('scroll wheel touchmove', function (e) {
        if ($('.header').hasClass('on')) {
            // header??? on??? ??????????????? ????????? ????????????
            e.preventDefault();
        };
    });









    // AOS.init();

})