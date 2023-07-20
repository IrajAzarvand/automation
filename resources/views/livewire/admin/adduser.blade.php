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
                        <input type="text" wire:model.defer="fName" class="form-control" value="{{ old('fName') }}"
                            placeholder="نام" required>
                        @error('fName')
                        <span style="color: red" class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6 col-12 mb-4">
                        <input type="text" wire:model.defer="lName" class="form-control" value="{{ old('lName') }}"
                            placeholder="نام خانوادگی" required>
                        @error('lName')
                        <span style="color: red" class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6 col-12 mb-4">
                        <input type="number" wire:model.defer="mobile" class="form-control" placeholder="شماره موبایل"
                            value="{{ old('mobile') }}" required>
                        @error('mobile')
                        <span style="color: red" class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6 col-12 mb-4">
                        <input type="number" wire:model.defer="telegram" class="form-control" placeholder="شماره تلگرام"
                            value="{{ old('telegram') }}">
                        @error('telegram')
                        <span style="color: red" class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6 col-12 mb-4">
                        <input type="number" wire:model.defer="whatsapp" class="form-control" placeholder="شماره واتساپ"
                            value="{{ old('whatsapp') }}">
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
                            value="{{ old('birthDate') }}" required>
                        @error('birthDate')
                        <span style="color: red" class="error">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="col-md-6 col-12 mb-4">
                        <small class="text-light fw-semibold d-block">جنسیت</small>
                        <div class="form-check form-check-inline ">
                            <input @if (Auth::user()->post_id != 1) disabled @endif wire:model.defer="gender"
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
                            placeholder="کد پرسنلی" value="{{ old('personnelCode') }}" required>
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
                        <label for="br" class="form-label">شعبه<span style="color: red">*</span></label>
                        <select wire:model.defer="userBranch" class="form-select" id="br">
                            <option value="">انتخاب</option>
                            @foreach ($branches as $bid => $branchName)
                            <option @selected($userBranch==$bid) value="{{ $bid }}">{{ $branchName }}</option>
                            @endforeach
                        </select>
                        @error('userBranch')
                        <span style="color: red" class="error">{{ $message }}</span>
                        @enderror
                    </div>


                    <!-- unit -->
                    <div class="col-md-6 col-12 mb-4">
                        <label for="un" class="form-label">واحد<span style="color: red">*</span></label>
                        <select wire:model.defer="userUnit" class="form-select" id="un">
                            <option value="">انتخاب</option>
                            @foreach ($units as $uid => $unitName)
                            <option value="{{ $uid }}">
                                {{ $unitName }}
                            </option>
                            @endforeach
                        </select>
                        @error('userUnit')
                        <span style="color: red" class="error">{{ $message }}</span>
                        @enderror
                    </div>


                    <!-- post -->
                    <div class="col-md-6 col-12 mb-4">
                        <label for="po" class="form-label">سمت<span style="color: red">*</span></label>
                        <select wire:model.defer="userPost" class="form-select" id="po">
                            <option value="">انتخاب</option>
                            @foreach ($posts as $pid => $postName)
                            <option value="{{ $pid }}">
                                {{ $postName }}
                            </option>
                            @endforeach
                        </select>
                        @error('userPost')
                        <span style="color: red" class="error">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                {{-- .row --}}


                <div class="row">
                    <div class="form-group col-md-4">
                        <div class="input-group mb-4">
                            <div class="dropzone col-8" id="sign-dropzone" data-toggle="tooltip"
                                title="اندازه بهینه تصویر کمتر از 35 کیلوبایت است">
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
