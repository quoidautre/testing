<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Projet test-intégration continue-déploiement</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="./css/bootstrap.css" media="screen">
<!--     <link rel="stylesheet" href="../assets/css/bootswatch.min.css">-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

    <div class="container">

      <div class="page-header" id="banner">
        <div class="row">

          <div class="col-lg-12 col-md-11 col-sm-10">
            <h1>Contactez nous !</h1>
          </div>

        </div>
      </div>

      <!-- Navbar
      ================================================== -->
      <div class="bs-docs-section clearfix">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="navbar">Navbar</h1>
            </div>

              <div class="bs-component">
              <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                  </div>

                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="/">Link <span class="sr-only">(current)</span></a></li>
                      <li><a href="contact.php">Contact us</a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                          <li class="divider"></li>
                          <li><a href="#">One more separated link</a></li>
                        </ul>
                      </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="#">Link</a></li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div><!-- /example -->

          </div>
        </div>
      </div>


      <!-- Buttons
      ================================================== -->
      <div class="bs-docs-section">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
              <h1 id="buttons">Buttons</h1>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">

            <p class="bs-component">
              <a href="#" class="btn btn-default">Default</a>
              <a href="#" class="btn btn-primary">Primary</a>
              <a href="#" class="btn btn-success">Success</a>
              <a href="#" class="btn btn-info">Info</a>
              <a href="#" class="btn btn-warning">Warning</a>
              <a href="#" class="btn btn-danger">Danger</a>
              <a href="#" class="btn btn-link">Link</a>
            </p>

            <p class="bs-component">
              <a href="#" class="btn btn-default disabled">Default</a>
              <a href="#" class="btn btn-primary disabled">Primary</a>
              <a href="#" class="btn btn-success disabled">Success</a>
              <a href="#" class="btn btn-info disabled">Info</a>
              <a href="#" class="btn btn-warning disabled">Warning</a>
              <a href="#" class="btn btn-danger disabled">Danger</a>
              <a href="#" class="btn btn-link disabled">Link</a>
            </p>


            <div style="margin-bottom: 15px;">
              <div class="btn-toolbar bs-component" style="margin: 0;">
                <div class="btn-group">
                  <a href="#" class="btn btn-default">Default</a>
                  <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>

                <div class="btn-group">
                  <a href="#" class="btn btn-primary">Primary</a>
                  <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>

                <div class="btn-group">
                  <a href="#" class="btn btn-success">Success</a>
                  <a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>

                <div class="btn-group">
                  <a href="#" class="btn btn-info">Info</a>
                  <a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>

                <div class="btn-group">
                  <a href="#" class="btn btn-warning">Warning</a>
                  <a href="#" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <p class="bs-component">
              <a href="#" class="btn btn-primary btn-lg">Large button</a>
              <a href="#" class="btn btn-primary">Default button</a>
              <a href="#" class="btn btn-primary btn-sm">Small button</a>
              <a href="#" class="btn btn-primary btn-xs">Mini button</a>
            </p>

          </div>
          <div class="col-lg-6">

            <p class="bs-component">
              <a href="#" class="btn btn-default btn-lg btn-block">Block level button</a>
            </p>


            <div class="bs-component" style="margin-bottom: 15px;">
              <div class="btn-group btn-group-justified">
                <a href="#" class="btn btn-default">Left</a>
                <a href="#" class="btn btn-default">Middle</a>
                <a href="#" class="btn btn-default">Right</a>
              </div>
            </div>

            <div class="bs-component" style="margin-bottom: 15px;">
              <div class="btn-toolbar">
                <div class="btn-group">
                  <a href="#" class="btn btn-default">1</a>
                  <a href="#" class="btn btn-default">2</a>
                  <a href="#" class="btn btn-default">3</a>
                  <a href="#" class="btn btn-default">4</a>
                </div>

                <div class="btn-group">
                  <a href="#" class="btn btn-default">5</a>
                  <a href="#" class="btn btn-default">6</a>
                  <a href="#" class="btn btn-default">7</a>
                </div>

                <div class="btn-group">
                  <a href="#" class="btn btn-default">8</a>
                  <div class="btn-group">
                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      Dropdown
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Dropdown link</a></li>
                      <li><a href="#">Dropdown link</a></li>
                      <li><a href="#">Dropdown link</a></li>
                     </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="bs-component">
              <div class="btn-group-vertical">
                  <a href="#" class="btn btn-default">Button</a>
                  <a href="#" class="btn btn-default">Button</a>
                  <a href="#" class="btn btn-default">Button</a>
                  <a href="#" class="btn btn-default">Button</a>
              </div>
            </div>

          </div>
        </div>
      </div>



      <footer>
        <div class="row">
          <div class="col-lg-12">

          </div>
        </div>

      </footer>


    </div>


    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>
