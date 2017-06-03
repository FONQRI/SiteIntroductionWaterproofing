/**
 * Created by fonqri on 1/23/17.
 */
$(document).ready(function () {
    $('.galleryShowIconCollection').click(function () {
        $('.imageViewer').empty();
        var title = $(this).attr("data-title");
        $('.modal-footer').html(title);
        $($(this).parents('div').html()).appendTo('.imageViewer');
        $('#myModal').modal({show: true}).off("click");

    });

    $('.sidMenuPic').click(function () {
        $('.imageViewer').empty();
        var title = $(this).attr("data-title");
        $('.modal-footer').html(title);
        $($(this).parents('div').html()).appendTo('.imageViewer');
    });

    $('.closeModalBtn').click(function () {
        $('.imageViewer').empty();
        $('#myModal').modal('hide');

    });

    $('.personnelIconCollection').click(function () {
        $('.personnelIconCollection').removeClass('activeOpacity');
        $(this).addClass('activeOpacity');
        $('.personnelDescriptionDiv').empty();
        $('<pre>' + $(this).attr("data-title") + '</pre>').appendTo('.personnelDescriptionDiv');
    });
    //callusFormSubmit

    $("#callusFormSubmit").click(function () {
        $(this).parents('form').submit();
        //$(".callusForm").disable()
        //$(this).attr('disabled','disabled');
        $(this).parents('form').find("input[type!=hidden],textarea,select").attr('disabled', 'disabled');
        $(this).attr('disabled', 'disabled');
        // $(".contactFormClass input[type!=hidden]").attr('disabled', 'disabled');
        // $(".contactFormClass textarea").attr('disabled', 'disabled');
        // $(".contactFormClass select").attr('disabled', 'disabled');
        $(".submitFormLoading").show(500);


    });

    $("body").niceScroll({scrollspeed: 60, mousescrollstep: 60});
    $(".sideMenu").niceScroll({
        scrollspeed: 60, mousescrollstep: 60, railalign: 'left', railpadding: {top: 5, right: 3, left: 0, bottom: 0}
    });


    if (document.getElementById('inputFile') != null) {
        document.getElementById('inputFile').onchange = function () {
            var files = $("#inputFile")[0].files;
            if (files.length != 0) {
                $('.chooseFileIcon').show();
            }
        };
    }


// Instantiate the Bootstrap carousel
    $('.multi-item-carousel').carousel({
        interval: false
    });

// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.
    $('.multi-item-carousel .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        } else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });

    $('.multiSlider ').click(function () {
        $('.multiSlider').removeClass('activeOpacity');
        $(this).addClass('activeOpacity');
        var thisItem = $(this);

        $('.showSliderActivePic').fadeOut(500, function () {
            $('.showSliderActivePic').empty();
            $('<img style="width: 100%;height: 200px" src = "' + thisItem.find("img").attr("data-title") + '"/>').appendTo('.showSliderActivePic');
            $('<pre style="font-family: IRANSansWeb "> ' + thisItem.find("img").attr("data-content") + '</pre>').appendTo('.showSliderActiveDis');

            $('.showSliderActivePic').fadeIn();

        });


    });


    $('.multiSliderParent').niceScroll({scrollspeed: 60, mousescrollstep: 60});



    setInterval(function() {
        if($(".activeOpacity").length <= 0)
        {
            return;
        }
        var nextImg = $(".activeOpacity").next();

        if (nextImg.length <= 0) {
            nextImg = $(".multiSlider").first();

        }
        $('.multiSlider').removeClass('activeOpacity');
        nextImg.addClass('activeOpacity');

        var pScrollBar = $(".multiSliderParent");
        var scw = $('.activeOpacity').position().left ;
        pScrollBar.scrollLeft(scw);




        var thisItem = nextImg;

        $('.showSliderActivePic').fadeOut(500, function () {
            $('.showSliderActivePic').empty();
            $('<img style="width: 100%;height: 200px" src = "' + thisItem.find("img").attr("data-title") + '"/>').appendTo('.showSliderActivePic');
            $('<pre style="font-family: IRANSansWeb "> ' + thisItem.find("img").attr("data-content") + '</pre>').appendTo('.showSliderActiveDis');

            $('.showSliderActivePic').fadeIn();

        });





    }, 5000);

    $('.productSliderAllProductsInner .left').click(function () {
        var nextImg = $(".activeOpacity").next();

        if (nextImg.length <= 0) {
            nextImg = $(".multiSlider").first();

        }
        $('.multiSlider').removeClass('activeOpacity');
        nextImg.addClass('activeOpacity');

        var pScrollBar = $(".multiSliderParent");
        var scw = $('.activeOpacity').position().left ;
        pScrollBar.scrollLeft(scw);




        var thisItem = nextImg;

        $('.showSliderActivePic').fadeOut(500, function () {
            $('.showSliderActivePic').empty();
            $('<img style="width: 100%;height: 200px" src = "' + thisItem.find("img").attr("data-title") + '"/>').appendTo('.showSliderActivePic');
            $('<pre style="font-family: IRANSansWeb "> ' + thisItem.find("img").attr("data-content") + '</pre>').appendTo('.showSliderActiveDis');

            $('.showSliderActivePic').fadeIn();

        });

    });

    $('.productSliderAllProductsInner .right').click(function () {
        var nextImg = $(".activeOpacity").prev();

        if (nextImg.length <= 0) {
            nextImg = $(".multiSlider").last();

        }
        $('.multiSlider').removeClass('activeOpacity');
        nextImg.addClass('activeOpacity');

        var pScrollBar = $(".multiSliderParent");
        var scw = $('.activeOpacity').position().left ;
        pScrollBar.scrollLeft(scw);




        var thisItem = nextImg;

        $('.showSliderActivePic').fadeOut(500, function () {
            $('.showSliderActivePic').empty();
            $('<img style="width: 100%;height: 200px" src = "' + thisItem.find("img").attr("data-title") + '"/>').appendTo('.showSliderActivePic');
            $('<pre style="font-family: IRANSansWeb "> ' + thisItem.find("img").attr("data-content") + '</pre>').appendTo('.showSliderActiveDis');

            $('.showSliderActivePic').fadeIn();

        });

    });
});
