@extends('layout.main')

@section('title')
    Repairs
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
    <section class="content-wrapper section-1-repairs-hero-content ">
        <div class="container text-center d-flex align-items-center justify-content-center section-1-wrapper">
            <div class="container home-page-secton-1 pt-1 pb-1 w-auto ps-5 pe-5 rounded-5"
                style="color:#FFD700 !important;">
                <h3>Repairs</h3>
            </div>
        </div>
    </section>
    {{-- section-2 content --}}
    <section>
        <div class="section-2 pb-5 repair-page-pragraph">
            <div class="container" style="width: 75%;">
                <h2 class="text-center pt-5 pb-5 request-page-content-heading">REPAIR REQUEST FORM</h2>
                <hr />
                <div class="row m-0 mt-4 d-flex align-items-center justify-content-center repair-page-content">
                    <p>At Concord we firmly believe in providing quality service to our residents. It is our goal to keep
                        your homes in good repair at all times. Please fill out the information below and our maintenance
                        department will contact you as soon as possible. Please allow 2 business days for processing and
                        review for all non-emergency repairs. If the damage or defects were due to the negligence of you or
                        someone in your household, your landlord may not be responsible for the cost. If you are a co-op or
                        condo owner, you may be responsible for the repairs within your apartment as outlined in your bylaws
                        or proprietary lease.</p>
                    <br />
                    <p>Remember, in case of an emergency, you can always reach us by calling our 24-hour hotline: 1 (800)
                        395-9984.</p>
                    <br />
                    <p>If you smell gas or suspect there is a gas leak, leave the premises immediately and take others with
                        you. Once you are a safe distance away, please call:</p>
                    <br />
                    <p>Con Edison at 1 (800) 752-6633 or National Grid at 1 (800) 892-2345</p>
                </div>
                <hr />
            </div>
            <div class="container mt-5">
                <form class="form row" action="#">
                    <div class="form-group mb-4 col-sm-12 col-md-6">
                        <label for="exampleInputFirstName1">Full Name(Requester):</label>
                        <input type="text" class="form-control" id="exampleInputFirstName1" aria-describedby="emailHelp"
                            placeholder="Enter Full Name" required>
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group mb-4 col-sm-12 col-md-6">
                        <label for="exampleInputEmail1">Prefferred Date amd Time for Maintainance:</label>
                        <input type="text" id="fp-range" class="form-control flatpickr-date-time" name="fp-range"
                            placeholder="YYYY-MM-DD" required />
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group mb-4 col-sm-12 col-md-12">
                        <label for="exampleInputFirstName1">Contact Information [Phone Number/Email Address] :</label>
                        <input type="text" class="form-control" id="exampleInputFirstName1" aria-describedby="emailHelp"
                            placeholder="Enter Your Contact Details [Email/Phone Number] ">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group mb-4 col-sm-12 col-md-12">
                        <label for="exampleInputFirstName1">Location:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Address...."></textarea>
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group mb-4 col-sm-12 col-md-12">
                        <label for="exampleInputFirstName1">Description of Issue:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Describe Your Issue...."></textarea>
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group mb-4 col-sm-12 col-md-12">
                        <label class="form-label">Urgency Level:</label><br />
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="urgency_level" id="urgencyLevel1"
                                value="option1">
                            <label class="form-check-label" for="urgencyLevel1">
                                Low
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="urgency_level" id="UrgencyLevel1"
                                value="option1" checked>
                            <label class="form-check-label" for="urgencyLevel1">
                                Medium
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="urgency_level" id="UrgencyLevel1"
                                value="option1">
                            <label class="form-check-label" for="UrgencyLevel1">
                                High
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="urgency_level" id="UrgencyLevel1"
                                value="option1">
                            <label class="form-check-label" for="UrgencyLevel1">
                                Urgent
                            </label>
                        </div>
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group mb-4 col-sm-12 col-md-12">
                        <label class="form-label">Permission to Enter:</label><br />
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="permission" id="permission"
                                value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Yes, you have permission to enter the premises in our absence.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="permission" id="permission"
                                value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                No, please schedule a specific time with us.
                            </label>
                        </div>
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <input type="hidden" value="" name="attachment" id="attachement">
                    <div class="form-group mb-4 col-sm-12 col-md-12">
                        <label for="exampleInputFirstName1">Attachment (if applicable):</label>
                        <!--begin::Form-->
                        <form class="form mt-4" action="#" method="post">
                            @csrf
                            <input type="hidden" name="csrf_token" value="{{ csrf_token() }}">
                            <!--begin::Input group-->
                            <div class="fv-row">
                                <!--begin::Dropzone-->
                                <div class="dropzone" id="kt_dropzonejs_example_1">
                                    <!--begin::Message-->
                                    <div class="dz-message needsclick">
                                        <i class="ki-duotone ki-file-up fs-3x text-primary"><span
                                                class="path1"></span><span class="path2"></span></i>

                                        <!--begin::Info-->
                                        <div class="ms-4">
                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.
                                            </h3>
                                            <span class="fs-7 fw-semibold text-gray-400">Upload up to 10 files</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                </div>
                                <!--end::Dropzone-->
                            </div>
                            <!--end::Input group-->
                        </form>
                        <!--end::Form-->
                        <small id="emailHelp" class="form-text text-muted">[Attach any relevant images or documents that
                            could help understand the issue better.]</small>
                    </div>
                    <div class="form-group mb-4 col-sm-12 col-md-6">
                        <label for="exampleInputFirstName1">Maintainance Type:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Plumbing
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                            <label class="form-check-label" for="defaultCheck2">
                                Electrical
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                HVAC
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Appliance Repair
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                General Repairs
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Other (Please Specify)
                            </label>
                        </div>
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group mb-4 col-sm-12 col-md-12">
                        <label for="exampleInputFirstName1">Additional Notes:</label>
                        <input type="text" class="form-control" id="exampleInputFirstName1"
                            aria-describedby="emailHelp"
                            placeholder="[Include any additional information or specific instructions for the maintenance team.]">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <button type="submit" class="btn btn-primary repair-form-btn">Submit</button>
                </form>
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



    <script>
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
            headers: {
                'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
            },
            init: function() {
                this.on("sending", function(file, xhr, formData) {
                    formData.append("id", 1)
                })
            },
            init: function() {
                this.on("success", function(file, response) {
                    // var obj = jQuery.parseJSON(response)
                    console.log(file.name);
                    let val = $('#attachement').val();
                    if (val == "") {
                        $('#attachement').val(file.name);
                    } else {
                        val = val + "," + file.name;
                        $('#attachement').val(val);
                    }
                    // alert(val);
                    val = $('#attachement').val();
                    console.log(val);
                })
            },
            removedfile: function(file) {
                var name = file.name;
                var url = "{{ route('repair-image-remove-upload') }}";
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
                    },
                    type: 'post',
                    url: url,
                    data: {
                        name: name
                    },
                    success: function(data) {
                        console.log(data);
                        console.log("File has been successfully removed!!");
                        let oldImg = data;
                        let val = $('#attachement').val();
                        console.log(val);
                        let myArray = val.split(",");
                        console.log(myArray);

                        let newArray = [];
                        let str = "";
                        $.each(myArray, (indexInArray, valueOfElement)=> {
                            if(valueOfElement != oldImg){
                                newArray.push(valueOfElement);
                                if(str == ""){
                                    str = valueOfElement;
                                }else{
                                    str = str + "," + valueOfElement;
                                }

                            }
                        });
                        console.log(newArray);
                        console.log(str);
                        $('#attachement').val(str);
                        file.previewElement.remove();

                    },
                    error: function(e) {
                        console.log(e);
                    }
                });
            },
            url: "{{ route('repair-form-img-upload') }}", // Set the url for your upload script location
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 10,
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            accept: function(file, done) {
                if (file.name == "wow.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        });

        $('#repair_request_form').submit(function() {
            console.log();
        })
    </script>
@endsection