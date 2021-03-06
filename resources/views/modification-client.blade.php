@extends('index2')

@section('contenu')
<link rel="apple-touch-icon" href="{{asset('app-assets/images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('app-assets/images/ico/favicon.ico')}}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css')}}"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/vendors.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/app.css')}}">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}')}}">

<div class="container-fluid">

<section id="striped-row-form-layouts">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="striped-row-layout-basic">Project Info</h4>
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
                <div class="card-content collpase show">
                  <div class="card-body">
                    <div class="card-text">
                      <p>Add <code>.striped-rows</code> to form tag to add striped rows.
                        In this example <code>.form-horizontal</code> and <code>.form-bordered</code>                        is used to show the striped rows functionality.</p>
                    </div>
                    <form class="form form-horizontal striped-rows form-bordered">
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput1">First Name</label>
                          <div class="col-md-9">
                            <input type="text" id="projectinput1" class="form-control" placeholder="First Name"
                            name="fname">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput2">Last Name</label>
                          <div class="col-md-9">
                            <input type="text" id="projectinput2" class="form-control" placeholder="Last Name"
                            name="lname">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput3">E-mail</label>
                          <div class="col-md-9">
                            <input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email">
                          </div>
                        </div>
                        <div class="form-group row last">
                          <label class="col-md-3 label-control" for="projectinput4">Contact Number</label>
                          <div class="col-md-9">
                            <input type="text" id="projectinput4" class="form-control" placeholder="Phone" name="phone">
                          </div>
                        </div>
                        <h4 class="form-section"><i class="la la-clipboard"></i> Requirements</h4>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput5">Company</label>
                          <div class="col-md-9">
                            <input type="text" id="projectinput5" class="form-control" placeholder="Company Name"
                            name="company">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput6">Interested in</label>
                          <div class="col-md-9">
                            <select id="projectinput6" name="interested" class="form-control">
                              <option value="none" selected="" disabled="">Interested in</option>
                              <option value="design">design</option>
                              <option value="development">development</option>
                              <option value="illustration">illustration</option>
                              <option value="branding">branding</option>
                              <option value="video">video</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput7">Budget</label>
                          <div class="col-md-9">
                            <select id="projectinput7" name="budget" class="form-control">
                              <option value="0" selected="" disabled="">Budget</option>
                              <option value="less than 5000$">less than 5000$</option>
                              <option value="5000$ - 10000$">5000$ - 10000$</option>
                              <option value="10000$ - 20000$">10000$ - 20000$</option>
                              <option value="more than 20000$">more than 20000$</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control">Select File</label>
                          <div class="col-md-9">
                            <label id="projectinput8" class="file center-block">
                              <input type="file" id="file">
                              <span class="file-custom"></span>
                            </label>
                          </div>
                        </div>
                        <div class="form-group row last">
                          <label class="col-md-3 label-control" for="projectinput9">About Project</label>
                          <div class="col-md-9">
                            <textarea id="projectinput9" rows="5" class="form-control" name="comment" placeholder="About Project"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                          <i class="la la-check-square-o"></i> Save
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

</section>

</div>


  <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="{{asset('app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{asset('app-assets/js/core/app.js')}}" type="text/javascript"></script>
  <script src="{{asset('app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
  
@endsection