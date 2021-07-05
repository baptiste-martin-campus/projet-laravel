@extends('menus')
@section('content')

<section class="formulaire">
    <div class="background">

        <h1>Formulaire</h1>

        <h2>Modifier une categorie</h2>

        <form method="post" action="{{route('category.update',$category->id)}}">
            {{ csrf_field() }}

            <div class="mb-3">
                <label class="form-label">Nom de la categorie</label>
                <input type="text" class="form-control" name="name" value="{{$category->name}}">
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" class="form-control" name="description" aria-describedby="help" value="{{$category->description}}">
            </div>

            <button type="submit" class="btn btn-primary">Appliquer les changements</button>

            {{ method_field('PUT') }}

        </form>
    </div>

</section>

@endsection
