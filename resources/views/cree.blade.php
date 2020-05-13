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
            <p class="error-text">Merci de votre visite.</p>
            <p class="text">Afin de pouvoir cree une conference <br/> Vous devez remplir les informations suivants</p>
            <p class="text">La demande sera ensuite gerer.</p>
            <a href="index.html" data-toggle="modal" data-target="#exampleModalScrollable" class="btn btn-info mt-4">Remplir</a>
        </div>
    </div>
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h1 class="">Envoyer la requette</h1>
                        <p class="">Veillez saisir tout les informations.</p>
                        
                        <form class="text-left" action="/envoyer" method="post">
                        @csrf

                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">Nom complet</label>
                                    <input id="username" name="nom" type="text" class="form-control" placeholder="Amin ibrahim kayad" required="">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="email">Email</label>
                                    </div>
                                    <input id="email" name="email" type="email" class="form-control" placeholder="test@mcpt@gouv.dj" required="">
                                </div>
                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="societe">Ministère</label>
                                    </div>
                                    <input id="societe" name="societe" type="text" class="form-control" placeholder="MENFOP">
                                </div>
                                <div class="form-group mb-4">
                                    
                                            <label for="exampleFormControlTextarea1">Motif</label>
                                            <a href="#" style="float: right;" class="forgot-pass-link">Si c'est le cas ?</a>

                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>

                               

                                

                             

                            </div>
                       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Enoyer</button>
        </form>
      </div>
    </div>
  </div>
</div>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('template/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('template/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('template/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>
</html>