@extends('menus')
@section('content')
<!-- Container-bière -->
<section class="product">
    <div class="container-fluid">
        <h1>{{$product->name}}</h1>
        <div class="row" id="biere">

            <!-- Col1-image-bière -->
            <div class="col-12 col-lg-4 d-flex justify-content-center" id="col1">
                <img class="photo-bieres" src="{{$product->picture}}" alt="photo-biquette" />
            </div>

            <!-- Col2-description-bière -->
            <div class="col-12 col-lg-8" id="col2">
                <span class="description">
                    <p>
                        {{$product->picture}}
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
                            <td>2.50 €</td>
                            <td>7.00 €</td>
                            <td>35.0 €</td>
                        </tr>
                        <tr>
                            <th scope="row" class="except">Quantité</th>
                            <td>
                                <input type="text" class="form-control" placeholder="Choisir" />
                            </td>
                            <td>
                                <input type="text" class="form-control" placeholder="Choisir" />
                            </td>
                            <td>
                                <input type="text" class="form-control" placeholder="Choisir" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="except">Montant total</th>
                            <td><input type="text" class="form-control" placeholder="Afficher" />
                            </td>
                            <td><input type="text" class="form-control" placeholder="Afficher" />
                            </td>
                            <td><input type="text" class="form-control" placeholder="Afficher" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="except"></th>
                            <td>
                                <button type="submit" class="btn btn-outline-dark">Ajouter au panier</button>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-outline-dark">Ajouter au panier</button>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-outline-dark">Ajouter au panier</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Boutton-commander -->
                <a class="btn btn-dark" id="commander" href="panier.html" role="button">Passer la commande</a>

                <!-- Boutton-retour-catalogue -->
                <a class="btn btn-dark" id="retour" href="catalogue.html" role="button">Retour au catalogue</a>
            </div>
        </div>
    </div>
</section>
@endsection
