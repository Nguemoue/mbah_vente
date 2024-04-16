<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            max-width: 100vw;
        }

        .dashed {
            border-bottom: 1px dashed black;
        }
    </style>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{public_path('css/bootstrap3.min.css')}}"/>
</head>
<body class="w-100">
<header class="row ">
    <div class="col-4 mx-auto text-center">
        <img src="{{public_path('img/amoirie.jpg')}}" width="70%" alt="Logo" class="img-fluid">
    </div>

</header>

<div class="text-left mt-4">
    <div>
        <b style="font-size: 1.3em">Unite:</b>
        <span class="unity-value"></span>
    </div>
    <div>
        <span style="font-size: 1.3em">N:</span>
        <span class="n-value"></span>
    </div>
</div>


<section class="my-4" style="font-size: 1.2em">
    <h1 class="text-uppercase text-center mb-2" style="font-weight: bolder">Certificat de vente</h1>
    <div>
        Je soussigne,M
        <x-doted/>
        Vendeur
    </div>
    <div>
        Titulaire de la CNI
        <x-doted/>
        delivre le
        <x-doted/>
        a
        <x-doted/>
    </div>
    <div>
        Profession
        <x-doted/>
        Addresse/tel
        <x-doted/>
    </div>
    <div>
        Domicile et demeurant a
        <x-doted/>
    </div>
    <div>
        Fils/Fille de
        <x-doted/>
        Et de
        <x-doted/>
    </div>
    <div>
        Atteste avoir vendu ce jour (date) {{today()->isoFormat('l')}} un(e)
        <x-doted/>
    </div>
    <div>
        De marque
        <x-doted/>
        Genre
        <x-doted/>
    </div>

    <div>
        Numero dans la serie type
        <x-doted/>
    </div>
    <div>
        N <b>d'immatriculation </b>
    </div>
    <div>
        Date de premiere mise en circulation :
        <x-doted/>
    </div>
    <div>
        Puissance administrative :
        <x-doted/>
    </div>
    <div>
        Source d'energie :
        <x-doted/>
    </div>
</section>
<section style="font-size: 1.2em">
    <h1 class="text-center">A</h1>
    <div class="d-flex justify-content-between">
        Je soussigne,M
        <x-doted/>
        Acheteur
    </div>
    <div class="d-flex justify-content-between">
        CNI <x-doted/>
        Delivre le <x-doted/>
        <x-doted/>
        a
        <x-doted/>
    </div>
    <div class="d-flex justify-content-between">
        Profession
        <x-doted/>
        Domicile <x-doted/>
    </div>
    <div class="d-flex justify-content-between">
        Les parties arretes de commun accord le prix de ladite vente a <x-doted/>
    </div>
    <div class="d-flex justify-content-between">
        En lettres <x-doted/>
    </div>
    <br>
    <div class="d-flex justify-content-between">
        <span>Paye au comptant , il precise que</span> <x-doted/> <b>Est vendu(e) a l'etat </b> et que le vendeur reconnait desormais <b> a l'acquerir </b> tous les droits
        de proprietes apres
    </div>
    <div class="d-flex justify-content-between">
        Legislation <x-doted/>
    </div>

    <div>
        En foit de quoi le present certificat de vente est etabli pour servir et valoir ce que de droit
    </div>
    <div class="text-right">
        <b>Fait a <x-doted/> le <x-doted/> </b>
    </div>
    <hr class="my-2">
    <div class="row">
        <div class="col-6">
            <div>
                <b>Visa du detenteur</b>
                <p>Nom <x-doted/></p>
            </div>
            <div>
                <b>Visa de l'acheteur</b>
                <p>Nom <x-doted/></p>
            </div>
        </div>
        <div class="col-6">
            <div>
                <b>Visa de l'autorite competente</b>
                 <x-doted/>
            </div>

        </div>
    </div>

</section>

</body>
</html>

