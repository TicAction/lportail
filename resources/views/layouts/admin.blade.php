<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    {!! Html::favicon('favicon.ico') !!}

    <title>Portail de l'éducation</title>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <!-- Bootstrap core CSS -->
    {!! Html::style('css/flaty.css') !!}

            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    {!! Html::script('js/mask/jquery.mask.js') !!}
    {!! Html::script('js/code.js') !!}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

<div class="container-fluid">


        <div class="col-md-2">

                <div style="background-color: #222222; min-height: 60px; padding: 0px; color:white;">
                   {!! Html::image('images/pomme2.png',"École Plein-Soleil",['height'=>'60px','width'=>'254px']) !!}

                </div>



                <div class="well">
                    @yield('sidebar')
                @include('sections.sidebar')

            </div>

        </div>

    <div class="col-md-10">
        <nav class="navbar navbar-inverse">

            <div class="navbar-header">
                <a class="navbar-brand" href="#">

                    Le portail de l'éducation


                </a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Horaire de la classe</a></li>
                <li><a href="#">Capsule web</a></li>
                <li><a href="#">Courriel</a></li>
                <li><a href="#">Voute</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('logout')}}">Déconnexion</a></li>

            </ul>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">Devoirs de la semaine</h3>
                        </div>
                        <div class="panel-body">

                            <canvas id="donut" data-title="Chart title" width="254" height="200">
                                <div data-value="5"></div>
                                <div data-value="5">Legend for item #2</div>

                            </canvas>

                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">Message</h3>
                        </div>
                        <div class="panel-body">

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A doloribus esse excepturi illo
                                ipsum, perspiciatis. Asperiores consectetur cumque,
                                distinctio dolorem exercitationem fugit harum, iusto, porro quos reiciendis ut veritatis voluptatibus!</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">Comportement en classe</h3>
                        </div>
                        <div class="panel-body">

                            <canvas id="donut2" data-title="Titre du diagramme" width="254" height="200">
                                <div data-value="10">Legend for item #1</div>
                                <div data-value="12">Legend for item #2</div>
                            </canvas>

                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">Outils</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="list-unstyled">
                                <li><a href="http://classdojo.com">ClassDoJo</a></li>
                                <li><a href="https://fr.xtramath.org/#/home/index">XtraMath</a></li>
                                <li><a href="http://www.alloprof.qc.ca/">Allô Prof</a></li>
                                <li><a href="http://www.cssh.qc.ca">Commission scolaire</a></li>

                            </ul>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @yield('content')
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @yield('side')
                    </div>
                </div>
            </div>

        </div>

    </div>


</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
{!! Html::script('js/jquery.donut.js') !!}
{!! Html::script('js/donut.js') !!}

</body>
</html>



