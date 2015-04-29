<!DOCTYPE html>
<html lang="tr">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Borajet Online Uçak Bileti">
<meta name="author" content="">

<title>BoraJet | Online Uçak Bileti</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- Custom Google Web Font -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/demo.css"/>
<link rel="stylesheet" type="text/css" href="css/slicebox.css"/>
<link rel="stylesheet" href="css/vendor.css"/>
<link rel="stylesheet" href="css/plugins.css"/>
<link rel="stylesheet" href="css/fleet-page.css"/>
<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-37256305-1', 'auto');
 ga('send', 'pageview');

</script>



<!-- Add custom CSS here -->
<link href="css/main.css" rel="stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.slicebox.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.custom.49511.js"></script>

    <link href="css/lightbox.css" rel="stylesheet" />
    <script src="js/lightbox.min.js"></script>
    
<style>
    .carousel.fade {
        opacity: 1;
    }

    .carousel.fade .item {
        -moz-transition: opacity ease-in-out .7s;
        -o-transition: opacity ease-in-out .7s;
        -webkit-transition: opacity ease-in-out .7s;
        transition: opacity ease-in-out .7s;
        left: 0 !important;
        opacity: 0;
        top: 0;
        position: absolute;
        width: 100%;
        display: block !important;
        z-index: 1;
    }

    .carousel.fade .item:first-child {
        top: auto;
        position: relative;
    }

    .carousel.fade .item.active {
        opacity: 1;
        -moz-transition: opacity ease-in-out .7s;
        -o-transition: opacity ease-in-out .7s;
        -webkit-transition: opacity ease-in-out .7s;
        transition: opacity ease-in-out .7s;
        z-index: 2;
    }

    .carousel-control {
        z-index: 3;
    }
</style>
<script>
    var specialKeys = new Array();
    specialKeys.push(8); //Backspace
    function IsNumeric(e) {
        var keyCode = e.which ? e.which : e.keyCode
        var ret = ((keyCode >= 46 && keyCode <= 57 ) || specialKeys.indexOf(keyCode) != -1 );

        return ret;
    }
    function validateAlpha() {
        var textInput = document.getElementById("name").value;
        textInput = textInput.replace(/[^A-Za-z ]/g, "");
        document.getElementById("name").value = textInput;
        var textInput = document.getElementById("sirname").value;
        textInput = textInput.replace(/[^A-Za-z ]/g, "");
        document.getElementById("sirname").value = textInput;
        return true;
    }
    $(function () {
        var months = ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran',
            'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'];
        
        var dateToday = new Date();
        $("#from").datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            minDate: dateToday,
            language: "tr",
            numberOfMonths: 1,
            onClose: function (selectedDate) {
                var st = $("#from").val();
				var pattern = /(\d{2})\.(\d{2})\.(\d{4})/;
				var startDate = new Date(st.replace(pattern,'$3-$2-$1'));
				
				
				
				
                var selDay = startDate.getDate();
                var selMonth = months[startDate.getMonth()];
                var selYear = startDate.getFullYear();
                var selDayName = $.datepicker.formatDate('DD', startDate);
                if (!isNaN(selDay)) {
                    $('#datepicker1,#datepicker2').children('.year').html(selYear);
                    $('#datepicker1,#datepicker2').children('.dayName').html(selDayName);
                    $('#datepicker1,#datepicker2').children('.day').html(selDay);
                    $('#datepicker1,#datepicker2').children('.month').html(selMonth);
                }
                $("#to").datepicker("option", "minDate", startDate);
				$("#to").val($('#from').val());
				
            }
        });
        $("#to").datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            minDate: dateToday,
            numberOfMonths: 1,
            onClose: function (selectedDate) {
                $("#from").datepicker("option", "maxDate", selectedDate);
                
				var st = $("#to").val();
				var pattern = /(\d{2})\.(\d{2})\.(\d{4})/;
				var startDate = new Date(st.replace(pattern,'$3-$2-$1'));

				
                var selDay = startDate.getDate();
                var selMonth = months[startDate.getMonth()];
                var selYear = startDate.getFullYear();
                var selDayName = $.datepicker.formatDate('DD', startDate);
                if (!isNaN(selDay)) {
                    $('#datepicker2').children('.year').html(selYear);
                    $('#datepicker2').children('.dayName').html(selDayName);
                    $('#datepicker2').children('.day').html(selDay);
                    $('#datepicker2').children('.month').html(selMonth);
                }
            }
        });

        jQuery(function ($) {
            $.datepicker.regional['tr'] = {
                closeText: 'kapat',
                prevText: '&#x3c;geri',
                nextText: 'ileri&#x3e',
                currentText: 'bugün',
                monthNames: ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran',
                    'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'],
                monthNamesShort: ['Oca', 'Şub', 'Mar', 'Nis', 'May', 'Haz',
                    'Tem', 'Ağu', 'Eyl', 'Eki', 'Kas', 'Ara'],
                dayNames: ['Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi'],
                dayNamesShort: ['Pz', 'Pt', 'Sa', 'Ça', 'Pe', 'Cu', 'Ct'],
                dayNamesMin: ['Pz', 'Pt', 'Sa', 'Ça', 'Pe', 'Cu', 'Ct'],
                weekHeader: 'Hf',
                dateFormat: 'dd.mm.yy',
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: ''};
            $.datepicker.setDefaults($.datepicker.regional['tr']);
        });
        $.datepicker.setDefaults($.datepicker.regional[ "tr" ]);
    });
