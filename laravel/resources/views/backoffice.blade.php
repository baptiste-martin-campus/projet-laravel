@extends('menus')
@section('content')
<section class="product-list-tri">
    <h2>Liste des produits</h2>

    <a href="/product/create" class="btn btn-primary">Ajouter un produit</a>

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col"></th>
                <th scope="col">Nom</th>
                <th scope="col">Prix</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($products as $product)

            <tr class="list-group mb-4" style="border: 3px solid orangered; width: 50%; margin: 0 auto;">
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->picture}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}} €</td>
                <td>{{$product->description}}</td>
                <td><a href="/product/edit" class="btn btn-success">Modifier</a>
                    <a href="#" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>

</section>

@endsection
