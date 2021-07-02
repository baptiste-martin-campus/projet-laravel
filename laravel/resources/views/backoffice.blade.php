@extends('menus')
@section('content')
<section class="product-list-tri">
    <h2>Liste des produits</h2>

    <a href="{{route('backoffice.create')}}" class="btn btn-primary">Ajouter un produit</a>
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

            <tr class="mb-4" style="border: 3px solid orangered;">
                <th scope="row">{{$product->id}}</th>
                <td scope="row"><img src="{{$product->picture}}" alt="image" style="width: 250px; height: 250px;"></td>
                <td scope="row">{{$product->name}}</td>
                <td scope="row">{{$product->price}} €</td>
                <td scope="row">{{$product->description}}</td>
                <td scope="row">
                    <a href="{{route('backoffice.show',$product->id)}}" class="btn btn-success">Voir</a>
                    <a href="{{route('backoffice.edit',$product->id)}}" class="btn btn-warning">Modifier</a>
                    <form class="" action="{{route('backoffice.destroy',$product->id)}}" method="post">
                        {{ csrf_field() }}
                        <button class="btn btn-danger" type="submit" title="Delete Post">Supprimer</button>
                        {{ method_field('DELETE') }}
                    </form>
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>

</section>

@
@@
