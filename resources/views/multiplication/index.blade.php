@extends('template')
@section('contenu')

<form action="{{url('multiplication')}}" method="post" class="form" >
    @csrf
    <label>
        Entrer le nombre  
    </label>
    <input type="text" name="nombre" id="nombre"> <!-- Utilisation de "nombre" au lieu de "nom" pour correspondre à la modification de la fonction -->
    <input type="submit" value="Submit">
</form>
<br>
<table>
    <tr>
        <th>TABLE DE MULTIPLICATION  </th>
    </tr>
    @foreach($table as $resultat)
    <tr>
        <td>{{$resultat}}</td>
    </tr>
    @endforeach
</table>



@endsection
