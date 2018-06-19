
@extends('adminlte::page') 

@section('title', 'Admin post') 


@section('content_header')
    <h1>Mes Projets</h1>
@stop


@section('content')


<div><a href="{{route('post.create')}}" class="btn btn-success">Ajouter un Projet</a></div>




<div class="row pt-5">
 
@foreach($posts as $element)
      <div class="card col-4 m-4 bg-secondary" style="width: 9rem;" >
        <img class="card-img-top rounded" src="{{Storage::disk('imagePostResize')->url($element->image)}}" alt="Card image cap">
        <div class="card-body">




           <table class="table table-dark">
        <thead class="thead-dark">
            <tr>
                <th>Auteur</th>
                <th>titre</th>
                <th>Contenu</th>

            </tr>
        </thead>
        <tbody>
            
            <tr>    
                <td>{{$element->user->name}}</td>
                <td>{{$element->titre}}</td>
                <td>{{$element->contenu}}</td>   
            </tr>
            
        </tbody>
          </table>



            <a class="btn btn-primary" href="{{route('post.show',['post'=>$element->id])}}">show</a>
        </div>
      </div>
   
   @endforeach
</div>
@stop


