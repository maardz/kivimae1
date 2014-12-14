
<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page title - Site title</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">

        <!-- Tell Google which version of your site's URL you prefer: (http://example.com/products or http://www.example.com/products) -->
        <link rel="canonical" href="">

        <!-- Open graph (Facebook) sharing options -->
        <meta property="og:image" content="/og-image.png"/> <!-- Use a square image 600px wide, minimum 200px -->
        <meta property="og:title" content=""/>
        <meta property="og:description" content=""/>

        <!-- Icons -->
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
        <link rel="icon" type="image/png" href="/favicon-192x192.png" sizes="192x192">
        <meta name="msapplication-TileColor" content="#000000">
        <meta name="msapplication-TileImage" content="/mstile-144x144.png">

        <!-- Fonts (Load fonts with @font-family in css if possible, otherwise use the following) -->
        <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'> -->
        <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>--> <!-- Weights seperately, regual (400) must be last  -->

        <!-- Essential CSS (load) -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-3.2.0.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!-- <link rel="stylesheet" type="text/css" href="assets/css/print.css" media="print"> --> <!-- Print CSS -->

        <!-- Essential JS -->
        <script src="assets/js/vendor/modernizr-2.8.3.custom.min.js"></script>
  </head>

  <body>

   <?php include "header.php"; ?>

    <div class="container">

     
 
      <?php 

      $paksus = $_POST['paksus'];
      $laius = $_POST['laius'];
      $pikkus = $_POST['pikkus'];
      $hind = $_POST['hind'];

      if( is_numeric( $paksus ) && is_numeric( $laius ) && is_numeric( $pikkus ) && is_numeric( $hind ) ){
        $maht = $paksus * $laius; 
        $kogus = $maht * $pikkus;
        $summa = $kogus * $hind;

        echo "Toote summa kokku on" . " " . $summa;

      }
      else
  { 
    echo( "Invalid entry - please retry" ); 
  }

       
      ?>



    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
