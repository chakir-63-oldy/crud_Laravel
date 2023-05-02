@extends("layouts.master")
@section('title')
    Paginate page
@endsection
@section('content')
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
                    <a href="#" class="btn btn-primary">Dispaly</a>
                    <a href="#" class="btn btn-warning">Modifier</a>
                    <a href="#" onclick="return confirm('are you sure you want to delete this one :{{$item->id}}')" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
        @endforeach
        
    </tbody>
</table>
    {{ $data->links() }}

@endsection