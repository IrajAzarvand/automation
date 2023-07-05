<div>
    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> حساب</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages-account-settings-security.html"><i class="bx bx-lock-alt me-1"></i>
                        امنیت</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages-account-settings-billing.html"><i class="bx bx-detail me-1"></i>
                        صورتحساب و پلن‌ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages-account-settings-notifications.html"><i class="bx bx-bell me-1"></i>
                        اعلان‌ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages-account-settings-connections.html"><i
                            class="bx bx-link-alt me-1"></i> اتصالات</a>
                </li>
            </ul>
            <div class="card mb-4">
                <h5 class="card-header">جزئیات پروفایل</h5>
                <!-- Account -->
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="{{ $proImg }}" alt="user-avatar" class="d-block rounded" height="100"
                            width="100" id="uploadedAvatar">
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">ارسال تصویر جدید</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" class="account-file-input" hidden
                                    accept="image/png, image/jpeg">
                            </label>

                            @if ($userHaveProfileImg)
                                <button wire:click="confirmDelete('profileImage')" type="button"
                                    class="btn btn-danger mb-4">
                                    <i class="bx bx-reset d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">حذف تصویر پروفایل</span>
                                </button>
                            @endif

                            <p class="mb-0">فایل‌های JPG ،PNG مجاز هستند. حداکثر اندازه فایل 800KB.</p>
                        </div>
                    </div>
                </div>
                <hr class="my-0">
                <div class="card-body">
                    <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">نام</label>
                                <input class="form-control" type="text" id="firstName" name="firstName"
                                    value="جان" autofocus>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="lastName" class="form-label">نام خانوادگی</label>
                                <input class="form-control" type="text" name="lastName" id="lastName"
                                    value="اسنو">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">ایمیل</label>
                                <input class="form-control text-start" dir="ltr" type="text" id="email"
                                    name="email" value="john.doe@example.com" placeholder="john.doe@example.com">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="organization" class="form-label">سازمان</label>
                                <input type="text" class="form-control" id="organization" name="organization"
                                    value="PIXINVENT">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="phoneNumber">شماره تلفن</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">IR (+98)</span>
                                    <input type="text" id="phoneNumber" name="phoneNumber"
                                        class="form-control text-start" dir="ltr" placeholder="202 555 0111">
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="address" class="form-label">آدرس</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="آدرس">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="state" class="form-label">استان</label>
                                <input class="form-control" type="text" id="state" name="state"
                                    placeholder="آذربایجان شرقی">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="zipCode" class="form-label">کد پستی</label>
                                <input type="text" class="form-control text-start" dir="ltr" id="zipCode"
                                    name="zipCode" placeholder="231465" maxlength="6">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="country">کشور</label>
                                <select id="country" class="select2 form-select">
                                    <option value="">انتخاب</option>
                                    <option value="Australia">استرالیا</option>
                                    <option value="Bangladesh">بنگلادش</option>
                                    <option value="Belarus">بلاروس</option>
                                    <option value="Brazil">برزیل</option>
                                    <option value="Canada">کانادا</option>
                                    <option value="China">چین</option>
                                    <option value="France">فرانسه</option>
                                    <option value="Germany">آلمان</option>
                                    <option value="India">هندوستان</option>
                                    <option value="Indonesia">اندونزی</option>
                                    <option value="Iran">ایران</option>
                                    <option value="Italy">ایتالیا</option>
                                    <option value="Japan">ژاپن</option>
                                    <option value="Korea">کره جنوبی</option>
                                    <option value="Mexico">مکزیک</option>
                                    <option value="Philippines">فیلیپین</option>
                                    <option value="Russia">روسیه</option>
                                    <option value="South Africa">آفریقای جنوبی</option>
                                    <option value="Thailand">تایلند</option>
                                    <option value="Turkey">ترکیه</option>
                                    <option value="Ukraine">اوکراین</option>
                                    <option value="United Arab Emirates">امارات</option>
                                    <option value="United Kingdom">انگلستان</option>
                                    <option value="United States">ایالات متحده</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="language" class="form-label">زبان</label>
                                <select id="language" class="select2 form-select">
                                    <option value="">انتخاب زبان</option>
                                    <option value="en">انگلیسی</option>
                                    <option value="fr">فرانسوی</option>
                                    <option value="de">آلمانی</option>
                                    <option value="pt">پرتغالی</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="timeZones" class="form-label">ناحیه زمانی</label>
                                <select id="timeZones" class="select2 form-select">
                                    <option value="">انتخاب ناحیه زمانی</option>
                                    <option value="-12">(GMT-12:00) (GMT-12:00) خط زمانی بین المللی غربی</option>
                                    <option value="-11">(GMT-11:00) جزیره میدوی</option>
                                    <option value="-10">(GMT-10:00) هاوایی</option>
                                    <option value="-9">(GMT-09:00) آلاسکا</option>
                                    <option value="-8">(GMT-08:00) آمریکا و کانادا</option>
                                    <option value="-8">(GMT-08:00) کالیفرنیا</option>
                                    <option value="-7">(GMT-07:00) آریزونا</option>
                                    <option value="-7">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</option>
                                    <option value="-7">(GMT-07:00) اقیانوسیه</option>
                                    <option value="-6">لورم ایپسوم متن ساختگی با تولید</option>
                                    <option value="-6">(GMT-06:00) استرالیا</option>
                                    <option value="-6">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از</option>
                                    <option value="-6">لورم ایپسوم متن ساختگی با</option>
                                    <option value="-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</option>
                                    <option value="-5">(GMT-05:00) اروپا</option>
                                    <option value="-5">(GMT-05:00) خاورمیانه</option>
                                    <option value="-4">لورم ایپسوم متن ساختگی با تولید سادگی</option>
                                    <option value="-4">لورم ایپسوم متن ساختگی با تولید</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="currency" class="form-label">واحد پول</label>
                                <select id="currency" class="select2 form-select">
                                    <option value="">انتخاب واحد پول</option>
                                    <option value="usd">دلار</option>
                                    <option value="euro">یورو</option>
                                    <option value="pound">پوند</option>
                                    <option value="bitcoin">بیت کوین</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">ذخیره تغییرات</button>
                            <button type="reset" class="btn btn-label-secondary">انصراف</button>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
            <div class="card">
                <h5 class="card-header">حذف حساب</h5>
                <div class="card-body">
                    <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                            <h6 class="alert-heading mb-1">آیا از حذف حساب خود اطمینان دارید؟</h6>
                            <p class="mb-0">در صورتی که حساب خود را حذف کنید، بازگشتی وجود نخواهد داشت. لطفا مطمئن
                                باشید.</p>
                        </div>
                    </div>
                    <form id="formAccountDeactivation" onsubmit="return false">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="accountActivation"
                                id="accountActivation">
                            <label class="form-check-label" for="accountActivation">من غیرفعال کردن حساب خود را تایید
                                می‌کنم</label>
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">غیرفعال کردن حساب</button>
                    </form>
                </div>
            </div>
        </div>
    </div>















    {{--
    <div class="row">

        <div class="col-xl-9 col-xxl-8 col-lg-12">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card profile-card">
                        <form wire:submit.prevent="save">
                            @csrf
                            <div class="flex-wrap pb-0 border-0 card-header">
                                <h3 class="pr-3 mb-2 mr-auto text-black fs-24 font-w600">ویرایش پروفایل</h3>
                                <div class="d-sm-flex d-block">
                                    @if (Auth::user()->post_id == 1 && $selectedUser->id != Auth::user()->id)
                                        <button type="button" wire:click="confirmChangeAvtiveMode"
                                            class="btn btn-rounded  mr-3 mb-2 btn-sm  {{ $active ? 'btn-danger' : 'btn-success' }}">{{ $active ? 'غیرفعال کردن' : 'فعال کردن' }}</button>
                                    @endif


                                    <a href="#"
                                        class="mb-2 btn-sm mr-3 btn btn-dark light btn-rounded sweet-message">کنسل</a>
                                    <button type="submit" class="mb-2 btn-sm  btn btn-primary btn-rounded "
                                        href="#">ذخیره </button>
                                </div>
                            </div>

                            <div class="card-body">

                                <div class="mb-5">
                                    <div class="mb-4 title"><span class="text-black fs-18 font-w600">اطلاعات</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="form-group">
                                                <label>نام</label>
                                                <input @if (Auth::user()->post_id != 1) disabled @endif
                                                    wire:model.defer="fName" type="text" class="form-control"
                                                    placeholder="نام را وارد کنید">
                                            </div>
                                            @error('fName')
                                                <span style="color: red" class="error">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-xl-4 col-sm-6">
                                            <div class="form-group">
                                                <label>نام خانوادگی</label>
                                                <input @if (Auth::user()->post_id != 1) disabled @endif
                                                    wire:model.defer="lName" type="text" class="form-control"
                                                    placeholder="نام خانوادگی را وارد کنید">
                                            </div>
                                            @error('lName')
                                                <span style="color: red" class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="form-group">
                                                <label>رمز عبور جدید</label>
                                                <input wire:model.defer="password" type="password" class="form-control"
                                                    placeholder="رمز عبور جدید را وارد کنید">
                                            </div>
                                            @error('password')
                                                <span style="color: red" class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="form-group">
                                                <label>تکرار رمز عبور جدید</label>
                                                <input wire:model.defer="password_confirmation" type="password"
                                                    class="form-control" placeholder="رمز عبور جدید را مجددا وارد کنید">
                                            </div>
                                            @error('password_confirmation')
                                                <span style="color: red" class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                {{-- ============================================================================================
                                <div class="mb-5">
                                    <div class="mb-4 title"><span class="text-black fs-18 font-w600">ارتباط</span></div>
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="form-group">
                                                <label>تلفن همراه</label>
                                                <div class="mb-3 input-group input-icon">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="fa fa-phone" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input wire:model.defer="mobile" type="text" class="form-control"
                                                        placeholder="شماره تماس را وارد کنید">
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
                                                        <span class="input-group-text" id="basic-addon2"><i
                                                                class="fa fa-telegram" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input wire:model.defer="telegram" type="text" class="form-control"
                                                        placeholder="شماره تلفن اکانت تلگرام">
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
                                                        <span class="input-group-text" id="basic-addon2"><i
                                                                class="fa fa-whatsapp" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input wire:model.defer="whatsapp" type="text" class="form-control"
                                                        placeholder="شماره تلفن اکانت واتساپ">
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
                                                        <span class="input-group-text" id="basic-addon3"><i
                                                                class="las la-envelope"></i></span>
                                                    </div>
                                                    <input wire:model.defer="email" class="form-control"
                                                        placeholder="ایمیل را وارد کنید">
                                                </div>
                                                @error('email')
                                                    <span style="color: red" class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="form-group">
                                                <label>تلفن داخلی</label>
                                                <div class="mb-3 input-group input-icon">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon3"><i
                                                                class="fa fa-phone"></i></span>
                                                    </div>
                                                    <input wire:model.defer="localNumber" class="form-control"
                                                        placeholder="تلفن داخلی خود را وارد کنید">
                                                </div>
                                                @error('localNumber')
                                                    <span style="color: red" class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- ============================================================================================




                                {{-- if the user is admin and selects to edit a user, this part will show also
                                @if (Auth::user()->post_id == 1 && $selectedUser->id != Auth::user()->id)

                                    <div class="mb-4 title"><span class="text-black fs-18 font-w600">مدیریت
                                            کاربر</span>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="form-group" >
                                                <label>شعبه</label>
                                                <select wire:model.defer="userBranch"  class="form-control">
                                                    <option value="">انتخاب کنید</option>

                                                    @foreach ($branches as $bid => $branchName)
                                                        <option @selected($selectedUser->branch_id == $bid ) value="{{ $bid }}">{{ $branchName }}</option>
                                                    @endforeach
                                                </select>

                                                @error('branch')
                                                    <span style="color: red" class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="col-xl-4 col-sm-6">
                                            <div class="form-group">
                                                <label>واحد</label>
                                                <select wire:model.defer="userUnit" class="form-control">
                                                    <option value="">انتخاب کنید</option>

                                                    @foreach ($units as $uid => $unitName)
                                                        <option value="{{ $uid }}" @selected($selectedUser->unit_id == $uid )>
                                                            {{ $unitName }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('unit')
                                                    <span style="color: red" class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-xl-4 col-sm-6">
                                            <div class="form-group">
                                                <label>پست</label>

                                                <select wire:model.defer="userPost" class="form-control">
                                                    <option value="">انتخاب کنید</option>
                                                    @foreach ($posts as $pid => $postName)
                                                        <option value="{{ $pid }}" @selected($selectedUser->post_id == $pid )>
                                                            {{ $postName }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('post')
                                                    <span style="color: red" class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="input-group mb-4">
                                                <div class="dropzone col-8" id="sign-dropzone" data-toggle="tooltip"
                                                    title="اندازه بهینه تصویر کمتر از 35 کیلوبایت است">
                                                </div>
                                            </div>
                                        </div>

                                        {{-- previous user sign image
                                        <div class="col-xl-4 col-sm-6">
                                            <img style="border: 1px solid #ddd;
                                            border-radius: 4px;
                                            padding: 5px;
                                            width: 300px;
                                            height:150px;"  src="{{ $userSign }}">
                                        </div>
                                    </div>
                                @endif

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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
