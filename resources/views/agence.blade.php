@extends('index2')
@section('contenu')
<meta name="csrf-token" content="{{ csrf_token() }}">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="container-fluid">
    <form id='form'>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Veuillez Sélectionner la BPR</label>
    <select name="region" id="select-work" class="work-select form-control form-control-md">
        <option value="1">Grand Casablanca</option>
        <option value="2">Rabat </option>
        <option value="6">Marrakech-tansift-Haouz</option>
        <option value="5">Zone Sud</option>
        <option value="4"> Tanger</option>

       
        
    </select>
 <script type="text/javascript">
   $(function() {
    $('.work-select').change(function() {
      console.log({
                region: $(this).val(), _token: '{{csrf_token()}}'
            })
      
        $.ajax({
           
            method: "POST",
            url: "{{route('getsuccursals')}}",
            data: {
                region: $(this).val(), _token: '{{csrf_token()}}'
            },
            success: function(data){
               console.log(data)
            var $country = $('#ville');
            $country.empty();
            $('#ville').empty();
            for (var i = 0; i < data.length; i++) {
                $country.append('<option value=' + data[i].id + '>' + data[i].name + '</option>');
            }

            //manually trigger a change event for the contry so that the change handler will get triggered
            $country.change();

            }
        });
    });
});
</script>
   
     
  </div>
  <div class="form-group">
    {!! csrf_field() !!}
    <label for="exampleFormControlSelect1">Succursale </label>
    <select id='ville' class="form-control form-control-md">
        <option>Ville 1</option>
    </select>
   <script type="text/javascript">
   $(function() {
    $('#ville').change(function() {
        
        $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
        $.ajax({
           
            method: "POST",
            url: "{{route('getagence')}}",
            data: {
                ville: $(this).val(), _token: '{{csrf_token()}}' 
            },
            success: function(data){
               console.log(data)
                var $country = $('#agence');
            $country.empty();
            $('#agence').empty();
            for (var i = 0; i < data.length; i++) {
                $country.append('<option value=' + data[i].id + '>' + data[i].nom + '</option>');
            }

            //manually trigger a change event for the contry so that the change handler will get triggered
            $country.change();
            

      
           

            }
        });
    });
});
</script>
     
  </div>

  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Agence</label>
    <select name='agence' id="agence" class="form-control form-control-md">
        <option> Agence</option>
    </select>

    <script type="text/javascript">
   $(function() {
    $('#agence').change(function() {

       var $country = $('#form');
       $('.btn-success').remove()
       if($('#agence').val()!=null){
        $country.append('<a href=agence/'+$('#agence').val()+' class="btn btn-success">Choisir</a>');
           }



    })
     
      });
</script>
     
   
     
  </div>
 <!-- type="button" class="btn btn-success">Choisir</!-->
</form>


</div>

 
@endsection