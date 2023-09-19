// -ecriture auto accueil
// var time_delai = 1500
function autoType(elementClass, typingSpeed, time_delai) {
    var thhis = $(elementClass);
    thhis.css({
        "position": "relative",
        "display": "inline-block"
    });
    //   thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
    thhis = thhis.find(".text-js");
    var text = thhis.text().trim().split('');
    var amntOfChars = text.length;
    var newString = "";
    //   thhis.text("|");
    setTimeout(function() {
        thhis.css("opacity", 1);
        thhis.prev().removeAttr("style");
        thhis.text("");

        for (var i = 0; i < amntOfChars; i++) {
            (function(i, char) {
                setTimeout(function() {
                    newString += char;
                    thhis.text(newString);
                }, i * typingSpeed);
            })(i + 1, text[i]);
        }

    }, time_delai);
}
autoType(".type-js", 40, 500);
autoType(".type-js2", 30, 1150);
autoType(".type-js3", 20, 2000);




// -effet hover sur lettres

function hoverTextAccueil(id) {
    setTimeout(function() {
        var letters = $(id).text();
        var nHTML = '';
        for (var letter of letters) {
            nHTML += "<span class='effet_lettres'>" + letter + "</span>";
            console.log(nHTML)
        }

        $(id).html(nHTML);
    }, 3000);
}

hoverTextAccueil("#text_hover1")
hoverTextAccueil("#text_hover2")
hoverTextAccueil("#text_hover3")




// -parralax

var timeout;
$('#container').mousemove(function(e) {
    if (timeout) clearTimeout(timeout);
    setTimeout(callParallax.bind(null, e), 0);

});

function callParallax(e) {
    parallaxIt(e, '#para_1', -50);
    parallaxIt(e, '#para_2', -30);
    parallaxIt(e, '#para_3', -70);
    parallaxIt(e, '#para_4', -130);
    parallaxIt(e, '.text-js', -20);
    // parallaxIt(e, '#img_para_2', -20);

}

function parallaxIt(e, target, movement) {
    var $this = $('#container');
    var relX = e.pageX - $this.offset().left;
    var relY = e.pageY - $this.offset().top;

    TweenMax.to(target, 1, {
        x: (relX - $this.width() / 2) / $this.width() * movement,
        y: (relY - $this.height() / 2) / $this.height() * movement,
        ease: Power2.easeOut
    })
}



// -delai apparition div parralax
$(setTimeout(function() {
    $("#para_1").addClass("load");
    $("#para_2").addClass("load");
    $("#para_3").addClass("load");
    $("#para_4").addClass("load")
}, 3100));


// -redirection avec delai
function redirect(url) {
    $.ajax({
        url: "pages/" + url + "",
        type: "POST",
        dataType: "html",

        success: function(data) {
            var delayTime = 800

            setTimeout(function() {
                $('#section_centrale').empty();
                $('#section_centrale').append(data)
            }, delayTime)

        }
    })
}


// -redirection depuis vignette parallax

function classPourredirection() {
    $("#para_1").addClass("animate__animated animate__backOutUp");
    $("#para_2").addClass("animate__animated animate__backOutUp");
    $("#para_3").addClass("animate__animated animate__backOutDown");
    $("#para_4").addClass("animate__animated animate__backOutDown");
    $(".text-js ").addClass("animate__animated animate__backOutLeft");
    $("#details_dev ").removeClass("animate__animated animate__fadeInUp");
    $("#details_dev ").addClass("animate__animated animate__backOutLeft");

    $("#a_propos ").addClass("animate__animated  animate__fadeOut");
    $("#conteneur_competences ").addClass("animate__animated  animate__fadeOut");
    $("#contact ").addClass("animate__animated  animate__fadeOut");
    $("#conteneur_portfolio ").addClass("animate__animated  animate__zoomOut");
}


$("#section_centrale, header").on('click', '#para_1, #premier_boutton', function() {

    classPourredirection();
    redirect("a-propos.html")

})

$("#section_centrale, header").on('click', '#para_2, #deuxieme_boutton', function() {

    classPourredirection();
    redirect("competences.html")

})

$("#section_centrale, header").on('click', '#para_3, #troisieme_boutton', function() {

    classPourredirection();
    redirect("projets.html")

})

