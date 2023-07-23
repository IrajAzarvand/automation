<div class="col-xl-12 col-xxl-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">مدیریت شعب، واحدها، پست ها</h4>

        </div>
        <div class="card-body">

            <h4 class="card-title">شعبه</h4>

            <div class="row">
                <!-- branch -->

                <div class="col-md-4 col-12 mb-4">
                    <input type="text" wire:model="newBranch" class="form-control" value="{{ old('newBranch') }}"
                        placeholder="نام شعبه جدید">
                    @error('NewBranch')
                    <span style="color: red" class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-4 col-12 mb-4">
                    <select wire:model="selectedBranch" class="form-select">
                        <option value="">انتخاب</option>
                        @foreach ($branches as $bid => $branchName)
                        <option value="{{ $bid }}">{{ $branchName }}</option>
                        @endforeach
                    </select>

                </div>



                <div class="col-md-2 col-12 mb-4 ml-9 ">
                    @if ($newBranch)

                    <button wire:click="branchEditSave" type="button" class="btn rounded-pill btn-primary">{{
                        $selectedBranch?
                        'بروزرسانی' : 'ذخیره' }}</button>

                    @endif

                </div>
                <div class="col-md-2 col-12 mb-4 ml-9">

                    @if ($selectedBranch)

                    <button wire:click="branchRemove" type="button" class="btn rounded-pill btn-danger">حذف</button>

                    @endif

                </div>

            </div>

            <!-- ./branch -->
            <hr>


            <!-- unit -->
            <h4 class="card-title">واحد</h4>

            <div class="row">

                <div class="col-md-4 col-12 mb-4">
                    <input type="text" wire:model="newUnit" class="form-control" value="{{ old('newUnit') }}"
                        placeholder="نام واحد جدید">
                    @error('NewUnit')
                    <span style="color: red" class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-4 col-12 mb-4">
                    <select wire:model="selectedUnit" class="form-select">
                        <option value="">انتخاب</option>
                        @foreach ($units as $uid => $unitName)
                        <option value="{{ $uid }}">{{ $unitName }}</option>
                        @endforeach
                    </select>

                </div>



                <div class="col-md-2 col-12 mb-4 ml-9 ">
                    @if ($newUnit)

                    <button wire:click="unitEditSave" type="button" class="btn rounded-pill btn-primary">{{
                        $selectedUnit?
                        'بروزرسانی' : 'ذخیره' }}</button>

                    @endif

                </div>
                <div class="col-md-2 col-12 mb-4 ml-9">

                    @if ($selectedUnit)

                    <button wire:click="unitRemove" type="button" class="btn rounded-pill btn-danger">حذف</button>

                    @endif

                </div>

            </div>
            <!-- ./unit -->
            <hr>

            <!-- post -->
            <h4 class="card-title">پست</h4>

            <div class="row">


                <div class="col-md-4 col-12 mb-4">
                    <input type="text" wire:model="newPost" class="form-control" value="{{ old('newPost') }}"
                        placeholder="نام پست جدید">
                    @error('newPost')
                    <span style="color: red" class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-4 col-12 mb-4">
                    <select wire:model="selectedPost" class="form-select">
                        <option value="">انتخاب</option>
                        @foreach ($posts as $pid => $postName)
                        <option value="{{ $pid }}">{{ $postName }}</option>
                        @endforeach
                    </select>

                </div>



                <div class="col-md-2 col-12 mb-4 ml-9 ">
                    @if ($newPost)

                    <button wire:click="postEditSave" type="button" class="btn rounded-pill btn-primary">{{
                        $selectedPost?
                        'بروزرسانی' : 'ذخیره' }}</button>

                    @endif

                </div>
                <div class="col-md-2 col-12 mb-4 ml-9">

                    @if ($selectedPost)

                    <button wire:click="postRemove" type="button" class="btn rounded-pill btn-danger">حذف</button>

                    @endif

                </div>

            </div>
            <!-- ./post -->









            {{--

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
                <input type="text" wire:model.defer="birthDate" data-jdp data-jdp-birth-date data-jdp-max-date="today"
                    class="form-control" placeholder="تاریخ تولد" value="{{ old('birthDate') }}">
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

        </div> --}}

        {{-- ====================================================================== --}}
        {{-- ====================================================================== --}}


        {{-- <h4 class="card-title">مشخصات پرسنلی</h4> --}}

        {{-- <div class="row">
            <div class="col-md-6 col-12 mb-4">
                <input type="number" wire:model.defer="personnelCode" class="form-control" placeholder="کد پرسنلی"
                    value="{{ old('personnelCode') }}" required>
                @error('personnelCode')
                <span style="color: red" class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6 col-12 mb-4">
                <input type="number" wire:model.defer="localNumber" class="form-control" placeholder="تلفن داخلی"
                    value="{{ old('localNumber') }}">
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

        </div> --}}
        {{-- .row --}}


        {{-- <div class="row">
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
        </div> --}}
    </div>