</script>
<script>
    $(document).ready(function () {
        var monthNames = ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran',
            'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'];
        var dayNames = ['Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi'];
        var d = new Date();
        var month = monthNames[(parseInt($.datepicker.formatDate('m', d)) - 1)];
        var dday = d.getDate();
        var day = dayNames[d.getUTCDay()];
        var year = d.getFullYear();
        var output = d.getFullYear() + '/' +
                (month < 10 ? '0' : '') + month + '/' +
                (day < 10 ? '0' : '') + day;
        console.log(month + '-' + day + '-' + year);
        $('#datepicker2, #datepicker1').children('.year').html(year);
        $('#datepicker2, #datepicker1').children('.dayName').html(day);
        $('#datepicker2, #datepicker1').children('.day').html(dday);
        $('#datepicker2, #datepicker1').children('.month').html(month);
        //$('#optionSet').hide().delay(600).show("slide", {direction: "up"}, 600);
        $('#datepicker1').click(
                function () {
                    $('#from').focus();
                }
        );
        $('#datepicker2').click(
                function () {
                    $('#to').focus();
                }
        );

    });
</script>
<script>
    $(document).ready(function () {
        $('#optionSet').hide().delay(600).show("slide", {direction: "up"}, 600);
        $('#datepicker1').click(
                function () {
                    $('#from').focus();
                }
        );
        $('#datepicker2').click(
                function () {
                    $('#to').focus();
                }
        );
        $('#tway').click(function () {
            $('#inputs2').hide();
            $('#backdate').show();
            $('#goDate').addClass('c40');
        });
        $('#oway').click(function () {
            $('#inputs2').hide();
            $('#backdate').hide();
            $('#goDate').removeClass('c40');

        });
        $('#mway').click(function () {
            $('#inputs2').hide().removeClass('hidden').slideDown(300);
            $('#goDate').addClass('c40');
            $('#backdate').show();
        });
        $('.checkin').click(function () {
            $('.online-check, .checkin .submit').slideToggle(300);
        });
		$('.reservations').click(function () {
            $('.reservations-hid, .reservations .submit').slideToggle(300);
        });
        $('.online-check, .checkin .submit ,.reservations-hid,.reservations .submit').click(function (e) {
            e.stopPropagation();
        });
		
        //mini right\left sliders script
        //$('.carousel').carousel({
        //    interval: 7500,
        //    pause: "false"
        //});
		
    });
</script>
</head>

