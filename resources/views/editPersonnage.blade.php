@extends("layout.master")

@section("contenu")
<a href="{{route('accueil')}}" style="margin-left: 25%" class="btnRetour btn btn-danger">Retour</a>

<div class="table2 my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4" style="color:white">Modifiez votre personnage</h3>

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

    
    <form method="post" action="{{route('personnage.edit', ["personnage" => $personnage->id])}}">

      @csrf

      <input type="hidden" name="_method" value="put">

      <fieldset>
        <div class="mb-3">
          <label for="TextInput" class="form-label" style="color:white">Nom</label>
          <input type="text" id="TextInput" class="form-control" name="Pseudo" value="{{$personnage->Pseudo}}">
        </div>

        <div class="mb-3">
          <label for="Select" class="form-label" style="color:white">Sélectionnez sa race</label>
          <select class="form-select" name="idRace">
            <option> </option>
              
            <?php
            foreach($races as $race)
            {

                if($race->id == $personnage->idRace)
                    echo "<option value=".$race->id." selected>".$race->libelle."</option>";
                else
                    echo "<option value=".$race->id.">".$race->libelle."</option>";
            }
            ?>

          </select>
        </div>

        <div class="mb-3">
          <label for="Select" class="form-label" style="color:white">Sélectionnez sa classe</label>
          <select class="form-select nomClasse" name="idClasse">
              <option> </option>
              
              <?php
              foreach($classes as $classe)
              {
  
                  if($classe->id == $personnage->idClasse){
                      echo "<option value=". $classe->id ." selected>". $classe->libelle ."</option>";
                  }
                  else{
                      echo "<option value=". $classe->id .">". $classe->libelle ."</option>";
                  }
              }
              ?>

          </select>
        </div>

        <div class="mb-3">
          <label for="Select" class="form-label" style="color:white">Sélectionnez sa spécialisation</label>
          <select class="form-select" name="idSpecialisation">
              <option> </option>
              
              <?php
              foreach($specs as $spec)
              {
  
                  if($spec->id == $personnage->idSpecialisation){
                      echo "<option value=". $spec->id ." selected>". $spec->libelle ."</option>";
                  }
                  else{
                      $specId = "specialisation".$spec->id;
                      echo "<option value=". $spec->id ." class=". $specId .">". $spec->libelle ."</option>";
                  }
              }
              ?>

          </select>
        </div>

        <div class="mb-3">
          <label for="Select" class="form-label" style="color:white">Sélectionnez son armure</label>
          <select class="form-select" name="idArmure">
              <option> </option>
              
              <?php
              foreach($armures as $armure)
              {
  
                  if($armure->id == $personnage->idArmure)
                      echo "<option value=". $armure->id ." selected>". $armure->libelle ."</option>";
                  else
                      echo "<option value=". $armure->id .">". $armure->libelle ."</option>";
              }
              ?>

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
