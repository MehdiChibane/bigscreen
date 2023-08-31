@extends('layouts.app')
@section('title', 'Administration - Bigscreen')
@section('content')
<div class="container">
    <div class="row" >
        <div class="col-md-2" style="background-color:#cfe2f3;">
@include('admin.navbar')
        </div>
    <div class="col-md-10">
        <h1>Administration BigScreen</h1>
        <hr>
    <p>Bonjour {{$user->name}}</p>

<div class="row">
<div class="col" style="position: ; height:90vh; width:80vw" >
<p><center>Marque de casque utilisé:</center></p>
<canvas id="myChart" ></canvas>

</div>

<div class="col" style="position: ; height:90vh; width:80vw">
<p><center>Lieu d'achat du casque VR:</center></p>
<canvas id="myChart2" ></canvas>

</div>
<div class="w-100"></div>
<div class="col" style="position: ; height:90vh; width:80vw">
<p> <p><center>Utilisation principale du casque:</center></p></p>
<canvas id="myChart3" ></canvas>

</div>

<div class="col" style="position: ; height:80vh; width:80vw">
<p><center>Notation moyenne de la qualité du produit:</center></p>
<canvas id="chartId" aria-label="chart" ></canvas>
</div>
</div>

</div>


</div>




</div>

@endsection


@section("scripts")
<script>
  const ctx = document.getElementById('myChart');
  const ctx2 = document.getElementById('myChart2');
  const ctx3 =document.getElementById('myChart3');
  
  new Chart(ctx, {
    type: 'pie',
    data: {
      labels: [ 'PSVR','Occulus Rift/s', 'HTC Vive', 'Windows Mixed Reality'],
      datasets: [{
        label: '# of Votes',
        data: [{{$hdst_type[0]}},{{$hdst_type[1]}},{{$hdst_type[2]}},{{$hdst_type[3]}}],
        borderWidth: 1
      }]
    },
    options: {
      title:"hello",
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  new Chart(ctx2, {
    type: 'pie',
    data: {
      labels: [ 'SteamVR','Occulus store', ' Viveport', 'Playstation VR','Google Play','Windows store'],
      datasets: [{
        label: '# of Votes',
        data: [{{$store_type[0]}},{{$store_type[1]}},{{$store_type[2]}},{{$store_type[3]}},{{$store_type[4]}},{{$store_type[5]}}],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  
  new Chart(ctx3, {
    type: 'pie',
    data: {
      labels: [ 'Regarder des émissions TV en direct', 'Regarder des films', 'Jouer en solo','Jouer en team'],
      datasets: [{
        label: '# of Votes',
        data: [{{$headset_usg[0]}},{{$headset_usg[1]}},{{$headset_usg[2]}},{{$headset_usg[3]}}],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  
  var chrt = document.getElementById("chartId").getContext("2d");
      var chartId = new Chart(chrt, {
         type: 'radar',
         data: {
            labels: ["NOTATION DE L'IMAGE", "NOTATION DE L'EXPERIENCE", "NOTATION DU RESEAU", "NOTATION DES GRAPHISMES", "NOTATION DE L'AUDIO"],
            datasets: [{
               label: "NOTATION MOYENNE GLOBALE",
               data: [{{$global_rating[0]}}, {{$global_rating[1]}}, {{$global_rating[2]}}, {{$global_rating[3]}}, {{$global_rating[4]}}],
               backgroundColor: ['lightgrey'],
               pointBackgroundColor: ['yellow', 'aqua', 'pink', 'lightgreen', 'red', 'gold'],
               borderColor: ['black'],
               borderWidth: 1,
               pointRadius: 6
               ,
            }],
         },
         options: {
            responsive: true,
            elements: {
               line: {
                  borderWidth: 3
               }
            }
         },
      });

</script>






 
@endsection