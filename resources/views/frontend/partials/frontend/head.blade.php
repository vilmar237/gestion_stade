<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Stade|Réservation</title>

  <!-- Bootstrap -->
  <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">

  <!-- Google Font Lato -->
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">

  <!-- Plugin Styles -->
  <link href="{{asset('frontend/css/datepicker.css')}}" rel="stylesheet">


  <!-- Main Styles -->
  <link href="{{asset('frontend/css/styles-red.css')}}" rel="stylesheet">
  <!-- Available main styles: styles-red.css, styles-green.css -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" integrity="sha256-b5ZKCi55IX+24Jqn638cP/q3Nb2nlx+MH/vMMqrId6k=" crossorigin="anonymous" />

    <style>
        form .website_hp{
            display: none;
        }
    </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link href="{{asset('public/frontend/css/ie8fix.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
    <![endif]-->


    <!-- Fav and touch icons -->

    @stack('styles')