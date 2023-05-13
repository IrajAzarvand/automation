

    <div class="col-xl-12 col-xxl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">افزودن کاربر سیستم</h4>
            </div>
            <div class="card-body">
                <div>
                    <form wire:submit.prevent="addNewUser" method="POST">
                        @csrf
                        <h4 class="card-title">مشخصات فردی</h4>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <input type="text" wire:model.defer="fName" class="form-control input-rounded"
                                    placeholder="نام" value="{{ old('fName') }}">
                                @error('fName')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="form-group col-md-4">
                                <input type="text" wire:model.defer="lName" class="form-control input-rounded"
                                    placeholder="نام خانوادگی" value="{{ old('lName') }}">
                                @error('lName')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" wire:model.defer="mobile" class="form-control input-rounded"
                                    placeholder="شماره موبایل" value="{{ old('mobile') }}">
                                @error('mobile')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" wire:model.defer="telegram" class="form-control input-rounded"
                                    placeholder="شماره تلگرام" value="{{ old('telegram') }}">
                                @error('telegram')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" wire:model.defer="whatsapp" class="form-control input-rounded"
                                    placeholder="شماره واتساپ" value="{{ old('whatsapp') }}">
                                @error('whatsapp')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" wire:model.defer="email" class="form-control input-rounded"
                                    placeholder="ایمیل" value="{{ old('email') }}">
                                @error('email')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>




                            <div class="form-group col-md-4">
                                {{-- <input data-jdp data-jdp-min-date="today" name="datepicker" class="form-control input-rounded"
                                    id="datepicker-default" placeholder="تاریخ تولد"> --}}

                                <input type="text" wire:model.defer="birthDate" data-jdp data-jdp-birth-date
                                    data-jdp-max-date="today" class="form-control input-rounded"
                                    placeholder="تاریخ تولد" value="{{ old('birthDate') }}">
                                @error('birthDate')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        {{-- ====================================================================== --}}
                        {{-- ====================================================================== --}}
                        <hr>
                        <h4 class="card-title">مشخصات پرسنلی</h4>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <input type="text" wire:model.defer="personnelCode"
                                    class="form-control input-rounded" placeholder="کد پرسنلی"
                                    value="{{ old('personnelCode') }}">
                                @error('personnelCode')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror

                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" wire:model.defer="localNumber"
                                    class="form-control input-rounded" placeholder="تلفن داخلی"
                                    value="{{ old('localNumber') }}">
                                @error('localNumber')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">شعبه</label>
                                    </div>
                                    <select wire:model.defer="branch" class="default-select">
                                        <option selected>انتخاب</option>
                                        @foreach ($branches as $branch)
                                            {{-- <option value="{{ $branch->id }}">{{ $branch->branchName }}</option> --}}

                                            <option value="{{ $branch->id }}" @selected(old('branch') == $branch)>
                                                {{ $branch->branchName }}
                                            </option>

                                        @endforeach
                                    </select>
                                </div>
                                @error('branch')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">واحد</label>
                                    </div>
                                    <select wire:model.defer="unit" class="default-select">
                                        <option selected>انتخاب</option>
                                        @foreach ($units as $unit)
                                            {{-- <option value="{{ $unit->id }}">{{ $unit->unitName }}</option> --}}


                                            <option value="{{  $unit->id }}" @selected(old('unitName') == $branch)>
                                                {{ $unit->unitName }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('unit')
                                        <span style="color: red" class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group col-md-4">

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">سمت</label>
                                    </div>
                                    <select wire:model.defer="post" class="default-select">
                                        <option selected>انتخاب</option>
                                        @foreach ($posts as $post)
                                            {{-- <option value="{{ $post->id }}">{{ $post->postName }}</option> --}}

                                            <option value="{{  $post->id }}" @selected(old('postName') == $branch)>
                                                {{ $post->postName }}
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
                                        title="اندازه بهینه تصویر کمتر از 35 کیلوبایت است"></div>
                                </div>
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

