@extends('layouts.master')
@section('title')
    Home page
@endsection

@section('content')
<form action="{{route('tache.rechercher')}}" method="post" class="form">
    @csrf
    <input type="search" name="search" id="search" class="form-control" placeholder="tap the word that you want to search for it......" required>
    <button type="submit" class="btn btn-primary mt-2">Search</button>
</form>
<div class="row mt-2">
    <div class="col-md-12">
        <a href="{{route('tache.create')}}" class="btn btn-warning">Add</a>
    </div>
</div>
    <table class="table table-hover">
        <thead>
            <tr>
                <td>Id</td>
                <td>Titre</td>
                <td>Description</td>
                <td>Etat</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->titre}}</td>
                    <td>{{$item->description}}</td>
                    @if ($item->etat=="O")
                        <td>Open</td>
                    @endif
                    @if ($item->etat=="C")
                        <td>Close</td>
                    @endif
                    <td>
                        <a href="{{route('tache.show',$item->id)}}" class="btn btn-primary">Dispaly</a>
                        <a href="{{route('tache.edit',$item->id)}}" class="btn btn-warning">Modifier</a>
                        <a href="{{route('tache.destroy',$item->id)}}" onclick="return confirm('are you sure you want to delete this one :{{$item->id}}')" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection