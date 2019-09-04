$(function () {

    var url = window.location + "";

    var path = url.replace(window.location.protocol + "//" + window.location.host + "/", "");

    var element = $('ul#navigation li a').filter(function() {
        return this.href === url || this.href === path;// || url.href.indexOf(this.href) === 0;
    });
    element.parentsUntil('.bottom-navbar').each(function (index)
    {
        if($(this).is("li") && $(this).children("a").length !== 0)
        {
            $(this).children("a").addClass("active");
            $(this).parent("ul#navigation").length === 0
                ? $(this).addClass("active")
                : $(this).addClass("selected");
        }
        else if(!$(this).is("ul") && $(this).children("a").length === 0)
        {
            $(this).addClass("selected");

        }
        else if($(this).is("ul")){
            $(this).addClass('in');
        }
    });
    element.addClass("active");
});