$("#section_centrale, header").on('click', '#para_4, #dernier_boutton', function() {

    classPourredirection();
    redirect("contact.html")

})



// -actions lien sur vignettes projets

$("#section_centrale").on('click', '#image_projet_1, #titre_projet_1, #despcription_porjet_1', function(e) {

    window.open('https://github.com/BretonLud/Fricoot/', '_blank')

})
$("#section_centrale").on('click', '#image_projet_2, #titre_projet_2, #despcription_porjet_2', function(e) {

    window.open('https://github.com/Laurent70300/portfolio/', '_blank')

})
$("#section_centrale").on('click', '#image_projet_3, #titre_projet_3, #despcription_porjet_3', function(e) {

    window.open('sites/projets_3/*.html', '_blank')

})
$("#section_centrale").on('click', '#image_projet_4, #titre_projet_4, #despcription_porjet_4', function(e) {

    window.open('sites/projets_4/*.html', '_blank')

})
$("#section_centrale").on('click', '#image_projet_5, #titre_projet_5, #despcription_porjet_5', function(e) {

    window.open('sites/projets_5/*.html', '_blank')

})


// -fontions sur hover vignettes projets
function change_css_hover_mouseenter(id_image, id_div) {

    $(id_image).css({
        "filter": "blur(8px)",
        "transform": "scale(1.05)",
        "transition": "0.4s",
        "cursor": "pointer"
    });


    $(id_div + " p").css({
        "z-index": "10",
        "opacity": "1",
        "transform": "scale(1.05)",
        "transition": "0.4s",
        "cursor": "pointer"
    });

}

function change_css_hover_mouseleave(id_image, id_div) {


    $(id_image).css({
        "filter": "blur(0px)",
        "transform": "scale(1)",
        "transition": "0.4s"
    });

    $(id_div + " p").css({
        "opacity": "0",
        "transform": "scale(1)",
        "transition": "0.4s",
        "z-index": "10"
    });

}


// ----------------projet 1

$("#section_centrale").on('mouseenter', '#image_projet_1, #titre_projet_1, #despcription_porjet_1', function(e) {

    change_css_hover_mouseenter("#image_projet_1", "#projet_1")

})
$("#section_centrale").on('mouseleave', '#image_projet_1, #titre_projet_1, #despcription_porjet_1', function(e) {

    change_css_hover_mouseleave("#image_projet_1", "#projet_1")

})


// ----------------projet 2

$("#section_centrale").on('mouseenter', '#image_projet_2, #titre_projet_2, #despcription_porjet_2', function(e) {

    change_css_hover_mouseenter("#image_projet_2", "#projet_2")

})


$("#section_centrale").on('mouseleave', '#image_projet_2, #titre_projet_2, #despcription_porjet_2', function(e) {

    change_css_hover_mouseleave("#image_projet_2", "#projet_2")

})


// ----------------projet 3

$("#section_centrale").on('mouseenter', '#image_projet_3, #titre_projet_3, #despcription_porjet_3', function(e) {

    change_css_hover_mouseenter("#image_projet_3", "#projet_3")

})

$("#section_centrale").on('mouseleave', '#image_projet_3, #titre_projet_3, #despcription_porjet_3', function(e) {

    change_css_hover_mouseleave("#image_projet_3", "#projet_3")

})


// ----------------projet 4

$("#section_centrale").on('mouseenter', '#image_projet_4, #titre_projet_4, #despcription_porjet_4', function(e) {

    change_css_hover_mouseenter("#image_projet_4", "#projet_4")

})

$("#section_centrale").on('mouseleave', '#image_projet_4, #titre_projet_4, #despcription_porjet_4', function(e) {

    change_css_hover_mouseleave("#image_projet_4", "#projet_4")

})

// ----------------projet 5

$("#section_centrale").on('mouseenter', '#image_projet_5, #titre_projet_5, #despcription_porjet_5', function(e) {

    change_css_hover_mouseenter("#image_projet_5", "#projet_5")

})

$("#section_centrale").on('mouseleave', '#image_projet_5, #titre_projet_5, #despcription_porjet_5', function(e) {

    change_css_hover_mouseleave("#image_projet_5", "#projet_5")

})