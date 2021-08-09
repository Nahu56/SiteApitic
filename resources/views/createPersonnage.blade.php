@extends("layout.master")

@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4" style="color:white">Ajout d'un nouveau personnage</h3>

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
            <select class="form-select" name="idClasse">
                <option> </option>
                
                @foreach($classes as $classe)
                {
                  <option value={{$classe->id}}> {{$classe->libelle}} </option>
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

          <button type="submit" class="btn btn-info">Sauvegarder</button>
          <a href="{{route('accueil')}}" class="btn btn-danger">Annuler</a>
        </fieldset>
      </form>
    
</div>
@endsection
