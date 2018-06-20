@extends('layouts.front')

@section('content')

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



            <a class="btn btn-primary" href="{{route('GaleriaShow', ['post'=>$element->id])}}">show</a>
        </div>
      </div>
   
   @endforeach
</div>
@stop


