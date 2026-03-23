@extends('layouts.admin')
@section('title','liste des membres')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h3 class="fs-5 text-gray-700">Liste des membres</h3>
            <a href="" class="btn btn-primary"><i class="fas fa-fw fa-plus"></i> Nouveau</a>
            </div>
        <div class="row mt-4"></div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Nom Complet</th>
                        <th>Telephone</th>
                        <th>Statut</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($membres as $membre)
                    <tr>
                        <td>{{$membre->code}}</td>
                        <td>{{$membre->prenom." ".$membre->nom }}</td>
                        <td>{{$membre->telephone}}</td>
                        <td>{!! ($membre->statut == 0) ? '<span class="badge bg-success">Actif</span>' : '<span class="badge bg-danger">Danger</span>' !!}</td>
                        <td>
                            <a href="btn  btn-sm btn-warning text-white mr-2"><i class="fas fa-fw fa-edit"></i></a>
                            <a href="btn  btn-sm btn-danger text-white mr-2">  <i class="fas fa-fw fa-trash"></i></a>
                            <a href="btn  btn-sm btn-secondary text-white mr-2"><i class="fas fa-fw fa-eye"></i></a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">Aucun membre n'est enregistré</td>
                    </tr>
                    @endforelse











                </tbody>
            </table>
    </div>
</div>
@endsection