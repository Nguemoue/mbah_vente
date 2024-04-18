@extends('templates.bootstrap')
@section('content')
    <form action="{{route('user.personal_data')}}" method="post">
        @csrf
        <fieldset>
            <legend>Personal Data Information</legend>
            <hr>
            {{-- get all the name of field bellow and generale me a laravel rule validation --}}
            @csrf
            <div class="row">
                <div class="col-xl-6 col-xs-12 form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" name="seller_name" value="{{config('certificate_pdf.seller_name')}}">
                </div>
                <div class="form-group col-xl-6 col-xs-12">
                    <label for="cni">CNI</label>
                    <input type="text" minlength="11" maxlength="11" class="form-control" id="cni" name="seller_cni" value="{{config('certificate_pdf.seller_cni')}}">
                </div>
                <div class="form-group col-xl-6 col-xs-12">
                    <label for="delivery_date">Delivery date</label>
                    <input type="date" class="form-control" id="delivery_date" name="delivery_date" value="{{config('certificate_pdf.delivery_date')}}">
                </div>
                <div class="form-group col-xl-6 col-xs-12">
                    <label for="delivery_place">Circulation Date</label>
                    <input type="date" class="form-control" id="delivery_place" name="circulation_date" value="{{config('certificate_pdf.circulation_date')}}">
                </div>
                <div class="form-group col-xl-6 col-xs-12">
                    <label for="gender">Genre</label>
                    <input type="text" class="form-control" id="gender" name="gender" value="{{config('certificate_pdf.gender')}}">
                </div>
                <div class="form-group col-xl-6 col-xs-12">
                    <label for="domicile">Delivery Place</label>
                    <input type="text" class="form-control" id="domicile" name="delivery_place" value="{{config('certificate_pdf.delivery_place')}}">
                </div>
                <div class="form-group col-xl-6 col-xs-12">
                    <label for="phone_number">Subject</label>
                    <input type="text" class="form-control" id="phone_number" name="object" value="{{config('certificate_pdf.object')}}">
                </div>

                <div class="form-group col-xl-6 col-xs-12">
                    <label for="amount">Certificate Number</label>
                    <input type="number" step="1" class="form-control" id="amount" name="certificate_number" value="{{config('certificate_pdf.certificate_number')}}">
                </div>
                <div class="form-group col-xl-6 col-xs-12">
                    <label for="subject">Serial Number</label>
                    <input type="text" class="form-control" id="subject" name="serial_number" value="{{config('certificate_pdf.serial_number')}}">
                </div>
                <div class="form-group col-xl-6 col-xs-12">
                <label for="legislation">Source power</label>
                    <input type="text" class="form-control" id="legislation" name="power_source" value="{{config('certificate_pdf.power_source')}}">
                </div>
                <div class="form-group col-xl-6 col-xs-12">
                    <label for="legislation">Marque</label>
                    <input type="text" class="form-control" id="legislation" name="marque" value="{{config('certificate_pdf.marque')}}">
                </div>
                <div class="form-group col-xl-6 col-xs-12">
                    <label for="legislation">Father name</label>
                    <input type="text" class="form-control" id="legislation" name="seller_father_name" value="{{config('certificate_pdf.seller_father_name')}}">
                </div>
                <div class="form-group col-xl-6 col-xs-12">
                    <label for="legislation">Mother Name</label>
                    <input type="text" class="form-control" id="legislation" name="seller_mother_name" value="{{config('certificate_pdf.seller_mother_name')}}">
                </div>
                <div class="form-group col-xl-6 col-xs-12">
                    <label for="legislation">Matriculation Number</label>
                    <input type="text" class="form-control" id="legislation" name="matriculation_number" value="{{config('certificate_pdf.matriculation_number')}}">
                </div>
                <div class="form-group col-xl-6 col-xs-12">
                    <label for="legislation">Profession</label>
                    <input type="text" class="form-control" id="legislation" name="seller_profession" value="{{config('certificate_pdf.seller_profession')}}">
                </div>
                <div class="form-group col-xl-6 col-xs-12">
                    <label for="legislation">Admissible power</label>
                    <input type="text" class="form-control" id="legislation" name="power_admissible" value="{{config('certificate_pdf.power_admissible')}}">
                </div>
                <div class="form-group col-xl-6 col-xs-12">
                    <label for="address">Address</label>
                    <textarea rows="3" class="form-control" id="address" name="address" >{{config('certificate_pdf.seller_address')}}</textarea>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">
                    {{--icon--}}
                    <i class="fas fa-save"></i>
                    Submit
                </button>
            </div>
        </fieldset>
    </form>
@endsection
