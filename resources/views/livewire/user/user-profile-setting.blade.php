<div>
    <!-- row -->
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

                                {{-- ============================================================================================ --}}
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
                                {{-- ============================================================================================ --}}

                                {{-- @dd($branches) --}}


                                {{-- if the user is admin and selects to edit a user, this part will show also --}}
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

                                                    @foreach ($branches as $bid=>$branchName)
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

                                                    @foreach ($units as $uid=>$unitName)
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
                                                    @foreach ($posts as $pid=>$postName)
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
                                        <div class="form-group col-md-4">
                                            <div class="input-group mb-4">
                                                <div class="dropzone col-8" id="sign-dropzone" data-toggle="tooltip"
                                                    title="اندازه بهینه تصویر کمتر از 35 کیلوبایت است">
                                                </div>
                                            </div>
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



        {{-- profile left section starts --}}
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
        {{-- profile left section ends --}}

    </div>
</div>
