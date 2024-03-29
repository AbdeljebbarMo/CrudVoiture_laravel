@extends('layout.default')
@section('contenu')

<div class="d-grid gap-2  m-4">
    <a href="/ajouter"><button type="button" class="btn btn-warning">Ajouter voiture</button></a>
</div>
@if(count($voitures) > 0)
<table class="table table-active" >
    <thead class="table table-dark">
    <tr>
        <th scope="col">Marque</th>
        <th scope="col">Modele</th>
        <th scope="col">Annee</th>
        <th scope="col">Couleur</th>
        <th scope="col">Action</th>
    </tr>
</thead>
<tbody class="table table-info">
        @foreach ($voitures as $voiture)
        <tr>
            <td scope="row">{{$voiture->marque}} </td>
            <td>{{$voiture->modele}} </td>
            <td>{{$voiture->annee}} </td>
            <td>{{$voiture->couleur}} </td>
            <td>
                <a href="/Modifier/{{$voiture->id}}"><button type="button" class="btn btn-primary">Modifier</button></a>
                <a href="/Supprimer/{{$voiture->id}}"><button type="button" class="btn btn-danger">Supprimer</button></a>
            </td>
        </tr>
        @endforeach
</tbody>
</table>
@else
<p>pas de Voiture dans la base de données</p>
@endif
<div class="d-grid gap-2  m-4">
    <a href="/suppVoi"><button type="button" class="btn btn-dark">SupprimerToutVoitures</button></a>
    <a href="/insrtVoi"><button type="button" class="btn btn-success">InsertVoiture</button></a>
</div>
@endsection