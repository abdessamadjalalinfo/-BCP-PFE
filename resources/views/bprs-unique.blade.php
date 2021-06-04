@extends('index2')
@section('contenu')
 <link rel="apple-touch-icon" href={{asset('app-assets/images/ico/apple-icon-120.png')}}>
  <link rel="shortcut icon" type="image/x-icon" href={{asset('app-assets/images/ico/favicon.ico')}}>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href={{asset('app-assets/css/vendors.css')}}>
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href={{asset('app-assets/css/app.css')}}>
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href={{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}>
  <link rel="stylesheet" type="text/css" href={{asset('app-assets/css/core/colors/palette-gradient.css')}}>
  <link rel="stylesheet" type="text/css" href={{asset('app-assets/css/pages/project.css')}}>
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href={{asset('assets/css/style.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('app-assets/css/pages/dashboard-ecommerce.css')}}>
<div class="container">
    <div class="row">
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="info">850</h3>
                      <h6>Données Manquants</h6>
                    </div>
                    <div>
                      <i class="icon-basket-loaded info font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="warning">748</h3>
                      <h6>Données Incohérents</h6>
                    </div>
                    <div>
                      <i class="icon-pie-chart warning font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="danger">146</h3>
                      <h6>New Customers</h6>
                    </div>
                    <div>
                      <i class="icon-user-follow danger font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 75%"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="success">99.89 %</h3>
                      <h6>Données Complets</h6>
                    </div>
                    <div>
                      <i class="icon-heart successs font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 85%"
                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/selects/select2.min.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        
 
   <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>
 
        <section class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-head">
                  <div class="card-header">
                    <h4 class="card-title">Banque Populaire Régionale</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    
                  </div>
                  <div class="px-1">
                    <ul class="list-inline list-inline-pipe text-center p-1 border-bottom-grey border-bottom-lighten-3">
                      <li>BPR:
                        <span class="text-muted">Grand Casablanca</span>
                      </li>
                      
                      <li><a href="#" class="text-muted" data-toggle="tooltip" data-placement="bottom"
                        title="Export as PDF"><i class="la la-file-pdf-o"></i></a></li>
                    </ul>
                  </div>
                </div>
                <!-- project-info -->
                <div id="project-info" class="card-body row">
                  <div class="project-info-count col-lg-4 col-md-12">
                    <div class="project-info-icon">
                      <h2>12</h2>
                      <div class="project-info-sub-icon">
                        <span class="la la-user"></span>
                      </div>
                    </div>
                    <div class="project-info-text pt-1">
                      <h5>Clients validé avec avertissement</h5>
                    </div>
                  </div>
                  <div class="project-info-count col-lg-4 col-md-12">
                    <div class="project-info-icon">
                      <h2>160</h2>
                      <div class="project-info-sub-icon">
                        <span class="la la-calendar-check-o"></span>
                      </div>
                    </div>
                    <div class="project-info-text pt-1">
                      <h5>Clients avec données complets</h5>
                    </div>
                  </div>
                  <div class="project-info-count col-lg-4 col-md-12">
                    <div class="project-info-icon">
                      <h2>20</h2>
                      <div class="project-info-sub-icon">
                        <span class="la la-bug"></span>
                      </div>
                    </div>
                    <div class="project-info-text pt-1">
                      <h5>Client à Traiter</h5>
                    </div>
                  </div>
                </div>
                <!-- project-info -->
                <div class="card-body">
                  <div class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                   
                  </div>
                  <div class="row py-2">
                    <div class="col-lg-6 col-md-12">
                      <div class="insights px-2">
                        <div>
                          <span class="text-info h3">82%</span>
                          <span class="float-right">Clients avec données 1 Manquant</span>
                        </div>
                        <div class="progress progress-md mt-1 mb-0">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 82%" aria-valuenow="25"
                          aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <div class="insights px-2">
                        <div>
                          <span class="text-success h3">78%</span>
                          <span class="float-right">Clients avec données 2 Manquant</span>
                        </div>
                        <div class="progress progress-md mt-1 mb-0">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 78%" aria-valuenow="25"
                          aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row py-2">
                    <div class="col-lg-6 col-md-12">
                      <div class="insights px-2">
                        <div>
                          <span class="text-warning h3">68%</span>
                          <span class="float-right">Clients avec incohérence 1 </span>
                        </div>
                        <div class="progress progress-md mt-1 mb-0">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 68%" aria-valuenow="25"
                          aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <div class="insights px-2">
                        <div>
                          <span class="text-danger h3">62%</span>
                          <span class="float-right">Clients avec incohérence 2</span>
                        </div>
                        <div class="progress progress-md mt-1 mb-0">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 62%" aria-valuenow="25"
                          aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          


</div>
@endsection
