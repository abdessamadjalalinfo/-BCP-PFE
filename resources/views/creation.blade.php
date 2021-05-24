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
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/daterange/daterangepicker.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/pickers/daterange/daterange.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">



   <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Création du Personne Physique</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Personne physique</a>
                </li>
                
                <li class="breadcrumb-item active">Création
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
      <div class="content-body">
        <!-- Form wizard with number tabs section start -->
        <section id="number-tabs">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Veuillez remplir les champs suivants</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
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
                  <div class="card-body">
                    <form action="#" class="number-tab-steps wizard-notification">
                      <!-- Step 1 -->
                      <h6>Etape 1</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="firstName1">First Name :</label>
                              <input type="text" class="form-control" id="firstName1">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="lastName1">Last Name :</label>
                              <input type="text" class="form-control" id="lastName1">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="emailAddress1">Email Address :</label>
                              <input type="email" class="form-control" id="emailAddress1">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="location1">Select City :</label>
                              <select class="c-select form-control" id="location1" name="location">
                                <option value="">Select City</option>
                                <option value="Amsterdam">Amsterdam</option>
                                <option value="Berlin">Berlin</option>
                                <option value="Frankfurt">Frankfurt</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phoneNumber1">Phone Number :</label>
                              <input type="tel" class="form-control" id="phoneNumber1">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="date1">Date of Birth :</label>
                              <input type="date" class="form-control" id="date1">
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <!-- Step 2 -->
                      <h6>Etape2</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="proposalTitle1">Proposal Title :</label>
                              <input type="text" class="form-control" id="proposalTitle1">
                            </div>
                            <div class="form-group">
                              <label for="emailAddress2">Email Address :</label>
                              <input type="email" class="form-control" id="emailAddress2">
                            </div>
                            <div class="form-group">
                              <label for="videoUrl1">Video URL :</label>
                              <input type="url" class="form-control" id="videoUrl1">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="jobTitle1">Job Title :</label>
                              <input type="text" class="form-control" id="jobTitle1">
                            </div>
                            <div class="form-group">
                              <label for="shortDescription1">Short Description :</label>
                              <textarea name="shortDescription" id="shortDescription1" rows="4" class="form-control"></textarea>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <!-- Step 3 -->
                      <h6>Etape 3</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="eventName1">Event Name :</label>
                              <input type="text" class="form-control" id="eventName1">
                            </div>
                            <div class="form-group">
                              <label for="eventType1">Event Type :</label>
                              <select class="c-select form-control" id="eventType1" data-placeholder="Type to search cities"
                              name="eventType1">
                                <option value="Banquet">Banquet</option>
                                <option value="Fund Raiser">Fund Raiser</option>
                                <option value="Dinner Party">Dinner Party</option>
                                <option value="Wedding">Wedding</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="eventLocation1">Event Location :</label>
                              <select class="c-select form-control" id="eventLocation1" name="location">
                                <option value="">Select City</option>
                                <option value="Amsterdam">Amsterdam</option>
                                <option value="Berlin">Berlin</option>
                                <option value="Frankfurt">Frankfurt</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Event Date - Time :</label>
                              <div class='input-group'>
                                <input type='text' class="form-control datetime" />
                                <span class="input-group-addon">
                                  <span class="ft-calendar"></span>
                                </span>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="eventStatus1">Event Status :</label>
                              <select class="c-select form-control" id="eventStatus1" name="eventStatus">
                                <option value="Planning">Planning</option>
                                <option value="In Progress">In Progress</option>
                                <option value="Finished">Finished</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Requirements :</label>
                              <div class="c-inputs-stacked">
                                <div class="d-inline-block custom-control custom-checkbox">
                                  <input type="checkbox" name="status1" class="custom-control-input" id="staffing1">
                                  <label class="custom-control-label" for="staffing1">Staffing</label>
                                </div>
                                <div class="d-inline-block custom-control custom-checkbox">
                                  <input type="checkbox" name="status1" class="custom-control-input" id="catering1">
                                  <label class="custom-control-label" for="catering1">Catering</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <!-- Step 4 -->
                      <h6>Etape 4</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="meetingName1">Name of Meeting :</label>
                              <input type="text" class="form-control" id="meetingName1">
                            </div>
                            <div class="form-group">
                              <label for="meetingLocation1">Location :</label>
                              <input type="text" class="form-control" id="meetingLocation1">
                            </div>
                            <div class="form-group">
                              <label for="participants1">Names of Participants</label>
                              <textarea name="participants" id="participants1" rows="4" class="form-control"></textarea>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="decisions1">Decisions Reached</label>
                              <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                              <label>Agenda Items :</label>
                              <div class="c-inputs-stacked">
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" name="agenda1" class="custom-control-input" id="item11">
                                  <label class="custom-control-label" for="item11">1st item</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" name="agenda1" class="custom-control-input" id="item12">
                                  <label class="custom-control-label" for="item12">2nd item</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" name="agenda1" class="custom-control-input" id="item13">
                                  <label class="custom-control-label" for="item13">3rd item</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" name="agenda1" class="custom-control-input" id="item14">
                                  <label class="custom-control-label" for="item14">4th item</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" name="agenda1" class="custom-control-input" id="item15">
                                  <label class="custom-control-label" for="item15">5th item</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Form wizard with number tabs section end -->
        <!-- Form wizard with icon tabs section start -->
        
        <!-- Form wizard with icon tabs section end -->
        <!-- Form wzard with step validation section start -->
        
        <!-- Form wzard with step validation section end -->
        <!-- Form wizard with vertical tabs section start -->
        
        <!-- Form wizard with vertical tabs section end -->
      </div>
    </div>
  </div>


  <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="app-assets/vendors/js/extensions/jquery.steps.min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js"
  type="text/javascript"></script>
  <script src="app-assets/vendors/js/pickers/daterange/daterangepicker.js"
  type="text/javascript"></script>
  <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"
  type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="app-assets/js/scripts/forms/wizard-steps.js" type="text/javascript"></script>




@endsection
