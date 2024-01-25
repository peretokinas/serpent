<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  $arCoord = json_encode($_SESSION["arDеsignerSett"]["SETT_COORDINATION_MAP"]);
?>
<div class="map">
  <div id="map"></div>
</div>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<ваш API-ключ>" type="text/javascript"></script>
<script>
    const coordinate = JSON.parse('<?php echo $arCoord;?>');
    ymaps.ready(function () {
        <?php if($arParams["mc_1"]!=""):?>
          var mc_1=<?php echo $arParams["mc_1"];?>;
        <?php else:?>
          var mc_1=55.740000;
        <?php endif;?>
        
        <?php if($arParams["mc_2"]!=""):?>
          var mc_2=<?php echo $arParams["mc_2"];?>;
        <?php else:?>
          var mc_2=37.450000;
        <?php endif;?>
        
        if (document.body.clientWidth<=991) {
          <?php if($arParams["mc_1_mob"]!=""):?>
            var mc_1=<?php echo $arParams["mc_1_mob"];?>;
          <?php else:?>
            var mc_1=55.725000;
          <?php endif;?>
          
          <?php if($arParams["mc_2_mob"]!=""):?>
            var mc_2=<?php echo $arParams["mc_2_mob"];?>;
          <?php else:?>
            var mc_2=37.550000;
          <?php endif;?>
        }
      
        var myMap = new ymaps.Map('map', {
                center: [mc_1, mc_2],
                zoom: 12
            }, {
                searchControlProvider: 'yandex#search'
            });

        const collection = new ymaps.GeoObjectCollection(null, {
            preset: 'twirl#redIcon'
        });

        for (let i = 0; i < coordinate.length; i++) {
            collection.add(new ymaps.Placemark(coordinate[i]
                    .split(',').map(coord => +Number(coord).toFixed(2)),
                {
                    iconContent: ' ',
                    hintContent: 'Собственный значок метки',
                    balloonContent: 'Метка магазина',
                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#image',
                    // Своё изображение иконки метки.
                    iconImageHref: '<?php echo SITE_TEMPLATE_PATH;?>/img/map-icon.svg',
                    // Размеры метки.
                    iconImageSize: [100, 100],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-50, -50],
                    coorditates : [50, 50]
                }
            ));
        }

        myMap.geoObjects.add(collection);
        myMap.behaviors.disable('scrollZoom');
    });
</script>