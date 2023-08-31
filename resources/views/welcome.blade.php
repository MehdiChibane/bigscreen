<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Bienvenue dans le sondage BigScreen</title>
    <style>
    html {
      font-size: 14px;
    }
    body{
        background-color: #cfe2f3;
    }
@media (min-width: 768px) {
  html {
    font-size: 16px;
  }
}

.container {
  max-width: 960px;
}

.pricing-header {
  max-width: 700px;
}

.card-deck .card {
  min-width: 220px;
}
    </style>
  </head>
  <body>
  @include('front.header')

<div class="container">
    <img src="https://www.bigscreenvr.com/images/logos/bigscreen.svg" height="64">
	<h5>Merci de répondre à toutes les questions et de valider le formulaire</h5>
    <form method="POST" action="{{ route('saveSurvey') }}">
     @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="text" name="email" class="form-control">
        @error('email')
       <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Age :</label>
        <input type="text" class="form-control" id="age" name="age">
        @error('age')
   <span class="text-danger">{{$message}}</span>
@enderror
    </div>



      <p>Sex :</p>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="sex" id="gridRadios1" value="homme" checked>
          <label class="form-check-label" for="gridRadios1">
            Homme
          </label>

        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sex" id="gridRadios2" value="femme" >
          <label class="form-check-label" for="gridRadios2">
           Femme
          </label>

        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sex" id="gridRadios3" value="autre">
          <label class="form-check-label" for="gridRadios3">
           Prefere ne pas repondre
          </label>
          @error('sex')
   <span class="text-danger">{{$message}}</span>
@enderror
        </div>

        <p class="">Nombre de personnes dans le foyer :</p>
        <div class="form-group">
     <select class="form-control" id="exampleFormControlSelect1" name= 'nb_ppl'>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    @error('nb_ppl')
   <span class="text-danger">{{$message}}</span>
@enderror
  </div>



    <div class="form-group">
        <label for="exampleInputEmail1">Profession:</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name= "job">
        <small id="emailHelp" class="form-text text-muted"></small>
        @error('job')
   <span class="text-danger">{{$message}}</span>
@enderror
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Quel marque de casque VR utilisez vous ?:</label>
     
<div class="form-check">
  <input class="form-check-input" type="radio" name="headset_type" id="cask_1" value="occr">
  <label class="form-check-label" for="cask_1">
  Occulus Rift/s
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="headset_type" id="cask_2" value="htcc" name= "headset_type">
  <label class="form-check-label" for="cask_2">
  HTC Vive
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="headset_type" id="cask_3" value="wmr" name= "headset_type">
  <label class="form-check-label" for="cask_3">
  Windows Mixed Reality
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="headset_type" id="cask_4" value="PSVR" name= "headset_type">
  <label class="form-check-label" for="cask_4">
  PSVR
  </label>
</div>
@error('headset_type')
   <span class="text-danger">{{$message}}</span>


@enderror
    </div>

   
   <div class="form-group">
        <label for="exampleInputEmail1">Sur quel magasin d’application achetez vous des contenus VR ? :</label>
        <small id="emailHelp" class="form-text text-muted"></small>
<div class="form-check">
  <input class="form-check-input" type="radio" name="store_name" id="store_name1"  value="stm" checked>
  <label class="form-check-label" for="store_name1">
  SteamVR
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="store_name" id="store_name2" value="occs" >
  <label class="form-check-label" for="store_name2">
  Occulus store
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="store_name" id="store_name3" value="vvp" >
  <label class="form-check-label" for="store_name3">
  Viveport
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="store_name" id="store_name4" value="pvr" >
  <label class="form-check-label" for="store_name4">
  Playstation VR
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="store_name" id="store_name5" value="gp" >
  <label class="form-check-label" for="store_name5">
  Google
Play
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="store_name" id="store_name6" value="ws" >
  <label class="form-check-label" for="store_name6">
  Windows store
  </label>
</div>
@error('store_name')
   <span class="text-danger">{{$message}}</span>






   
@enderror















    </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Quel casque envisagez-vous d’acheter dans un futur proche ? :</label>
        <input type="text" class="form-control" name="future_headset_buy">
        <small id="emailHelp" class="form-text text-muted"></small>
        @error('future_headset_buy')
   <span class="text-danger">{{$message}}</span>
@enderror
    </div>

<p class="">Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen
? :</p>
        <div class="form-group">
     <select class="form-control" id="exampleFormControlSelect1" name="nb_ppl_using_headset">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
    @error('nb_ppl_using_headset')
   <span class="text-danger">{{$message}}</span>
