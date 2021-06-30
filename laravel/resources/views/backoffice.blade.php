@extends('menus')
@section('content')
<section class="product-list-tri">
    <h2>Tri des articles</h2>

    @foreach ($products as $product)

    <ul class="list-group mb-4" style="border: 3px solid orangered; width: 50%; margin: 0 auto;">
        <li class="list-group-item">{{$product->name}}</li>
        <li class="list-group-item">{{$product->price}} €</li>
        <li class="list-group-item">{{$product->description}}</li>
    </ul>

    @endforeach

    </div>

</section>

@endsection
