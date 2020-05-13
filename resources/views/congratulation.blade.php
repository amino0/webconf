<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - Maintenance Page</title>
    <link rel="icon" type="image/x-icon" href="{{asset('template/assets/img/egouv.png')}}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset('template/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('template/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('template/assets/css/pages/error/style-maintanence.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

</head>
<body class="maintanence text-center">
    
    <div class="container-fluid maintanence-content">
        <div class="">
            <div class="maintanence-hero-img">
                <img alt="logo"  style="height: 100px; width: 200px;"  src="{{asset('template/assets/img/egouv.png')}}">
            </div>
            <h1 class="error-title">WebConférence de l'État</h1>
            <p class="error-text">Nous vous repondrons sur votre mail dans les plus bref delais.</p>
            <p class="text">@foreach($last as $row) {{$row->nom}} @endforeach<br/> @foreach($last as $row) {{$row->email}} @endforeach</p>
            <p class="text">Restez attentif a votre email.</p>
            <a href="https://www.ansie.dj/" style=" background-image: linear-gradient(135deg, #1b55e2 0%, #1ac333 100%);" class="btn btn-primary mt-4">Quitter</a>
        </div>
            
    </div>
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('template/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('template/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('template/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>
</html>