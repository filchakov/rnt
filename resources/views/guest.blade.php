<html lang="en"> <!--<![endif]-->
<head>

<?php
$callbackname = 'initMap'.time();
?>
<!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="googlebot" content="index,follow">

    <!-- Title -->
    <title>Rently - заявка на подбор объекта</title>

    <!-- Templates core CSS -->
    <link href="/assets/css/quize.css?time={{time()}}" rel="stylesheet">
    <!-- Favicons -->
    <link href="images/favicon/favicon.png" rel="shortcut icon">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    {{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgdjdQo4nl5v5dgq3-LcQxzjqCzGTjqzc&libraries=places&callback=initMap" async defer></script>--}}
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfYXS6FZ3bzivyhj3roTHrbQE_f-017VY&libraries=places&callback={{$callbackname}}" defer></script>
    <!-- Modernizr Scripts -->
    <script src="/assets/js/modernizr-2.7.1.min.js"></script>

    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.10&appId=408291709570737";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

</head>
<body class="index" id="to-top">
<section class="subscribe-section" id="section-3">

    <div class="container">

        <div class="row" id="step_1">

            <div class="col-md-12">

                <!-- Title -->
                <h4>Укажите адрес</h4>

                <p>Мы будем строить маршруты от квартир к этой точке</p>
                <!-- Subscribe form -->
                <div class="row">

                    <div class="col-md-6 col-md-offset-3">

                        <form class="subscribe-form form-inline" action="" id="form_1" role="form" onsubmit="return false;">
                            <!-- Input -->
                            <div class="form-group" style="padding-bottom: 10px;">
                                <input class="form-control" id="pac-input" placeholder="Адрес" type="text" required/>
                            </div> <!-- /.form-group -->

                            <section class="subscribe-description">
                                <div id="map" style="width: 100%; min-height: 200px; height: 60%;"></div>
                                <div id="listing">
                                    <table id="resultsTable">
                                        <tbody id="results"></tbody>
                                    </table>
                                </div>
                            </section> <!-- /.subscribe-description -->

                            <!-- Button -->
                            <button class="btn btn-success" type="submit" id="save_form_1" disabled="disabled">Далее</button>

                        </form> <!-- /.subscribe-form -->

                    </div> <!-- /.col-md-6 -->

                </div> <!-- /.row -->

            </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->

        <div class="row" id="step_2" style="display: none;">

            <div class="col-md-12">

                <!-- Title -->
                <h4>Как вы будете добираться к этой точке?</h4>

                <!-- Subscribe form -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">

                        <form class="subscribe-form form-inline" action="" id="form_2" role="form" onsubmit="return false;" onchange="validationStep(2)">
                            <p>
                                <label class="btn btn-default" style="width: 100%;">
                                    <input type="radio" id="transport_public" name="transport" value="public" style="float: left;">
                                    Общественным транспортом
                                </label>
                            </p>

                            <p>
                                <label class="btn btn-default" style="width: 100%;">
                                    <input type="radio" id="transport_walking" name="transport" value="walking" style="float: left;">
                                    Пешком
                                </label>
                            </p>

                            <p>
                                <label class="btn btn-default" style="width: 100%;">
                                    <input type="radio" id="transport_cycle" name="transport" value="cycle" style="float: left;">
                                    Велосипедом
                                </label>
                            </p>

                            <p>
                                <label class="btn btn-default" style="width: 100%;">
                                    <input type="radio"  id="transport_auto" name="transport" value="auto" style="float: left;">
                                    Автомобилем
                                </label>
                            </p>

                            <!-- Button -->
                            <button class="btn btn-success" type="submit" id="save_form_2" disabled="disabled">Далее</button>

                        </form> <!-- /.subscribe-form -->

                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->

        <div class="row" id="step_3" style="display: none;">

            <div class="col-md-12">

                <!-- Title -->
                <h4>Во сколько начинается ваш рабочий день?</h4>

                <!-- Subscribe form -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">

                        <form class="subscribe-form form-inline" action="" id="form_3" role="form" onsubmit="return false;" onchange="document.getElementById('save_form_3').removeAttribute('disabled');">

                            <p>Мы используем эти данные, для подбора оптимального маршрута с учетом пробок</p>

                            <p>
                                <label class="btn btn-default" style="width: 100%;">
                                    <input type="radio"  id="start_work_8" name="start_work" value="8:00" style="float: left;">
                                    8:00
                                </label>
                            </p>
                            <p>
                                <label class="btn btn-default" style="width: 100%;">
                                    <input type="radio" id="start_work_9" name="start_work" value="9:00" style="float: left;">
                                    9:00
                                </label>
                            </p>
                            <p>
                                <label class="btn btn-default" style="width: 100%;">
                                    <input type="radio" id="start_work_10" name="start_work" value="10:00" style="float: left;" checked="checked">
                                    10:00
                                </label>
                            </p>
                            <p>
                                <label class="btn btn-default" style="width: 100%;">
                                    <input type="radio" id="start_work_11" name="start_work" value="11:00" style="float: left;">
                                    11:00
                                </label>
                            </p>
                            <p>
                                <label class="btn btn-default" style="width: 100%;">
                                    <input type="radio" id="start_work_12" name="start_work" value="12:00" style="float: left;">
                                    12:00
                                </label>
                            </p>

                            <!-- Button -->
                            <button class="btn btn-success" type="submit" id="save_form_3">Далее</button>

                        </form> <!-- /.subscribe-form -->

                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->

        <div class="row" id="step_4" style="display: none;">

            <div class="col-md-12">

                <!-- Title -->
                <h4>Время на дорогу</h4>

                <!-- Subscribe form -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">


                        <form class="subscribe-form form-inline" action="" id="form_4" role="form" onsubmit="return false;" onchange="document.getElementById('save_form_4').removeAttribute('disabled');">

                            <p>Сколько вы хотите тратить времени на дорогу в одну сторону?</p>

                            <p>
                                <label class="btn btn-default" style="width: 100%;">
                                    <input type="radio"  id="transport_time_10" name="transport_time" value="10" style="float: left;">
                                    до 10 минут
                                </label>
                            </p>
                            <p>
                                <label class="btn btn-default" style="width: 100%;">
                                    <input type="radio" id="transport_time_20" name="transport_time" value="20" style="float: left;">
                                    до 20 минут
                                </label>
                            </p>
                            <p>
                                <label class="btn btn-default" style="width: 100%;">
                                    <input type="radio" id="transport_time_30" name="transport_time" value="30" style="float: left;">
                                    до 30 минут
                                </label>
                            </p>
                            <p>
                                <label class="btn btn-default" style="width: 100%;">
                                    <input type="radio" id="transport_time_40" name="transport_time" value="40" style="float: left;" checked="checked">
                                    до 40 минут
                                </label>
                            </p>
                            <p>
                                <label class="btn btn-default" style="width: 100%;">
                                    <input type="radio" id="transport_time_50" name="transport_time" value="50" style="float: left;">
                                    до 50 минут
                                </label>
                            </p>

                            <!-- Button -->
                            <button class="btn btn-success" type="submit" id="save_form_4">Далее</button>

                        </form> <!-- /.subscribe-form -->

                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->


        <div class="row" id="step_5" style="display: none;">

            <div class="col-md-12">

                <!-- Title -->
                <h4>Что вы хотите снять?</h4>

                <!-- Subscribe form -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">


                        <form class="subscribe-form form-inline" action="" id="form_5" role="form" onsubmit="return false;" onchange="validationStep(5)">

                            <p>
                                <label class="btn btn-default" style="width: 100%;">
                                    <input type="checkbox" id="object_1" name="type_object[]" value="101" style="float: left;">
                                    Однокомнатную
                                </label>
                            </p>

                            <p>
                                <label class="btn btn-default" style="width: 100%;">
                                    <input type="checkbox" id="object_2" name="type_object[]" value="102" style="float: left;">
                                    Двухкомнатную
                                </label>
                            </p>

                            <p>
                                <label class="btn btn-default" style="width: 100%;">
                                    <input type="checkbox" id="object_3" name="type_object[]" value="103" style="float: left;">
                                    Трехкомнатную
                                </label>
                            </p>

                            <hr/>

                            <p>
                                <label class="btn btn-default" style="width: 100%;">
                                    <input type="checkbox" id="object_room" name="type_object[]" value="201,202,203,204,205,206" style="float: left;">
                                    Комната
                                </label>
                            </p>

                            <!-- Button -->
                            <button class="btn btn-success" type="submit" id="save_form_5" disabled>Далее</button>

                        </form> <!-- /.subscribe-form -->

                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->


        <div class="row" id="step_6" style="display: none;">

            <div class="col-md-12">

                <!-- Title -->
                <h4>Какой у вас бюджет?</h4>

                <!-- Subscribe form -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">


                        <form class="subscribe-form form-inline" action="" id="form_6" role="form" onsubmit="return false;">

                            <p>Без учета коммунальных платежей</p>
                            <p>
                                <label class="btn btn-default" style="width: 100%;">
                                    <input type="radio" id="price_1" name="price" value="7000" style="float: left;">
                                    до 7000 UAH
                                </label>
                            </p>

                            <p>
                                <label class="btn btn-default" style="width: 100%;">
                                    <input type="radio" id="price_2" name="price" value="9000" style="float: left;" checked="checked">
                                    до 9000 UAH
                                </label>
                            </p>

                            <p>
                                <label class="btn btn-default" style="width: 100%;">
                                    <input type="radio" id="price_3" name="price" value="11000" style="float: left;">
                                    до 11000 UAH
                                </label>
                            </p>

                            <p>
                                <label class="btn btn-default" style="width: 100%;">
                                    <input type="radio" id="price_3" name="price" value="15000" style="float: left;">
                                    до 15000 UAH
                                </label>
                            </p>

                            <p>
                                <label class="btn btn-default" style="width: 100%;">
                                    <input type="radio" id="price_3" name="price" value="20000" style="float: left;">
                                    > 20000 UAH
                                </label>
                            </p>

                            <!-- Button -->
                            <button class="btn btn-success" type="submit" id="save_form_6">Далее</button>

                        </form> <!-- /.subscribe-form -->

                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->

        <div class="row" id="step_7" style="display: none;">

            <div class="col-md-12">
                <!-- Subscribe form -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <h1>Спасибо</h1>
                        <h2>Ваша заявка принята в работу</h2>
                        <p>Вы будете получать сообщения с объектами в Facebook Messenger, как только мы найдем что-то для вас</p>
                        {{--<div class="fb-like" data-href="https://www.facebook.com/rently.com.ua/" data-layout="button" data-action="recommend" data-size="large" data-show-faces="true" data-share="true"></div>--}}
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->

    </div> <!-- /.container -->

</section> <!-- /.subscribe-section -->


<script>

    var lead = {
        location: {
            lat: 0.0,
            lng: 0.0,
            text: ''
        },
        transports: [],
        messangerId: "{{Request::get('messanger_id', 'false')}}",
        time_start_route: '',
        time_duration: '',
        type_object: [],
        price: 0
    };

    function postAjax(url, data, success) {
        $.post(url, data);
    }

    document.getElementById('save_form_1').addEventListener('click', function (event) {
        document.getElementById('step_1').style.display = 'none';
        document.getElementById('step_2').style.display = 'block';
    });

    document.getElementById('save_form_2').addEventListener('click', function (event) {
        document.getElementById('step_2').style.display = 'none';
        document.getElementById('step_3').style.display = 'block';

        if(document.getElementById('transport_public').checked){
            lead.transports.push('public');
        }

        if(document.getElementById('transport_walking').checked){
            lead.transports.push('walking');
        }

        if(document.getElementById('transport_cycle').checked){
            lead.transports.push('cycle');
        }

        if(document.getElementById('transport_auto').checked){
            lead.transports.push('auto');
        }

        var data = {
            lat: lead.location.lat,
            lng: lead.location.lng,
            transports: lead.transports
        };

        postAjax('/facebook/get_flats_info', data, function(data){console.log(data)});

        console.log(lead);
    });

    document.getElementById('save_form_3').addEventListener('click', function (event) {

        var radios = document.getElementsByName('start_work');

        for (var i = 0, length = radios.length; i < length; i++) {
            if (radios[i].checked) {
                lead.time_start_route = radios[i].value;
                break;
            }
        }

        document.getElementById('step_3').style.display = 'none';
        document.getElementById('step_4').style.display = 'block';

        console.log(lead);

    });

    document.getElementById('save_form_4').addEventListener('click', function (event) {

        lead.time_duration = $('[name="transport_time"]:checked').val();

        console.log(lead);

        document.getElementById('step_4').style.display = 'none';
        document.getElementById('step_5').style.display = 'block';
    });

    document.getElementById('save_form_5').addEventListener('click', function (event) {

        var radios = document.getElementsByName('type_object');

        $('[name="type_object[]"]:checked').each(function(){
            lead.type_object.push($(this).val());
        });

        console.log(lead);

        document.getElementById('step_5').style.display = 'none';
        document.getElementById('step_6').style.display = 'block';
    });

    document.getElementById('save_form_6').addEventListener('click', function (event) {
        document.getElementById('step_6').style.display = 'none';
        document.getElementById('step_7').style.display = 'block';

        lead.price = $('[name=price]:checked').val();

        postAjax('/facebook/create_order', lead, function(data){console.log(data)});

    });

    function validationStep(step) {
        switch (step){
            case 2:
                if(
                    document.getElementById('transport_public').checked ||
                    document.getElementById('transport_walking').checked ||
                    document.getElementById('transport_cycle').checked ||
                    document.getElementById('transport_auto').checked
                ){
                    document.getElementById('save_form_2').removeAttribute('disabled');
                } else {
                    document.getElementById('save_form_2').setAttribute('disabled', 'disabled');
                }
                break;
            case 5:
                var radios = document.getElementsByName('type_object[]');

                var is_done_step_5 = false;

                for (var i = 0, length = radios.length; i < length; i++) {
                    if (radios[i].checked) {
                        is_done_step_5 = true;
                        break;
                    }
                }

                if(is_done_step_5){
                    document.getElementById('save_form_5').removeAttribute('disabled');
                } else {
                    document.getElementById('save_form_5').setAttribute('disabled', 'disabled');
                }

                break;
        }
    }

    function {{$callbackname}}() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 50.4426714, lng: 30.518353},
            scrollwheel: false,
            zoomControl: false,
            zoom: 10
        });

        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');

        input.addEventListener("keyup", function (evt) {
            map.setCenter({lat: 50.4426714, lng: 30.518353});
            map.setZoom(10);
            document.getElementById('save_form_1').setAttribute('disabled', 'disabled');
        }, false);

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.bindTo('bounds', map);
        autocomplete.setOptions({strictBounds: true});

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
            map: map,
            anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {

            infowindow.close();
            marker.setVisible(false);
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                return;
            }

            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
                document.getElementById('save_form_1').removeAttribute('disabled');
            } else {
                map.setCenter({lat: 50.4426714, lng: 30.518353});
                map.setZoom(10);
                document.getElementById('save_form_1').setAttribute('disabled', 'disabled');
            }
            marker.setPosition(place.geometry.location);
            marker.setVisible(true);

            lead.location = {
                lat: place.geometry.location.lat(),
                lng: place.geometry.location.lng(),
                text: place.formatted_address
            };

        });

    }

</script>

</body>
</html>