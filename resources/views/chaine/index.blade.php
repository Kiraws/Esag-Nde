@extends('template')
@section('contenu')

La Longueur est : {{$longueur}}
<form action="{{url('chaine') }}" method="post">
    @csrf
    <label>
        Entrer le nom  
    </label>
    <input type="text" name="nom" id="nom">
    <input type="submit" value="Submit">
</form>
@endsection
