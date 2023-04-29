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
                    <form>
                        <h4 class="card-title">مشخصات فردی</h4>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control input-rounded" placeholder="نام">
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" class="form-control input-rounded" placeholder="نام خانوادگی">
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" class="form-control input-rounded" placeholder="شماره موبایل">
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" class="form-control input-rounded" placeholder="شماره تلگرام">
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" class="form-control input-rounded" placeholder="شماره واتساپ">
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" class="form-control input-rounded" placeholder="ایمیل">
                            </div>

                        </div>
                        {{-- ====================================================================== --}}
                        {{-- ====================================================================== --}}
                        <hr>
                        <h4 class="card-title">مشخصات پرسنلی</h4>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control input-rounded" placeholder="کد پرسنلی">
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" class="form-control input-rounded" placeholder="تلفن داخلی">
                            </div>

                            <div class="form-group col-md-4">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">شعبه</label>
                                    </div>
                                    <select class="default-select">
                                        <option selected>انتخاب</option>
                                        <option value="1">آبی</option>
                                        <option value="2">سبز</option>
                                        <option value="3">مشکی</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group col-md-4">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">واحد</label>
                                    </div>
                                    <select class="default-select">
                                        <option selected>انتخاب</option>
                                        <option value="1">آبی</option>
                                        <option value="2">سبز</option>
                                        <option value="3">مشکی</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-4">

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">سمت</label>
                                    </div>
                                    <select class="default-select">
                                        <option selected>انتخاب</option>
                                        <option value="1">آبی</option>
                                        <option value="2">سبز</option>
                                        <option value="3">مشکی</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group col-md-4">
                                <div class="input-group">
                                    <div action="#" class="dropzone" id="userSignUploader"></div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
