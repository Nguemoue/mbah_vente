@props(['certificate'])
@php
    $certificate instanceof  \App\Models\Certificate;
@endphp
<section class="table">
    {{-- table corresponding to these field --}}
    {{--name block--}}
    <div class="d-flex">
        <div style="width: 10%" >M</div>
        <div style="width: 80%" class="value">{{$certificate->name}}</div>
        <div style="width: 10%" class="text-right">Achéteur</div>
    </div>

    {{--cni block--}}

    <div class="d-flex mt-2">
        <div style="width: 10%">CNI</div>
        <div class="value" style="width: 30%">{{$certificate->cni}}</div>
        <div style="width: 10%">Délivre le</div>
        <div style="width: 20%" class="value">{{$certificate->delivery_date}}</div>
        <div style="width: 10%">à</div>
        <div style="width: 20%" class="value">{{$certificate->delivery_place}}</div>
    </div>
    {{--profession block--}}

    <div class="d-flex mt-2">
        <div style="width: 10%">Profession</div>
        <div style="width: 40%" class="value">{{$certificate->profession}}</div>
        <div style="width: 10%">Domicile</div>
        <div style="width: 40%" class="value">{{$certificate->domicile}}</div>
    </div>
    {{--Amount block--}}

    <div class="d-flex mt-2">
        <div style="width: 50%">Les parties arretes de commun accord le prix de ladite vente a</div>
        <div style="width: 50%" class="value">{{number_format((float)$certificate->amount)}}</div>
    </div>
    {{--letter amount--}}

    <div class="d-flex mt-2">
        <div style="width: 10%">En Lettres</div>
        <div style="width: 90%" class="value">{{\Illuminate\Support\Number::spell($certificate->amount)}}</div>
    </div>
    {{----}}
    <br>
    <div class="d-flex mt-2">
        <div style="width: 30%"> Paye au comptant , il precise que</div>
        <div style="width: 50%" class="value"> {{$certificate->subject}}</div>
        <div style="width: 20%">
            <b>Est vendu(e) a l'etat </b>
        </div>
    </div>
    <div class="d-flex mt-2">
        Et que le vendeur reconnait desormais <b> a l'acquerir </b> tous les droits de proprietes apres
    </div>
    {{--legislation--}}
    <div class="d-flex mt-2">
        <div style="width: 10%">Legislation</div>
        <div style="width: 90%" class="value dashed">{{$certificate->legislation}}</div>
    </div>
</section>