<body>
<!-- UCUS FORM-->
<div class="hidden-form">
<div class="center-ideal">
<div class="inner-center">
<?php
$ibe = @fopen("https://borajet.crane.aero/web/RezvEntry.xhtml?LANGUAGE=TR", 'r');
$localibe = fopen($libe, 'w+');
stream_copy_to_stream($ibe, $localibe);

//clean up local copy of orginal IBE and make a local copy of MemberRezvEntryIbe.jsp
 $contents = stream_get_contents($ibe);
// head tag’leri replace ediliyor,

fclose($ibe);
fclose($localibe);
$localpath="https://borajet.com.tr/";

$head = substr($contents, strpos($contents, "<head>"), strpos($contents, "</head>") - strpos($contents,
"<head>") + strlen("<head>") + 1);
 $head = preg_replace("/<title>.*<\/title>/iU", "", $head);
 $head = str_replace('<link href=\"', '<link href='.$localpath, $head);
 $head = str_replace('src=\"', 'src='.$localpath, $head);
 $head = str_replace("<head>", "", $head);
 $head = str_replace("</head>", "", $head);
 $head = preg_replace("/<meta.*>/iU", "", $head);
 $head = str_replace("images/takvim.png", "/images/takvim.png", $head);
 $head = str_replace('<script src="./js/jquery.min.js"></script>', "", $head);
  $head = str_replace('<script src="./js/site.min.js"></script>', "", $head);
 $head = str_replace('<script src="./js/jquery-ui.js"></script>', "", $head);
 //$head = preg_replace("/<script.*src=.*><\/script>/iU", "xxxx", $head);
 $head = str_replace("MemberRezvResults.jsp","https://borajet.crane.aero/Common/MemberRezvResults.jsp?LANGUAGE=TR",$head);

// Body tag’leri replace ediliyor
$body = substr($contents, strpos($contents, "<body"), strpos($contents, "</body>") - strpos($contents,
"<body") + strlen("<body") + 1);
 $body = str_replace("<link href=\"", "<link href=\"$localpath", $body);
 $body = str_replace("src=\"", "src=\"$localpath", $body);
 $body = preg_replace("/<!DOCTYPE html.*>/", "", $body);
 $body = preg_replace("/<body.*>/iU", "", $body);
 $body = preg_replace("/<\/body>/", "", $body);
 $body = str_replace ("<html xmlns=\"https://www.w3.org/1999/xhtml\">", "", $body);
 $body = str_replace ("<meta charset=\"utf-8\">", "", $body);
 
 $body = str_replace("/web/RezvEntry.xhtml;","https://borajet.crane.aero/web/RezvEntry.xhtml?LANGUAGE=TR;",$body);

 $divibe = $body;
 //$divibe = preg_replace("/<script.*src=.*><\/script>/iU", "", $divibe);
 echo $head; // replace ettiğimiz head alanı
 echo $divibe; // replace ettiğimiz form alanı

?>
</div>
</div>
<!-- finish center-ideal -->
</div>

