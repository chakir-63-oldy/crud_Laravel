@extends('layouts.master')
@section('title')
    Add Tache
@endsection
@section('content')
    <form action="{{route('tache.store')}}" method="post" class="form">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" name="titre" id="titre" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control" required>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="etat" class="form-label">Etat</label>
                    <select name="etat" id="etat" class="form-select" required>
                        <option value="O">O</option>
                        <option value="C">C</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input class="btn btn-primary mt-2" type="submit" name="submit" id="dubmit">
                </div>
            </div>
        </div>
    </form>
@endsection