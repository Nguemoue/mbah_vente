{{--extends--}}
@extends('templates.bootstrap')
{{--
    generate a form with certificate linke the creation page.
    and filled with the corrsponding data and pass the fieldin dsiabled
--}}
@section('content')

    {{-- page title h1  Design it and center it --}}
    <h1 class="text-center">Certificate Detail</h1>
    {{-- custom action hre align in right --}}
    <div class="text-right mb-3">
        {{--back btn--}}
        <a href="{{route('certificate.index')}}" class="btn btn-primary">
            <i class="fas fa-arrow-left"></i>
            Back
        </a>
        {{-- download the pdf version --}}
        <a href="{{route('certificate.download', $certificate->id,'pdf')}}" class="btn btn-success">
            <i class="fas fa-download"></i>
            Download PDF
            <span class="sr-only">(current)</span>
        </a>
        {{--download as word file--}}
        <a href="{{route('certificate.download', $certificate->id, 'docx')}}" class="btn btn-success">
            <i class="fas fa-download"></i>
            Download DOCX
            <span class="sr-only">(current)</span>
        </a>
    </div>

    {{-- card and fieldset to pu the form in--}}
    <div class="card">
        <div class="card-body">
            <form action="{{route('certificate.store')}}" method="post">
                @csrf
                <fieldset>
                    <legend>Personal Customer Information</legend>
                    <hr>
                    {{-- get all the name of field bellow and generale me a laravel rule validation --}}
                    @csrf
                    <div class="row">
                        <div class="col-xl-6 col-xs-12 form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$certificate->name}}"
                                   disabled>
                        </div>
                        <div class="col-xl-6 col-xs-12 form-group">
                            <label for="cni">CNI</label>
                            <input type="text" minlength="11" maxlength="11" class="form-control" id="cni" name="cni"
                                   value="{{$certificate->cni}}" disabled>
                        </div>
                        <div class="col-xl-6 col-xs-12 form-group">
                            <label for="delivery_date">Delivery date</label>
                            <input type="date" class="form-control" id="delivery_date" name="delivery_date"
                                   value="{{$certificate->delivery_date}}" disabled>
                        </div>
                        <div class="col-xl-6 col-xs-12 form-group">
                            <label for="delivery_place">Delivery at (Place)</label>
                            <input type="text" class="form-control" id="delivery_place" name="delivery_place"
                                   value="{{$certificate->delivery_place}}" disabled>
                        </div>
                        <div class="col-xl-6 col-xs-12 form-group">
                            <label for="profession">Profession</label>
                            <input type="text" class="form-control" id="profession" name="profession"
                                   value="{{$certificate->profession}}" disabled>
                        </div>
                        <div class="col-xl-6 col-xs-12 form-group">
                            <label for="domicile">Domicile</label>
                            <input type="text" class="form-control" id="domicile" name="domicile"
                                   value="{{$certificate->domicile}}" disabled>
                        </div>
                        <div class="col-xl-6 col-xs-12 form-group">
                            <label for="phone_number">Phone number</label>
                            <input type="tel" class="form-control" id="phone_number" name="phone_number"
                                   value="{{$certificate->phone_number}}" disabled>
                        </div>

                        <div class="col-xl-6 col-xs-12 form-group">
                            <label for="amount">Amount validated</label>
                            <input type="number" step=".01" class="form-control" id="amount" name="amount"
                                   value="{{$certificate->amount}}" disabled>
                        </div>
                        <div class="col-xl-6 col-xs-12 form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject"
                                   value="{{$certificate->subject}}" disabled>
                        </div>
                        <div class="col-xl-6 col-xs-12 form-group">
                            <label for="legislation">Legislation</label>
                            <input type="text" class="form-control" id="legislation" name="legislation"
                                   value="{{$certificate->legislation}}" disabled>
                        </div>
                        <div class="col-xl-6 col-xs-12 form-group">
                            <label for="address">Address</label>
                            <textarea rows="3" class="form-control" id="address" name="address"
                                      disabled>{{$certificate->address}}</textarea>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