</div>
<!-- end UCUS FORM-->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="navbar-header">
                    <div class="logoCont hidden-lg hidden-md" style="margin-top: 50px;width: 100px;float: left;"><a
                            href="/"><span class="logo"></span></a></div>
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>


                <div class="collapse navbar-collapse  navbar-ex1-collapse">
                    <nav>

                        <ul class="nav navbar-nav hidden-xs">
                            <li>
                                <div class="logoCont hidden-xs"><a href="/"><span class="logo"></span></a>
                                </div>
                            </li>
                            <li><a href="kurumsal.html"><span data-hover="Kurumsal">Kurumsal</span></a></li>
                            <li><a href="havalimani-transferleri.html"><span data-hover="Havalimanı Transferleri">Havalimanı Transferleri</span></a>
                            </li>
                            <li><a href="/private" target="_blank"><span
                                    data-hover="Private Jet">Private Jet</span></a></li>
                            <li><a href="filo.html"><span data-hover="Filo">Filo</span></a></li>
                            <li><a href="iletisim.html"><span data-hover="İletişim">İletişim</span></a></li>
                            <li style="margin: 0px;"><a href="yolcu-haklari.html"><img src="images/icons/yolcu.png"
                                                                                       style="width: 60px;margin-top: -7px;"></a>
                            </li>
                            <li>
                                <ul id="user-menu" class="nav navbar-nav navbar-right">
                                    <li>
                                        <select name="language" id="language">
                                            <option value="TR">TR</option>
                                            <option value="ENG">ENG</option>
                                            <option value="FR">FR</option>
                                        </select>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav hidden-md hidden-lg">
                            <li><a href="kurumsal.html"><span data-hover="Kurumsal">Kurumsal</span></a></li>
                            <li><a href="havalimani-transferleri.html"><span data-hover="Havalimanı Transferleri">Havalimanı Transferleri</span></a>
                            </li>
                            <li><a href="/private" target="_blank"><span
                                    data-hover="Private Jet">Private Jet</span></a></li>
                            <li><a href="filo.html"><span data-hover="Filo">Filo</span></a></li>
                            <li><a href="iletisim.html"><span data-hover="İletişim">İletişim</span></a></li>
                            <li><a href="yolcu-haklari.html"><span data-hover="Yolcu Hakları">Yolcu hakları</span></a>
                            </li>
                            <li>
                            <li><a href="../index-en.php"><span data-hover="English">English</span></a></li>
                            </li>
                        </ul>

                    </nav>
                </div>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->

            <!-- /.navbar-collapse -->
        </div>
    </div>
    <!-- /.container -->
</nav>

<div class="intro-header">
    <div id="carousel-example-generic" class="carousel fade" data-ride="carousel">
        

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <div class="item active">
                <img src="images/slideJetn1.png" alt="">

                <div class="carousel-caption">
                </div>
            </div>

			<!--
            <div class="item">
                <img src="images/slideJetn1.png" alt="">

                <div class="carousel-caption">

                </div>
            </div>
			-->
        </div>

        <!-- Controls 
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        -->
    </div>


</div>
<!-- /.intro-header -->

<div class="content-section-a">

