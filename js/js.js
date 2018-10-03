$(document).ready(function(){
 $('.slickslider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slickslider1'
  });
  $('.slickslider1').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slickslider',
    dots: false,
    centerMode: false,
    focusOnSelect: true,
    prevArrow: '<button class="arror"> &#60; </button>',
    nextArrow: '<button> &#62; </button>'
  }),
  ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
            center: [54.752656, 56.002053],
            zoom: 17
        }, {
            searchControlProvider: 'yandex#search'
        }),

        // Создаём макет содержимого.
        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        ),

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Это красивая метка'
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: 'img/maps.png',
            // Размеры метки.
            iconImageSize: [64, 64],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-32, -64]
        });
    myMap.geoObjects
        .add(myPlacemark)
        .add(myPlacemarkWithContent);
});
});
