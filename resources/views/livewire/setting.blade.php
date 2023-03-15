<div>
    {{-- <div class="col-lg-3 col-xxl-4 col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">نمایش پیام معمولی ، متن و تایید</h4>
                <div class="card-content">
                    <div class="mt-5 sweetalert">
                        <button class="btn btn-primary sweet-text">کلیک کنید</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div> --}}




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
                                            <input wire:model="fName" type="text" class="form-control" placeholder="نام را وارد کنید">
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-sm-6">
                                        <div class="form-group">
                                            <label>نام خانوادگی</label>
                                            <input wire:model="lName" type="text" class="form-control" placeholder="نام خانوادگی را وارد کنید">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="form-group">
                                            <label>رمز عبور</label>
                                            <input wire:model="password" type="password" class="form-control" placeholder="رمز عبور جدید را وارد کنید">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="form-group">
                                            <label>تکرار رمز عبور</label>
                                            <input wire:model="passwordConfirm" type="password" class="form-control" placeholder="رمز عبور جدید را مجددا وارد کنید">
                                        </div>
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
                                                <input wire:model="mobile" type="text" value="{{ user()['Mobile'] }}" class="form-control" placeholder="شماره تماس را وارد کنید">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-sm-6">
                                        <div class="form-group">
                                            <label>تلگرام</label>
                                            <div class="mb-3 input-group input-icon">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon2"><i class="fa fa-telegram" aria-hidden="true"></i></span>
                                                </div>
                                                <input wire:model="telegram" type="text" value="{{ user()['Telegram'] }}" class="form-control" placeholder="شماره تلفن اکانت تلگرام">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="form-group">
                                            <label>واتساپ</label>
                                            <div class="mb-3 input-group input-icon">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon2"><i class="fa fa-whatsapp" aria-hidden="true"></i></span>
                                                </div>
                                                <input wire:model="whatsapp" type="text" value="{{ user()['Whatsapp'] }}" class="form-control" placeholder="شماره تلفن اکانت واتساپ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="form-group">
                                            <label>ایمیل</label>
                                            <div class="mb-3 input-group input-icon">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="las la-envelope"></i></span>
                                                </div>
                                                <input wire:model="email" type="email" value="{{ user()['email'] }}" class="form-control" placeholder="ایمیل را وارد کنید">
                                            </div>
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
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input wire:model="profilePhoto" type='file' id="imageUpload" accept=".jpg" />
                                        <label for="imageUpload"></label>
                                    </div>


                                    <div class="avatar-preview">
                                        @if ($profilePhoto)
                                            <div id="imagePreview" style="background-image: url({{ $profilePhoto->temporaryUrl() }});" class="rounded-circle">
                                            </div>
                                        @else
                                            <div id="imagePreview" style="background-image: url({{ $proImg }});" class="rounded-circle">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="mb-4 profile-image">
                                <img src="{{ asset('DashboardElements/images/profile/profile_150x150.jpg') }}" class="rounded-circle" alt="">
                            </div> --}}
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
                            {{-- <div class="mt-2 text-center row mt-md-5">
                                <div class="p-0 col-4">
                                    <div class="relative mb-2 d-inline-block donut-chart-sale">
                                        <span class="donut" data-peity='{ "fill": ["rgb(255, 142, 38)", "rgba(236, 236, 236, 1)"],   "innerRadius": 27, "radius": 10}'>7/9</span>
                                        <small class="text-black">66%</small>
                                    </div>
                                    <span class="d-block">PHP</span>
                                </div>
                                <div class="p-0 col-4">
                                    <div class="relative mb-2 d-inline-block donut-chart-sale">
                                        <span class="donut" data-peity='{ "fill": ["rgb(62, 168, 52)", "rgba(236, 236, 236, 1)"],   "innerRadius": 27, "radius": 10}'>4/9</span>
                                        <small class="text-black">31%</small>
                                    </div>
                                    <span class="d-block">Vue</span>
                                </div>
                                <div class="p-0 col-4">
                                    <div class="relative mb-2 d-inline-block donut-chart-sale">
                                        <span class="donut" data-peity='{ "fill": ["rgb(34, 172, 147)", "rgba(236, 236, 236, 1)"],   "innerRadius": 27, "radius": 10}'>2/9</span>
                                        <small class="text-black">7%</small>
                                    </div>
                                    <span class="d-block">Laravel</span>
                                </div>
                            </div> --}}
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