<div class="container">

    <div class="row" id="optionSet">
        <div class="col-md-1"></div>
        <div class="col-md-6" style="padding-right:0px;">
            <!-- Option Table-->
            <div class="optionTable">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <span id="tway" class="pressOption">Gidiş - Dönüş</span>
                        <span id="sep" class="pressOption sep">|</span>
                        <span id="oway" class="pressOption">Tek Yön</span>
                        
                    </div>

                </div>
                <div class="options">
                    <div class="row" id="inputs1">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><img src="images/bckg/from.png"></span>
                                <!--<input value="ADA" type="text" id="form-nereden1" class="form-control" placeholder="Nereden">-->
                                <select id="form-nereden1" class="form-control">
                                	
                                </select>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><img src="images/bckg/to.png"></span>
                                <!--<input value="BEY" type="text" id="form-nereye1" class="form-control" placeholder="Nereye">-->
                                <select id="form-nereye1" class="form-control">
                                	
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row hidden" id="inputs2" style="margin:20px -15px;">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><img src="images/bckg/from.png"></span>
                                <!--<input type="text" class="form-control" placeholder="Nereden">-->
                                <select id="form-nereden2" class="form-control">
                                	
                                </select>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><img src="images/bckg/to.png"></span>
                                <!--<input type="text" class="form-control" placeholder="Nereye">-->
                                <select id="form-nereye2" class="form-control">
                                	
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Yolcu Sayısı</h5>
                            <select class="yolcu" id="yolcu1">
                                <option>Yetişkin</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>

                            <select class="yolcu" id="yolcu2">
                                <option>Çocuk</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>

                            <select class="yolcu" id="yolcu3">
                                <option>Bebek</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                            <br clear="all"/>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="c40" id="goDate">
                                        <h5>Gidiş</h5>
                                        <input type="text" id="from" hidden="true">

                                        <div class="datepick" id="datepicker1">
                                            <span class="month">Ağustos</span>
                                            <span class="day">22</span>
                                            <span class="dayName">Cuma</span>
                                        </div>
                                    </div>
                                    <div class="c20">&nbsp;</div>
                                    <div class="c40" id="backdate">
                                        <h5>Dönüş</h5>
                                        <input type="text" id="to" hidden="true">

                                        <div class="datepick" id="datepicker2">
                                            <span class="month">Ağustos</span>
                                            <span class="day">23</span>
                                            <span class="dayName">Cumartesi</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" id="ucus-ara" class="submit" value="UÇUŞ ARA"></input>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4" style="padding-left:40px;">
		<span class="rightSpan checkin"><span class="glyphicon glyphicon-plane"></span><a>Online check
            in</a><span class="glyphicon glyphicon-plus"></span>
		<div class="input-group online-check">
            <input type="text" class="form-control pnr" id="form-pnr-no" 
                    required placeholder="PNR">
        </div>
		<div class="input-group online-check">
            <input type="text" class="form-control ad" placeholder="AD" id="name"  required>
        </div>
		<div class="input-group online-check">
            <input type="text" class="form-control soyad" placeholder="SOYAD" id="sirname"
                   required>
        </div>
		<input type="submit" data-lang="tr" class="pnrsubmit submit" value="GÖNDER" style="height: 46px; display: none;">
		</span>
        
        <!-- added -->
        <span class="rightSpan reservations"><span class="glyphicon glyphicon-book"></span><a>Rezervasyonlarım</a>
        <span class="glyphicon glyphicon-plus"></span>
		<div class="input-group reservations-hid">
            <input type="text" class="form-control pnr" id="reservations-pnr" 
                    required placeholder="PNR">
        </div>
		<div class="input-group reservations-hid">
            <input type="text" class="form-control soyad" placeholder="SOYAD" id="reservations-surname"
                   required>
        </div>
		<input type="submit" data-lang="tr" class="reservationssubmit submit" value="GÖNDER" style="height: 46px; display: none;">
		</span>
        
        
        <!-- end -->
        
        
        
            <!--<span class="rightSpan"><span class="glyphicon glyphicon-map-marker"></span><a href="#">Haritadan satın al</a><span class="glyphicon glyphicon-plus"></span></span>-->
            <span class="rightSpan"><span class="glyphicon glyphicon-gift"></span><a
                    href="kampanyalar.html">Kampanyalar</a><span class="glyphicon glyphicon-plus"></span></span>
        </div>
        <div class="col-md-1"></div>
    </div>
    <!-- /.container -->
    
    <!--<div class="row">
    	<div class="col-md-1"></div>
    	<div class="col-md-10">
        	
            <div class="yolcu-yorumlari-container">
            	<div class="yolcu-title">YOLCULARIMIZ DİYOR Kİ:</div>
                <br clear="all"/>
                <div class="yolcu-yorum-carousel">
                
                	<ul>
                    	<li class="active">
                        	“Borajet ile ilk uçuşum.  Havayolunuzu tanımıyordum. Tanımadığım için de endişem vardı.
                            Ancak çok konforlu ve rahat bir yolculuk oldu benim için.
                            Dilerim bu hizmet kalitenizi hiç bozmadan daha geniş bir parkurda gerçekleştirirsiniz.”
                            <br/>
                            <b>Erengül Bilenser</b>
                            <br/>
                            27. 11.2014,  Uçuş No. 736, İstanbul-Adana
                        </li>
                        <li>
                        	“Öncelikle özür diliyorum sizden. Arkadaşlarım biletimi Borajet’ten aldılar diye kızdım, önyargıyla 

uçağa bindim.  Sonra her şey umduğumdan çok daha iy ve kaliteli çıktı. Teşekkür ediyor, hoş geldiniz 

diyorum.”
                        	<br/>
                            <b>Köksal Danışmaz</b>
                            <br/>
                            07.12.2014, Uçuş no: 355, İstanbul- Trabzon
                        </li>
                        <li>
                        	“İlk kez denediğim firmanızda umduğumun çok üstünde bir kalite ilek karşılaştım. Hosteslerin ilgisi ve 

