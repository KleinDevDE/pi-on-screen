<!DOCTYPE html>
<html lang="de">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <meta name="description" content="Das Urspringer Schwarze Brett - nur zum internen Gebrauch">
    <meta name="author" content="HWS">


    <title>USB - Urspringer Schwarzes Brett</title>

    <!-- Bootstrap-CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Besondere Stile für diese Vorlage -->
    <link href="css/sticky-footer.css" rel="stylesheet">


  </head>

  <body>
    <?php include 'header.inc.php'; ?> <br><br><br>

      <!-- Seiteninhalt -->
<!-- <?php echo date("w"); //Ausgabe TAG in 0-7 ?> -->
<div class="container-fluid">    
    <div class="row">
  <div class="col-md-8"><h2>Vertretungen, Stand XX:XX Uhr</h2><br> <?php //TODO: Mach mal ?>
  5. Klasse - D - PAV 1 - Lä<br>
  6. Klasse - E - PAV 1 - ELi <br>
  
 <!-- <h2>Stundenplan für TODO: Wochentag; Stunde </h2><br>
  5. Klasse - D - PAV 1 <br>
  6. Klasse - E - PAV 1 <br>
  7. Klasse - M - PAV 1 <br>
  8. Klasse - Ph - PAV 1 <br>
  9. Klasse - Geo - PAV 1 <br>
  10a. Klasse - L - PAV 1 <br>
  10b. Klasse - L - PAV 1 <br>
  11. Klasse - D - PAV 1 <br>
  11. Klasse - GMK - PAV 1 <br>
  12. Klasse - Nix - PAV 1 <br>
  12. Klasse - Kuchen - PAV 1 <br> -->
  </div>
<div class="col-md-4"><h2>Heute in der Mensa...</h2> <?php  // Modul Mensa - Lecker lecker
  $array = file("mensa.txt");
  $test = count(file("mensa.txt"));
  echo $array[date("w")];
?>
</div>
</div>
</div>
<div style="display:block; text-align:center;">
	<a style="text-decoration:none;border-style:none;color:black;font-size:36px" target="_blank" href="http://www.schnelle-online.info/Kalender.html" id="soidate191837822596">Kalender</a><br/><a style="text-decoration:none;border-style:none;color:black;" target="_blank" href="http://www.schnelle-online.info/Atomuhr-Uhrzeit.html" id="soitime191837822596">Atomuhr</a>
<script type="text/javascript"> <?php //Uhrzeit. Braucht Inet-Zugriff ?>
SOI = (typeof(SOI) != 'undefined') ? SOI : {};(SOI.ac21fs = SOI.ac21fs || []).push(function() {
(new SOI.DateTimeService("191837822596", "DE")).appendTime(" Uhr").setDay2digits(true).setMonthMode(1).start();});
(function() {if (typeof(SOI.scrAc21) == "undefined") { SOI.scrAc21=document.createElement('script');SOI.scrAc21.type='text/javascript'; SOI.scrAc21.async=true;SOI.scrAc21.src=((document.location.protocol == 'https:') ? 'https://' : 'http://') + 'homepage-tools.schnelle-online.info/Homepage/atomicclock2_1.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(SOI.scrAc21, s);}})();
</script>
</div> 
<?php 

?>

       <!-- Seite fertig -->   
      <?php include 'footer.inc.php'; ?>
  </body>

</html>