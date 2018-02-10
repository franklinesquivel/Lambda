<?php
  require_once('php/Person.php');
  checkSession();
?>

<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    
    <script src="js/materialize.js"></script>
    
    <script src="js/init.js"></script>
    <script src="js/expenses.js"></script>
  </head>
  <body class="mdl-demo">
    <nav class="color-primary">
      <div class="nav-wrapper">
        <h2 class="brand-logo">Lambda &copy; - Gastos</h2>
      </div>
    </nav>  
    <div class="tab-bar  color-primary--dark">
      <a href="/Lambda/" class="layout__tab">Inicio</a>
      <a href="/Lambda/Register.php" class="layout__tab">Registrate</a>
      <a href="/Lambda/Expenses.php" class="layout__tab is-active">Gastos</a>
      <a href="/Lambda/Income.php" class="layout__tab">Ingresos</a>
      <a href="/Lambda/Report.php" class="layout__tab">Reporte [Ingresos VS Gastos]</a>
      <a href="/Lambda/Convertion.php" class="layout__tab">Conversión de Ingresos</a>
      <button class="btn-floating btn-large waves-effect waves-light red modal-trigger" href="#mdlRegister" id="add">
        <i class="material-icons" role="presentation">add</i>
        <span class="visuallyhidden">Add</span>
      </button>
    </div>
    <div class="container">
      <main class="mdl-layout__content">
        <br>
        <div class="row">

          <div class="row">
            <div class="col l12" id="tblExpenses">
              
            </div>
          </div>
          
        </div>
      </main>
      <div id="mdlRegister" class="modal">
        <div class="modal-content container">
          <div class="row">
            <h4 class="center">Registro de gastos</h4>
          </div>
          
          <div class="row">
            <form class="col l6 offset-l3" id="frmRegister" name="frmRegister">
              <div class="row input-field">
                <input id="txtAmount" type="text">
                    <label for="txtAmount">Monto ($)</label>
              </div>
              <div class="row input-field">
                <input id="txtTypeAmount" type="text">
                    <label for="txtTypeAmount">Tipo de Gasto</label>
              </div>
              <div class="row input-field">
                <textarea id="txtDescription" class="materialize-textarea"></textarea>
                    <label for="txtDescription">Descripción</label>
              </div>
              <div class="row input-field">
                <input type="date" class="" id="dtpDate">
                <label for="dtpDate" class="active">Fecha</label>
              </div>
              <div class="row input-field center-align">
                <button id="btnRegister" class="waves-effect waves-light btn">Enviar</button>
              </div>
            </form>
          </div>
          
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
        </div>
      </div>
    </div>
  </body>
</html>
