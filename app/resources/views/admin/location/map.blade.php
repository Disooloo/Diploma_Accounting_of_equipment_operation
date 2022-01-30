<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<7d360e83-39a7-4675-8c4b-e324f3bb7934>" type="text/javascript"></script>

<script>

    var coordsInput = "<?=$coordsInput;?>";

    ymaps.ready(init);
    var myMap;

    function init () {
        myMap = new ymaps.Map("map", {
            center: [57.5262, 38.3061], // Углич
            zoom: 11
        }, {
            balloonMaxWidth: 200,
            searchControlProvider: 'yandex#search'
        });

        myMap.events.add('click', function (e) {
            if (!myMap.balloon.isOpen()) {
                var coords = e.get('coords');
                myMap.balloon.open(coords, {
                    contentBody: [
                        coords[0].toPrecision(6),
                        coords[1].toPrecision(6),
                    ].join(', ')
                });
                coordsInput = coords;

                console.log(coordsInput);

                $.ajax({
                    url: '/location/create',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                            coordsInput: coords,
                    },
                    success: function(data){
                        $('#asdasd').text(coordsInput);
                    }, error: function(){
                        console.log('ERROR');
                    }
                })

            }
            else {
                myMap.balloon.close();
            }
        });


        // Скрываем хинт при открытии балуна.
        myMap.events.add('balloonopen', function (e) {
            myMap.hint.close();
        });
    }


</script>
