@extends('layouts.master')
@section('title')
    edit page
@endsection
@section('content')
<form action="{{route('tache.update',$tache->id)}}" method="post" class="form">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" name="titre" id="titre" class="form-control" value="{{$tache->titre}}" required>
        </div>
        <div class="col-md-6">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control" value="{{$tache->description}}" required>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="etat" class="form-label">Etat</label>
                <select name="etat" id="etat" class="form-select" value="{{$tache->etat}}" required>
                    <option value="O">O</option>
                    <option value="C">C</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input class="btn btn-primary mt-2" type="submit" name="submit" id="submit">
            </div>
        </div>
    </div>
</form>
@endsection