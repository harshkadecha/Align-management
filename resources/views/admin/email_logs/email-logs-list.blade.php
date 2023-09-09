@extends('admin.layouts.main')

@section('title')
    {{ Str::upper(Str::headline(Request::segment(1))) }}
@endsection

@section('styles')
    <!-- BEGIN: Page CSS-->
    <style>
        div.dataTables_paginate span {
            display: none;
        }

        @media screen and (max-width: 767px) {
            li.paginate_button.previous {
                display: inline;
            }

            li.paginate_button.next {
                display: inline;
            }

            li.paginate_button {
                display: none;
            }
        }

        .form-select-sm,
        .form-control-sm {
            font-size: 1rem;
            padding: 0.571rem 1rem 0.571rem 1rem;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/pickers/form-pickadate.css') }}">

    <!-- END: Page CSS-->
@endsection

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">

        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-12 mb-2">
                    <div class="row breadcrumbs-top">

                        {{-- <div class="col-8">
                            <h2 class="float-start mb-0">Blood Donors</h2>

                        </div> --}}
                        {{-- <div class="col-4 text-end">
                            <a class="dt-button btn btn-primary btn-add-record ms-2 " tabindex="0"
                                aria-controls="DataTables_Table_0" type="button" href='{{ route('donors.create') }}'>

                                <span>Add Donor</span>
                            </a>
                        </div> --}}
                    </div>
                </div>

            </div>
            <div class="content-body">

                {{-- {{ Auth::user()->id }} --}}

                <!-- Basic table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Email</h2>

                                    {{-- <div class="col-md-4 mb-1 form-group row">
                                        <label class="col-sm-2 col-form-label" for="fp-range">Range</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="fp-range" class="form-control flatpickr-range"
                                                name="fp-range" placeholder="YYYY-MM-DD to YYYY-MM-DD" />
                                        </div>

                                    </div> --}}
                                </div>
                                <div class="card-body">
                                    <table class="datatables-basic table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Receiver email</th>
                                                <th>Subject</th>
                                                <th>body</th>
                                                <th>Status</th>
                                                <th>Time</th>
                                                <th>Attachment</th>
                                                {{-- <th>Action</th> --}}
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Basic table -->
            </div>
        </div>
    </div>

    <div class="vertical-modal-ex">
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Are You Sure!!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>

                        </p>
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-primary accept" id="del"
                            data-bs-dismiss="modal">Accept</button>
                        <button type="button" class="btn btn-danger reject" id="reg"
                            data-bs-dismiss="modal">Reject</button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

@section('scripts')
    <!-- BEGIN: Page Vendor JS-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <script src="{{ asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/jszip.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.date.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/legacy.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>

    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/forms/pickers/form-pickers.js') }}"></script>

    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    {{-- <script src="{{ asset('app-assets/js/scripts/tables/table-datatables-basic.js') }}"></script> --}}
    <!-- END: Page JS-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        $(document).ready(function() {

            var datatable = $('.datatables-basic').DataTable({
                processing: true,
                responsive: true,
                dom: '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                'serverSide': true,
                'serverMethod': 'get',

                ajax: {
                    'url': "{{ route('get_emails') }}"
                },

                columns: [
                    // columns according to JSON
                    {
                        data: 'id'
                    },
                    {
                        data: 'to',
                        name: 'to'
                    },
                    {
                        data: 'subject',
                        name: 'subject'
                    },
                    {
                        data: 'body',
                        render: function(data, type, row, meta) {
                            return '<a href="" data-content="' + data +
                                '" class="btn btn-light show-data">Show</a>';
                        }
                    },
                    {
                        data: 'is_sent',

                        render: function(data, type, row) {

                            if (data == '0') {

                                return '<spam class="badge rounded-pill badge-light-danger">not sent</button>';

                            } else if (data == '1') {

                                return '<spam class="badge rounded-pill badge-light-success">Sent</button>';

                            }
                        }
                    },
                    {
                        data: 'sent',
                        name: 'sent data',
                        width: "20%"
                    },
                    {
                        data: 'attachment',
                        render: function(data, type, row, meta) {
                            if (data != null) {
                                return `<a href="" class="pdf_download" data-url="${data}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download-cloud"><polyline points="8 17 12 21 16 17"></polyline><line x1="12" y1="12" x2="12" y2="21"></line><path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"></path></svg></a>`;
                            } else {
                                return '';
                            }
                        }

                    },
                ],
            });


            //self delete data
            $(document).on("click", ".show-data", function(e) {
                e.preventDefault();
                $("#exampleModalCenter").modal('show');
                $('.modal-body').html($(this).attr('data-content'));
            });

            $(document).on("change", "#fp-range", function(e) {
                e.preventDefault();
                // $("#exampleModalCenter").modal('show');
                // $('.modal-body').html($(this).attr('data-content'));
                var str1 = $(this).val();
                var str2 = "to";
                if (str1.indexOf(str2) != -1) {
                    console.log($(this).val());

                    var date_range = $(this).val();
                    var token = $("meta[name='csrf-token']").attr("content");

                    var url = "{{ url('/') }}" + "/admin/date-range/" + date_range;


                    $('.datatables-basic').DataTable().destroy();

                    var datatable = $('.datatables-basic').DataTable({
                        processing: true,
                        responsive: true,
                        dom: '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                        'serverSide': true,
                        'serverMethod': 'get',
                        ajax: {
                            'url': url,
                            'data': {
                                "date_range": date_range,
                                "_token": token,
                                'success': function(response) {
                                    console.log(response)
                                }
                            },
                        },

                        columns: [
                            // columns according to JSON
                            {
                                data: 'id'
                            },
                            {
                                data: 'to',
                                name: 'to'
                            },
                            {
                                data: 'subject',
                                name: 'subject'
                            },
                            {
                                data: 'body',
                                render: function(data, type, row, meta) {
                                    return `<a href="" data-content="${data}" class="btn btn-light show-data">Show</a>`;
                                }
                            },
                            {
                                data: 'is_sent',

                                render: function(data, type, row) {

                                    if (data == '0') {

                                        return '<spam class="badge rounded-pill badge-light-danger">not sent</button>';

                                    } else if (data == '1') {

                                        return '<spam class="badge rounded-pill badge-light-success">Sent</button>';

                                    }
                                }
                            },
                            {
                                data: 'sent',
                                name: 'sent data',
                                width: "20%"
                            },
                            {
                                data: 'attachment',
                                render: function(data, type, row, meta) {
                                    if (data != null) {
                                        return `<a href="" class="pdf_download" data-url="${data}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download-cloud"><polyline points="8 17 12 21 16 17"></polyline><line x1="12" y1="12" x2="12" y2="21"></line><path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"></path></svg></a>`;
                                    } else {
                                        return '';
                                    }
                                }

                            },
                            {
                                data: 'id',
                                orderable: false,
                                searchable: false,
                                render: function(data, type, row, meta) {
                                    return `<a href="" class="btn btn-primary send" data-id="${data}">Send</a>`;
                                }
                            },
                        ],
                    });

                }

            });


            $(document).on("click", ".send", function(e) {

                e.preventDefault();
                var id = $(this).attr('data-id');
                var token = $("meta[name='csrf-token']").attr("content");

                var url = "{{ url('/') }}" + "/admin/get-emails/" + id;
                $.ajax({
                    url: url,
                    data: {
                        "id": id,
                        "_token": token,
                    },
                    success: function(response) {
                        var table = $('.datatables-basic').DataTable();
                        table.ajax.reload();
                        toastr.success(
                            response.message
                        );

                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        console.log(xhr.status);
                        alert(xhr.responseText);
                        alert(url);
                        $(document).text(xhr.responseText);
                        alert(thrownError);
                    }
                });

            });

            $(document).on("click", ".pdf_download", function(e) {
                e.preventDefault();
                let image_name = 'certificate.png';
                let image_path = $(this).attr('data-url');
                let str = image_path.replace(
                    "/var/www/html/yuvashakti Foundation/yuva-shakti-foundation/public/storage/certificate_img",
                    '');
                let abc = " {{ asset('/storage/certificate_img/') }}" + str;
                saveAs(abc, image_name);
            });

        });
    </script>
@endsection
