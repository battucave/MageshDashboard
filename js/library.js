$(document).ready(function(){
    $(".sidebar__links a").click(function(e){
        var idP = $(this).attr("href");
        $(".sidebar__links a").removeClass("active").addClass("collapsed");
        $(this).addClass("active").removeClass("collapsed");
        $(".sidebar__links a").each(function(){
            var id = $(this).attr("href");
            if(idP != id){
                $(id).removeClass("show").addClass("collapse");
            }
        });
        $(".content_profile").addClass("visually-hidden");
    });
    $(".tab__container .tab__button").click(function(e){
        var id = $(this).attr("data-target");
        $(".tab__button").removeClass("active");
        $(this).addClass("active");
        //---------------------------------
        $(".topic__container").addClass("visually-hidden");
        $("#"+id).removeClass("visually-hidden");
    });
    $(".popup__days .popup__days-button").click(function(e){
        var id = $(this).attr("data-target");
        $(".popup__days-button").removeClass("active__button");
        $(this).addClass("active__button");
    });

    $(".navbar__profile").click(function(e){
        $(".sidebar__links a").each(function(){
            var id = $(this).attr("href");
            $(id).removeClass("show").addClass("collapse");
        });
        $(".sidebar__links a").removeClass("active").addClass("collapsed");
        $(".content_profile").removeClass("visually-hidden");
    });
    
});