@extends('includes.layout')
@section('content')
<div class="login-right">
    <div class="login-right-wrap">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="sub-title">General Details</h4>
            </div>
        </div>
        <form>
            <div class="row">
                <div class="col-md-4 col-lg-3 col-xl-2">
                    <div class="form-group">
                        <label>Name <span>*</span></label>
                        <input class="form-control" type="text" placeholder="First Name">
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-2">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input class="form-control" type="text" placeholder="Last Name">
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-2">
                    <div class="form-group">
                        <label>Email <span>*</span></label>
                        <input class="form-control" type="email" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-2">
                    <div class="form-group">
                        <label>Phone No. <span>*</span></label>
                        <input class="form-control" type="number" placeholder="Phone No.">
                    </div>
                </div>
                <div class="col-md-8 col-lg-8 col-xl-4">
                    <div class="form-group">
                        <label>Address <span>*</span></label>
                        <input class="form-control" type="text" placeholder="Address">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 d-flex align-items-center justify-content-between">
                    <h4 class="sub-title border-0 mb-0 pb-0">Pet Details</h4>
                </div>
                <div class="col-sm-12">
                    <hr class="mt-2 mb-4">
                </div>
            </div>
            <fieldset class="mt-0">
                <legend>Pet 1</legend>
                <div class="row">
                    <div class="col-md-4 offset-md-4  offset-lg-0 col-lg-4 col-xxl-2">
                        <label>Upload Your Dog Picture <span>*</span></label>
                        <div class="dogpicture">
                            <div class="circle">
                                <img class="profile-pic" src="assets/img/dog-avtar.jpg">
                                <div class="p-image">
                                    <i class="fa fa-camera upload-button"></i>
                                    <input class="file-upload" type="file" accept="image/*" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-8 col-xxl-10">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xxl-3">
                                <div class="form-group">
                                    <label>Name <span>*</span></label>
                                    <input class="form-control" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xxl-3">
                                <div class="form-group">
                                    <label>Age <span>*</span></label>
                                    <select class="form-control">
                                        <option>-- Select --</option>
                                        <option> Less than 1</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xxl-3">
                                <div class="form-group">
                                    <label>Breed <span>*</span></label>
                                    <input class="form-control" type="text" placeholder="Breed">
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6 col-xxl-3">
                                <div class="form-group">
                                    <label>Sex <span>*</span></label>
                                    <select class="form-control">
                                        <option>-- Select --</option>
                                        <option> Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                                <div class="col-md-6 col-lg-6 col-xxl-3">
                                <div class="form-group">
                                    <label>Weight <span>*</span></label>
                                    <input class="form-control" type="number" placeholder="Weight">
                                </div>
                            </div>
                                <div class="col-md-6 col-lg-6 col-xxl-3">
                                <div class="form-group">
                                    <label>Color <span>*</span></label>
                                    <input class="form-control" type="text" placeholder="Color">
                                </div>
                            </div>
                            <!-- <div class="col-md-6 col-lg-6 col-xxl-3">
                                <div class="form-group">
                                    <label>Temperament <span>*</span></label>
                                    <input class="form-control" type="text" placeholder="Temperament">
                                </div>
                            </div> -->
                                <div class="col-md-6 col-lg-6 col-xxl-3">
                                <div class="form-group">
                                    <label>Vet Name <span>*</span></label>
                                    <input class="form-control" type="number" placeholder="Vet Name">
                                </div>
                            </div>
                                <div class="col-md-6 col-lg-6 col-xxl-3">
                                <div class="form-group">
                                    <label>Vet Phone</label>
                                    <input class="form-control" type="number" placeholder="Vet Phone">
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6 col-xxl-12">
                                <div class="form-group">
                                    <label>Notes</label>
                                    <textarea rows="1" class="form-control" placeholder="Your Comment">
                                    </textarea>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12 col-lg-12">
                        <h5>Vaccination Details</h5>
                    </div>
                    <div class="col-6 col-md-4 col-xxl-2">
                        <div class="form-group">
                            <label>Rabies Expiry  <span>*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control datepicker" aria-describedby="Rabies" >
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="Bordetella"><i class="fe fe-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xxl-2">
                        <div class="form-group">
                            <label>DHPP Expiry  </label>
                            <div class="input-group">
                                <input type="text" class="form-control datepicker" aria-describedby="DHPP" >
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="DHPP"><i class="fe fe-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xxl-2">
                        <div class="form-group">
                            <label>Bordetella Expiry  <span>*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control datepicker" aria-describedby="Bordetella" >
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="Bordetella"><i class="fe fe-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-xxl-2">
                        <div class="form-group">
                            <label>Flu Expiry  </label>
                            <div class="input-group">
                                <input type="text" class="form-control datepicker" aria-describedby="Flu" >
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="Flu"><i class="fe fe-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-xxl-4">
                        <label>Upload Docouments  </label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc">
                            <label class="custom-file-label" for="doc"><i class="fe fe-upload"></i> Upload Document</label>
                            </div>
                    </div>
                    <!-- <div class="col-12">
                        <ul class="file_added">
                            <li><a href="#"><i class="fa fa-paperclip"></i>&nbsp;&nbsp;Flu-file.pdf</a></li>
                            </ul>
                    </div> -->

                </div>
                </fieldset>

                <div class="row mt-4">
                    <div class="col-md-12 text-center ">
                        <div class="form-group">
                            <button type="button" id="add_site" class="add_btn"><i class="fe fe-plus"></i>&nbsp; Add More Pet</button>
                            <button class="btn btn-primary px-5 btnAnimation" type="button" data-toggle="modal"
                                data-target="#thanksingup">Sign Up</button>
                        </div>
                    </div>
                </div>


        </form>

        <div class="modal fade" id="thanksingup" tabindex="-1" role="dialog"
            aria-labelledby="thanksingupLabel" aria-hidden="true">
            <div class="modal-dialog modal-confirm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons"></i>
                        </div>
                        <h4 class="modal-title w-100">Thank you rigister with Us!</h4>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection