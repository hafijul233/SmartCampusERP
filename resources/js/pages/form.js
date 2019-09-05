$(function () {
    $('.btnNext').click(function () {
        $('.nav-link .active').next('li').find('a').trigger('click');
    });

    $('.btnBack').click(function () {
        $('.nav-link .active').prev('li').find('a').trigger('click');
    });
});