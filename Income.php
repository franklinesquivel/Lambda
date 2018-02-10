<?php
  require_once('php/Person.php');
?>

<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Lambda</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Materialize CSS">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    
    <script src="js/materialize.js"></script>
    
    <script src="js/init.js"></script>
    <script src="js/income.js"></script>
  </head>
  <body class="mdl-demo">
    <nav class="color-primary">
      <div class="nav-wrapper">
        <h2 class="brand-logo">Lambda &copy; - Ingresos</h2>
      </div>
    </nav>  
    <div class="tab-bar  color-primary--dark">
      <a href="/Lambda/" class="layout__tab">Inicio</a>
      <a href="/Lambda/Register.php" class="layout__tab">Registrate</a>
      <a href="/Lambda/Expenses.php" class="layout__tab">Gastos</a>
      <a href="/Lambda/Income.php" class="layout__tab is-active">Ingresos</a>
      <a href="/Lambda/Report.php" class="layout__tab">Reporte [Ingresos VS Gastos]</a>
      <a href="/Lambda/Convertion.php" class="layout__tab">Conversión de Ingresos</a>
      <button class="btn-floating btn-large waves-effect waves-light red modal-trigger" href="#mdlRegister" id="add">
        <i class="material-icons" role="presentation">add</i>
        <span class="visuallyhidden">Add</span>
      </button>
    </div>
    <div class="container">
      <main class="mdl-layout__content">

      </main>

      <div id="mdlRegister" class="modal">
        <div class="modal-content">
          <h4 class="center">Añadir Ingreso</h4>
          <form name="frmIncome" class="row">
            <div class="input-field col s10 m6 l6 offset-s1 offset-m3 offset-l3">
              <label for="txtDate">Fecha</label><br>
              <input type="date" name="txtDate" id="txtDate">
            </div>

            <div class="input-field col s10 m6 l6 offset-s1 offset-m3 offset-l3">
              <input type="text" name="txtType" id="txtType">
              <label for="txtType">Tipo del ingreso</label>
            </div>

            <div class="input-field col s10 m6 l6 offset-s1 offset-m3 offset-l3">
              <textarea id="txtDesc" class="materialize-textarea"></textarea>
              <label for="txtDesc">Descripción</label>
            </div>

            <div class="input-field col s10 m6 l6 offset-s1 offset-m3 offset-l3">
              <input type="number" name="txtAmount" id="txtAmount">
              <label for="txtAmount">Monto</label>
            </div>

            <div class="input-field col s10 m6 l6 offset-s1 offset-m3 offset-l3">
              <center><button class="btn btnSend">Añadir</button></center>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
