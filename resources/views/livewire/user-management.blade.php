<div class="row">

    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-primary">
            <div class="card-body  p-4">
                <div class="media">
                    <span class="mr-3">
                        <i class="la la-users"></i>
                    </span>
                    <div class="media-body text-white">
                        <p class="mb-1">تعداد کل کاربران</p>
                        <h3 class="text-white">{{ count($this->allSystemUsers) }}</h3>
                        <div class="progress mb-2 bg-secondary">
                            <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-secondary">
            <div class="card-body p-4">
                <div class="media">
                    <span class="mr-3">
                        <i class="la la-graduation-cap"></i>
                    </span>
                    <div class="media-body text-white">
                        <p class="mb-1">کاربران فعال</p>
                        <h3 class="text-white">28</h3>
                        <div class="progress mb-2 bg-primary">
                            <div class="progress-bar progress-animated bg-light" style="width: 76%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-warning">
            <div class="card-body p-4">
                <div class="media">
                    <span class="mr-3">
                        <i class="la la-user"></i>
                    </span>
                    <div class="media-body text-white">
                        <p class="mb-1">کاربران غیرفعال</p>
                        <h3 class="text-white">245</h3>
                        <div class="progress mb-2 bg-primary">
                            <div class="progress-bar progress-animated bg-light" style="width: 50%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-success ">
            <div class="card-body p-4">
                <div class="media">
                    <span class="mr-3">
                        <i class="la la-dollar"></i>
                    </span>
                    <div class="media-body text-white">
                        <p class="mb-1">کاربران آنلاین</p>
                        <h3 class="text-white">3</h3>
                        <div class="progress mb-2 bg-secondary">
                            <div class="progress-bar progress-animated bg-light" style="width: 30%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">لیست کاربران سیستم</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>

                                <th><strong>کد پرسنلی</strong></th>
                                <th><strong>نام</strong></th>
                                <th><strong>شعبه</strong></th>
                                <th><strong>واحد</strong></th>
                                <th><strong>سمت</strong></th>
                                <th><strong>وضعیت</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allSystemUsers as $user)
                                <tr>

                                    <td><strong>{{ $user->personnelCode }}</strong></td>

                                    <td>
                                        <div class="d-flex align-items-center"><img
                                                src="{{ asset('storage/Data/' . $user->id . '/profile/profile.jpg') }}"
                                                class="rounded-lg mr-2" width="24" alt="" /> <span
                                                class="w-space-no">{{ $user->fName . ' ' . $user->lName }}</span>
                                        </div>
                                    </td>
                                    <td>{{ $user->branch->branchName }}</td>
                                    <td>{{ $user->unit->unitName }}</td>
                                    <td>
                                        <div class="d-flex align-items-center"><span>{{ $user->post->postName }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center"><i
                                                class="fa fa-circle text-success mr-1"></i> آنلاین
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                    class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                    class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    {{-- add user --}}

    <!-- row -->
    <div class="col-xl-12 col-xxl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">افزودن کاربر سیستم</h4>
            </div>
            <div class="card-body">
                <div>
                    <form wire:submit.prevent="addNewUser" action="#" method="POST">
                        @csrf
                        <h4 class="card-title">مشخصات فردی</h4>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <input type="text" wire:model="fName" class="form-control input-rounded"
                                    placeholder="نام">
                                @error('fName')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="form-group col-md-4">
                                <input type="text" wire:model="lName" class="form-control input-rounded"
                                    placeholder="نام خانوادگی">
                                @error('lName')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" wire:model="mobile" class="form-control input-rounded"
                                    placeholder="شماره موبایل">
                                @error('mobile')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" wire:model="telegram" class="form-control input-rounded"
                                    placeholder="شماره تلگرام">
                                @error('telegram')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" wire:model="whatsapp" class="form-control input-rounded"
                                    placeholder="شماره واتساپ">
                                @error('whatsapp')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" wire:model="email" class="form-control input-rounded"
                                    placeholder="ایمیل">
                                @error('email')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="form-group col-md-4">
                                        <!-- Date range -->
                                        <div class="form-group">
                                            <label>تاریخ تولد:</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                </div>
                                                <input class="normal-example form-control" />
                                            </div>
                                            <!-- /.input group -->
                                        </div>

                            </div>

                        </div>
                        {{-- ====================================================================== --}}
                        {{-- ====================================================================== --}}
                        <hr>
                        <h4 class="card-title">مشخصات پرسنلی</h4>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <input type="text" wire:model="personnelCode" class="form-control input-rounded"
                                    placeholder="کد پرسنلی">
                                @error('personnelCode')
                                    <span style="color: red" class="error">{{ $message }}</span>
                                @enderror

                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" wire:model="localNumber" class="form-control input-rounded"
                                    placeholder="تلفن داخلی">
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
                                            <option value="{{ $branch->id }}">{{ $branch->branchName }}</option>
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
                                            <option value="{{ $unit->id }}">{{ $unit->unitName }}</option>
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
                                            <option value="{{ $post->id }}">{{ $post->postName }}</option>
                                        @endforeach
                                    </select>
                                    @error('post')
                                        <span style="color: red" class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group col-md-4">

                                <div class="input-group mb-4">
                                    <div class="dropzone" id="sign-dropzone"></div>
                                </div>
                            </div>

                        </div>


                        <div class="d-sm-flex d-block">
                            <button type="submit" class="mb-2 btn btn-primary btn-rounded ">ذخیره </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>
