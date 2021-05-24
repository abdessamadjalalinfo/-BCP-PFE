@extends('index2')
@section('contenu')
<div class="container">

    <button type="button" class="btn btn-success">Exporter <i class="fas fa-file-csv"></i></button>
    <button type="button" class="btn btn-primary">Reporter tout</button>
    
 
    
      <div class="card shadow mb-4" style="top:12px">
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
                      <th>Incohérence</th>
                      <th>Option</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>Nom complet</th>
                      <th>Identité</th>
                      <th>Incohérence</th>
                      <th>Option</th>
                     
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>
                      <button type="button" class="btn btn-success">fiche complet</button>
                      <button type="button" class="btn btn-success">Reporter</button></td>
                    </tr>
                    <tr>
                      <td>Garrett Winters</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                     <td>
                      <button type="button" class="btn btn-success">fiche complet</button>
                      <button type="button" class="btn btn-success">Reporter</button></td>
                    </tr>
                   
                    <tr>
                      <td>Charde Marshall</td>
                      <td>Regional Director</td>
                      <td>San Francisco</td>
                      <td>
                      <button type="button" class="btn btn-success">fiche complet</button>
                      <button type="button" class="btn btn-success">Reporter</button></td> </tr>
                   
                    <tr>
                      <td>Vivian Harrell</td>
                      <td>Financial Controller</td>
                      <td>San Francisco</td>
                   <td>
                      <button type="button" class="btn btn-success">fiche complet</button>
                      <button type="button" class="btn btn-success">Reporter</button></td> </tr>
                    <tr>
                      <td>Timothy Mooney</td>
                      <td>Office Manager</td>
                      <td>London</td>
                    <td>
                      <button type="button" class="btn btn-success">fiche complet</button>
                      <button type="button" class="btn btn-success">Reporter</button></td>  
                    </tr>
             
                  </tbody>
                </table>
              </div>
            </div>
          </div>

</div>





@endsection