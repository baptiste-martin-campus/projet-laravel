@extends('menus')
@section('content')

<section class="formulaire">
    <div class="background">

        <h1>Formulaire</h1>

        <h2>Créer une categorie</h2>

        <form method="post" action="{{route('category.store')}}">
            {{ csrf_field() }}

            <div class="mb-3">
                <label class="form-label">Nom de la categorie</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" class="form-control" name="description">
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>

        </form>
    </div>

</section>

@endsection
