<div>

    {{-- add user form --}}
    {{-- <div class="content-body"> --}}
        <!-- row -->

        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">پلاگین</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">فرم جادویی</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">مراحل</h4>
                        </div>
                        <div class="card-body">
                            <div id="smartwizard" class="form-wizard order-create">
                                <ul class="nav nav-wizard">
                                    <li><a class="nav-link" href="#wizard_Service">
                                        <span>1</span>
                                    </a></li>
                                    <li><a class="nav-link" href="#wizard_Time">
                                        <span>2</span>
                                    </a></li>
                                    <li><a class="nav-link" href="#wizard_Details">
                                        <span>3</span>
                                    </a></li>
                                    <li><a class="nav-link" href="#wizard_Payment">
                                        <span>4</span>
                                    </a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="wizard_Service" class="tab-pane" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">نام*</label>
                                                    <input type="text" name="firstName" class="form-control" placeholder="نام" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">نام خانوادگی*</label>
                                                    <input type="text" name="lastName" class="form-control" placeholder="نام خانوادگی" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">ایمیل*</label>
                                                    <input type="email" class="form-control" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2" placeholder="example@example.com" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">شماره تماس*</label>
                                                    <input type="text" name="phoneNumber" class="form-control" placeholder="+989001522215" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <div class="form-group">
                                                    <label class="text-label">اهل کجا هستید؟*</label>
                                                    <input type="text" name="place" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="wizard_Time" class="tab-pane" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">نام شرکت*</label>
                                                    <input type="text" name="firstName" class="form-control" placeholder="راست چین" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">آدرس ایمیل شرکت*</label>
                                                    <input type="email" class="form-control" id="emial1" placeholder="example@example.com" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">شماره تماس شرکت*</label>
                                                    <input type="text" name="phoneNumber" class="form-control" placeholder="+989011001212" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">موقعیت شرکت شما*</label>
                                                    <input type="text" name="place" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="wizard_Details" class="tab-pane" role="tabpanel">
                                        <div class="row">
                                            <div class="col-12 col-md-3 mb-2">
                                                <h4>شنبه</h4>
                                            </div>
                                            <div class="col-6 col-md-3 mb-2">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number" name="input9" id="input9">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3 mb-2">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number" name="input10" id="input10">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-3 mb-2">
                                                <h4>یکشنبه*</h4>
                                            </div>
                                            <div class="col-6 col-md-3 mb-2">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number" name="input1" id="input1">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3 mb-2">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number" name="input2" id="input2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-3 mb-2">
                                                <h4>سه شنبه*</h4>
                                            </div>
                                            <div class="col-6 col-md-3 mb-2">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number" name="input3" id="input3">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3 mb-2">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number" name="input4" id="input4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-3 mb-2">
                                                <h4>چهار شنبه*</h4>
                                            </div>
                                            <div class="col-6 col-md-3 mb-2">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number" name="input5" id="input5">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3 mb-2">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number" name="input6" id="input6">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-3 mb-2">
                                                <h4>پنج شنبه*</h4>
                                            </div>
                                            <div class="col-6 col-md-3 mb-2">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number" name="input7" id="input7">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3 mb-2">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number" name="input8" id="input8">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div id="wizard_Payment" class="tab-pane" role="tabpanel">
                                        <div class="row emial-setup">
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <div class="form-group">
                                                    <label for="mailclient11" class="mailclinet mailclinet-gmail">
                                                        <input type="radio" name="emailclient" id="mailclient11">
                                                        <span class="mail-icon">
																<i class="mdi mdi-google-plus" aria-hidden="true"></i>
															</span>
                                                        <span class="mail-text">استفاده از Gmail</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <div class="form-group">
                                                    <label for="mailclient12" class="mailclinet mailclinet-office">
                                                        <input type="radio" name="emailclient" id="mailclient12">
                                                        <span class="mail-icon">
																<i class="mdi mdi-office" aria-hidden="true"></i>
															</span>
                                                        <span class="mail-text">استفاده از Office</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <div class="form-group">
                                                    <label for="mailclient13" class="mailclinet mailclinet-drive">
                                                        <input type="radio" name="emailclient" id="mailclient13">
                                                        <span class="mail-icon">
																<i class="mdi mdi-google-drive" aria-hidden="true"></i>
															</span>
                                                        <span class="mail-text"> Google Drive </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <div class="form-group">
                                                    <label for="mailclient14" class="mailclinet mailclinet-another">
                                                        <input type="radio" name="emailclient" id="mailclient14">
                                                        <span class="mail-text">سرویس های دیگر</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="skip-email text-center">
                                                    <p>اگر صفحه را ببندید ، بعدا می توانید این بخش را کامل کنید</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    {{-- </div> --}}


</div>
