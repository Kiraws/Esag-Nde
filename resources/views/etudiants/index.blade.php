@extends('template')
@section('contenu')


<h2>ETUDIANTS</h2>
<a href="{{ route('etudiant.create') }}" class="my-btn" >Ajouter</a>
<Table>
    <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Sexe</th>
        <th colspan=2 >Actions</th>
    </tr>
    @foreach($etudiants as $etudiant)
    <tr>
        <td id="id">{{$etudiant ->id}}</td>
        <td>{{$etudiant ->nom}}</td>
        <td>{{$etudiant ->prenom}} </td>
        <td>{{$etudiant ->sexes["libelle"]}} </td>
        <td><img src="{{asset('img/b_edit.png')}}" alt=""></td>
        <td><img src="{{asset('img/b_drop.png')}}" alt=""></td>

    </tr>
    @endforeach
</Table>


@endsection