@enderror
</div>




      <div class="form-group">
        <label for="exampleInputEmail1">Vous utilisez principalement Bigscreen pour :</label>
        
        <small id="emailHelp" class="form-text text-muted"></small>
<div class="form-check">
  <input class="form-check-input" type="radio" name="headset_usage" id="headset_usage1"  value="direct" checked>
  <label class="form-check-label" for="cask_1">
  Regarder des émissions TV en direct
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="headset_usage" id="headset_usage2" value="movie" >
  <label class="form-check-label" for="cask_2">
  Regarder des films
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="headset_usage" id="headset_usage3" value="solo" >
  <label class="form-check-label" for="cask_3">
  Jouer en solo
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="headset_usage" id="headset_usage4" value="team" >
  <label class="form-check-label" for="cask_4">
  Jouer en team
  </label>
  @error('headset_usage')
   <span class="text-danger">{{$message}}</span>
@enderror
</div>















      <p class="">Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?:</p>
        <div class="form-group">
     <select class="form-control" id="exampleFormControlSelect1">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
    </select>
    @error('headset_usage')
   <span class="text-danger">{{$message}}</span>
@enderror

  </div>

  <p class"question"="">Combien donnez vous de point pour le confort d’utilisation de l’interface Bigscreen ?:</p>
        <div class="form-group">
     <select class="form-control" id="exampleFormControlSelect1" name="headset_interface_rating">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
    </select>
    @error('headset_image_rating')
   <span class="text-danger">{{$message}}</span>
@enderror

  </div>
  <p class"question"="">Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?:</p>
        <div class="form-group">
     <select class="form-control" id="exampleFormControlSelect1" name="headset_image_rating">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
    </select>
    @error('headset_interface_rating')
   <span class="text-danger">{{$message}}</span>
@enderror

  </div>
  <p class"question"="">Combien donnez vous de point pour la connection réseau de Bigscreen ?:</p>
        <div class="form-group">
     <select class="form-control" id="exampleFormControlSelect1" name="headset_network_rating">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
    </select>
    @error('headset_network_rating')
   <span class="text-danger">{{$message}}</span>
@enderror

  </div>
  <p class"question"="">Combien donnez vous de point pour la qualité des graphismes 3D dans Bigscreen ?:</p>
        <div class="form-group">
     <select class="form-control" id="exampleFormControlSelect1" name="headset_graphics_rating">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
    </select>
    @error('headset_graphics_rating')
   <span class="text-danger">{{$message}}</span>
@enderror
  </div>

  <p class"question"="">Combien donnez vous de point pour la qualité audio dans Bigscreen ?:</p>
        <div class="form-group">
     <select class="form-control" id="exampleFormControlSelect1" name="headset_audio_rating">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
    </select>
    @error('headset_audio_rating')
   <span class="text-danger">{{$message}}</span>
@enderror

  </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?:</label>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="notification_setting" id="not_1" value="oui" checked>
          <label class="form-check-label" for="not_1">
            Oui
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="notification_setting" id="not_2" value="non">
          <label class="form-check-label" for="not_2">
           Non
          </label>
        </div>
        @error('notification_setting')
   <span class="text-danger">{{$message}}</span>
@enderror

      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?:</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="join_via_phone" id="join_1" value="oui" checked>
          <label class="form-check-label" for="join_1">
            Oui
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="join_via_phone" id="join_2" value="non">
          <label class="form-check-label" for="join_2">
           Non
          </label>
          @error('join_via_phone')
   <span class="text-danger">{{$message}}</span>
@enderror

        </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?:</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="save_tv_shows" id="emis_1" value="oui" checked>
          <label class="form-check-label" for="emis_1">
            Oui
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="save_tv_shows" id="emis_2" value="non">
          <label class="form-check-label" for="emis_2">
           Non
          </label> @error('save_tv_shows')
               <span class="text-danger">{{$message}}</span>
            @enderror

        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?:</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exclusive_games" id="jeu_exclu_1" value="oui" checked>
          <label class="form-check-label" for="jeu_exclu_1">
            Oui
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exclusive_games" id="jeu_exclu_2" value="non">
          <label class="form-check-label" for="jeu_exclu_2">
           Non
          </label>

        </div>
        @error('exclusive_games')
           <span class="text-danger">{{$message}}</span>
        @enderror
          <div class="form-group">
              <label for="exampleInputEmail1">Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?</label>
              <input type="text" name="new_functionnality" class="form-control">
              @error('new_functionnality')
              <span class="text-danger">{{$message}}</span>
              @enderror
      </div>

          <button type="submit" class="btn btn-primary">Valider</button>

    </form>

</div>
  </body>
</html>
