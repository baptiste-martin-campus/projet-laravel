@extends('menus')
@section('content')
<!-- Container-bière -->
<section class="product">
    <div class="container-fluid">
        <h1>{{$product->name}}</h1>
        <div class="row" id="biere">

            <!-- Col1-image-bière -->
            <div class="col-12 col-lg-4 d-flex justify-content-center" id="col1">
                <img class="photo-bieres" src="{{$product->picture}}" alt="{{$product->picture}}" />
            </div>

            <!-- Col2-description-bière -->
            <div class="col-12 col-lg-8" id="col2">
                <span class="description">
                    <p>
                        {{$product->description}}
                    </p>
                </span>
                <span class="specificites">
                    <b>BIERE BLANCHE | 4.5° ALC. VOL. | 10 EBC – 15 IBU</b>
                </span>

                <!-- Table-prix-bière -->
                <table>
                    <thead>
                        <tr>
                            <th scope="col" class="except">Contenant</th>
                            <th scope="col">
                                Bouteille <br />
                                (33 cL)
                            </th>
                            <th scope="col">
                                Bouteille <br />
                                (75 cL)
                            </th>
                            <th scope="col">
                                PerfectDraft <br />
                                (6L)
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="except">Prix</th>
                            <td>{{$product->price}} €</td>
                            <td>{{$product->price}} €</td>
                            <td>{{$product->price}} €</td>
                        </tr>
                        <tr>
                            <th scope="row" class="except">Quantité</th>
                            <td><input type="number" class="form-control" placeholder="Choisir" /></td>
                            <td><input type="number" class="form-control" placeholder="Choisir" /></td>
                            <td><input type="number" class="form-control" placeholder="Choisir" /></td>
                        </tr>
                        <tr>
                            <th scope="row" class="except">Montant total</th>
                            <td><p>{{$product->price * 3}} €</p></td>
                            <td><p>{{$product->price * 3}} €</p></td>
                            <td><p>{{$product->price * 3}} €</p></td>
                        </tr>
                        <tr>
                            <th scope="row" class="except"></th>
                            <td><button type="submit" class="btn btn-outline-dark">Ajouter au panier</button></td>
                            <td><button type="submit" class="btn btn-outline-dark">Ajouter au panier</button></td>
                            <td><button type="submit" class="btn btn-outline-dark">Ajouter au panier</button></td>
                        </tr>
                    </tbody>
                </table>

                <!-- Boutton-commander -->
                <a class="btn btn-dark" id="commander" href="/cart" role="button">Passer la commande</a>

                <!-- Boutton-retour-catalogue -->
                <a class="btn btn-dark" id="retour" href="/product" role="button">Retour au catalogue</a>
            </div>
        </div>
    </div>
</section>
@endsection