</div>
</div>

{{--
<div class="col-xl-12 col-xxl-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">مدیریت شعب، واحدها، پست ها</h4>
        </div>
        <div class="card-body">
            <div>


                <h4 class="card-title">شعبه</h4>
                <div class="form-row">
                    <div class="col-md-6 col-12 mb-4">
                        <input type="text" wire:model="newBranch" class="form-control input-rounded"
                            placeholder="نام شعبه جدید را وارد کنید">
                        @error('newBranch')
                        <span style="color: red" class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- branch -->
                    <div class="col-md-6 col-12 mb-4">
                        <select wire:model.defer="selectedBranch" class="form-select">
                            <option value="">انتخاب کنید</option>
                            @foreach ($branches as $bid => $branchName)
                            <option value="{{ $bid }}">{{ $branchName }}</option>
                            @endforeach
                        </select>
                        @error('newBranch')
                        <span style="color: red" class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- <div class="form-group col-md-4">
                        <select wire:model="selectedBranch" class="form-control default-select form-control-lg">
                            <option value="0">انتخاب کنید</option>
                            @foreach ($branches as $bid => $branch)
                            <option value="{{ $bid }}">{{ $branch }}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    {{-- <div class="">
                        <div class="d-sm-flex d-block">
                            @if ($newBranch)

                            <button wire:click="branchEditSave" class="btn-sm btn-primary btn-rounded ">{{
                                $selectedBranch? 'بروزرسانی' : 'ذخیره' }}
                            </button>
                            @endif
                            @if ($selectedBranch)
                            <button wire:click="branchRemove" type="submit"
                                class="btn-sm ml-3 btn-danger btn-rounded ">حذف
                            </button>
                            @endif
                        </div>
                    </div>

                </div>

                <hr> --}}
                {{-- ====================================================================== --}}


                {{-- <h4 class="card-title">واحد</h4>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" wire:model="newUnit" class="form-control input-rounded"
                            placeholder="نام واحد جدید را وارد کنید">
                        @error('newUnit')
                        <span style="color: red" class="error">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="form-group col-md-4">
                        <select wire:model="selectedUnit" class="form-control default-select form-control-lg">
                            <option value="0">انتخاب کنید</option>
                            @foreach ($units as $uid => $unit)
                            <option value="{{ $uid }}">{{ $unit }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex-wrap pb-0 border-0">
                        <div class="d-sm-flex d-block">

                            @if ($newUnit)
                            <button wire:click="unitEditSave" class="btn-sm btn-primary btn-rounded ">{{ $selectedUnit?
                                'بروزرسانی' : 'ذخیره' }} </button>
                            @endif
                            @if ($selectedUnit)
                            <button wire:click="unitRemove" type="submit"
                                class="btn-sm ml-3 btn-danger btn-rounded ">حذف
                            </button>
                            @endif


                        </div>
                    </div>

                </div>
                <hr> --}}
                {{-- ====================================================================== --}}


                {{-- <h4 class="card-title">پست</h4>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" wire:model="newPost" class="form-control input-rounded"
                            placeholder="نام پست جدید را وارد کنید">
                        @error('newPost')
                        <span style="color: red" class="error">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="form-group col-md-4">
                        <select wire:model="selectedPost" class="form-control default-select form-control-lg">
                            <option value="0">انتخاب کنید</option>
                            @foreach ($posts as $pid => $post)
                            <option value="{{ $pid }}">{{ $post }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex-wrap pb-0 border-0">
                        <div class="d-sm-flex d-block">
                            @if ($newPost)
                            <button wire:click="postEditSave" class="btn-sm btn-primary btn-rounded ">{{ $selectedPost?
                                'بروزرسانی' : 'ذخیره' }} </button>
                            @endif
                            @if ($selectedPost)
                            <button wire:click="postRemove" type="submit"
                                class="btn-sm ml-3 btn-danger btn-rounded ">حذف
                            </button>
                            @endif
                        </div>
                    </div>

                </div> --}}

                {{-- ====================================================================== --}}


                {{--
            </div>




        </div>
    </div>
</div> --}}