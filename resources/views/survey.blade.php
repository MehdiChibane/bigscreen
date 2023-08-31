<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Votre réponse</title>
    <style>
    html {
  font-size: 14px;
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
tr.td{

}
    </style>
  </head>
  <body>

<div class="container">
	<h2>Votre réponse</h2>
    <table class="table">
  <tbody>
    <tr>
      <th scope="row" >Question 1 :Email:</th>
      <td>{{$answer->mail_address}}</td>
    </tr>
    <tr>
      <th scope="row">Question 2 :Votre age:</th>
      <td>{{$answer->age}}</td>
    </tr>
    <tr>
      <th scope="row">Question 3 :Votre sexe:</th>
      <td>{{$answer->sex}}</td>
    </tr>
    <tr>
      <th scope="row">Question 4 :Nombre de personnes dans votre foyer:</th>
      <td>{{$answer->nb_ppl}}</td>
    </tr>
    <tr>
      <th scope="row">Question 5:Votre profession:</th>
      <td>{{$answer->job}}</td>
    </tr>
    <tr>
      <th scope="row">Question 6: La marque de casque VR que vous utilisez:</th>
      <td>{{$answer->headset_type}}</td>
    </tr>
    <tr>
      <th scope="row">Question 7: Le magasin dans lequel vous achetez votre casque:</th>
      <td>{{$answer->store_name}}</td>
    </tr>
    <tr>
      <th scope="row">Question 8: Le casque que vous envisagez d’acheter dans un futur proche :</th>
      <td>{{$answer->future_headset_buy}}</td>
    </tr>
    <tr>
      <th scope="row">Question 9: Au sein de votre foyer, le nombre de personnes qui utilisent votre casque VR pour regarder Bigscreen:</th>
      <td>{{$answer->nb_ppl_using_headset}}</td>
    </tr>
    <tr>
      <th scope="row">Question 10: Vous utilisez principalement Bigscreen pour ::</th>
      <td>{{$answer->headset_usage}}</td>
    </tr>
    <tr>
      <th scope="row">Question 11: Nombre de points que vous accordez à  la qualité de l’image sur Bigscreen :</th>
      <td>{{$answer->headset_image_rating}}</td>
    </tr>
    <tr>
      <th scope="row">Question 12: Nombre de points que vous accordez au confort d’utilisation de l’interface Bigscreen:</th>
      <td>{{$answer->headset_interface_rating}}</td>
    </tr>
    <tr>
      <th scope="row">Question 13: Nombre de  point pour la connection réseau de Bigscreen ?:</th>
      <td>{{$answer->headset_network_rating}}</td>
    </tr>
    <tr>
      <th scope="row">Question 14: Nombre de  point pour la qualité des graphismes 3D dans Bigscreen :</th>
      <td>{{$answer->headset_graphics_rating}}</td>
    </tr>
    <tr>
      <th scope="row">Question 15: Nombre de  point pour la qualité audio dans Bigscreen :</th>
      <td>{{$answer->headset_audio_rating}}</td>
    </tr>
    <tr>
      <th scope="row">Question 16: Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen :</th>
      <td>{{$answer->notification_setting}}</td>
    </tr>
    <tr>
      <th scope="row">Question 17: Votre choix de pouvoir inviter un ami à rejoindre votre session via son smartphone :</th>
      <td>{{$answer->join_via_phone}}</td>
    </tr>
    <tr>
      <th scope="row">Question 18: Votre choix de pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement :</th>
      <td>{{$answer->save_tv_shows}}</td>
    </tr>
    <tr>
      <th scope="row">Question 19: Votre choix de jouer à des jeux exclusifs sur votre Bigscreen :</th>
      <td>{{$answer->exclusive_games}}</td>
    </tr>

    <tr>
      <th scope="row">Question 20: nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen :</th>
      <td>{{$answer->new_functionnality}}</td>
    </tr>
  </tbody>
</table>




</div>
  </body>
</html>
