@extends('lslbadmin.sidebar')
@push('css')
@endpush
@section('sidebar-content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @if (session('success'))
            <div class="alert alert-primary mt-3">{{ session('success') }}</div>
        @endif
        <div class="row justify-content-center mt-5">
            <div class="col-md-12">
                <div class="card mt-2">
                    <div class="m-3">
                        <div class="table-responsive text-nowrap">
                            <table class="table" id="user-tbl">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Phone Number</th>
                                        <th>Company Website URL</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Verify</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="delete-pop" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h3 class="mb-2">{{ __('Delete Record') }}</h3>
                    </div>
                    <p class="text-center">{{ __('Are you sure you want to delete this record?') }}</p>
                    <div class="col-12 text-center">
                        <button type="submit" data-href=""
                            class="btn btn-primary me-sm-3 me-1 waves-effect waves-light delete-yes-btn"
                            onclick="window.location.href = $(this).attr('data-href')">{{ __('Yes') }}</button>
                        <button type="reset" class="btn btn-label-secondary btn-reset waves-effect"
                            data-bs-dismiss="modal" aria-label="Close">{{ __('No') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            var table = $('#user-tbl').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('lslbadmin.users') }}", // route pointing to getUsers
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name',
                        name: 'name',
                        render: function(data, type, row) {
                            if (type === 'display' && data.length > 20) {
                                return '<span title="' + data + '">' + data.substr(0, 20) +
                                    '...</span>';
                            }
                            return '<span title="' + data + '">' + data + '</span>';
                        }
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'role',
                        name: 'role.name'
                    },
                    {
                        data: 'phone_number',
                        name: 'phone_number'
                    },
                    {
                        data: 'company_website_url',
                        name: 'company_website_url'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'verify',
                        name: 'verify',
                        orderable: false,
                        searchable: false
                    }
                ],
                dom: "<'row align-items-center'<'col-md-3'l><'col-md-3'<'role-filter-container'>>" +
                    "<'col-md-6'f>>" +
                    "<'row'<'col-md-12'tr>>" +
                    "<'row'<'col-md-5'i><'col-md-7'p>>",
                 });

            // Role filter
            $('.role-filter-container').html(`
                <label for="role-filter" class="form-label">Filter by Role:</label>
                <select id="role-filter" class="form-select">
                    <option value="">All</option>
                    <option value="Advertiser">Advertiser</option>
                    <option value="Publisher">Publisher</option>
                </select>
            `);

            $('#role-filter').on('change', function() {
                var role = $(this).val().trim().toLowerCase();
                table.column(3).search(role ? '^' + role + '$' : '', true, false).draw();
            });
        });
    </script>
@endpush
