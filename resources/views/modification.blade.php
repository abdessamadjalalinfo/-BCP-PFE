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
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">


<div class="col-xl-6 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="list-editable">Add, Get & Remove</h4>
                </div>
                <div class="card-body">
                  <div class="card-body">
                    <div id="editable-list">
                      <input type="text" class="search form-control round border-primary mb-1" placeholder="Search"
                      />
                      <div class="row">
                        <div class="col-md-6 col-sm-12">
                          <button class="sort btn btn-block btn-outline-warning btn-round mb-2" data-sort="name">Trier par nom</button>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <button class="sort btn btn-block btn-outline-success btn-round mb-2" data-sort="age">Trier par CIN</button>
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table table-bordered table-lg text-center">
                          <thead>
                            <tr>
                              <th class="sort text-center" data-sort="name">Name</th>
                              <th class="sort text-center" data-sort="age">Age</th>
                              <th class="sort text-center" data-sort="city">City</th>
                              <th>Edit</th>
                              <th>Remove</th>
                            </tr>
                          </thead>
                          <!-- IMPORTANT, class="list" have to be at tbody -->
                          <tbody class="list">
                            <tr>
                              <td class="name">Jonny</td>
                              <td class="age">27</td>
                              <td class="city">Stockholm</td>
                              <td class="edit">
                                <button class="btn btn-outline-primary edit-item-btn">Edit</button>
                              </td>
                              <td class="remove">
                                <button class="btn btn-outline-danger remove-item-btn">Remove</button>
                              </td>
                            </tr>
                            <tr>
                              <td class="name">Jonas</td>
                              <td class="age">32</td>
                              <td class="city">Berlin</td>
                              <td class="edit">
                                <button class="btn btn-outline-primary edit-item-btn">Edit</button>
                              </td>
                              <td class="remove">
                                <button class="btn btn-outline-danger remove-item-btn">Remove</button>
                              </td>
                            </tr>
                            <tr>
                              <td class="name">Gustaf</td>
                              <td class="age">23</td>
                              <td class="city">Sundsvall</td>
                              <td class="edit">
                                <button class="btn btn-outline-primary edit-item-btn">Edit</button>
                              </td>
                              <td class="remove">
                                <button class="btn btn-outline-danger remove-item-btn">Remove</button>
                              </td>
                            </tr>
                            <tr>
                              <td class="name">Fredrik</td>
                              <td class="age">26</td>
                              <td class="city">Goteborg</td>
                              <td class="edit">
                                <button class="btn btn-outline-primary edit-item-btn">Edit</button>
                              </td>
                              <td class="remove">
                                <button class="btn btn-outline-danger remove-item-btn">Remove</button>
                              </td>
                            </tr>
                            <tr>
                              <td class="name">Otis</td>
                              <td class="age">36</td>
                              <td class="city">Bacolod</td>
                              <td class="edit">
                                <button class="btn btn-outline-primary edit-item-btn">Edit</button>
                              </td>
                              <td class="remove">
                                <button class="btn btn-outline-danger remove-item-btn">Remove</button>
                              </td>
                            </tr>
                            <tr>
                              <td class="name">Carla</td>
                              <td class="age">27</td>
                              <td class="city">Baleshwar</td>
                              <td class="edit">
                                <button class="btn btn-outline-primary edit-item-btn">Edit</button>
                              </td>
                              <td class="remove">
                                <button class="btn btn-outline-danger remove-item-btn">Remove</button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>





 <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="app-assets/vendors/js/extensions/listjs/list.min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/extensions/listjs/list.fuzzysearch.min.js"
  type="text/javascript"></script>
  <script src="app-assets/vendors/js/extensions/listjs/list.pagination.min.js"
  type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="app-assets/js/scripts/extensions/list.js" type="text/javascript"></script>            
@endsection