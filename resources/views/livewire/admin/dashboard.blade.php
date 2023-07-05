@section('contents')
    <!-- Website Analytics-->
    <div class="col-lg-6 col-md-12 mb-4">
        <div class="card h-100">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">تجزیه و تحلیل وب‌سایت</h5>
                <div class="dropdown primary-font">
                    <button class="btn p-0" type="button" id="analyticsOptions" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="analyticsOptions">
                        <a class="dropdown-item" href="javascript:void(0);">انتخاب همه</a>
                        <a class="dropdown-item" href="javascript:void(0);">تازه سازی</a>
                        <a class="dropdown-item" href="javascript:void(0);">اشتراک گذاری</a>
                    </div>
                </div>
            </div>
            <div class="card-body pb-2">
                <div class="d-flex justify-content-around align-items-center flex-wrap mb-4">
                    <div class="user-analytics text-center me-2">
                        <i class="bx bx-user me-1"></i>
                        <span>کاربران</span>
                        <div class="d-flex align-items-center mt-2">
                            <div class="chart-report" data-color="success" data-series="35">
                            </div>
                            <h3 class="mb-0">61K</h3>
                        </div>
                    </div>
                    <div class="sessions-analytics text-center me-2">
                        <i class="bx bx-pie-chart-alt me-1"></i>
                        <span>جلسات</span>
                        <div class="d-flex align-items-center mt-2">
                            <div class="chart-report" data-color="warning" data-series="76">
                            </div>
                            <h3 class="mb-0">92K</h3>
                        </div>
                    </div>
                    <div class="bounce-rate-analytics text-center">
                        <i class="bx bx-trending-up me-1"></i>
                        <span>نرخ نوسان</span>
                        <div class="d-flex align-items-center mt-2">
                            <div class="chart-report" data-color="danger" data-series="65">
                            </div>
                            <h3 class="mb-0">72.6%</h3>
                        </div>
                    </div>
                </div>
                <div id="analyticsBarChart"></div>
            </div>
        </div>
    </div>

    <!-- Referral, conversion, impression & income charts -->
    <div class="col-lg-6 col-md-12">
        <div class="row">
            <!-- Referral Chart-->
            <div class="col-sm-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h2 class="mb-1">32,690</h2>
                        <span class="text-muted">ارجاع 40%</span>
                        <div id="referralLineChart"></div>
                    </div>
                </div>
            </div>
            <!-- Conversion Chart-->
            <div class="col-sm-6 col-12 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between pb-3">
                        <div class="conversion-title">
                            <h5 class="card-title mb-1">تبدیل</h5>
                            <p class="mb-0 text-muted primary-font">
                                60%
                                <i class="bx bx-chevron-up text-success"></i>
                            </p>
                        </div>
                        <h2 class="mb-0 primary-font">89k</h2>
                    </div>
                    <div class="card-body">
                        <div id="conversionBarchart"></div>
                    </div>
                </div>
            </div>
            <!-- Impression Radial Chart-->
            <div class="col-sm-6 col-12 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div id="impressionDonutChart" class="mt-2"></div>
                    </div>
                </div>
            </div>
            <!-- Growth Chart-->
            <div class="col-sm-6 col-12">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="avatar">
                                            <span class="avatar-initial bg-label-primary rounded-circle"><i
                                                    class="bx bx-user fs-4"></i></span>
                                        </div>
                                        <div class="card-info">
                                            <h5 class="card-title mb-0 me-2 primary-font">
                                                38,566</h5>
                                            <small class="text-muted">تبدیل</small>
                                        </div>
                                    </div>
                                    <div id="conversationChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="avatar">
                                            <span class="avatar-initial bg-label-warning rounded-circle"><i
                                                    class="bx bx-dollar fs-4"></i></span>
                                        </div>
                                        <div class="card-info">
                                            <h5 class="card-title mb-0 me-2 primary-font">
                                                53,659</h5>
                                            <small class="text-muted">درآمد</small>
                                        </div>
                                    </div>
                                    <div id="incomeChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Referral, conversion, impression & income charts -->





    {{-- @livewire('admin.card') --}}
    the rest elements of admin dashboard goes here.
@endsection
