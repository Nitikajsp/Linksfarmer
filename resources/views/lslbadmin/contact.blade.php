@extends('lslbadmin.sidebar')

@push('css')
<style>
    .truncate-text {
        max-width: 150px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: inline-block;
    }

</style>
<!-- DataTables Bootstrap 5 CSS -->
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@endpush

@section('sidebar-content')

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    @if(session('success'))
    <div class="alert alert-primary mt-3">{{ session('success') }}</div>
    @endif
    <div class="row justify-content-center mt-5">
        <div class="col-md-12">
            <div class="card mt-2">
                @if (count($contacts) > 0)
                <div class="m-3">
                    <div class="table-responsive text-nowrap">
                        <table class="table" id="contact-tbl">
                            <thead class="table-dark">
                                <tr>
                                    <th>No.</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @php $num = 1; @endphp
                                @foreach($contacts as $v)
                                <tr>
                                    <td>{{ $num++ }}</td>
                                    <td class="truncate-text">{{ $v->first_name }}</td>
                                    <td>{{ $v->last_name }}</td>
                                    <td>{{ $v->phone_number }}</td>
                                    <td>{{ $v->email }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @else
                <div class="alert alert-info text-center m-3">No record found!</div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')
<!-- Include jQuery and DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#contact-tbl').DataTable({
            responsive: true
        });
    });

</script>
@endpush
