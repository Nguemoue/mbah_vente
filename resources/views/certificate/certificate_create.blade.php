@extends('templates.bootstrap')
{{-- generate a form with user info --}}
@section('content')

    {{-- page title h1  Design it and center it --}}
    <h1 class="text-center">Page for create new Certificate</h1>
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
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group col-xl-6 col-xs-12">
                            <label for="cni">CNI</label>
                            <input type="text" minlength="11" maxlength="11" class="form-control" id="cni" name="cni">
                        </div>
                        <div class="form-group col-xl-6 col-xs-12">
                            <label for="delivery_date">Delivery date</label>
                            <input type="date" class="form-control" id="delivery_date" name="delivery_date">
                        </div>
                        <div class="form-group col-xl-6 col-xs-12">
                            <label for="delivery_place">Delivery at (Place)</label>
                            <input type="text" class="form-control" id="delivery_place" name="delivery_place">
                        </div>
                        <div class="form-group col-xl-6 col-xs-12">
                            <label for="profession">Profession</label>
                            <input type="text" class="form-control" id="profession" name="profession">
                        </div>
                        <div class="form-group col-xl-6 col-xs-12">
                            <label for="domicile">Domicile</label>
                            <input type="text" class="form-control" id="domicile" name="domicile">
                        </div>
                        <div class="form-group col-xl-6 col-xs-12">
                            <label for="phone_number">Phone number</label>
                            <input type="tel" class="form-control" id="phone_number" name="phone_number">
                        </div>

                        <div class="form-group col-xl-6 col-xs-12">
                            <label for="amount">Amount validated</label>
                            <input type="number" step=".01" class="form-control" id="amount" name="amount">
                        </div>
                        <div class="form-group col-xl-6 col-xs-12">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject">
                        </div>
                        <div class="form-group col-xl-6 col-xs-12">
                            <label for="legislation">Legislation</label>
                            <input type="text" class="form-control" id="legislation" name="legislation">
                        </div>
                        <div class="form-group col-xl-6 col-xs-12">
                            <label for="address">Address</label>
                            <textarea rows="3" class="form-control" id="address" name="address"></textarea>
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
        </div>
    </div>

@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/izitoast/dist/css/iziToast.min.css">
    <script type="text/javascript" src="https://unpkg.com/izitoast/dist/js/iziToast.min.js"></script>
@endpush
@push('scripts')
    <script defer>
        //do the same with success message that is in the session
        @if (session('success'))
        $(function () {
            iziToast.success({
                title: 'Success',
                message: '{{session('success')}}',
                position: 'topRight'
            })

        })
        @endif

        @if ($errors->any())
        $(function () {
            let errors = @json($errors->all());
            //join errors as li item
            let message = errors.join('<br>');
            iziToast.error({
                title: 'Error',
                message: message,
                position: 'topRight'
            })

        })

        @endif
    </script>

@endpush
