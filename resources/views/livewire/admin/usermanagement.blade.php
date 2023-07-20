{{-- ========================== system users ======================== --}}


<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="secondary-font fw-medium">کل کاربران</span>
                            <div class="d-flex align-items-baseline mt-2">
                                <h4 class="mb-0 me-2">{{ count($allSystemUsers) }}</h4>
                            </div>
                        </div>
                        <span class="badge bg-label-primary rounded p-2">
                            <i class="bx bxs-user-detail bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="secondary-font fw-medium">کاربران فعال</span>
                            <div class="d-flex align-items-baseline mt-2">
                                <h4 class="mb-0 me-2">{{ count($allSystemUsers) }}</h4>
                            </div>
                        </div>
                        <span class="badge bg-label-success rounded p-2">
                            <i class="bx bx-group bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="secondary-font fw-medium">کاربران آنلاین</span>
                            <div class="d-flex align-items-baseline mt-2">
                                <h4 class="mb-0 me-2">{{ count($allSystemUsers) }}</h4>
                            </div>
                        </div>
                        <span class="badge bg-label-success rounded p-2">
                            <i class='bx bxs-user-circle'></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="secondary-font fw-medium">کاربران آفلاین</span>
                            <div class="d-flex align-items-baseline mt-2">
                                <h4 class="mb-0 me-2">{{ count($allSystemUsers) }}</h4>
                            </div>
                        </div>
                        <span class="badge bg-label-gray rounded p-2">
                            <i class='bx bxs-user-circle'></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<div class="card">
    <div class="card-header">
        <h4 class="card-title">جدول کاربران</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example3" class="display table-responsive-lg ">
                <thead>
                    <tr>
                        <th></th>
                        <th>کد پرسنلی</th>
                        <th>نام و نام خانوادگی</th>
                        <th>شماره همراه</th>
                        <th>شعبه</th>
                        <th>واحد</th>
                        <th>سمت</th>
                        <th>وضعیت</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allSystemUsers as $user)
                    <tr>
                        <td><img class="rounded-circle" width="35"
                                src="{{ asset('DashboardElements/images/profile/small/pic1.jpg') }}" alt=""></td>
                        <td>{{ $user->personnelCode }}</td>
                        <td>{{ $user->fName .' '.$user->lName }}</td>
                        <td>{{ $user->mobileNumber }}</td>
                        <td>{{ $user->branchName }}</td>
                        <td>{{ $user->unitName }}</td>
                        <td>{{ $user->postName }}</td>
                        <td>@if($user->status) <span class="badge bg-label-success rounded p-2">
                                <i class='bx bxs-user-circle'></i>
                            </span>
                            @else <span class="badge bg-label-gray rounded p-2">
                                <i class='bx bxs-user-circle'></i>
                            </span>
                            @endif
                        </td>
                        {{-- <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary badge rounded p-2"><i
                                        class="bx bxs-edit-alt"></i></a>
                                <a href="#" class="btn btn-danger badge rounded p-2"><i class="bx bxs-trash"></i></a>

                            </div>

                        </td> --}}

                        <td>
                            <span>
                                <a href="" class="btn btn-primary badge rounded p-2"><i class="bx bxs-edit-alt"></i>
                                </a>

                                <a href="" class=" btn btn-danger badge rounded p-2"><i class="bx bxs-trash"></i></a>
                            </span>
                        </td>
                    </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- ========================================================================================== --}}
{{-- ========================================================================================== --}}
{{-- ========================================================================================== --}}
