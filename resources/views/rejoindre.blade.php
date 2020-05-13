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
            <p class="error-text">Audio, vidéo, chat, partage d'écran et de documents</p>
            <p class="text">
               <i> Au moins 3 chiffres <br/>
 Un minimum de 10 caractères <br/>
 Des chiffres et des lettres sans accents uniquement <br/> 
            <form action="/go" method="post">
            @csrf
            <div class="form-group">
    <label for="h-text7" class="sr-only">Email address</label>
    <input type="text" name="url" class="form-control" id="h-text7" aria-describedby="h-text7" placeholder="Saississez un nom de conférence..." required pattern="[0-9a-zA-Z]*">
    <div class="mt-1">
        <span class="badge badge-primary w-100">
            <small id="sh-text7" class="form-text mt-0 text-left">Actuellement, il y a 79 conférences et 187 participants.</small>
        </span>
    </div>
</div>
<br>
<button type="submit" class="btn btn-primary btn-rounded mb-2">Rejoindre ou Créer</button>
<!-- Button trigger modal -->

<button data-target="#staticBackdrop"  data-toggle="modal" class="btn btn-dark mb-2 mr-2">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> inviter</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="col-lg-6 col-12 mx-auto">
                                                <div class="form-group">
                                                <label for="exampleFormControlInput1">Les emails des invitées</label>
    <input type="email" class="form-control" name="mail1" id="exampleFormControlInput1" placeholder="tes@mcpt.gouv.dj">
    <input type="email" class="form-control" name="mail2" id="exampleFormControlInput2" placeholder="tes@mcpt.gouv.dj">
    <input type="email" class="form-control" name="mail3" id="exampleFormControlInput" placeholder="tes@mcpt.gouv.dj">

</div>
                                        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Reduire</button>
      </div>
    </div>
  </div>
</div>
</form>
        </div>
    </div>
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('template/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('template/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('template/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>
</html>