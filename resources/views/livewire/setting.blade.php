<div>

    <!-- row -->
    <div class="row">

        <div class="col-xl-9 col-xxl-8 col-lg-12">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card profile-card">
                        <div class="flex-wrap pb-0 border-0 card-header">
                            <h3 class="pr-3 mb-2 mr-auto text-black fs-24 font-w600">ویرایش پروفایل</h3>
                            <div class="d-sm-flex d-block">
                                <form wire:submit.prevent="save">
                                    @csrf
                                    <a href="#" class="mb-2 mr-3 btn btn-dark light btn-rounded sweet-message">کنسل</a>
                                    <button type="submit" class="mb-2 btn btn-primary btn-rounded " href="#">ذخیره </button>
                            </div>
                        </div>

                        <div class="card-body">
                            @csrf
                            <div class="mb-5">
                                <div class="mb-4 title"><span class="text-black fs-18 font-w600">اطلاعات</span></div>
                                <div class="row">
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="form-group">
                                            <label>نام</label>
                                            <input disabled wire:model="fName" type="text" class="form-control" placeholder="نام را وارد کنید">
                                        </div>
                                        @error('fName')
                                            <span style="color: red" class="error">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-xl-4 col-sm-6">
                                        <div class="form-group">
                                            <label>نام خانوادگی</label>
                                            <input disabled wire:model="lName" type="text" class="form-control" placeholder="نام خانوادگی را وارد کنید">
                                        </div>
                                        @error('lName')
                                            <span style="color: red" class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="form-group">
                                            <label>رمز عبور جدید</label>
                                            <input wire:model="password" type="password" class="form-control" placeholder="رمز عبور جدید را وارد کنید">
                                        </div>
                                        @error('password')
                                            <span style="color: red" class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="form-group">
                                            <label>تکرار رمز عبور جدید</label>
                                            <input wire:model="password_confirmation" type="password" class="form-control" placeholder="رمز عبور جدید را مجددا وارد کنید">
                                        </div>
                                        @error('password_confirmation')
                                            <span style="color: red" class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <div class="mb-4 title"><span class="text-black fs-18 font-w600">ارتباط</span></div>
                                <div class="row">
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="form-group">
                                            <label>تلفن همراه</label>
                                            <div class="mb-3 input-group input-icon">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                </div>
                                                <input wire:model="mobile" type="text" class="form-control" placeholder="شماره تماس را وارد کنید">
                                            </div>
                                            @error('mobile')
                                                <span style="color: red" class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-sm-6">
                                        <div class="form-group">
                                            <label>تلگرام</label>
                                            <div class="mb-3 input-group input-icon">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon2"><i class="fa fa-telegram" aria-hidden="true"></i></span>
                                                </div>
                                                <input wire:model="telegram" type="text" class="form-control" placeholder="شماره تلفن اکانت تلگرام">
                                            </div>
                                            @error('telegram')
                                                <span style="color: red" class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="form-group">
                                            <label>واتساپ</label>
                                            <div class="mb-3 input-group input-icon">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon2"><i class="fa fa-whatsapp" aria-hidden="true"></i></span>
                                                </div>
                                                <input wire:model="whatsapp" type="text" class="form-control" placeholder="شماره تلفن اکانت واتساپ">
                                            </div>
                                            @error('whatsapp')
                                                <span style="color: red" class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="form-group">
                                            <label>ایمیل</label>
                                            <div class="mb-3 input-group input-icon">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="las la-envelope"></i></span>
                                                </div>
                                                <input wire:model="email" class="form-control" placeholder="ایمیل را وارد کنید">
                                            </div>
                                            @error('email')
                                                <span style="color: red" class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-xxl-4 col-lg-12">
            <div class="row">
                <div class="col-xl-12 col-lg-6">
                    <div class="card flex-lg-column flex-md-row ">
                        <div class="text-center card-body border-bottom profile-bx">
                            <div class="container">
                                @livewire('profile-photo')

                            </div>
                            <h4 class="mb-1 text-black fs-22">{{ User()['Full_Name'] }}</h4>
                            <p class="mb-4">{{ User()['Post'] }}</p>



                            <div class="row">
                                <div class="col-12">
                                    <div class="p-2 mb-10 border rounded">
                                        <span class="text-black">شعبه</span>
                                        <h4 class="text-black fs-22 font-w600">ستاد</h4>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="p-2 border rounded">
                                        <span class="text-black">واحد</span>
                                        <h4 class="text-black fs-22 font-w600">انفورماتیک</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body activity-card">
                            <div class="mb-3 d-flex align-items-center">
                                <a class="mr-3 contact-icon" href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                                <span class="text-black">{{ user()['Mobile'] ?? 'موبایل وارد نشده است' }}</span>
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <a class="mr-3 contact-icon" href="#"><i class="las la-envelope"></i></a>
                                <span class="text-black">{{ user()['email'] ?? 'ایمیل وارد نشده است' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
                                                                                                                                                                                                                                                                                                                                                                                                         Content body end
                                                                                                                                                                                                                                                                                                                                                                                                        ***********************************-->
    </div>
</div>
