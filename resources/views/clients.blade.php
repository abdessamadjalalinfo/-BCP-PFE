@extends('index2')
@section('contenu')
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script>    
$(document).ready(function(){

var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
removeItemButton: true,
maxItemCount:6,
searchResultLimit:6,
renderChoiceLimit:6
});


});</script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>

<form action="">
    <div class="row d-flex justify-content-center mt-100">
    <div class="col-md-6"> <select id="choices-multiple-remove-button" placeholder="Selectionner les villes" multiple>
            <option value="all">Tout le Maroc</option>
            <option value="Casa">Casa</option>
            <option value="rabat">Rabat</option>
            <option value=" Kénitra"> Kénitra</option>
            
        </select> 
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Manque de data1
                </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="box2">
            <label class="form-check-label" for="box2">
                Manque de data2
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="box2">
            <label class="form-check-label" for="box2">
                Problème de Résidence
            </label>
        </div>

        <div class="modal-footer">
        
        <button type="button" class="btn btn-success">Voir <i class="fas fa-search"></i></button>
      </div>
</div>
    

    </div>




</form>

@endsection