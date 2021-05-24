@extends('index2')
@section('contenu')

<div class="container-fluid">
    <form>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Région</label>
    <select class="form-control form-control-md">
        <option>Région</option>
    </select>
   
     
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Ville</label>
    <select class="form-control form-control-md">
        <option>Ville 1</option>
    </select>
   
     
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Agence</label>
    <select class="form-control form-control-md">
        <option> Agence</option>
    </select>
   
     
  </div>
 <button type="button" class="btn btn-success">Choisir</button>
</form>


</div>
@endsection