@extends('layouts.admin')
@section('title','Ajouter un membre')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card mb-3">
                    <div class="card-header">Enregistrement d'un membre de Bibliothèque</div>
                    <div class="card-body">
                    <form action="{{route('membre.save')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control" id="prenom" placeholder="Ecrire votre prénom">
                    </div>
                    <div class="form-group">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" placeholder="Ecrire votre nom">
                    </div>
                    <div class="form-group">
                        <label for="telephone" class="form-label">telephone</label>
                        <input type="text" class="form-control" id="telephone" placeholder="Ecrire votre numéro de téléphone">
                    </div>
                    <div class="mb-3">
                        <label for="adresse" class="form-label">Adresse</label>
                        <textarea class="form-control" id="adresse" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                    </div>
                </form>
                </div>
                </div>
                
            </div>

        </div>

    </div>
@endsection