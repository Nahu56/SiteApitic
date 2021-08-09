@extends("layout.master")

@section("contenu")

<div class="d-flex justify-content-end mb-4">
    <a class="btnVal btn btn-primary" href="{{route('personnage.create')}}" role="button">Ajouter un nouveau personnage</a>
</div>

@if(session()->has("successDelete"))
<div class="alert alert-success">
  <h3>{{ session()->get('successDelete') }}</h3>
</div>
@endif




<div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Pseudonyme</th>
                    <th scope="col">Race</th>
                    <th scope="col">Points de vie</th>
                    <th scope="col">Armure</th>
                    <th scope="col">Détail</th>
                    <th scope="col">Propriétaire</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach($personnages as $personnage)
                    <tr>

                        <?php
                            $Dlibel = $classes[$personnage->idClasse]->libelle;
                            $Dcouppref = $classes[$personnage->idClasse]->couppref;
                            $Details = "Je suis un " .$Dlibel. " et mon coup préféré est " .$Dcouppref;
                        ?>

                        <th scope="row"> {{$personnage->Pseudo}} </th>
                        <td> {{$personnage->idRace}} </td>
                        <td> {{$classes[$personnage->idClasse]->ptsdevie}} </td>
                        <td> {{$armures[$personnage->idArmure]->libelle}} </td>
                        <td> {{$Details}} </td>
                        <td> Tom </td>
                        <td>

                            <a href="#" class="btnTab btn btn-info">Editer</a>
                            <a href="#" class="btnTab btn btn-danger" onclick="if(confirm('Voulez-vous vraiment supprimer ce personnage ?'))
                            {document.getElementById('form-{{$personnage->id}}').submit() }">Supprimer</a>

                            <form id="form-{{$personnage->id}}" action ="{{route("etudiant.delete", ['personnage'=>$personnage->id])}}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="delete">
                            </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>





@endsection


























