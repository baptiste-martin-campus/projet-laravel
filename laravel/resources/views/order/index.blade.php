@extends('menus')

@section('content')

<h3 class="card-title">Catalogue des produits</h3>

@foreach ($order as $commande)

    <div class="card" style="width: 18rem;">²
        <div class="card-body">
          @csrf
            <p class="card-text" style="color: rgb(248, 11, 11)">Description produit</p>
        </div>

        <ul class="list-group list-group-flush">

            <li class="list-group-item">{{ $commande->id }}</li>
            <li class="list-group-item">{{ $commande->date }}</li>
            <li class="list-group-item">{{ $commande->number }}</li>
            <li class="list-group-item">{{ $commande->customer_id }}</li>

              {{ csrf_field() }}

@endforeach
@stop
