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
                        <th>نام</th>
                        <th>رشته تحصیلی</th>
                        <th>جنسیت</th>
                        <th>تحصیلات</th>
                        <th>شماره همراه</th>
                        <th>ایمیل</th>
                        <th>تاریخ ورود</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img class="rounded-circle" width="35"
                                src="{{ asset('DashboardElements/images/profile/small/pic1.jpg') }}" alt=""></td>
                        <td>1111</td>
                        <td>معمار</td>
                        <td>مرد</td>
                        <td>کارشناسی</td>
                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                        <td>1399/08/14</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                        class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                        <td>22222</td>
                        <td>برنامه نویس</td>
                        <td>زن</td>
                        <td>کارشناسی ارشد</td>
                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                        <td>1399/09/14</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                        class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                        <td>ناصر محمدی</td>
                        <td>معمار</td>
                        <td>مرد</td>
                        <td>کارشناسی</td>
                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                        <td>1399/08/14</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                        class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
                        <td>ناصر محمدی</td>
                        <td>معمار</td>
                        <td>مرد</td>
                        <td>کارشناسی</td>
                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                        <td>1399/08/14</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                        class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                        <td>ناصر محمدی</td>
                        <td>معمار</td>
                        <td>مرد</td>
                        <td>کارشناسی</td>
                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                        <td>1399/08/14</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                        class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="rounded-circle" width="35"
                                src="{{ asset('DashboardElements/images/profile/small/pic1.jpg') }}" alt=""></td>
                        <td>ناصر محمدی</td>
                        <td>معمار</td>
                        <td>مرد</td>
                        <td>کارشناسی</td>
                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                        <td>1399/08/14</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                        class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                        <td>نرگس سعادت</td>
                        <td>برنامه نویس</td>
                        <td>زن</td>
                        <td>کارشناسی ارشد</td>
                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                        <td>1399/09/14</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                        class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                        <td>ناصر محمدی</td>
                        <td>معمار</td>
                        <td>مرد</td>
                        <td>کارشناسی</td>
                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                        <td>1399/08/14</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                        class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
                        <td>9999</td>
                        <td>معمار</td>
                        <td>مرد</td>
                        <td>کارشناسی</td>
                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                        <td>1399/08/14</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                        class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                        <td>101010</td>
                        <td>معمار</td>
                        <td>مرد</td>
                        <td>کارشناسی</td>
                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                        <td>1399/08/14</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                        class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="rounded-circle" width="35"
                                src="{{ asset('DashboardElements/images/profile/small/pic1.jpg') }}" alt=""></td>
                        <td>11 11 11</td>
                        <td>معمار</td>
                        <td>مرد</td>
                        <td>کارشناسی</td>
                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                        <td>1399/08/14</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                        class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                        <td>12 12 12</td>
                        <td>برنامه نویس</td>
                        <td>زن</td>
                        <td>کارشناسی ارشد</td>
                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                        <td>1399/09/14</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                        class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                        <td>ناصر محمدی</td>
                        <td>معمار</td>
                        <td>مرد</td>
                        <td>کارشناسی</td>
                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                        <td>1399/08/14</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                        class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
                        <td>ناصر محمدی</td>
                        <td>معمار</td>
                        <td>مرد</td>
                        <td>کارشناسی</td>
                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                        <td>1399/08/14</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                        class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                        <td>ناصر محمدی</td>
                        <td>معمار</td>
                        <td>مرد</td>
                        <td>کارشناسی</td>
                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                        <td>1399/08/14</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                        class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="rounded-circle" width="35"
                                src="{{ asset('DashboardElements/images/profile/small/pic1.jpg') }}" alt=""></td>
                        <td>ناصر محمدی</td>
                        <td>معمار</td>
                        <td>مرد</td>
                        <td>کارشناسی</td>
                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                        <td>1399/08/14</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                        class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                        <td>نرگس سعادت</td>
                        <td>برنامه نویس</td>
                        <td>زن</td>
                        <td>کارشناسی ارشد</td>
                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                        <td>1399/09/14</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                        class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                        <td>ناصر محمدی</td>
                        <td>معمار</td>
                        <td>مرد</td>
                        <td>کارشناسی</td>
                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                        <td>1399/08/14</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                        class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
                        <td>ناصر محمدی</td>
                        <td>معمار</td>
                        <td>مرد</td>
                        <td>کارشناسی</td>
                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                        <td>1399/08/14</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                        class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                        <td>ناصر محمدی</td>
                        <td>معمار</td>
                        <td>مرد</td>
                        <td>کارشناسی</td>
                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                        <td>1399/08/14</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                        class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- ========================================================================================== --}}
{{-- ========================================================================================== --}}
{{-- ========================================================================================== --}}
