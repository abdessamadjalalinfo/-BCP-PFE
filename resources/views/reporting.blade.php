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
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/cryptocoins/cryptocoins.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">




   <section id="grouped-stats">
          
         
          
         
         
          <div class="row">
            <div class="col-12">
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

        <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Contacts</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Users</a>
                </li>
                <li class="breadcrumb-item active">Contacts
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
            <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2"
            id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a class="dropdown-item"
              href="component-buttons-extended.html">Buttons</a></div>
          </div>
        </div>
      </div>
      <div class="content-detached content-right">
        <div class="content-body">
          <section class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-head">
                  <div class="card-header">
                    <h4 class="card-title">All Contacts</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                    <div class="heading-elements">
                      <button class="btn btn-primary btn-sm"><i class="ft-plus white"></i> Add Contacts</button>
                      <span class="dropdown">
                        <button id="btnSearchDrop1" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="true" class="btn btn-warning dropdown-toggle dropdown-menu-right btn-sm"><i class="ft-download-cloud white"></i></button>
                        <span aria-labelledby="btnSearchDrop1" class="dropdown-menu mt-1 dropdown-menu-right">
                          <a href="#" class="dropdown-item"><i class="ft-upload"></i> Import</a>
                          <a href="#" class="dropdown-item"><i class="ft-download"></i> Export</a>
                          <a href="#" class="dropdown-item"><i class="ft-shuffle"></i> Find Duplicate</a>
                        </span>
                      </span>
                      <button class="btn btn-default btn-sm"><i class="ft-settings white"></i></button>
                    </div>
                  </div>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <!-- Task List table -->
                    <div class="table-responsive">
                      <table id="users-contacts" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Favorite</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Alice Collins</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">alice@example.com</a>
                            </td>
                            <td>+658-254-256</td>
                            <td class="text-center"><i class="la la-star  yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Margaret Govan</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">margaret@example.com</a>
                            </td>
                            <td>+125-654-564</td>
                            <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop3" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop3" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-4.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Eugene Woods</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">eugene@example.com</a>
                            </td>
                            <td>+987-654-564</td>
                            <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop4" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop4" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Russell Bryant</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">russell@example.com</a>
                            </td>
                            <td>+235-654-564</td>
                            <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop5" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop5" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Cynthia Tucker</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">cynthia@example.com</a>
                            </td>
                            <td>+987-654-564</td>
                            <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop6" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop6" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-busy rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-5.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Scott Marshall</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">scott@example.com</a>
                            </td>
                            <td>+954-654-564</td>
                            <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop7" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop7" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-away rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-8.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Catherine Smith</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">catherine@example.com</a>
                            </td>
                            <td>+254-654-564</td>
                            <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop8" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop8" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-off rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-7.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Eric Howard</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">eric@example.com</a>
                            </td>
                            <td>+545-654-564</td>
                            <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop9" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop9" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-9.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Donald Watkins</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">donald@example.com</a>
                            </td>
                            <td>+987-654-564</td>
                            <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop10" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop10" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-10.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Brittany Barnes</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">brittany@example.com</a>
                            </td>
                            <td>+632-654-564</td>
                            <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop11" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop11" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-busy rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-5.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Scott Marshall</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">scott@example.com</a>
                            </td>
                            <td>+954-654-564</td>
                            <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop12" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop12" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-away rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-8.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Catherine Smith</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">catherine@example.com</a>
                            </td>
                            <td>+254-654-564</td>
                            <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop13" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop13" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-off rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-7.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Eric Howard</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">eric@example.com</a>
                            </td>
                            <td>+545-654-564</td>
                            <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop14" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop14" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-9.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Donald Watkins</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">donald@example.com</a>
                            </td>
                            <td>+987-654-564</td>
                            <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop15" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop15" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-10.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Brittany Barnes</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">brittany@example.com</a>
                            </td>
                            <td>+632-654-564</td>
                            <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop16" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop16" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Alice Collins</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">alice@example.com</a>
                            </td>
                            <td>+658-254-256</td>
                            <td class="text-center"><i class="la la-star  yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop17" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop17" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Margaret Govan</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">margaret@example.com</a>
                            </td>
                            <td>+125-654-564</td>
                            <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop18" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop18" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-4.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Eugene Woods</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">eugene@example.com</a>
                            </td>
                            <td>+987-654-564</td>
                            <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop19" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop19" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Russell Bryant</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">russell@example.com</a>
                            </td>
                            <td>+235-654-564</td>
                            <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop20" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop20" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Cynthia Tucker</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">cynthia@example.com</a>
                            </td>
                            <td>+987-654-564</td>
                            <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop21" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop21" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-4.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Eugene Woods</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">eugene@example.com</a>
                            </td>
                            <td>+987-654-564</td>
                            <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop22" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop22" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Russell Bryant</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">russell@example.com</a>
                            </td>
                            <td>+235-654-564</td>
                            <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop23" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop23" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Cynthia Tucker</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">cynthia@example.com</a>
                            </td>
                            <td>+987-654-564</td>
                            <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop24" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop24" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Alice Collins</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">alice@example.com</a>
                            </td>
                            <td>+658-254-256</td>
                            <td class="text-center"><i class="la la-star  yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop25" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop25" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Margaret Govan</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">margaret@example.com</a>
                            </td>
                            <td>+125-654-564</td>
                            <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop26" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop26" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-busy rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-5.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Scott Marshall</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">scott@example.com</a>
                            </td>
                            <td>+954-654-564</td>
                            <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop27" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop27" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-away rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-8.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Catherine Smith</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">catherine@example.com</a>
                            </td>
                            <td>+254-654-564</td>
                            <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop28" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop28" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-off rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-7.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Eric Howard</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">eric@example.com</a>
                            </td>
                            <td>+545-654-564</td>
                            <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop29" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop29" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-9.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Donald Watkins</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">donald@example.com</a>
                            </td>
                            <td>+987-654-564</td>
                            <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop30" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop30" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-10.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">Brittany Barnes</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <a href="mailto:email@example.com">brittany@example.com</a>
                            </td>
                            <td>+632-654-564</td>
                            <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop31" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop31" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Favorite</th>
                            <th>Actions</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <div class="sidebar-detached sidebar-left" ,=",">
        <div class="sidebar">
          <div class="bug-list-sidebar-content">
            <!-- Predefined Views -->
            <div class="card">
              <div class="card-head">
                <div class="media p-1">
                  <div class="media-left pr-1">
                    <span class="avatar avatar-sm avatar-online rounded-circle">
                      <img src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span>
                  </div>
                  <div class="media-body media-middle">
                    <h5 class="media-heading">Margaret Govan</h5>
                  </div>
                </div>
              </div>
              <!-- contacts search -->
              <div class="card-body border-top-blue-grey border-top-lighten-5">
                <div class="bug-list-search">
                  <div class="bug-list-search-content">
                    <form action="#">
                      <div class="position-relative">
                        <input type="search" id="search-contacts" class="form-control" placeholder="Search contacts...">
                        <div class="form-control-position">
                          <i class="la la-search text-size-base text-muted"></i>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /contacts search -->
              <!-- contacts view -->
              <div class="card-body">
                <div class="list-group">
                  <a href="#" class="list-group-item active">All Contacts</a>
                  <a href="#" class="list-group-item list-group-item-action">Recently contacted</a>
                  <a href="#" class="list-group-item list-group-item-action">Favorite contacts</a>
                </div>
              </div>
              <!-- Groups-->
              <div class="card-body">
                <p class="lead">Groups</p>
                <ul class="list-group">
                  <li class="list-group-item">
                    <span class="badge badge-primary badge-pill float-right">14</span> <a href="#"> Project</a>
                  </li>
                  <li class="list-group-item">
                    <span class="badge badge-info badge-pill float-right">22</span> <a href="#"> Team</a>
                  </li>
                  <li class="list-group-item">
                    <span class="badge badge-warning badge-pill float-right">10</span> <a href="#"> Clients</a>
                  </li>
                  <li class="list-group-item">
                    <span class="badge badge-success badge-pill float-right">5</span> <a href="#"> Friends</a>
                  </li>
                </ul>
              </div>
              <!--/ Groups-->
              <!--More-->
              <div class="card-body ">
                <p class="lead">More</p>
                <ul class="list-group">
                  <li><a href="#" class="list-group-item">Import</a></li>
                  <li><a href="#" class="list-group-item">Export</a></li>
                  <li><a href="#" class="list-group-item">Print</a></li>
                  <li><a href="#" class="list-group-item">Restore contacts</a></li>
                  <li><a href="#" class="list-group-item">Find duplicate</a></li>
                </ul>
              </div>
              <!--/More-->
            </div>
            <!--/ Predefined Views -->
          </div>
        </div>
      </div>
    </div>
  </div>





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
@endsection