hizmet kalitesi, uçağın rahatlığı, yiyecek-içecek kalitesi  ile, hepsini denediğim diğer havayollarından 

sonra, benim için ilk sırayı Türkiye’nin “kaliteli havayolu”  Borajet almıştır.”
<br/>
<b>Levent Ayaz</b>
<br/>
30.11.2014, ucuş no: 356, Trabzon-İstanbul
                        </li>
                        <li>
                        	“Daha önce sürekli diğer iki özel uçak şirketimizle seyahat ederken, İstanbul- İzmir arasında Borajet 

ile tanıştım ve çok beğendim. Kalitelisiniz. Uçaklarınız, hizmet anlayışınız ve en önemlisi çalışanlarınız 

çok pozitif…”
<br/>
<b>Diler Ebeperi</b>
</br>
06.12.2014, Uçuş no: 276, Adana-İstanbul
                        </li>
                        <li>
                        	“İkramınız yemekler (etli veya sebzeli wrap) oldukça güzel… Hosteslerin ilgisi çok nazik ve güleryüzlü… 

Uçakiçi koltuk düzeni son derece modern ve rahat… Fiyat/performans kalitesi oldukça tatminkar… 

Sürekli olması dileğiyle.”
<br/>
<b>Ediz Ay</b>
<br/>
11.11.2014, uçuş no: YB 281, İstanbul-izmir
                        </li>
                    </ul>
                
                </div>
            </div>
            
        </div>
        <div class="col-md-1"></div>
    </div>-->

</div>
<!-- /.content-section-a -->

<div class="content-section-b">

    <div class="container">
        

        
        <!-- indiirmli uçuşlar-->
        
        <!--
        <h1 class="title">İndirimli Uçuşlar</h1>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                		
                    <div class="col-md-4">
                        <div class="kampanya">
                            <a href="indirimler.html">
                                <img src="../images/indirim/asker.jpg">
                            </a>

                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="kampanya">
                            <a href="indirimler.html">
                                <img src="../images/indirim/sehit.jpg">
                            </a>

                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="kampanya">
                            <a href="indirimler.html">
                                <img src="../images/indirim/ogrenci.jpg">
                            </a>

                            
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="kampanya">
                            <a href="indirimler.html">
                                <img src="../images/indirim/engelli.jpg">
                            </a>

                            
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="kampanya">
                            <a href="indirimler.html">
                                <img src="../images/indirim/aile.jpg">
                            </a>

                            
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        -->
        <!-- end indirimli uçuşlar-->
        
        
        <h1 class="title">İndirimli Uçuşlar</h1>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    
                    <!--<div class="col-md-4">
                        <div class="kampanya">
                        <div class="bilet-al">Bilet Al</div>
                            <a href="#">
                                <img src="../images/indirim/asker.jpg">
                            </a>
                        </div>
                    </div>-->
                    <div class="col-md-4">
                        <div class="kampanya">
                        <!--<div class="bilet-al">Bilet Al</div>-->
                            <a href="../images/indirim/engelli.jpg" data-lightbox="engelli">
                                <img src="../images/indirim/engelli.jpg">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="kampanya">
                        <!--<div class="bilet-al">Bilet Al</div>-->
                            <a href="../images/indirim/sehit.jpg" data-lightbox="sehit">
                                <img src="../images/indirim/sehit.jpg">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="kampanya">
                        <!--<div class="bilet-al">Bilet Al</div>-->
                            <a href="../images/indirim/gazi.jpg" data-lightbox="gazi">
                                <img src="../images/indirim/gazi.jpg">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="kampanya">
                        <!--<div class="bilet-al">Bilet Al</div>-->
                            <a href="../images/indirim/guvenlik.jpg" data-lightbox="guvenlik">
                                <img src="../images/indirim/guvenlik.jpg">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="kampanya">
                        <!--<div class="bilet-al">Bilet Al</div>-->
                            <a href="../images/indirim/ogrenci.jpg" data-lightbox="ogrenci">
                                <img src="../images/indirim/ogrenci.jpg">
                            </a>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-4">
                        <div class="kampanya">
                        <!--<div class="bilet-al">Bilet Al</div>-->
                            <a href="../images/indirim/bilgi.jpg" data-lightbox="bilgi">
                                <img src="../images/indirim/bilgi.jpg">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="kampanya">
                        <!--<div class="bilet-al">Bilet Al</div>-->
                            <a href="../images/indirim/vodafone.jpg" data-lightbox="vodafone">
                                <img src="../images/indirim/vodafone.jpg">
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        
        
        
    </div>
    <!-- /.container -->

