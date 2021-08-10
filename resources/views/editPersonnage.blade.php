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
                    echo "<option value=". $race->id ."selected>". $race->libelle ."</option>";
                else
                    echo "<option value=". $race->id .">". $race->libelle ."</option>";
            }
            ?>

          </select>
        </div>

        <div class="mb-3">
          <label for="Select" class="form-label" style="color:white">Sélectionnez sa classe</label>
          <select class="form-select" name="idClasse">
              <option> </option>
              
              <?php
              foreach($classes as $classe)
              {
  
                  if($classe->id == $personnage->idClasse)
                      echo "<option value=". $classe->id ."selected>". $classe->libelle ."</option>";
                  else
                      echo "<option value=". $classe->id .">". $classe->libelle ."</option>";
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
                      echo "<option value=". $armure->id ."selected>". $armure->libelle ."</option>";
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
@endsection
