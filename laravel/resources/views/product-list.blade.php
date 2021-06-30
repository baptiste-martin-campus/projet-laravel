@extends('menus')
@section('content')
<!-- carrousel -->
<section class="product-list">
    <div class="container-md">
        <h1>Liste des binches</h1>
        <div class="row">

            <div class="col-4 sm-12 boite">
                <p class="text-accroche">
                    Envie d'une bonne bière brassée selon les anciennes traditions
                    remontant à l'époque lointaine du déluge? <br />
                    N'hésitez plus et faites votre choix parmis notre collection !
                </p>
            </div>

            <div class="col-4 sm-12 boite" style="height: 500px; z-index:0;">

                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-indicators">
                        @foreach ($products as $product)
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="" class="active" aria-current="true" aria-label=""></button>
                        @endforeach
                    </div>

                    <div class="carousel-inner">

                        @foreach ($products as $product)

                        <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                            <a href="/product/{{$product->id}}"><img src="{{$product->picture}}" class="d-block w-100" alt="{{$product->picture}}" /></a>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{$product->name}}</h5>
                                <p class="type-biere">{{$product->type}}</p>
                            </div>
                        </div>

                        @endforeach

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <div class="span-carousel">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </div>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <div class="span-carousel">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </div>
                        </button>
                    </div>
                </div>

            </div>

            <div class="col-4 sm-12 boite">
                <p class="text-accroche">
                    Que ce soit de la brune de caractère ou alors une douce blanche nous
                    somme sûr que vous trouverez votre bonheur choissisez celle-qui vous
                    plaira et bonne dégustation!!
                </p>
            </div>
</section>

@endsection
