@section('contents')
    <!-- Sales -->
    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-4">
        <div class="card h-100">
            <div class="card-header d-flex align-items-start justify-content-between">
                <div class="card-title mb-0">
                    <h5 class="m-0 me-2 mb-1">فروش‌ها</h5>
                    <small class="card-subtitle text-muted">محاسبه شده در 7 روز اخیر</small>
                </div>
                <div class="dropdown primary-font">
                    <button class="btn p-0" type="button" id="salesReport" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesReport">
                        <a class="dropdown-item" href="javascript:void(0);">انتخاب همه</a>
                        <a class="dropdown-item" href="javascript:void(0);">تازه سازی</a>
                        <a class="dropdown-item" href="javascript:void(0);">اشتراک گذاری</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="salesChart" class="mt-2"></div>
                <ul class="p-0 m-0">
                    <li class="d-flex mb-3">
                        <span class="text-primary me-2"><i class="bx bx-up-arrow-alt bx-sm"></i></span>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">بیشترین فروش</h6>
                                <small class="text-muted">شنبه</small>
                            </div>
                            <div class="item-progress">28.6k</div>
                        </div>
                    </li>
                    <li class="d-flex">
                        <span class="text-secondary me-2"><i class="bx bx-down-arrow-alt bx-sm"></i></span>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">کمترین فروش</h6>
                                <small class="text-muted">پنجشنبه</small>
                            </div>
                            <div class="item-progress">7.9k</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--/ Sales -->

    <!-- Growth Chart-->
    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <div class="dropdown mb-4 mt-2">
                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                        id="dropdownMenuButtonSec" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        1401
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButtonSec">
                        <a class="dropdown-item" href="javascript:void(0);">1399</a>
                        <a class="dropdown-item" href="javascript:void(0);">1400</a>
                        <a class="dropdown-item" href="javascript:void(0);">1401</a>
                    </div>
                </div>
                <div id="growthRadialChart" class="mb-2"></div>
                <h6 class="mb-0 mt-2 pt-1">62% رشد در سال 1401</h6>
            </div>
        </div>
    </div>
    <!-- Growth Chart-->


    this is user dash
@endsection
