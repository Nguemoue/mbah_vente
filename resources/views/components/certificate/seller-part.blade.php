<section>
    {{-- table corresponding to these field --}}
    {{-- Me block --}}
    <div class="d-flex my-2 pl-3">
        <div style="width: 20%">Je soussigne , M</div>
        <div style="width: 70%" class="value">{{config('certificate_pdf.seller_name')}}</div>
        <div style="width: 10%">Vendeur</div>
    </div>
    {{--cni block--}}
    <div class="d-flex my-2">
        <div style="width: 15%">Titulaire de la CNI</div>
        <div style="width: 30%" class="value">{{config('certificate_pdf.seller_cni')}}</div>
        <div style="width: 10%">delivre le</div>
        <div style="width: 20%" class="value">{{date('Y-m-d')}}</div>
        <div style="width: 2%">a</div>
        <div style="width: 28%" class="value">{{config('certificate_pdf.delivery_date')}}</div>
    </div>
    {{--profession block--}}
    <div class="d-flex my-2">
        <div style="width: 10%">Profession</div>
        <div style="width: 40%" class="value">{{config('certificate_pdf.seller_profession')}}</div>
        <div style="width: 15%">Addresse / Tel</div>
        <div style="width: 35%" class="value">{{config('certificate_pdf.seller_address')}}</div>
    </div>
    {{--domicile block--}}
    <div class="d-flex my-2">
        <div style="width: 30%">Domicile et Demeurant a</div>
        <div style="width: 70%" class="value">{{config('certificate_pdf.seller_city')}}</div>
    </div>
    {{--parents block--}}
    <div class="d-flex my-2">
        <div style="width: 15%">Fils/Fille de</div>
        <div style="width: 35%" class="value">{{config('certificate_pdf.seller_father_name')}}</div>
        <div style="width: 5%">Et de</div>
        <div style="width: 45%" class="value">{{config('certificate_pdf.seller_mother_name')}}</div>
    </div>
    {{--vehicle block--}}
    <div class="d-flex my-2">
        <div style="width: 40%">Atteste avoir vendu ce jour (date) {{today()->isoFormat('l')}} un(e)</div>
        <div style="width: 60%" class="value">{{config('certificate_pdf.object')}}</div>

    </div>
    <div class="d-flex my-2">
        <div style="width: 10%">De marque</div>
        <div style="width: 40%" class="value">{{config('certificate_pdf.marque')}}</div>
        <div style="width: 10%">Genre</div>
        <div style="width: 40%" class="value">{{config('certificate_pdf.gender')}}</div>
    </div>
    <div class="d-flex my-2">
        <div style="width: 20%">Numero dans la serie type</div>
        <div style="width: 80%" class="value">{{config('certificate_pdf.serial_number')}}</div>
    </div>
    <div class="d-flex my-2">
        <div style="width: 20%">N <b>d'immatriculation </b></div>
        <div style="width: 80%" class="value">{{config('certificate_pdf.matriculation_number')}}</div>
    </div>
    <div class="d-flex my-2">
        <div style="width: 40%">Date de premiere mise en circulation :</div>
        <div style="width: 60%" class="value">{{config('certificate_pdf.circulation_date')}}</div>
    </div>
    <div class="d-flex my-2">
        <div style="width: 20%">Puissance administrative :</div>
        <div style="width: 80%" class="value">{{config('certificate_pdf.power_admissible')}}</div>
    </div>
    <div class="d-flex my-2">
        <div style="width: 20%">Source d'energie :</div>
        <div style="width: 80%" class="value">{{config('certificate_pdf.power_source')}}</div>
    </div>
</section>
