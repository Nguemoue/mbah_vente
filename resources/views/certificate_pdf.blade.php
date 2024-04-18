<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificate</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            max-width: 100vw;
        }
        div{
            font-size: 1.05em;
        }

        table.table{
            border-collapse: collapse;
            border:none;
        }
        table tr,table tr td{
            border: none;
        }
        table td{
            font-family: Arial, sans-serif;
        }

         .value{
            font-weight: bold;
            text-align: left;
            border-bottom: 1px solid black;
        }

    </style>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{public_path('css/bootstrap3.min.css')}}"/>
</head>
<body class="w-100">
<header class="row ">
    <div class="col-4 mx-auto text-center">
        <img src="{{public_path('img/amoirie.jpg')}}" width="50%" alt="Logo" class="img-fluid">
    </div>

</header>
<x-certificate.title-part/>
<br>

<h2 class="text-uppercase text-center mb-2" style="font-weight: bolder">Certificat de vente</h2>
<x-certificate.seller-part/>
<br>
<h2 class="text-center" style="font-weight: bolder">A</h2>
<x-certificate.buyer-part :certificate="$certificate"/>

<x-certificate.footer-part/>
</body>
</html>

