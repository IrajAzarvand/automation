<div class="col-xl-12 col-xxl-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">افزودن کاربر سیستم</h4>
        </div>
        <div class="card-body">
                <form wire:submit.prevent="addNewUser" method="POST">
                    @csrf
                    <h4 class="card-title">مشخصات فردی</h4>

                    <div class="row">
                        <div class="col-md-6 col-12 mb-4">
                            <input type="text" class="form-control" value="{{ old('fName') }}" placeholder="نام">
                            @error('fName')
                                <span style="color: red" class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 col-12 mb-4">
                            <input type="text" wire:model.defer="lName" class="form-control"
                                value="{{ old('lName') }}" placeholder="نام خانوادگی">
                            @error('lName')
                                <span style="color: red" class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 col-12 mb-4">
                            <input type="number" wire:model.defer="mobile" class="form-control"
                                placeholder="شماره موبایل" value="{{ old('mobile') }}">
                            @error('mobile')
                                <span style="color: red" class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 col-12 mb-4">
                            <input type="number" wire:model.defer="telegram" class="form-control"
                                placeholder="شماره تلگرام" value="{{ old('telegram') }}">
                            @error('telegram')
                                <span style="color: red" class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 col-12 mb-4">
                            <input type="number" wire:model.defer="whatsapp" class="form-control"
                                placeholder="شماره واتساپ" value="{{ old('whatsapp') }}">
                            @error('whatsapp')
                                <span style="color: red" class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 col-12 mb-4">
                            <input type="email" wire:model.defer="email" class="form-control" placeholder="ایمیل"
                                value="{{ old('email') }}">
                            @error('email')
                                <span style="color: red" class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 col-12 mb-4">
                            <input type="text" wire:model.defer="birthDate" data-jdp data-jdp-birth-date
                                data-jdp-max-date="today" class="form-control" placeholder="تاریخ تولد"
                                value="{{ old('birthDate') }}">
                            @error('birthDate')
                                <span style="color: red" class="error">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="col-md-6 col-12 mb-4">
                            <small class="text-light fw-semibold d-block">جنسیت</small>
                            <div class="form-check form-check-inline ">
                                <input @if (Auth::user()->post_id != 1) disabled @endif wire:model="gender"
                                       class="form-check-input" type="radio" name="usergender" id="genderRadio1"
                                       value="1">
                                <label class="form-check-label" for="genderRadio1">مرد</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input @if (Auth::user()->post_id != 1) disabled @endif wire:model.defer="gender"
                                       class="form-check-input" type="radio" name="usergender" id="genderRadio2"
                                       value="0">
                                <label class="form-check-label" for="genderRadio2">زن</label>
                            </div>
                        </div>

                    </div>

                    {{-- ====================================================================== --}}
                    {{-- ====================================================================== --}}

                    <hr>

                    <h4 class="card-title">مشخصات پرسنلی</h4>

                    <div class="row">
                        <div class="col-md-6 col-12 mb-4">
                            <input type="number" wire:model.defer="personnelCode" class="form-control"
                                placeholder="کد پرسنلی" value="{{ old('personnelCode') }}">
                            @error('personnelCode')
                                <span style="color: red" class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb-4">
                            <input type="number" wire:model.defer="localNumber" class="form-control"
                                placeholder="تلفن داخلی" value="{{ old('localNumber') }}">
                            @error('localNumber')
                                <span style="color: red" class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- branch -->
                        <div class="col-md-6 col-12 mb-4">
                            <label for="branch" class="form-label">شعبه</label>
                            <select wire:model.defer="userBranch" id="branch"
                                class="select2 form-select form-select-lg" data-allow-clear="true">
                                <option value="">انتخاب کنید</option>
                                @foreach ($branches as $bid => $branchName)
                                    <option value="{{ $bid }}">{{ $branchName }}</option>
                                @endforeach
                            </select>
                            @error('branch')
                                <span style="color: red" class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- unit -->
                        <div class="col-md-6 col-12 mb-4">
                            <label for="unit" class="form-label">واحد</label>
                            <select wire:model.defer="userUnit" id="unit"
                                class="select2 form-select form-select-lg" data-allow-clear="true">
                                <option value="">انتخاب کنید</option>
                                @foreach ($units as $uid => $unitName)
                                    <option value="{{ $uid }}">
                                        {{ $unitName }}
                                    </option>
                                @endforeach
                            </select>
                            @error('unit')
                                <span style="color: red" class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- post -->
                        <div class="col-md-6 col-12 mb-4">
                            <label for="post" class="form-label">سمت</label>
                            <select wire:model.defer="userPost" id="post"
                                class="select2 form-select form-select-lg" data-allow-clear="true">
                                <option value="">انتخاب کنید</option>
                                @foreach ($posts as $pid => $postName)
                                    <option value="{{ $pid }}">
                                        {{ $postName }}
                                    </option>
                                @endforeach
                            </select>
                            @error('post')
                                <span style="color: red" class="error">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>


                    <div class="row">
                        <div class="form-group col-md-4">
                            <div class="input-group mb-4">
                                <div class="dropzone col-8" id="sign-dropzone" data-toggle="tooltip"
                                    title="اندازه بهینه تصویر کمتر از 35 کیلوبایت است"></div>
                            </div>
                        </div>
                    </div>

                    <div class="d-sm-flex d-block">
                        <button type="submit" class="mb-2 btn btn-primary btn-rounded float-right ">ذخیره </button>
                    </div>

            </form>
        </div>
    </div>
</div>
