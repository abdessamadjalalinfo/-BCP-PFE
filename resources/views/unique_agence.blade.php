@extends('index2')
@section('contenu')
<link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-callout.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
<style>
  
    .card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
  
</style>

<div class="container">
  <div class="row">
          <div class="col-12">
            <div class="card">
              
             
              <div class="table-responsive">
                <table class="table">
                  <thead class="bg-warning white">
                    <tr>
                      <th>Ville</th>
                      <th>Agence</th>
                      <th>Région</th>
                      <th>Adresse</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">{{$agence->ville}}</th>
                      <td>{{$agence->nom}}</td>
                      <td>{{$agence->region}}</td>
                      <td>{{$agence->adresse}}</td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    <br>
          <button type="button" class="btn btn-success  btn-lg" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Voir les incoherences <i class="fas fa-search"></i></button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Selectionner les types de données</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
         
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Donnée 1 non renseigné
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Donnée 2 non renseigné
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
           Donnée3 non renseigné
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
          Résidence-Nationnalité manquantes ou incohérentes
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
           Coordonnées Manquants
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
           Date Naissance Manquant
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
           Incoherences pour les MDMS
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
          information d'identité expiré ou manquants
          </label>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
         <a target="_blank"  href="{{route('test')}}"class="btn btn-primary">Voir <i class="fas fa-search"></i></a>
      </div>

    </div>
  </div>
</div>
         <a class="btn btn-warning  btn-lg" href="#" data-toggle="collapse" data-target="#incoherence" aria-expanded="true" aria-controls="collapsePages">
        <i class='fas fa-info-circle'></i>   
          <span>Remonter</span>
        </a>
        <div id="incoherence" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           
            <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Toutes les incohérences </label>
            </div>
            <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">Incohérence spécifique</label>
            </div>
        <button class='btn btn-primary'>Envoyer</button>

          </div>
        </div>
      
     <div class="row">
    <div class="col-md-3">
      <div class="card-counter primary">
        <i class="fa fa-code-fork"></i>
        <span class="count-numbers">12</span>
        <span class="count-name">Clients</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="fa fa-ticket"></i>
        <span class="count-numbers">599</span>
        <span class="count-name">Adresse non rensigné</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="fa fa-database"></i>
         <span class="count-numbers">599</span>
        <span class="count-name">Info. prof. non renseigné</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="fa fa-users"></i>
        <span class="count-numbers">35</span>
        <span class="count-name">remontation</span>
     
       
      </div>
    </div>
  </div>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <!--canvas id="canvas" height="280" width="600"></canvas-->
                </div>
            </div>
        </div>
        
    </div>
      <div class="container-fluid">
          <<canvas id="bar-chart" width="800" height="450"></canvas>

        
         <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Clients</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nom complet</th>
                      <th>Identité</th>
                      <th>Lieu de Naissance</th>
                      <th>Age</th>
                      <th>Adresse</th>
                      <th>Téléphones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nom complet</th>
                      <th>Identité</th>
                      <th>Date de Naissance</th>
                      <th>Age</th>
                      <th>Adresse</th>
                      <th>Téléphones</th>
                      
                    </tr>
                  </tfoot>
                  <tbody>
                   
                    <tr>
                      <td>Michael Silva</td>
                      <td>GA209006</td>
                      <td>London</td>
                      <td>66</td>
                      <td>2012/11/27</td>
                      <td>0636187128</td>
                    </tr>
                    <tr>
                      <td>Paul Byrd</td>
                      <td>GA209005</td>
                      <td>New York</td>
                      <td>64</td>
                      <td>2010/06/09</td>
                      <td>0636187128</td>
                    </tr>
                    <tr>
                      <td>Gloria Little</td>
                      <td>GA20904</td>
                      <td>New York</td>
                      <td>59</td>
                      <td>2009/04/10</td>
                      <td>0636187128</td>
                    </tr>
                    <tr>
                      <td>Bradley Greer</td>
                      <td>GA209007</td>
                      <td>London</td>
                      <td>41</td>
                      <td>2012/10/13</td>
                      <td>0636187128</td>
                    </tr>
                    <tr>
                      <td>Dai Rios</td>
                      <td>GA209010</td>
                      <td>Edinburgh</td>
                      <td>35</td>
                      <td>2012/09/26</td>
                      <td>0636187128</td>
                    </tr>
                    <tr>
                      <td>Jenette Caldwell</td>
                      <td>GA209070</td>
                      <td>New York</td>
                      <td>30</td>
                      <td>2011/09/03</td>
                      <td>0636187128</td>
                    </tr>
                    
                    <tr>
                      <td>Michelle House</td>
                      <td>GA209085</td>
                      <td>Sidney</td>
                      <td>37</td>
                      <td>2011/06/02</td>
                      <td>0636187128</td>
                    </tr>
                    
             
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
    
    new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ["Pas problème", "Pb d'adresse", "info financières manquants", "Info Résidence manquants", "Info professionnels manquants"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Répartition des Clients'
      }
    }
});
</script>





@endsection