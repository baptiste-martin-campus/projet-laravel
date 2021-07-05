@extends('menus')
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
</div>
@endif

<section class="formulaire">
    <div class="background">

        <h1>Formulaire</h1>

        <h2>Ajouter un produit</h2>

        <form method="post" action="{{route('backoffice.store')}}">
            {{ csrf_field() }}

            <div class="mb-3">
                <label class="form-label">Nom du produit</label>
                <input type="text" class="form-control" name="name">

                <div class="mb-3">
                    <label class="form-label">Prix</label>
                    <input type="number" class="form-control" name="price" aria-describedby="help">
                    <div id="help" class="form-text">Entre 10 et 10000 €</div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Photo</label>
                    <input type="text" class="form-control" name="picture" aria-describedby="help">
                    <div id="help" class="form-text">URL</div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea type="text" class="form-control" name="description"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Poids</label>
                    <input type="number" class="form-control" name="weight">
                </div>

                <div class="mb-3">
                    <label class="form-label">Quantité</label>
                    <input type="number" class="form-control" name="quantity">
                </div>

                <div class="mb-3">
                    <label class="form-label">Type</label>
                    <select class="form-select" name="type">
                        <option value="brune">Brune</option>
                        <option value="blonde">Blonde</option>
                        <option value="blanche">Blanche</option>
                        <option value="ambre">Ambré</option>
                        <option value="rousse">Rousse</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Categorie</label>
                    <select class="form-select" name="category_id">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="available">Disponible ?</label>
                    <select class="form-select" name="available">
                        <option value="0">0 (Non)</option>
                        <option value="1">1 (Oui)</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Ajouter</button>

        </form>
    </div>

</section>

@endsection
