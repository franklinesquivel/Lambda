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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  </head>
  <body class="mdl-demo">
    <nav class="color-primary">
      <div class="nav-wrapper">
        <h2 class="brand-logo">Lambda &copy;</h2>
      </div>
    </nav>  
    <div class="tab-bar  color-primary--dark">
      <a href="/Lambda/" class="layout__tab is-active">Inicio</a>
      <a href="/Lambda/Register.php" class="layout__tab">Registrate</a>
      <a href="/Lambda/Expenses.php" class="layout__tab">Gastos</a>
      <a href="/Lambda/Income.php" class="layout__tab">Ingresos</a>
      <a href="/Lambda/Report.php" class="layout__tab">Reporte [Ingresos VS Gastos]</a>
      <a href="/Lambda/Convertion.php" class="layout__tab">Conversión de Ingresos</a>
    </div>
    <div class="container">
      <main class="mdl-layout__content">
      <br><br>
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="row">
              <div class="col">
              <div class="card">
                <div class="card-content">
                  <h4 class="card-title">Details<i class="material-icons right">more_vert</i></h4>
                  <div class="row">
                    <div class="col s2 section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                      <div class="section__circle-container__circle color-primary--dark"></div>
                    </div>
                    <div class="col s10 section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                      <h5>Equilibra tus finanzas</h5>
                      Mediante la plataforma <i>Lambda</i> puedes analizar el flujo del dinero que se encuentra bajo tu poder!
                    </div>                  
                  </div>
                  <div class="row">
                    <div class="col s2 section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                      <div class="section__circle-container__circle color-primary--dark"></div>
                    </div>
                    <div class="col s10 section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                      <h5>Seguridad ante todo</h5>
                      Nos preocupamos por la integridad de tus datos personales, por eso invertimos en la máxima seguridad de estos ;)
                    </div>                    
                  </div>
                </div>
              </div>                
              </div>
            </div>
          </section>
          <section class="section--center">
            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-content">
                    <h4 class="card-title">Tecnología<i class="material-icons right">more_vert</i></h4>
                    <p>
                      Nuestra plataforma está construida en tecnología de punta, que asegura eficiencia, seguridad y comodidad a los usuarios como tú
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </main>
    </div>
  </body>
</html>
