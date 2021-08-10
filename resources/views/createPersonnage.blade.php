@extends("layout.master")

@section("contenu")
<a href="{{route('accueil')}}" style="margin-left: 25%" class="btnRetour btn btn-danger">Retour</a>

<div class="table2 my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4" style="color:white">Ajout d'un nouveau personnage</h3>

    @if(session()->has("success"))
    <div class="alert alert-success">
      <h3>{{ session()->get('success') }}</h3>
    </div>
    @endif

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color:white">{{$error}}</li>
            @endforeach
        </ul>
    @endif

    
    <form method="post" action="{{route('personnage.store')}}">

      @csrf

      <fieldset>
        <div class="mb-3">
          <label for="TextInput" class="form-label" style="color:white">Nom</label>
          <input type="text" id="TextInput" class="form-control" name="Pseudo">
        </div>

        <div class="mb-3">
          <label for="Select" class="form-label" style="color:white">Sélectionnez sa race</label>
          <select class="form-select" name="idRace">
            <option> </option>
              
            @foreach($races as $race)
            {
              <option value={{$race->id}}> {{$race->libelle}} </option>
            }
            @endforeach

          </select>
        </div>


        <div class="mb-3">
          <label for="Select" class="form-label" style="color:white">Sélectionnez sa classe</label>
          <select class="form-select nomClasse" name="idClasse" >
              <option>  </option>
              
              @foreach($classes as $classe)
              {
                <option value={{$classe->id}}> {{$classe->libelle}} </option>
              }
              @endforeach

          </select>
        </div>
        
        
        <div class="mb-3">
          <label for="Select" class="form-label" style="color:white">Sélectionnez sa spécialisation</label>
          <select class="form-select" name="idSpecialisation">
              <option>  </option>
              
              @foreach($specs as $spec)
              {
                  <option value={{$spec->id}} class="specialisation{{$spec->id}}"> {{$spec->libelle}} </option>
              }
              @endforeach

          </select>
        </div>


        <div class="mb-3">
          <label for="Select" class="form-label" style="color:white">Sélectionnez son armure</label>
          <select class="form-select" name="idArmure">
              <option> </option>
              
              @foreach($armures as $armure)
              {
                <option value={{$armure->id}}> {{$armure->libelle}} </option>
              }
              @endforeach

          </select>
        </div>

        <button type="submit" class="btn btn-info" style="color: white">Sauvegarder</button>
      </fieldset>
    </form>
      
</div>


<script>
        $(".specialisation1").hide()
        $(".specialisation2").hide()
        $(".specialisation3").hide()
        $(".specialisation4").hide()
        $(".specialisation5").hide()
        $(".specialisation6").hide()
        $(".specialisation7").hide()
        $(".specialisation8").hide()
        $(".specialisation9").hide()
        $(".specialisation10").hide()
        $(".specialisation11").hide()
        $(".specialisation12").hide()

  $(".nomClasse").click(function(){
    console.log($(".nomClasse").val())

    switch($(".nomClasse").val()){
      case "0": 
        $(".specialisation1").hide()
        $(".specialisation2").hide()
        $(".specialisation3").hide()
        $(".specialisation4").hide()
        $(".specialisation5").hide()
        $(".specialisation6").hide()
        $(".specialisation7").show()
        $(".specialisation8").show()
        $(".specialisation9").show()
        $(".specialisation10").hide()
        $(".specialisation11").hide()
        $(".specialisation12").hide()

      break;
      case "1": 
        $(".specialisation1").hide()
        $(".specialisation2").hide()
        $(".specialisation3").hide()
        $(".specialisation4").show()
        $(".specialisation5").show()
        $(".specialisation6").show()
        $(".specialisation7").hide()
        $(".specialisation8").hide()
        $(".specialisation9").hide()
        $(".specialisation10").hide()
        $(".specialisation11").hide()
        $(".specialisation12").hide()

      break;
      case "2": 
        $(".specialisation1").show()
        $(".specialisation2").show()
        $(".specialisation3").show()
        $(".specialisation4").hide()
        $(".specialisation5").hide()
        $(".specialisation6").hide()
        $(".specialisation7").hide()
        $(".specialisation8").hide()
        $(".specialisation9").hide()
        $(".specialisation10").hide()
        $(".specialisation11").hide()
        $(".specialisation12").hide()

      break;
      case "3": 
        $(".specialisation1").hide()
        $(".specialisation2").hide()
        $(".specialisation3").hide()
        $(".specialisation4").hide()
        $(".specialisation5").hide()
        $(".specialisation6").hide()
        $(".specialisation7").hide()
        $(".specialisation8").hide()
        $(".specialisation9").hide()
        $(".specialisation10").show()
        $(".specialisation11").show()
        $(".specialisation12").show()

      break;

    }
  })



</script>


@endsection
