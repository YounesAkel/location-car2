$(document).ready(function(){

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,/*activer l'autoplay pour que la navigation soit automatique */
        autoplayTimeout: 3000,/*regler le temp d'execution d'autoplay sur 3s */
        stagePadding:50,/*pour bien organisé les extremités du slide */
        nav:false,/*ne pas afficher les deux fléche de navgation du slide */
        dots:false,/*ne pas afficher les deux bouton de navigation du slide */
        responsive:{
            0:{
                items:1/*si l'ecran à 0px afficher 1 element sur l'ecran */
            },
            600:{
                items:3/*si l'ecran à 600px afficher 3 element sur l'ecran */
            },
            1000:{
                items:3/*si l'ecran à 1000px afficher 3 element sur l'ecran */
            }
        }
    })
});
