
@extends('adminlte::page')

@section('title', 'Admin post')


@section('content_header')
    <h1>Mes Projets</h1>
@stop


@section('content')


<div><a href="{{route('post.create')}}" class="btn btn-success">Ajouter un Projet</a></div>




<div class="row pt-5">
   <div class="col-6">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="../img/Capture du 2018-05-08 09-51-01.png" alt="Card image cap">
        <div class="card-body">
            <table class="table">
        <thead>
            <tr>
                <th>titre</th>
                <th>Auteur</th>
                <th>Contenu</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $element)
            <tr>    
                <td>{{$element->titre}}</td>
                <td>{{$element->user->name}}</td>
                <td>{{$element->contenu}}</td>   
            </tr>
            @endforeach
        </tbody>
    </table>
            <a class="btn btn-primary" href="{{route('post.show',['post'=>$element->id])}}">show</a>
        </div>
      </div>
   </div>





   <div class="col-6">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="../img/Capture du 2018-05-08 09-53-28.png" alt="Card image cap">
        <div class="card-body">
           <table class="table">
        <thead>
            <tr>
                <th>titre</th>
                <th>Auteur</th>
                <th>Contenu</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $element)
            <tr>    
                <td>{{$element->titre}}</td>
                <td>{{$element->user->name}}</td>
                 <td>{{$element->contenu}}</td>   
            </tr>
            @endforeach
        </tbody>
    </table>
            <a class="btn btn-primary" href="{{route('post.show',['post'=>$element->id])}}">show</a>
        </div>
      </div>
   </div>
</div>














<div class="row pt-5">
    <div class="col-6">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="../img/Capture du 2018-05-08 09-56-14.png" alt="Card image cap">
        <div class="card-body">
           <table class="table">
        <thead>
            <tr>
                <th>titre</th>
                <th>Auteur</th>
                <th>Contenu</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $element)
            <tr>    
                <td>{{$element->titre}}</td>
                <td>{{$element->user->name}}</td>
                 <td>{{$element->contenu}}</td>   
            </tr>
            @endforeach
        </tbody>
    </table>
            <a class="btn btn-primary" href="{{route('post.show',['post'=>$element->id])}}">show</a>
        </div>
      </div>
   </div>
   




   <div class="col-6">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="../img/Capture du 2018-05-08 09-58-36.png" alt="Card image cap">
        <div class="card-body">    
          <table class="table">
        <thead>
            <tr>
                <th>titre</th>
                <th>Auteur</th>
                <th>Contenu</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $element)
            <tr>    
                <td>{{$element->titre}}</td>
                <td>{{$element->user->name}}</td>
                 <td>{{$element->contenu}}</td>   
            </tr>
            @endforeach
        </tbody>
    </table>
            <a class="btn btn-primary" href="{{route('post.show',['post'=>$element->id])}}">show</a>
        </div>
      </div>
   </div>
</div>
@stop