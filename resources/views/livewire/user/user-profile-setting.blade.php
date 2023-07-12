<div>
    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">جزئیات پروفایل</h5>
                <!-- Account -->
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        @livewire('user.profilephoto', [$selectedUser])

                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">ارسال تصویر جدید</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input wire:model="profilePhoto" type="file" id="upload"
                                    class="account-file-input" hidden accept=".jpg">
                            </label>

                            @if ($userHaveProfileImg)
                                <button wire:click="confirmDelete('profileImage')" type="button"
                                    class="btn btn-danger mb-4">
                                    <i class="bx bx-reset d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">حذف تصویر پروفایل</span>
                                </button>
                            @endif

                            <p class="mb-0">فایل‌های JPG مجاز هستند. حداکثر اندازه فایل 50KB و 200×200 پیکسل.</p>
                        </div>
                    </div>
                </div>

                <hr class="my-0">
                <div class="card-body">
                    <form wire:submit.prevent="save">
                        @csrf
                        <div class="row">

                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">نام</label>
                                <input @if (Auth::user()->post_id != 1) disabled @endif wire:model.defer="fName"
                                    class="form-control" type="text" name="firstName" placeholder="نام را وارد کنید">
                                @error('fName')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>




                            <div class="mb-3 col-md-6">
                                <label for="lastName" class="form-label">نام خانوادگی</label>
                                <input wire:model.defer="lName" @if (Auth::user()->post_id != 1) disabled @endif
                                    class="form-control" type="text" name="lastName"
                                    placeholder="نام خانوادگی را وارد کنید">
                                @error('lName')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="newPassword">رمز عبور جدید</label>
                                <div class="input-group input-group-merge">
                                    <input wire:model.defer="password" class="form-control text-start" dir="ltr"
                                        type="password" name="newPassword" placeholder="رمز عبور جدید را وارد کنید">
                                    <span class="input-group-text cursor-pointer"></span>
                                </div>

                                @error('password')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="confirmPassword">تایید رمز عبور جدید</label>
                                <div class="input-group input-group-merge">
                                    <input wire:model.defer="password_confirmation" class="form-control text-start"
                                        dir="ltr" type="password" name="confirmPassword" id="confirmPassword"
                                        placeholder="رمز عبور جدید را مجددا وارد کنید">
                                    <span class="input-group-text cursor-pointer"></span>
                                </div>
                                @error('password_confirmation')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="birthdate">تاریخ تولد</label>

                                <input name="birthdate" type="text" wire:model.defer="birthDate" data-jdp
                                    data-jdp-birth-date data-jdp-max-date="today" class="form-control input-rounded"
                                    placeholder="تاریخ تولد" value="{{ old('birthDate') }}">
                                @error('birthDate')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="mb-3 col-md-6">
                                <small class="text-light fw-semibold d-block mt-3">جنسیت</small>
                                <div class="form-check form-check-inline ">
                                    <input wire:model="gender" class="form-check-input" type="radio" name="usergender"
                                        id="genderRadio1" value="1">
                                    <label class="form-check-label" for="genderRadio1">مرد</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input wire:model.defer="gender" class="form-check-input" type="radio"
                                        name="usergender" id="genderRadio2" value="0">
                                    <label class="form-check-label" for="genderRadio2">زن</label>
                                </div>
                            </div>


                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">ایمیل</label>
                                <input wire:model.defer="email" class="form-control text-start" dir="ltr"
                                    type="email" name="email" placeholder="ایمیل را وارد کنید">
                                @error('email')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="phoneNumber">تلفن همراه</label>
                                <div class="input-group input-group-merge">

                                    <input wire:model.defer="mobile" type="number" name="phoneNumber"
                                        class="form-control text-start" dir="ltr"
                                        placeholder="شماره تماس را وارد کنید">
                                </div>
                                @error('mobile')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>






                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="telegramNumber">شماره تلگرام</label>
                                <div class="input-group input-group-merge">

                                    <input wire:model.defer="telegram" type="number" name="telegramNumber"
                                        class="form-control text-start" dir="ltr"
                                        placeholder="شماره تلفن اکانت تلگرام">
                                </div>
                                @error('telegram')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>











                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="whatsappNumber">شماره واتساپ</label>
                                <div class="input-group input-group-merge">

                                    <input wire:model.defer="whatsapp" type="number" name="whatsappNumber"
                                        class="form-control text-start" dir="ltr"
                                        placeholder="شماره تلفن اکانت واتساپ">
                                </div>
                                @error('whatsapp')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>







                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="personnelCode">کد پرسنلی</label>
                                <div class="input-group input-group-merge">

                                    <input wire:model.defer="personnelCode" type="number" name="personnelCode"
                                        class="form-control text-start" dir="ltr"
                                        placeholder="کد پرسنلی خود را وارد کنید">
                                </div>
                                @error('personnelCode')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>





                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="localNumber">تلفن داخلی</label>
                                <div class="input-group input-group-merge">

                                    <input wire:model.defer="localNumber" type="number" name="localNumber"
                                        class="form-control text-start" dir="ltr"
                                        placeholder="تلفن داخلی خود را وارد کنید">
                                </div>
                                @error('localNumber')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>


                            {{-- if the user is admin and selects to edit a user, this part will show also --}}
                            @if (Auth::user()->post_id == 1 && $selectedUser->id != Auth::user()->id)

                                <div class="mb-3 col-md-6">
                                    <label for="branchlist" class="form-label">شعبه</label>
                                    <select wire:model.defer="userBranch" id="branchlist"
                                        class="select2 form-select">
                                        <option value="">انتخاب کنید</option>
                                        @foreach ($branches as $bid => $branchName)
                                            <option @selected($userBranch == $bid) value="{{ $bid }}">
                                                {{ $branchName }}</option>
                                        @endforeach

                                    </select>
                                    @error('branch')
                                        <span style="color: red" class="error">{{ $message }}</span>
                                    @enderror
                                </div>




                                <div class="mb-3 col-md-6">
                                    <label for="unitlist" class="form-label">واحد</label>
                                    <select wire:model.defer="userUnit" id="unitlist" class="select2 form-select">
                                        <option value="">انتخاب کنید</option>

                                        @foreach ($units as $uid => $unitName)
                                            <option value="{{ $uid }}" @selected($userUnit == $uid)>
                                                {{ $unitName }}</option>
                                        @endforeach
                                    </select>
                                    @error('unit')
                                        <span style="color: red" class="error">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="mb-3 col-md-6">
                                    <label for="postlist" class="form-label">پست</label>
                                    <select wire:model.defer="userPost" id="postlist" class="select2 form-select">
                                        <option value="">انتخاب کنید</option>

                                        @foreach ($posts as $pid => $postName)
                                            <option value="{{ $pid }}" @selected($userPost == $pid)>
                                                {{ $postName }}</option>
                                        @endforeach
                                    </select>
                                    @error('post')
                                        <span style="color: red" class="error">{{ $message }}</span>
                                    @enderror
                                </div>



                                <div class="mb-3 col-md-3">
                                    <div class="input-group mb-4">
                                        <div class="dropzone col-8" id="sign-dropzone" data-toggle="tooltip"
                                            title="اندازه بهینه تصویر کمتر از 35 کیلوبایت است">
                                        </div>
                                    </div>
                                </div>



                                {{-- previous user sign image --}}
                                <div class="mb-3 col-md-3">
                                    <img style="border: 1px solid #ddd;
                                    border-radius: 4px;
                                    padding: 5px;
                                    width: 300px;
                                    height:150px;"
                                        src="{{ $userSign }}">
                                </div>






                            @endif






                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">ذخیره تغییرات</button>
                            <button type="reset" class="btn btn-label-secondary">انصراف</button>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
            @if (Auth::user()->post_id == 1 && $selectedUser->id != Auth::user()->id)
                <div class="card">
                    <h5 class="card-header">حذف حساب</h5>
                    <div class="card-body">
                        <div class="mb-3 col-12 mb-0">
                            <div class="alert alert-warning">
                                <h6 class="alert-heading mb-1">آیا از حذف حساب خود اطمینان دارید؟</h6>
                                <p class="mb-0">در صورتی که حساب خود را حذف کنید، بازگشتی وجود نخواهد داشت. لطفا
                                    مطمئن
                                    باشید.</p>
                            </div>
                        </div>
                        <form id="formAccountDeactivation" onsubmit="return false">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="accountActivation"
                                    id="accountActivation">
                                <label class="form-check-label" for="accountActivation">من غیرفعال کردن حساب خود را
                                    تایید
                                    می‌کنم</label>
                            </div>
                            <button type="submit" class="btn btn-danger deactivate-account">غیرفعال کردن
                                حساب</button>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>














    {{--
    <div class="row">


        {{-- profile right section ends --}}



    {{-- profile left section starts
        <div class="col-xl-3 col-xxl-4 col-lg-12">
            <div class="row">

                <div class="col-xl-12 col-lg-6">
                    <div class="card flex-lg-column flex-md-row ">
                        <div class="text-center card-body border-bottom profile-bx">
                            <div class="container">
                                @livewire('user.profilephoto', ['selectedUser' => $selectedUser])

                            </div>
                            <h4 class="mb-1 text-black fs-22">{{ $fName . ' ' . $lName }}</h4>
                            <p class="mb-4">{{ $userPost }}</p>

                            <div class="row">
                                <div class="col-12">
                                    <div class="p-2 mb-10 border rounded">
                                        <span class="text-black">شعبه</span>
                                        <h4 class="text-black fs-22 font-w600">{{ $userBranch }}</h4>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="p-2 border rounded">
                                        <span class="text-black">واحد</span>
                                        <h4 class="text-black fs-22 font-w600">{{ $userUnit }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body activity-card">
                            <div class="mb-3 d-flex align-items-center">
                                <a class="mr-3 contact-icon" href="#"><i class="fa fa-phone"
                                        aria-hidden="true"></i></a>
                                <span class="text-black">{{ $mobile ?? 'موبایل وارد نشده است' }}</span>
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <a class="mr-3 contact-icon" href="#"><i class="las la-envelope"></i></a>
                                <span class="text-black">{{ $email ?? 'ایمیل وارد نشده است' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- profile left section ends

    </div> --}}
</div>
