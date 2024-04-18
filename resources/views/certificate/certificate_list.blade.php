@extends('templates.bootstrap')
@section('content')
    <h1 class="text-center">List of certificates</h1>
    <hr>
    {{-- datatable with all certificates --}}
    <table class="table  table-bordered datatable">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>CNI</th>
                <th>Subject</th>
                <th>Profession</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($certificates as $certificate)
                <tr>
                    <td>{{$certificate->name}}</td>
                    <td>{{$certificate->cni}}</td>
                    <td>{{$certificate->subject}}</td>
                    <td>{{$certificate->profession}}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            {{--show certificate--}}
                            <a href="{{route('certificate.show', $certificate->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                            {{--edit link--}}
                            <a href="{{route('certificate.edit', $certificate->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            {{--delete link--}}
                            <a href="{{route('certificate.destroy', $certificate->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
@endsection
@push('styles')
    {{--datatable styles--}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    {{--datatable boostrap4 styles--}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

@endpush
@push('scripts')
    {{--datatable scripts--}}
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('.datatable').DataTable();
        } );
    </script>
@endpush
