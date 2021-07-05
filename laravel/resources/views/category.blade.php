@extends('menus')
@section('content')
<section class="category-list-tri">
    <h2>Liste des catégories</h2>

    <a href="{{route('category.create')}}" class="btn btn-primary">Ajouter une catégorie</a>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
        </thead>

        <tbody>

            @foreach ($categories as $category)

            <tr class="mb-4" style="border: 3px solid orangered;">
                <th scope="col">{{$category->id}}</th>
                <td scope="col">{{$category->name}}</td>
                <td scope="col">{{$category->description}}</td>
                <td scope="col">
                    <a href="{{route('category.show',$category->id)}}" class="btn btn-success">Voir les produits associés</a>
                    <a href="{{route('category.edit',$category->id)}}" class="btn btn-warning">Modifier</a>
                    <form class="" action="{{route('category.destroy',$category->id)}}" method="post">
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
