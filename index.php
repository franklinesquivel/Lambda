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
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
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
      <button class="btn-floating btn-large waves-effect waves-light red" id="add">
        <i class="material-icons" role="presentation">add</i>
        <span class="visuallyhidden">Add</span>
      </button>
    </div>
    <div class="container">
      <main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel is-active" id="overview">
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="card">
              <div class="row">
                <div class="col s4">
                  <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
                    <i class="material-icons">play_circle_filled</i>
                  </header>
                </div>
                <div class="col s8">
                  <div class="card-content">                  
                    <h4 class="card-title">Features<i class="material-icons right">more_vert</i></h4>
                    Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.
                  </div>
                  <div class="card-action">
                    <a href="#" class="mdl-button">Read our features</a>
                  </div>
                </div>              
              </div>
            </div>                
          </section>
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
                      <h5>Lorem ipsum dolor sit amet</h5>
                      Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Duis nulla tempor do aute et eiusmod velit exercitation nostrud quis <a href="#">proident minim</a>.
                    </div>                  
                  </div>
                  <div class="row">
                    <div class="col s2 section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                      <div class="section__circle-container__circle color-primary--dark"></div>
                    </div>
                    <div class="col s10 section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                      <h5>Lorem ipsum dolor sit amet</h5>
                      Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Duis nulla tempor do aute et eiusmod velit exercitation nostrud quis <a href="#">proident minim</a>.
                    </div>                    
                  </div>
                  <div class="row">
                    <div class="col s2 section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                      <div class="section__circle-container__circle color-primary--dark"></div>
                    </div>
                    <div class="col s10 section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                      <h5>Lorem ipsum dolor sit amet</h5>
                      Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Duis nulla tempor do aute et eiusmod velit exercitation nostrud quis <a href="#">proident minim</a>.
                    </div>                  
                  </div>
                </div>
                <div class="card-action">
                  <a href="#" class="mdl-button">Read our features</a>
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
                    <h4 class="card-title">Technology<i class="material-icons right">more_vert</i></h4>
                    <p>Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse. Pariatur occaecat nisi laboris tempor laboris eiusmod qui id Lorem esse commodo in. Exercitation aute dolore deserunt culpa consequat elit labore incididunt elit anim.</p>
                  </div>
                  <div class="card-action">
                    <a href="#" class="mdl-button">Read our features</a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="section--footer mdl-color--white mdl-grid">
            <div class="row">
              <div class="col s12 m6 testimonials">
                <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                  <div class="section__circle-container__circle color-secondary section__circle--big"></div>
                </div>
                <div class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                  <h5>Lorem ipsum dolor sit amet</h5>
                  Qui sint ut et qui nisi cupidatat. Reprehenderit nostrud proident officia exercitation anim et pariatur ex.
                </div>
              </div>
              <div class="col s12 m6 testimonials">
                <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                  <div class="section__circle-container__circle color-secondary section__circle--big"></div>
                </div>
                <div class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                  <h5>Lorem ipsum dolor sit amet</h5>
                  Qui sint ut et qui nisi cupidatat. Reprehenderit nostrud proident officia exercitation anim et pariatur ex.
                </div>                
              </div>
            </div>
          </section>
        </div>
      </main>
    </div>
    <footer class="page-footer">
      <div class="row">
        <div class="col s3">
          <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
          <h6 class="mdl-mega-footer--heading">Features</h6>
          <ul class="mdl-mega-footer--link-list">
            <li><a href="#">About</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Partners</a></li>
            <li><a href="#">Updates</a></li>
          </ul>
        </div>
        <div class="col s3">
          <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
          <h6 class="mdl-mega-footer--heading">Details</h6>
          <ul class="mdl-mega-footer--link-list">
            <li><a href="#">Spec</a></li>
            <li><a href="#">Tools</a></li>
            <li><a href="#">Resources</a></li>
          </ul>
        </div>
        <div class="col s3">
          <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
          <h6 class="mdl-mega-footer--heading">Technology</h6>
          <ul class="mdl-mega-footer--link-list">
            <li><a href="#">How it works</a></li>
            <li><a href="#">Patterns</a></li>
            <li><a href="#">Usage</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Contracts</a></li>
          </ul>
        </div>
        <div class="col s3">
          <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
          <h6 class="mdl-mega-footer--heading">FAQ</h6>
          <ul class="mdl-mega-footer--link-list">
            <li><a href="#">Questions</a></li>
            <li><a href="#">Answers</a></li>
            <li><a href="#">Contact us</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="">
        © 2014 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
      </div>
    </footer>
  </body>
</html>
