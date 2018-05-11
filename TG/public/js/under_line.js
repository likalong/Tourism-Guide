/**
 * Created by htpp royal on 08/28/2017.
 */
console.log("hello");

// When the user scrolls down 20px from the top of the document, show the button
$(document).scroll(function () {
    var y=$(this).scrollTop();
    if(y>800){
        $('#back2Top').fadeIn();
    }
    else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#aboutus,#product,#back2Top").on('focus', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body, #about-section,#product-section,#top').animate({
                scrollTop: $(hash).offset().top
            }, 1000, function () {
                window.location.hash = hash;
            });
        }
    });
});

$(document).ready(function(){
    $("#menu li a").click(function(){
        console.log($('#menu li a'));
        $("a").each(function(){
            $('a').removeClass('focus');
        });
        $(this).addClass('focus');

    });
});
