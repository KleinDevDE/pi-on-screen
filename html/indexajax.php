<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
    <meta name="description" content="Das Urspringer Schwarze Brett - nur zum internen Gebrauch">
    <meta name="author" content="HWS">
    <title>USB - Urspringer Schwarzes Brett</title>
    <!--<link rel="stylesheet" href="css/style.css"> -->
    <script language="javascript" type="text/javascript" src="uhr.js"></script>
    <!-- <script type="application/javascript" src="js/jquery.min.js"></script> -->

</head>


<body>

<div class="container-fluid" id="INHALT">
    <br>

    <div class="row">

        <!-- LINKE SPALTE -->
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

            <!-- VERTRETUNGSPLAN -->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4><b> <!--     Vertretungsplan /--> Bekanntmachungen </b></h4>
                </div>
                <div>
                    <h3>
                        <div id="vplan"></div>
                    </h3>
                </div>
            </div><!-- /VERTRETUNGSPLAN -->

            <!--Fahrplan -->

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4><b> Ihre nächsten Verbindungen </b></h4>
                </div>
                <div class="panel-body" id="zitat">
                    <h4><b>
                            <div id="content"><img
                                        src="https://vrrf.finalrewind.org/Schelklingen/Schelklingen.png?frontend=png&backend=efa.DING"
                                        id="fahrplan" alt="Abfahrtstafel" width="470" height="125"/></div>
                        </b>
                </div> <!--Cronjob sollte laufen --></div>
            <!-- /Fahrplan -->

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4><b> Zitat des Tages </b></h4>
                </div>
                <div class="panel-body" id="zitat">
                    <h4><b><?php $zitat = file_get_contents('zitatdestages.txt');
                            echo $zitat; ?></b></h4></div> <!--Cronjob sollte laufen -->

            </div>
            <!-- UHRZEIT -->
            <div class="panel panel-default">
                <div class="panel-body" id="uhrzeit" style="text-align:right;">
                    <span style="font-size:2.0em;"><div id="ZeitBox01"><div id="ZeitAnzeige"></div></div></span>
                </div>
            </div><!-- /UHRZEIT -->

        </div><!-- /LINKE SPALTE -->


        <!-- RECHTE SPALTE -->
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

            <!-- SPEISEPLAN -->
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h4><b> Speiseplan - Testphase </b></h4>
                </div>
                <div class="panel-body">
                    <h3>
                        <div id="mensa"></div>
                    </h3>
                </div>
            </div><!-- /SPEISEPLAN -->
            <!-- Wetter -->
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4><b> Wetter </b></h4>
                </div>
                <div class="panel-body">


                    <div style="width: 800px;">

                        <div style="width: 175px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 5px; float: left;">
                            <div id='tameteo'
                                 style='font-family:Arial;text-align:center;border:solid 1px #000000; background:#DCEDE0; width:155px; padding:4px'>
                                <b>Urspring</b><br/> <img
                                        src='http://www.mein-wetter.com/widget4/a9f47ef2e83b474d91fe89c8a6cb5491.png'
                                        id="wetteru" border='0'><br/></div>
                        </div>
                        <div style="width: 175px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 5px; float: left;">
                            <div id='tameteo'
                                 style='font-family:Arial;text-align:center;border:solid 1px #000000; background:#DCEDE0; width:155px; padding:4px'>
                                <b>Ulm</b><br/><img
                                        src='http://www.mein-wetter.com/widget4/1e3523ed49934f8ba2800a5dc7946e8d.png'
                                        id="wetterulm" border='0'><br/></div>
                        </div>
                        <div style="width: 175px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 5px; float: left;">
                            <div id='tameteo'
                                 style='font-family:Arial;text-align:center;border:solid 1px #000000; background:#DCEDE0; width:155px; padding:4px'>
                                <b>Stuttgart</b><br/><img
                                        src='http://www.mein-wetter.com/widget4/30119a98e2384faaaad7e88ee0bdb3b2.png'
                                        id="wetterstr" border='0'><br/></div>
                        </div>
                        <div style="clear: left;"></div>
                    </div>
                </div>
            </div>
            <!-- /Wetter -->

            <!-- NEWSTICKER -->
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4><b> Newsticker - <i>Urspringblog</i> &amp; Tagesschau </b></h4>
                </div>
                <div class="panel-body" id="newsticker">
                            <span style="font-size:1.03em;">

                                 <div id="news"></div>
                            </span>
                </div>
            </div><!-- /NEWSTICKER -->

            <p align="right"><img src="logow.png" alt="Logo der Urspringschule" class="pull-right" width="68"
                                  height="51"></p> <!-- Nettes Urspringlogo -->
            <p>
                Version 1.5-ay vom 02.03.17 <br> proudly presented by OJJGHSKPLH
            </p>
        </div><!-- /RECHTE SPALTE -->

    </div><!-- /.row -->


</div><!-- /.container -->

<!-- JavaScript goes last for the page to load faster -->
<script type="application/javascript" src="js/jquery.min.js"></script>
<script type="application/javascript" src="js/bootstrap.min.js"></script>
<script type="application/javascript">
    setInterval(function () {
        document.getElementById("fahrplan").src = "https://vrrf.finalrewind.org/Schelklingen/Schelklingen.png?frontend=png&backend=efa.DING";

    }, 60 * 1000);

    setInterval(function () {
        document.getElementById("wetterulm").src = "http://www.mein-wetter.com/widget4/1e3523ed49934f8ba2800a5dc7946e8d.png";
        document.getElementById("wetteru").src = "http://www.mein-wetter.com/widget4/a9f47ef2e83b474d91fe89c8a6cb5491.png";
        document.getElementById("wetterstr").src = "http://www.mein-wetter.com/widget4/30119a98e2384faaaad7e88ee0bdb3b2.png";

    }, 900000);
    setInterval(function () {

    }, 60 * 1000);

    $(document).ready(function () {
        $("#news").load('news.php')
        setInterval(function () {
            $("#news").load('news.php')
        }, 300000);
    });

    $(document).ready(function () {
        $("#vplan").load('vplan.php')
        setInterval(function () {
            $("#vplan").load('vplan.php')
        }, 600000);
    });

    $(document).ready(function () {
        $("#mensa").load('mensa.php')
        setInterval(function () {
            $("#mensa").load('mensa.php')
        }, 3600000);
    });


</script> <!-- http://snipplr.com/view.php?codeview&id=17272 -->
</body>
</html>
