@extends('index2')
  <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
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
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/cryptocoins/cryptocoins.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
<div class="container">



   <section id="grouped-stats">
          
         
          
         
         
          <div class="row">
            
            <div class="col-12">
               <button type="button" class="btn btn-float btn-outline-cyan"><i class="la la-search"></i>
                            <span>Mes clients</span>
                          </button>
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 col-md-6 col-12 border-right-blue-grey border-right-lighten-5">
                        <div class="float-left pl-2">
                          <span class="font-large-3 text-bold-300 info">589</span>
                        </div>
                        <div class="float-left mt-2 ml-1">
                          <span class="blue-grey darken-1 block">remontation</span>
                          
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-12 border-right-blue-grey border-right-lighten-5">
                        <div class="float-left pl-2">
                          <span class="font-large-3 text-bold-300 danger">765</span>
                        </div>
                        <div class="float-left mt-2 ml-1">
                          <span class="blue-grey darken-1 block">Nouveau</span>
                          <span class="blue-grey darken-1 block">Clients</span>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-12 border-right-blue-grey border-right-lighten-5">
                        <div class="float-left pl-2">
                          <span class="font-large-3 text-bold-300 success">693</span>
                        </div>
                        <div class="float-left mt-2 ml-1">
                          <span class="blue-grey darken-1 block">Classement</span>
                          
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-12">
                        <div class="float-left pl-2">
                          <span class="font-large-3 text-bold-300 warning">946</span>
                        </div>
                        <div class="float-left mt-2 ml-1">
                          <span class="blue-grey darken-1 block">Non</span>
                          <span class="blue-grey darken-1 block"> Traité</span>
                        </div>
                         
                      </div>
                      
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
         
         
          
         
        </section>
         <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Clients à traiter</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                   
                    <table class="table table-striped table-bordered zero-configuration">
                      <thead>
                        <tr>
                          <th>Nom Prénom</th>
                          <th>CIN</th>
                          <th>Téléphone</th>
                          <th>Adresse</th>
                          <th>à Traiter</th>
                          <th>Option</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td>Incohérence1</td>
                          <td><div class="btn-group" role="group" aria-label="Basic example">
                            <a target='_blank'  href="{{route('creation')}}"type="button" class="btn btn-primary">Modifier fiche</a>
                          
                           
                          </div></td>
                          
                        </tr>
                        <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                           <td>Incohérence2</td>
                          <td><div class="btn-group" role="group" aria-label="Basic example">
                            <a  target='_blank' href="{{route('creation')}}" type="button" class="btn btn-primary">Modifier fiche</a>
                            
                          </div></td>
                         
                        </tr>
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          <td>66</td>
                          <td>Incohérence3-manque donnée 1</td>
                          <td><div class="btn-group" role="group" aria-label="Basic example">
                           <a target='_blank' href="{{route('creation')}}" type="button" class="btn btn-primary">Modifier fiche</a>
                          </div></td>
                          
                        </tr>
                        
                      </tbody>
                      <tfoot>
                        <tr>
                         <th>Nom Prénom</th>
                          <th>CIN</th>
                          <th>Téléphone</th>
                          <th>Adresse</th>
                          <th>à Traiter</th>
                          <th>Option</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
          <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="app-assets/js/scripts/tables/datatables/datatable-basic.js"
  type="text/javascript"></script>





  <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="app-assets/vendors/js/extensions/jquery.knob.min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/charts/jquery.sparkline.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="app-assets/js/scripts/cards/card-statistics.js" type="text/javascript"></script>    
    <script src="app-assets/js/scripts/pages/users-contacts.js" type="text/javascript"></script>  
    
    




    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="app-assets/vendors/js/tables/jquery.dataTables.min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"
  type="text/javascript"></script>
  <script src=app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"
  type="text/javascript"></script>
  <script src="-assets/vendors/js/tables/datatable/dataTables.rowReorder.min.js"
  type="text/javascript"></script>
  <script src="app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="app-assets/js/scripts/pages/users-contacts.js" type="text/javascript"></script>




</div>


<script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
  <script src=app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"
  type="text/javascript"></script>
  <script src="app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js"
  type="text/javascript"></script>
  <script src="app-assets/vendors/js/tables/buttons.colVis.min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/tables/buttons.print.min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/tables/datatable/dataTables.select.min.js"
  type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="app-assets/js/scripts/tables/datatables-extensions/datatable-button/datatable-print.js"
  type="text/javascript"></script>
  @endsection
