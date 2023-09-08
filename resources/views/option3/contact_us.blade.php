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
                    <div class="col-md-6 col-sm-12 text-center pt-5">
                        <h2>Contact us</h2>
                        <p class="p-5">87 EAST 116T H . STREET <br /><br />, SUITE 202 , NEWYORK , NY10029
                            <br /><br />O:917
                            - 400 - 0536
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-12 pt-5 contact-us-form-part">
                        <h2>Request Proposal</h2>
                        <div class="">
                            <div class="container">
                                <form class="form row" action="#">
                                    <div class="form-group mb-4 col-sm-12 col-md-6">
                                        <label for="exampleInputFirstName1">First Name:</label>
                                        <input type="text" class="form-control" id="exampleInputFirstName1"
                                            aria-describedby="emailHelp" placeholder="Enter First Name" required>
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group mb-4 col-sm-12 col-md-6">
                                        <label for="exampleInputEmail1">Last Name:</label>
                                        <input type="text" class="form-control" id="exampleInputFirstName1"
                                            aria-describedby="emailHelp" placeholder="Enter First Name" required>
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group mb-4 col-sm-12 col-md-12">
                                        <label for="exampleInputFirstName1">Company / Community / Building Name:</label>
                                        <input type="text" class="form-control" id="exampleInputFirstName1"
                                            aria-describedby="emailHelp" placeholder="Enter First Name" required>
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group mb-4 col-sm-12 col-md-12">
                                        <label for="exampleInputFirstName1">Phone:<small id="emailHelp"
                                                class="form-text text-muted">(Required)</small></label>
                                        <input type="text" class="form-control" id="exampleInputFirstName1"
                                            aria-describedby="emailHelp" placeholder="Enter Phone" required>
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group mb-4 col-sm-12 col-md-12">
                                        <label for="exampleInputFirstName1">Email Address: <small id="emailHelp"
                                                class="form-text text-muted">(Required)</small></label>
                                        <input type="text" class="form-control" id="exampleInputFirstName1"
                                            aria-describedby="emailHelp" placeholder="Enter First Name" required>
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group mb-4 col-sm-12 col-md-12">
                                        <label for="exampleInputFirstName1">Address:<small id="emailHelp"
                                                class="form-text text-muted">(Required)</small></label>
                                    </div>
                                    <div class="form-group mb-4 col-sm-12 col-md-12">
                                        <label for="exampleInputFirstName1">First Name:</label>
                                        <input type="text" class="form-control" id="exampleInputFirstName1"
                                            aria-describedby="emailHelp" placeholder="Enter First Name" required>
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group mb-4 col-sm-12 col-md-12">
                                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Country:</label>
                                        <select class="form-control my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                            <option value='Afghanistan'>Afghanistan</option>
                                            <option value='Albania'>Albania</option>
                                            <option value='Algeria'>Algeria</option>
                                            <option value='Andorra'>Andorra</option>
                                            <option value='Angola'>Angola</option>
                                            <option value='Antigua & Deps'>Antigua & Deps</option>
                                            <option value='Argentina'>Argentina</option>
                                            <option value='Armenia'>Armenia</option>
                                            <option value='Australia'>Australia</option>
                                            <option value='Austria'>Austria</option>
                                            <option value='Azerbaijan'>Azerbaijan</option>
                                            <option value='Bahamas'>Bahamas</option>
                                            <option value='Bahrain'>Bahrain</option>
                                            <option value='Bangladesh'>Bangladesh</option>
                                            <option value='Barbados'>Barbados</option>
                                            <option value='Belarus'>Belarus</option>
                                            <option value='Belgium'>Belgium</option>
                                            <option value='Belize'>Belize</option>
                                            <option value='Benin'>Benin</option>
                                            <option value='Bhutan'>Bhutan</option>
                                            <option value='Bolivia'>Bolivia</option>
                                            <option value='Bosnia Herzegovina'>Bosnia Herzegovina</option>
                                            <option value='Botswana'>Botswana</option>
                                            <option value='Brazil'>Brazil</option>
                                            <option value='Brunei'>Brunei</option>
                                            <option value='Bulgaria'>Bulgaria</option>
                                            <option value='Burkina'>Burkina</option>
                                            <option value='Burundi'>Burundi</option>
                                            <option value='Cambodia'>Cambodia</option>
                                            <option value='Cameroon'>Cameroon</option>
                                            <option value='Canada'>Canada</option>
                                            <option value='Cape Verde'>Cape Verde</option>
                                            <option value='Central African Rep'>Central African Rep</option>
                                            <option value='Chad'>Chad</option>
                                            <option value='Chile'>Chile</option>
                                            <option value='China'>China</option>
                                            <option value='Colombia'>Colombia</option>
                                            <option value='Comoros'>Comoros</option>
                                            <option value='Congo'>Congo</option>
                                            <option value='Congo {Democratic Rep}'>Congo {Democratic Rep}</option>
                                            <option value='Costa Rica'>Costa Rica</option>
                                            <option value='Croatia'>Croatia</option>
                                            <option value='Cuba'>Cuba</option>
                                            <option value='Cyprus'>Cyprus</option>
                                            <option value='Czech Republic'>Czech Republic</option>
                                            <option value='Denmark'>Denmark</option>
                                            <option value='Djibouti'>Djibouti</option>
                                            <option value='Dominica'>Dominica</option>
                                            <option value='Dominican Republic'>Dominican Republic</option>
                                            <option value='East Timor'>East Timor</option>
                                            <option value='Ecuador'>Ecuador</option>
                                            <option value='Egypt'>Egypt</option>
                                            <option value='El Salvador'>El Salvador</option>
                                            <option value='Equatorial Guinea'>Equatorial Guinea</option>
                                            <option value='Eritrea'>Eritrea</option>
                                            <option value='Estonia'>Estonia</option>
                                            <option value='Ethiopia'>Ethiopia</option>
                                            <option value='Fiji'>Fiji</option>
                                            <option value='Finland'>Finland</option>
                                            <option value='France'>France</option>
                                            <option value='Gabon'>Gabon</option>
                                            <option value='Gambia'>Gambia</option>
                                            <option value='Georgia'>Georgia</option>
                                            <option value='Germany'>Germany</option>
                                            <option value='Ghana'>Ghana</option>
                                            <option value='Greece'>Greece</option>
                                            <option value='Grenada'>Grenada</option>
                                            <option value='Guatemala'>Guatemala</option>
                                            <option value='Guinea'>Guinea</option>
                                            <option value='Guinea-Bissau'>Guinea-Bissau</option>
                                            <option value='Guyana'>Guyana</option>
                                            <option value='Haiti'>Haiti</option>
                                            <option value='Honduras'>Honduras</option>
                                            <option value='Hungary'>Hungary</option>
                                            <option value='Iceland'>Iceland</option>
                                            <option value='India'>India</option>
                                            <option value='Indonesia'>Indonesia</option>
                                            <option value='Iran'>Iran</option>
                                            <option value='Iraq'>Iraq</option>
                                            <option value='Ireland {Republic}'>Ireland {Republic}</option>
                                            <option value='Israel'>Israel</option>
                                            <option value='Italy'>Italy</option>
                                            <option value='Ivory Coast'>Ivory Coast</option>
                                            <option value='Jamaica'>Jamaica</option>
                                            <option value='Japan'>Japan</option>
                                            <option value='Jordan'>Jordan</option>
                                            <option value='Kazakhstan'>Kazakhstan</option>
                                            <option value='Kenya'>Kenya</option>
                                            <option value='Kiribati'>Kiribati</option>
                                            <option value='Korea North'>Korea North</option>
                                            <option value='Korea South'>Korea South</option>
                                            <option value='Kosovo'>Kosovo</option>
                                            <option value='Kuwait'>Kuwait</option>
                                            <option value='Kyrgyzstan'>Kyrgyzstan</option>
                                            <option value='Laos'>Laos</option>
                                            <option value='Latvia'>Latvia</option>
                                            <option value='Lebanon'>Lebanon</option>
                                            <option value='Lesotho'>Lesotho</option>
                                            <option value='Liberia'>Liberia</option>
                                            <option value='Libya'>Libya</option>
                                            <option value='Liechtenstein'>Liechtenstein</option>
                                            <option value='Lithuania'>Lithuania</option>
                                            <option value='Luxembourg'>Luxembourg</option>
                                            <option value='Macedonia'>Macedonia</option>
                                            <option value='Madagascar'>Madagascar</option>
                                            <option value='Malawi'>Malawi</option>
                                            <option value='Malaysia'>Malaysia</option>
                                            <option value='Maldives'>Maldives</option>
                                            <option value='Mali'>Mali</option>
                                            <option value='Malta'>Malta</option>
                                            <option value='Marshall Islands'>Marshall Islands</option>
                                            <option value='Mauritania'>Mauritania</option>
                                            <option value='Mauritius'>Mauritius</option>
                                            <option value='Mexico'>Mexico</option>
                                            <option value='Micronesia'>Micronesia</option>
                                            <option value='Moldova'>Moldova</option>
                                            <option value='Monaco'>Monaco</option>
                                            <option value='Mongolia'>Mongolia</option>
                                            <option value='Montenegro'>Montenegro</option>
                                            <option value='Morocco'>Morocco</option>
                                            <option value='Mozambique'>Mozambique</option>
                                            <option value='Myanmar, {Burma}'>Myanmar, {Burma}</option>
                                            <option value='Namibia'>Namibia</option>
                                            <option value='Nauru'>Nauru</option>
                                            <option value='Nepal'>Nepal</option>
                                            <option value='Netherlands'>Netherlands</option>
                                            <option value='New Zealand'>New Zealand</option>
                                            <option value='Nicaragua'>Nicaragua</option>
                                            <option value='Niger'>Niger</option>
                                            <option value='Nigeria'>Nigeria</option>
                                            <option value='Norway'>Norway</option>
                                            <option value='Oman'>Oman</option>
                                            <option value='Pakistan'>Pakistan</option>
                                            <option value='Palau'>Palau</option>
                                            <option value='Panama'>Panama</option>
                                            <option value='Papua New Guinea'>Papua New Guinea</option>
                                            <option value='Paraguay'>Paraguay</option>
                                            <option value='Peru'>Peru</option>
                                            <option value='Philippines'>Philippines</option>
                                            <option value='Poland'>Poland</option>
                                            <option value='Portugal'>Portugal</option>
                                            <option value='Qatar'>Qatar</option>
                                            <option value='Romania'>Romania</option>
                                            <option value='Russian Federation'>Russian Federation</option>
                                            <option value='Rwanda'>Rwanda</option>
                                            <option value='St Kitts & Nevis'>St Kitts & Nevis</option>
                                            <option value='St Lucia'>St Lucia</option>
                                            <option value='Saint Vincent & the Grenadines'>Saint Vincent & the Grenadines
                                            </option>
                                            <option value='Samoa'>Samoa</option>
                                            <option value='San Marino'>San Marino</option>
                                            <option value='Sao Tome & Principe'>Sao Tome & Principe</option>
                                            <option value='Saudi Arabia'>Saudi Arabia</option>
                                            <option value='Senegal'>Senegal</option>
                                            <option value='Serbia'>Serbia</option>
                                            <option value='Seychelles'>Seychelles</option>
                                            <option value='Sierra Leone'>Sierra Leone</option>
                                            <option value='Singapore'>Singapore</option>
                                            <option value='Slovakia'>Slovakia</option>
                                            <option value='Slovenia'>Slovenia</option>
                                            <option value='Solomon Islands'>Solomon Islands</option>
                                            <option value='Somalia'>Somalia</option>
                                            <option value='South Africa'>South Africa</option>
                                            <option value='South Sudan'>South Sudan</option>
                                            <option value='Spain'>Spain</option>
                                            <option value='Sri Lanka'>Sri Lanka</option>
                                            <option value='Sudan'>Sudan</option>
                                            <option value='Suriname'>Suriname</option>
                                            <option value='Swaziland'>Swaziland</option>
                                            <option value='Sweden'>Sweden</option>
                                            <option value='Switzerland'>Switzerland</option>
                                            <option value='Syria'>Syria</option>
                                            <option value='Taiwan'>Taiwan</option>
                                            <option value='Tajikistan'>Tajikistan</option>
                                            <option value='Tanzania'>Tanzania</option>
                                            <option value='Thailand'>Thailand</option>
                                            <option value='Togo'>Togo</option>
                                            <option value='Tonga'>Tonga</option>
                                            <option value='Trinidad & Tobago'>Trinidad & Tobago</option>
                                            <option value='Tunisia'>Tunisia</option>
                                            <option value='Turkey'>Turkey</option>
                                            <option value='Turkmenistan'>Turkmenistan</option>
                                            <option value='Tuvalu'>Tuvalu</option>
                                            <option value='Uganda'>Uganda</option>
                                            <option value='Ukraine'>Ukraine</option>
                                            <option value='United Arab Emirates'>United Arab Emirates</option>
                                            <option value='United Kingdom'>United Kingdom</option>
                                            <option value='United States' selected>United States</option>
                                            <option value='Uruguay'>Uruguay</option>
                                            <option value='Uzbekistan'>Uzbekistan</option>
                                            <option value='Vanuatu'>Vanuatu</option>
                                            <option value='Vatican City'>Vatican City</option>
                                            <option value='Venezuela'>Venezuela</option>
                                            <option value='Vietnam'>Vietnam</option>
                                            <option value='Yemen'>Yemen</option>
                                            <option value='Zambia'>Zambia</option>
                                            <option value='Zimbabwe'>Zimbabwe</option>


                                        </select>
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group mb-4 col-sm-12 col-md-12">
                                        <label for="exampleInputFirstName1">Address Line 1:<small id="emailHelp"
                                                class="form-text text-muted">(Required)</small></label>
                                        <input type="text" class="form-control" id="exampleInputFirstName1"
                                            aria-describedby="emailHelp" placeholder="Enter First Name" required>
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group mb-4 col-sm-12 col-md-12">
                                        <label for="exampleInputFirstName1">Address Line 2:</label>
                                        <input type="text" class="form-control" id="exampleInputFirstName1"
                                            aria-describedby="emailHelp" placeholder="Enter First Name" required>
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group mb-4 col-sm-12 col-md-4">
                                        <label for="exampleInputFirstName1">City:<small id="emailHelp"
                                                class="form-text text-muted">(Required)</small></label>
                                        <input type="text" class="form-control" id="exampleInputFirstName1"
                                            aria-describedby="emailHelp" placeholder="Enter First Name" required>
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group mb-4 col-sm-12 col-md-4">
                                        <label for="exampleInputFirstName1">State:<small id="emailHelp"
                                                class="form-text text-muted">(Required)</small></label>
                                        <input type="text" class="form-control" id="exampleInputFirstName1"
                                            aria-describedby="emailHelp" placeholder="Enter First Name" required>
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group mb-4 col-sm-12 col-md-4">
                                        <label for="exampleInputFirstName1">Zip Code:<small id="emailHelp"
                                                class="form-text text-muted">(Required)</small></label>
                                        <input type="text" class="form-control" id="exampleInputFirstName1"
                                            aria-describedby="emailHelp" placeholder="Enter First Name" required>
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group mb-4 col-sm-12 col-md-12">
                                        <label for="exampleInputFirstName1">Reason for Inquiry:<small id="emailHelp"
                                                class="form-text text-muted">(Required)</small></label>
                                        <input type="text" class="form-control" id="exampleInputFirstName1"
                                            aria-describedby="emailHelp" placeholder="Enter First Name" required>
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group mb-4 col-sm-12 col-md-12">
                                        <label for="exampleFormControlTextarea1">Message:<small id="emailHelp"
                                                class="form-text text-muted">(Required)</small></label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary repair-form-btn">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
        $('#repair_request_form').submit(function() {
            console.log();
        })
    </script>
@endsection
