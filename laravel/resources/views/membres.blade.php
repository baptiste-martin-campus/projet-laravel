@extends('menus')
@section('content')
<!-- description équipe -->
<div class="container-fluid">
    <div class="row">
        <h1>La brasserie Noé !</h1>


    </div>
    <div class="row">
        <div class="col-sm">
            <h2>Hubert:</h2>
            <span class="T">
                <p>Commercial & responsable relation hors territoire français</p>
            </span>
            <a class="lienh" href="{{asset('membres/hubert')}}"><img src="/img/Photo Hubert.jpg" alt="oss"></a>
        </div>

        <div class="col-sm">
            <h2>Aurélien:</h2>
            <span class="T">
                <p>Concepteur de goût &préparateur de mixture</p>
            </span>
            <a class="liena" href="{{asset('membres/aurelien')}}"><img src="/img/Photo Aurélien.jpg" alt="orel"></a>
        </div>

        <div class="col-sm">
            <h2>Lucie:</h2>
            <span class="T">
                <p>Chercheuse de saveur & responsable mousse</p>
            </span>
            <a class="lienL" href="{{asset('membres/lucie')}}"> <img src="/img/Photo Lucie.jpg" alt="lulu"></a>

        </div>
        <div class="col-sm">
            <h2>Hercule:</h2>
            <span class="T">
                <p>Technicien de surface & responsable équipement</p>
            </span>
            <a class="lienH" href="{{asset('membres/hercule')}}"><img src="/img/Photo Hercules.jpg" alt="herc"></a>
        </div>
    </div>
</div>
@endsection
