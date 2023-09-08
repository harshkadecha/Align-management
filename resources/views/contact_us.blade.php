@extends('layout.main')

@section('title')
    Contact Us
@endsection

@section('description')
    Align Management is a property management company that manages residential and commercial properties.
@endsection

@section('meta')
    <meta name="keywords"
        content="Align management, align management, residential and commercial properties, residential and commercial properties, residential properties, commercial properties, properties, manages residential and commercial properties" />
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/extensions/ext-component-toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/pickers/form-pickadate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endsection

@section('content')
    @include('general.header')

    <section class="content-wrapper section-1-repairs-hero-content ">
        <div class="container text-center d-flex align-items-center justify-content-center section-1-wrapper">
            <div class="container home-page-secton-1 pt-1 pb-1 w-auto ps-5 pe-5 rounded-5"
                style="color:#FFD700 !important;">
                <h3>CONTACT US</h3>
            </div>
        </div>
    </section>
    {{-- section-2 content --}}
    <section>

        <div class="section-2 pb-5 repair-page-pragraph">
            <div class="container">
                <div class="row p-0 m-0">
                    <div class="col-md-12 col-sm-12 text-center pt-5">
                        <h2>Contact us</h2>
                        <div class="p-5">
                            <p class="">87 East 116th Street New york, NY 10029
                                <br /><br />
                                Phone(917)400-0536
                                <br /><br />
                                Email:<a href="mailto: support@alignmgmtny.com">support@alignmgmtny.com</a>
                            <div
                                style="direction:ltr;font-family:Arial,Helvetica Neue,Helvetica,sans-serif;font-size:13px;font-weight:400;letter-spacing:0;line-height:120%;text-align:center;mso-line-height-alt:15.6px">
                                <a href="" class="p-2"><img src="{{ asset('app-assets/images/icons/social/facebook.png') }}"
                                        alt="" srcset="" width="20"></a>
                                <a href="" class="p-2"><img src="{{ asset('app-assets/images/icons/social/instagram.png') }}"
                                        alt="" srcset="" width="20"></a>
                                <a href="" class="p-2"><img src="{{ asset('app-assets/images/icons/social/twitter.png') }}"
                                        alt="" srcset="" width="20"></a>
                            </div>
                            </p>
                        </div>

                    </div>

                </div>
                <div class="text-center">
                    <h2>Testimonials</h2>
                </div>
                <form class="mb-5" action="#" id="testimonial-form">
                    <div class="form-group mb-2">
                        <label for="exampleFormControlTextarea1">Write a Message Here:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="testimonial" rows="6"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary submit">Submit</button>
                </form>
                <div class="w-100"><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.788678881211!2d-73.98104332443353!3d40.74467523561538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2585ea17049b7%3A0x52eea0653603c6ed!2sAlgin%20Management!5e0!3m2!1sen!2sin!4v1694186137401!5m2!1sen!2sin"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="w-100"></iframe></div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.date.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/legacy.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/pickers/form-pickers.js') }}"></script>
    <script src="{{ asset('js/dropezone.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> --}}
    <script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/moment.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            // if (feather) {
            //     feather.replace({
            //         width: 14,
            //         height: 14
            //     });
            // }
            $('.submit').click(function(e) {
                e.preventDefault();
                if ($("#testimonial-form").valid() == true) {

                    let message = $('#exampleFormControlTextarea1').val();
                    let url = "{{ route('testimonial.store') }}";
                    var token = $("meta[name='csrf-token']").attr("content");

                    $.ajax({
                        type: "post",
                        url: url,
                        data: {
                            "testimonial": message,
                            "_token": token,
                        },
                        success: function(response) {
                            if (response.status == true) {
                                toastr.success(
                                    response.message
                                );
                            } else {
                                toastr.error(
                                    response.message
                                );
                            }

                        }
                    });
                }
            });
            // this is for validation and message
            $("#testimonial-form").validate({
                errorClass: 'is-invalid',
                rules: {
                    testimonial: {
                        required: true,
                    },
                },
                messages: {
                    testimonial: {
                        required: "Please enter Your Message",
                    },
                },
            });
        });
    </script>
@endsection