</div>
<!-- /.content-section-b -->


<!--------------------------------------------- FOOTER ------------------------------------------>
<div id="bj-footer">
    <div class="container">
        <!--------------------------------------------- footer menu ------------------------------------------>
        <div class="row">
            <div class="footer-list col-xs-12 col-md-3 col-lg-3">
                <ul>
                    <li><a href="acenteler.php"> Acenteler </a></li>
                    <li><a href="insan-kaynaklari.html"> İnsan Kaynakları</a></li>
                    <li><a href="havalimani-transferleri.html">Transfer</a></li>
                </ul>
            </div>

            <div class="footer-list col-xs-12 col-md-3 col-lg-3">
                <ul>
                    <li><a href="gizlilik.html">Gizlilik</a></li>
                    <li><a href="sss.html">Sıkça Sorulan Sorular</a></li>
                    <li><a href="yolcu-ozel-durum-ve-talepleri.html">Yolcu Özel Durum ve Talepleri</a></li>
                </ul>
            </div>

            <div class="footer-list col-xs-12 col-md-3 col-lg-3">
                <ul>
                    <li><a href="yolcu-haklari.html">Yolcu Hakları </a></li>
                    <li><a href="personel-giris.html">Personel Giriş</a></li>

                </ul>
            </div>

            <div class="footer-list col-xs-12 col-md-3 col-lg-3">
                <ul>
                    <li><a href="filo.html">Filo</a></li>
                    <li><a href="/private" target="_blank">Private Jet</a></li>
                    <li><a href="site-haritasi.html">Site Haritası</a></li>
                </ul>
            </div>
        </div>
        <!---------------------------------------------// footer menu ------------------------------------------>


        <!--------------------------------------------- social ------------------------------------------>
        <div class="row">
            <div class="social">
                <a class="fa fa-facebook" href="https://www.facebook.com/Borajet"><span>Facebook</span></a>
                <a class="fa fa-twitter" href="https://twitter.com/borajetcomtr"><span>Twitter</span></a>
                <a class="fa fa-instagram" href="https://instagram.com/borajet"><span>Instagram</span></a>
                
            </div>
        </div>
    </div>

    <!---------------------------------------------// social ------------------------------------------>


    <div class="cow">
        <div class="copyright">
            © Bora Jet 2014 Tüm hakları saklıdır.
        </div>


    </div>


    <div class="dow">
        <img class="footer-logo" src="images/logo.png" alt=""/>
    </div>
</div>


<!---------------------------------------------// FOOTER ------------------------------------------>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.11.8/TweenMax.min.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->


<script src="js/plugins.js"></script>

<script src="js/landingpage.js"></script>
<script src="js/main.js"></script>

<script>
$(document).ready(function() {
	
	$(".yolcu-yorum-carousel ul li").fadeOut("fast");
	$(".yolcu-yorum-carousel ul li").eq(0).fadeIn();
	var index = 0;
	setInterval(function(){
		index++;
		$(".yolcu-yorum-carousel ul li").eq(index-1).fadeOut("fast");
		$(".yolcu-yorum-carousel ul li").eq(index).delay(500).fadeIn("slow");
		
		
		if (index+1 == $(".yolcu-yorum-carousel ul li").size()){
			index = -1;
		}
		},10000);
	
	
	
});
</script>


</body>

</html>
