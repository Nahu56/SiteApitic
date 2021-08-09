@extends("layout.master")

@section("contenu")

<div class="d-flex justify-content-end mb-4">
    <a class="btn btn-primary" href="{{route('personnage.create')}}" role="button">Ajouter un nouveau personnage</a>
</div>

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
                <?php
                $m = count($tab);

                for($i=0; $i<$m; $i++)
                {
                    echo '<tr>';
                        echo '<th scope="row">' .$tab[$i]->Pseudo. '</th>';
                        echo '<td>' .$tab[$i]->Race. '</td>';
                        echo '<td>' .$tab[$i]->ptsVie. '</td>';
                        echo '<td>' .$tab[$i]->Armure. '</td>';
                        echo '<td>' .$tab[$i]->Details. '</td>';
                        echo '<td>Tom</td>';
                        echo '<td>
                            <a href="#" class="btn btn-info">Editer</a>
                            <a href="#" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>';

                }; ?>


            </tbody>
        </table>
    </div>
</div>

@endsection