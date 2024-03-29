@extends('layout.default')
@section('contenu')
<form action="/saveajouter" method="GET">
    @csrf
    <div class="mb-3">
      <label for="marque" class="form-label">marque</label>
      <input type="text" class="form-control" name="marque" id="marque" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="modele" class="form-label">modele</label>
      <input type="text" class="form-control" name="modele" id="modele">
    </div>
    <div class="mb-3">
        <label for="annee" class="form-label">annee</label>
        <input type="text" class="form-control" name="annee" id="annee">
      </div>
      <div class="mb-3">
        <label for="couleur" class="form-label">couleur</label>
        <input type="text" class="form-control" name="couleur" id="couleur"> 
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection