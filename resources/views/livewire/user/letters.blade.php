<div class="col-xl-12 col-xxl-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">کارتابل نامه ها</h4>
        </div>
        <div class="card-body">


            <div class="row">
                <div class="col-md-2 col-12 mb-4">
                    <div class="mt-4">
                        <!-- Navigation -->
                        <div>
                            <div class="d-flex justify-content-between flex-column mb-2 mb-md-0">
                                <ul class="nav nav-align-left nav-pills flex-column lh-1-85">

                                    <li class="nav-item">
                                        <button wire:click="selectedFolder('compose')" class="nav-link" data-bs-toggle="tab" >
                                            <i class="bx bxl-telegram"></i>
                                            <span class="align-middle">ایجاد نامه جدید</span>
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button wire:click="selectedFolder('inbox')" class="nav-link active" data-bs-toggle="tab" >
                                            <i class="bx bxs-inbox"></i>
                                            <span class="align-middle">صندوق ورودی</span> <span
                                                class="float-end badge badge-center rounded-pill bg-danger">690</span>
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button wire:click="selectedFolder('sent')" class="nav-link" data-bs-toggle="tab" >
                                            <i class="bx bx-shopping-bag faq-nav-icon me-1"></i>
                                            <span class="align-middle">ارسال شده ها</span>
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button wire:click="selectedFolder('draft')" class="nav-link" data-bs-toggle="tab" >
                                            <i class="bx bx-rotate-left faq-nav-icon me-1"></i>
                                            <span class="align-middle">پیش نویس ها</span><span
                                                class="float-end badge badge-center rounded-pill bg-warning">690</span>
                                        </button>
                                    </li>


                                </ul>
                                <div class="d-none d-md-block">
                                    <div class="mt-5">
                                        <img src="{{asset('assets/img/illustrations/boy-working-light.png')}}"
                                             class="img-fluid scaleX-n1"
                                             alt="FAQ Image" data-app-light-img="illustrations/boy-working-light.png"
                                             data-app-dark-img="illustrations/boy-working-dark.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--mail content --}}
                <div class="card col-md-10 col-12 mb-4">
                    <div class="tab-content py-0">
                        <div class="tab-pane fade show active" id="inbox" role="tabpanel">
                            <div class="d-flex align-items-center mb-3 gap-3">
                                <div>
                                  <span class="badge bg-label-primary rounded-2 p-2 mt-1">
                                    <i class="bx bxs-inbox"></i>
                                  </span>
                                </div>
                                <div>
                                    <h5 class="mb-0">
                                        <span class="align-middle">صندوق ورودی</span>
                                    </h5>
                                </div>
                            </div>

                            {{-- ================ contents of each tab goes here                           --}}
                            @livewire('user.letter-folders-content')

                        </div>

                    </div>
                </div>
                {{--./mail content--}}
            </div>


        </div>
    </div>
</div>


{{--<div class="page-titles">--}}
{{--    <ol class="breadcrumb">--}}
{{--        <li class="breadcrumb-item"><a href="javascript:void(0)">کارتابل نامه ها</a></li>--}}
{{--    </ol>--}}
{{--</div>--}}
{{--<!-- row -->--}}

{{--<div class="col-xl-12 col-xxl-12">--}}
{{--    <div class="card">--}}
{{--        <div class="card-body">--}}
{{--            <div class="mt-4">--}}
{{--                <!-- Navigation -->--}}
{{--                <div>--}}
{{--                    <div class="d-flex justify-content-between flex-column mb-2 mb-md-0">--}}
{{--                        <ul class="nav nav-align-left nav-pills flex-column lh-1-85">--}}

{{--                            <li class="nav-item">--}}
{{--                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cancellation">--}}
{{--                                    <i class="bx bxl-telegram"></i>--}}
{{--                                    <span class="align-middle">ایجاد نامه جدید</span>--}}
{{--                                </button>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#payment">--}}
{{--                                    <i class="bx bxs-inbox"></i>--}}
{{--                                    <span class="align-middle">صندوق ورودی</span> <span--}}
{{--                                        class="float-end badge badge-center rounded-pill bg-danger">690</span>--}}
{{--                                </button>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#delivery">--}}
{{--                                    <i class="bx bx-shopping-bag faq-nav-icon me-1"></i>--}}
{{--                                    <span class="align-middle">ارسال شده ها</span>--}}
{{--                                </button>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cancellation">--}}
{{--                                    <i class="bx bx-rotate-left faq-nav-icon me-1"></i>--}}
{{--                                    <span class="align-middle">پیش نویس ها</span><span--}}
{{--                                        class="float-end badge badge-center rounded-pill bg-warning">690</span>--}}
{{--                                </button>--}}
{{--                            </li>--}}


{{--                        </ul>--}}
{{--                        <div class="d-none d-md-block">--}}
{{--                            <div class="mt-5">--}}
{{--                                <img src="../../assets/img/illustrations/boy-working-light.png"--}}
{{--                                     class="img-fluid scaleX-n1"--}}
{{--                                     alt="FAQ Image" data-app-light-img="illustrations/boy-working-light.png"--}}
{{--                                     data-app-dark-img="illustrations/boy-working-dark.png">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


{{--<!-- /Navigation -->--}}

{{--<!-- FAQ's -->--}}
{{--<div class="card">--}}
{{--    <div class="card-body">--}}
{{--        <div class="col-lg-9 col-md-8 col-12">--}}
{{--            <div class="tab-content py-0">--}}
{{--                <div class="tab-pane fade show active" id="payment" role="tabpanel">--}}
{{--                    <div class="d-flex align-items-center mb-3 gap-3">--}}
{{--                        <div>--}}
{{--                          <span class="badge bg-label-primary rounded-2 p-2 mt-1">--}}
{{--                            <i class="bx bx-credit-card fs-3 lh-1"></i>--}}
{{--                          </span>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <h5 class="mb-0">--}}
{{--                                <span class="align-middle">پرداخت</span>--}}
{{--                            </h5>--}}
{{--                            <span class="lh-1-85">دریافت راهنمایی برای پرداخت</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div id="accordionPayment" class="accordion accordion-header-primary">--}}
{{--                        <div class="card accordion-item active">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button" type="button" data-bs-toggle="collapse"--}}
{{--                                        aria-expanded="true" data-bs-target="#accordionPayment-1"--}}
{{--                                        aria-controls="accordionPayment-1">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم--}}
{{--                                </button>--}}
{{--                            </h2>--}}

{{--                            <div id="accordionPayment-1" class="accordion-collapse collapse show">--}}
{{--                                <div class="accordion-body lh-2">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان--}}
{{--                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و--}}
{{--                                    برای شرایط فعلی تکنولوژی--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="card accordion-item">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
{{--                                        data-bs-target="#accordionPayment-2" aria-controls="accordionPayment-2">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید--}}
{{--                                </button>--}}
{{--                            </h2>--}}
{{--                            <div id="accordionPayment-2" class="accordion-collapse collapse">--}}
{{--                                <div class="accordion-body lh-2">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان--}}
{{--                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و--}}
{{--                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="card accordion-item">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
{{--                                        data-bs-target="#accordionPayment-3" aria-controls="accordionPayment-3">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با--}}
{{--                                </button>--}}
{{--                            </h2>--}}
{{--                            <div id="accordionPayment-3" class="accordion-collapse collapse">--}}
{{--                                <div class="accordion-body lh-2">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان--}}
{{--                                    گرافیک است. چاپگرها--}}
{{--                                    <a href="javascript:void(0);">لورم ایپسوم متن</a>لورم ایپسوم متن ساختگی با تولید--}}
{{--                                    سادگی--}}
{{--                                    <strong>1-000-000-000</strong>لورم ایپسوم متن ساختگی--}}
{{--                                    <a href="javascript:void(0);">لورم ایپسوم متن ساختگی</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="card accordion-item">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
{{--                                        data-bs-target="#accordionPayment-4" aria-controls="accordionPayment-4">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان--}}
{{--                                    گرافیک--}}
{{--                                </button>--}}
{{--                            </h2>--}}
{{--                            <div id="accordionPayment-4" class="accordion-collapse collapse">--}}
{{--                                <div class="accordion-body lh-2">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان--}}
{{--                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و--}}
{{--                                    برای شرایط فعلی تکنولوژی--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="card accordion-item">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
{{--                                        data-bs-target="#accordionPayment-5" aria-controls="accordionPayment-5">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم--}}
{{--                                </button>--}}
{{--                            </h2>--}}
{{--                            <div id="accordionPayment-5" class="accordion-collapse collapse">--}}
{{--                                <div class="accordion-body lh-2">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان--}}
{{--                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و--}}
{{--                                    برای شرایط فعلی تکنولوژی مورد نیاز--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="delivery" role="tabpanel">--}}
{{--                    <div class="d-flex align-items-center mb-3 gap-3">--}}
{{--                        <div>--}}
{{--                          <span class="badge bg-label-primary rounded-2 p-2 mt-1">--}}
{{--                            <i class="bx bx-cart fs-3 lh-1"></i>--}}
{{--                          </span>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <h5 class="mb-0">--}}
{{--                                <span class="align-middle">ارسال</span>--}}
{{--                            </h5>--}}
{{--                            <span class="lh-1-85">دریافت راهنمایی برای ارسال</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div id="accordionDelivery" class="accordion accordion-header-primary">--}}
{{--                        <div class="card accordion-item active">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button" type="button" data-bs-toggle="collapse"--}}
{{--                                        aria-expanded="true" data-bs-target="#accordionDelivery-1"--}}
{{--                                        aria-controls="accordionDelivery-1">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی--}}
{{--                                </button>--}}
{{--                            </h2>--}}

{{--                            <div id="accordionDelivery-1" class="accordion-collapse collapse show">--}}
{{--                                <div class="accordion-body lh-2">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان--}}
{{--                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و--}}
{{--                                    برای شرایط فعلی تکنولوژی مورد نیاز--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="card accordion-item">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
{{--                                        data-bs-target="#accordionDelivery-2" aria-controls="accordionDelivery-2">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم--}}
{{--                                </button>--}}
{{--                            </h2>--}}
{{--                            <div id="accordionDelivery-2" class="accordion-collapse collapse">--}}
{{--                                <div class="accordion-body lh-2">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان--}}
{{--                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="card accordion-item">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
{{--                                        data-bs-target="#accordionDelivery-4" aria-controls="accordionDelivery-4">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم--}}
{{--                                </button>--}}
{{--                            </h2>--}}
{{--                            <div id="accordionDelivery-4" class="accordion-collapse collapse">--}}
{{--                                <div class="accordion-body lh-2">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان--}}
{{--                                    گرافیک--}}
{{--                                    <a href="javascript:void(0);">تیم پشتیبانی</a>لورم ایپسوم متن ساختگی با تولید--}}
{{--                                    سادگی نامفهوم از صنعت چاپ و با استفاده--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="cancellation" role="tabpanel">--}}
{{--                    <div class="d-flex align-items-center mb-3 gap-3">--}}
{{--                        <div>--}}
{{--                          <span class="badge bg-label-primary rounded-2 p-2 mt-1">--}}
{{--                            <i class="bx bx-revision fs-3 lh-1"></i>--}}
{{--                          </span>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <h5 class="mb-0"><span class="align-middle">انصراف و مرجوعی</span></h5>--}}
{{--                            <span class="lh-1-85">دریافت راهنمایی برای انصراف و مرجوعی</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div id="accordionCancellation" class="accordion accordion-header-primary">--}}
{{--                        <div class="card accordion-item active">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button" type="button" data-bs-toggle="collapse"--}}
{{--                                        aria-expanded="true" data-bs-target="#accordionCancellation-1"--}}
{{--                                        aria-controls="accordionCancellation-1">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید--}}
{{--                                </button>--}}
{{--                            </h2>--}}

{{--                            <div id="accordionCancellation-1" class="accordion-collapse collapse show">--}}
{{--                                <div class="accordion-body lh-2">--}}
{{--                                    <p>--}}
{{--                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از--}}
{{--                                        طراحان گرافیک است. چاپگرها و متون--}}
{{--                                    </p>--}}
{{--                                    <p class="mb-0">--}}
{{--                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از--}}
{{--                                        طراحان گرافیک است. چاپگرها و--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="card accordion-item">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
{{--                                        data-bs-target="#accordionCancellation-2"--}}
{{--                                        aria-controls="accordionCancellation-2">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید--}}
{{--                                </button>--}}
{{--                            </h2>--}}
{{--                            <div id="accordionCancellation-2" class="accordion-collapse collapse">--}}
{{--                                <div class="accordion-body lh-2">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از--}}
{{--                                    <a href="javascript:void(0);">تیم پشتیبانی</a>لورم ایپسوم متن ساختگی با تولید--}}
{{--                                    سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="card accordion-item">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
{{--                                        aria-controls="accordionCancellation-3"--}}
{{--                                        data-bs-target="#accordionCancellation-3">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم--}}
{{--                                </button>--}}
{{--                            </h2>--}}
{{--                            <div id="accordionCancellation-3" class="accordion-collapse collapse">--}}
{{--                                <div class="accordion-body lh-2">--}}
{{--                                    <p>لورم ایپسوم متن ساختگی با <a href="javascript:void(0);">سفارشات</a></p>--}}
{{--                                    <p class="mb-0">انتخاب <strong>لورم ایپسوم متن</strong> وضعیت</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="orders" role="tabpanel">--}}
{{--                    <div class="d-flex align-items-center mb-3 gap-3">--}}
{{--                        <div>--}}
{{--                          <span class="badge bg-label-primary rounded-2 p-2 mt-1">--}}
{{--                            <i class="bx bx-box fs-3 lh-1"></i>--}}
{{--                          </span>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <h5 class="mb-0">--}}
{{--                                <span class="align-middle">سفارشات من</span>--}}
{{--                            </h5>--}}
{{--                            <span class="lh-1-85">جزئیات سفارش</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div id="accordionOrders" class="accordion accordion-header-primary">--}}
{{--                        <div class="card accordion-item active">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button" type="button" data-bs-toggle="collapse"--}}
{{--                                        aria-expanded="true" data-bs-target="#accordionOrders-1"--}}
{{--                                        aria-controls="accordionOrders-1">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی--}}
{{--                                </button>--}}
{{--                            </h2>--}}

{{--                            <div id="accordionOrders-1" class="accordion-collapse collapse show">--}}
{{--                                <div class="accordion-body lh-2">--}}
{{--                                    <p>--}}
{{--                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از--}}
{{--                                        طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که--}}
{{--                                        لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف--}}
{{--                                    </p>--}}
{{--                                    <p class="mb-0">--}}
{{--                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از--}}
{{--                                        طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان--}}
{{--                                        <strong>1-000-000-000</strong>.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="card accordion-item">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
{{--                                        data-bs-target="#accordionOrders-2" aria-controls="accordionOrders-2">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت--}}
{{--                                </button>--}}
{{--                            </h2>--}}
{{--                            <div id="accordionOrders-2" class="accordion-collapse collapse">--}}
{{--                                <div class="accordion-body lh-2">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده--}}
{{--                                    <strong>1 000 000 000</strong> لورم ایپسوم متن--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="card accordion-item">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
{{--                                        data-bs-target="#accordionOrders-3" aria-controls="accordionOrders-3">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید--}}
{{--                                </button>--}}
{{--                            </h2>--}}
{{--                            <div id="accordionOrders-3" class="accordion-collapse collapse">--}}
{{--                                <div class="accordion-body lh-2">--}}
{{--                                    <p>--}}
{{--                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ--}}
{{--                                        <a href="javascript:void(0);">لورم</a> لورم ایپسوم <strong>لورم--}}
{{--                                            ایپسوم</strong>.--}}
{{--                                    </p>--}}
{{--                                    <p class="mb-0">--}}
{{--                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت--}}
{{--                                        <a href="javascript:void(0);">لورم</a> لورم ایپسوم متن ساختگی با تولید سادگی--}}
{{--                                        نامفهوم--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="product" role="tabpanel">--}}
{{--                    <div class="d-flex align-items-center mb-3 gap-3">--}}
{{--                        <div>--}}
{{--                          <span class="badge bg-label-primary rounded-2 p-2 mt-1">--}}
{{--                            <i class="bx bx-camera fs-3 lh-1"></i>--}}
{{--                          </span>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <h5 class="mb-0">--}}
{{--                                <span class="align-middle">محصول و خدمات</span>--}}
{{--                            </h5>--}}
{{--                            <span class="lh-1-85">دریافت راهنمایی برای محصولات و خدمات</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div id="accordionProduct" class="accordion accordion-header-primary">--}}
{{--                        <div class="card accordion-item active">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button" type="button" data-bs-toggle="collapse"--}}
{{--                                        aria-expanded="true" data-bs-target="#accordionProduct-1"--}}
{{--                                        aria-controls="accordionProduct-1">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت--}}
{{--                                </button>--}}
{{--                            </h2>--}}

{{--                            <div id="accordionProduct-1" class="accordion-collapse collapse show">--}}
{{--                                <div class="accordion-body lh-2">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان--}}
{{--                                    گرافیک است. چاپگرها و متون بلکه روزنامه--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="card accordion-item">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
{{--                                        data-bs-target="#accordionProduct-2" aria-controls="accordionProduct-2">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم--}}
{{--                                </button>--}}
{{--                            </h2>--}}
{{--                            <div id="accordionProduct-2" class="accordion-collapse collapse">--}}
{{--                                <div class="accordion-body lh-2">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان--}}
{{--                                    گرافیک است. چاپگرها و متون بلکه روزنامه و <a href="javascript:void(0);">لورم</a>.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="card accordion-item">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
{{--                                        data-bs-target="#accordionProduct-3" aria-controls="accordionProduct-3">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت--}}
{{--                                </button>--}}
{{--                            </h2>--}}
{{--                            <div id="accordionProduct-3" class="accordion-collapse collapse">--}}
{{--                                <div class="accordion-body lh-2">--}}
{{--                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان--}}
{{--                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و--}}
{{--                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای--}}
{{--                                    کاربردی می باشد. کتابهای--}}
{{--                                    <a href="javascript:void(0);">لورم</a>.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- /FAQ's -->--}}


{{--<div class="col-lg-12">--}}

{{--    <div class="email-left-box px-0 mb-3">--}}
{{--        <div class="p-0">--}}
{{--            <a href="email-compose.html" class="btn btn-primary btn-block">ارسال</a>--}}
{{--        </div>--}}
{{--        <div class="mail-list mt-4">--}}
{{--            <a href="email-inbox.html" class="list-group-item active"><i--}}
{{--                    class="fa fa-inbox font-18 align-middle mr-2"></i> صندوق <span--}}
{{--                    class="badge badge-primary badge-sm float-right">198</span> </a>--}}
{{--            <a href="javascript:void()" class="list-group-item"><i--}}
{{--                    class="fa fa-paper-plane font-18 align-middle mr-2"></i>ارسال شده</a> <a--}}
{{--                href="javascript:void()" class="list-group-item"><i--}}
{{--                    class="fa fa-star font-18 align-middle mr-2"></i>مهم <span--}}
{{--                    class="badge badge-danger text-white badge-sm float-right">47</span>--}}
{{--            </a>--}}
{{--            <a href="#" class="list-group-item">--}}

{{--                <i class="mdi mdi-file-document-box font-18 align-middle mr-2"></i>پیش نویس ها</a>--}}
{{--            <a href="#" class="list-group-item"><i--}}
{{--                    class="fa fa-trash font-18 align-middle mr-2"></i>سطل زباله</a>--}}
{{--        </div>--}}
{{--        <div class="intro-title d-flex justify-content-between">--}}
{{--            <h5>دسته بندی ها</h5>--}}
{{--            <i class="icon-arrow-down" aria-hidden="true"></i>--}}
{{--        </div>--}}
{{--        <div class="mail-list mt-4">--}}
{{--            <a href="email-inbox.html" class="list-group-item"><span class="icon-warning"><i--}}
{{--                        class="fa fa-circle" aria-hidden="true"></i></span>--}}
{{--                کاری </a>--}}
{{--            <a href="email-inbox.html" class="list-group-item"><span class="icon-primary"><i--}}
{{--                        class="fa fa-circle" aria-hidden="true"></i></span>--}}
{{--                شخصی </a>--}}
{{--            <a href="email-inbox.html" class="list-group-item"><span class="icon-success"><i--}}
{{--                        class="fa fa-circle" aria-hidden="true"></i></span>--}}
{{--                دوستانه </a>--}}
{{--            <a href="email-inbox.html" class="list-group-item"><span class="icon-dpink"><i--}}
{{--                        class="fa fa-circle" aria-hidden="true"></i></span>--}}
{{--                شبکه مجازی </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="email-right-box ml-0 ml-sm-4 ml-sm-0">--}}
{{--        <div role="toolbar" class="toolbar ml-1 ml-sm-0">--}}
{{--            <div class="btn-group mb-1">--}}
{{--                <div class="custom-control custom-checkbox pl-2">--}}
{{--                    <input type="checkbox" class="custom-control-input" id="checkAll">--}}
{{--                    <label class="custom-control-label" for="checkAll"></label>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="btn-group mb-1">--}}
{{--                <button class="btn btn-primary light px-3" type="button"><i class="ti-reload"></i>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <div class="btn-group mb-1">--}}
{{--                <button aria-expanded="false" data-toggle="dropdown"--}}
{{--                        class="btn btn-primary px-3 light dropdown-toggle" type="button">بیشتر--}}
{{--                    <span class="caret"></span>--}}
{{--                </button>--}}
{{--                <div class="dropdown-menu"><a href="javascript: void(0);" class="dropdown-item">--}}
{{--                        نشان خوانده نشده--}}
{{--                    </a> <a href="javascript: void(0);" class="dropdown-item">اضافه کردن به کارها</a>--}}
{{--                    <a href="javascript: void(0);" class="dropdown-item">امتیاز دهی</a> <a--}}
{{--                        href="javascript: void(0);" class="dropdown-item">خاموش کردن</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="email-list mt-3">--}}
{{--            <div class="message">--}}
{{--                <div>--}}
{{--                    <div class="d-flex message-single">--}}
{{--                        <div class="pl-1 align-self-center">--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="checkbox2">--}}
{{--                                <label class="custom-control-label" for="checkbox2"></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ml-2">--}}
{{--                            <button class="border-0 bg-transparent align-middle p-0"><i--}}
{{--                                    class="fa fa-star" aria-hidden="true"></i></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="email-read.html" class="col-mail col-mail-2">--}}
{{--                        <div class="subject">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ--}}
{{--                            و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون--}}
{{--                            و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز--}}
{{--                        </div>--}}
{{--                        <div class="date">8:00 صبح</div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="message">--}}
{{--                <div>--}}
{{--                    <div class="d-flex message-single">--}}
{{--                        <div class="pl-1 align-self-center">--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="checkbox3">--}}
{{--                                <label class="custom-control-label" for="checkbox3"></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ml-2">--}}
{{--                            <button class="border-0 bg-transparent align-middle p-0"><i--}}
{{--                                    class="fa fa-star" aria-hidden="true"></i></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="email-read.html" class="col-mail col-mail-2">--}}
{{--                        <div class="subject">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ--}}
{{--                            و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون--}}
{{--                            و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز--}}
{{--                        </div>--}}
{{--                        <div class="date">8:20 صبح</div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="message">--}}
{{--                <div>--}}
{{--                    <div class="d-flex message-single">--}}
{{--                        <div class="pl-1 align-self-center">--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="checkbox4">--}}
{{--                                <label class="custom-control-label" for="checkbox4"></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ml-2">--}}
{{--                            <button class="border-0 bg-transparent align-middle p-0"><i--}}
{{--                                    class="fa fa-star" aria-hidden="true"></i></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="email-read.html" class="col-mail col-mail-2">--}}
{{--                        <div class="subject">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ--}}
{{--                            و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون--}}
{{--                            و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز--}}
{{--                        </div>--}}
{{--                        <div class="date">8:33 صبح</div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="message">--}}
{{--                <div>--}}
{{--                    <div class="d-flex message-single">--}}
{{--                        <div class="pl-1 align-self-center">--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="checkbox5">--}}
{{--                                <label class="custom-control-label" for="checkbox5"></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ml-2">--}}
{{--                            <button class="border-0 bg-transparent align-middle p-0"><i--}}
{{--                                    class="fa fa-star" aria-hidden="true"></i></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="email-read.html" class="col-mail col-mail-2">--}}
{{--                        <div class="subject">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ--}}
{{--                            و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون--}}
{{--                            و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز--}}
{{--                        </div>--}}
{{--                        <div class="date">9:10 صبح</div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="message">--}}
{{--                <div>--}}
{{--                    <div class="d-flex message-single">--}}
{{--                        <div class="pl-1 align-self-center">--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="checkbox6">--}}
{{--                                <label class="custom-control-label" for="checkbox6"></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ml-2">--}}
{{--                            <button class="border-0 bg-transparent align-middle p-0"><i--}}
{{--                                    class="fa fa-star" aria-hidden="true"></i></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="email-read.html" class="col-mail col-mail-2">--}}
{{--                        <div class="subject">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ--}}
{{--                            و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون--}}
{{--                            و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز--}}
{{--                        </div>--}}
{{--                        <div class="date">9:50 صبح</div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="message">--}}
{{--                <div>--}}
{{--                    <div class="d-flex message-single">--}}
{{--                        <div class="pl-1 align-self-center">--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="checkbox7">--}}
{{--                                <label class="custom-control-label" for="checkbox7"></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ml-2">--}}
{{--                            <button class="border-0 bg-transparent align-middle p-0"><i--}}
{{--                                    class="fa fa-star" aria-hidden="true"></i></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="email-read.html" class="col-mail col-mail-2">--}}
{{--                        <div class="subject">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ--}}
{{--                            و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون--}}
{{--                            و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز--}}
{{--                        </div>--}}
{{--                        <div class="date">10:00 صبح</div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="message">--}}
{{--                <div>--}}
{{--                    <div class="d-flex message-single">--}}
{{--                        <div class="pl-1 align-self-center">--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="checkbox8">--}}
{{--                                <label class="custom-control-label" for="checkbox8"></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ml-2">--}}
{{--                            <button class="border-0 bg-transparent align-middle p-0"><i--}}
{{--                                    class="fa fa-star" aria-hidden="true"></i></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="email-read.html" class="col-mail col-mail-2">--}}
{{--                        <div class="subject">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ--}}
{{--                            و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون--}}
{{--                            و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز--}}
{{--                        </div>--}}
{{--                        <div class="date">10:10 صبح</div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="message unread">--}}
{{--                <div>--}}
{{--                    <div class="d-flex message-single">--}}
{{--                        <div class="pl-1 align-self-center">--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="checkbox9">--}}
{{--                                <label class="custom-control-label" for="checkbox9"></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ml-2">--}}
{{--                            <button class="border-0 bg-transparent align-middle p-0"><i--}}
{{--                                    class="fa fa-star" aria-hidden="true"></i></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="email-read.html" class="col-mail col-mail-2">--}}
{{--                        <div class="subject">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ--}}
{{--                            و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون--}}
{{--                            و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز--}}
{{--                        </div>--}}
{{--                        <div class="date">10:20 صبح</div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="message unread">--}}
{{--                <div>--}}
{{--                    <div class="d-flex message-single">--}}
{{--                        <div class="pl-1 align-self-center">--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="checkbox10">--}}
{{--                                <label class="custom-control-label" for="checkbox10"></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ml-2">--}}
{{--                            <button class="border-0 bg-transparent align-middle p-0"><i--}}
{{--                                    class="fa fa-star" aria-hidden="true"></i></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="email-read.html" class="col-mail col-mail-2">--}}
{{--                        <div class="subject">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ--}}
{{--                            و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون--}}
{{--                            و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز--}}
{{--                        </div>--}}
{{--                        <div class="date">10:35</div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="message">--}}
{{--                <div>--}}
{{--                    <div class="d-flex message-single">--}}
{{--                        <div class="pl-1 align-self-center">--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="checkbox11">--}}
{{--                                <label class="custom-control-label" for="checkbox11"></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ml-2">--}}
{{--                            <button class="border-0 bg-transparent align-middle p-0"><i--}}
{{--                                    class="fa fa-star" aria-hidden="true"></i></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="email-read.html" class="col-mail col-mail-2">--}}
{{--                        <div class="subject">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ--}}
{{--                            و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون--}}
{{--                            و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز--}}
{{--                        </div>--}}
{{--                        <div class="date">10:44 صبح</div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="message">--}}
{{--                <div>--}}
{{--                    <div class="d-flex message-single">--}}
{{--                        <div class="pl-1 align-self-center">--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="checkbox12">--}}
{{--                                <label class="custom-control-label" for="checkbox12"></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ml-2">--}}
{{--                            <button class="border-0 bg-transparent align-middle p-0"><i--}}
{{--                                    class="fa fa-star" aria-hidden="true"></i></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="email-read.html" class="col-mail col-mail-2">--}}
{{--                        <div class="subject">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ--}}
{{--                            و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون--}}
{{--                            و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز--}}
{{--                        </div>--}}
{{--                        <div class="date">10:48 صبح</div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="message">--}}
{{--                <div>--}}
{{--                    <div class="d-flex message-single">--}}
{{--                        <div class="pl-1 align-self-center">--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="checkbox13">--}}
{{--                                <label class="custom-control-label" for="checkbox13"></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ml-2">--}}
{{--                            <button class="border-0 bg-transparent align-middle p-0"><i--}}
{{--                                    class="fa fa-star" aria-hidden="true"></i></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="email-read.html" class="col-mail col-mail-2">--}}
{{--                        <div class="subject">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ--}}
{{--                            و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون--}}
{{--                            و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز--}}
{{--                        </div>--}}
{{--                        <div class="date">11:10 صبح</div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="message">--}}
{{--                <div>--}}
{{--                    <div class="d-flex message-single">--}}
{{--                        <div class="pl-1 align-self-center">--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="checkbox14">--}}
{{--                                <label class="custom-control-label" for="checkbox14"></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ml-2">--}}
{{--                            <button class="border-0 bg-transparent align-middle p-0"><i--}}
{{--                                    class="fa fa-star" aria-hidden="true"></i></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="email-read.html" class="col-mail col-mail-2">--}}
{{--                        <div class="subject">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ--}}
{{--                            و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون--}}
{{--                            و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز--}}
{{--                        </div>--}}
{{--                        <div class="date">11:12 صبح</div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="message unread">--}}
{{--                <div>--}}
{{--                    <div class="d-flex message-single">--}}
{{--                        <div class="pl-1 align-self-center">--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="checkbox15">--}}
{{--                                <label class="custom-control-label" for="checkbox15"></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ml-2">--}}
{{--                            <button class="border-0 bg-transparent align-middle p-0"><i--}}
{{--                                    class="fa fa-star" aria-hidden="true"></i></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="email-read.html" class="col-mail col-mail-2">--}}
{{--                        <div class="subject">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ--}}
{{--                            و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون--}}
{{--                            و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز--}}
{{--                        </div>--}}
{{--                        <div class="date">11:17 صبح</div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="message">--}}
{{--                <div>--}}
{{--                    <div class="d-flex message-single">--}}
{{--                        <div class="pl-1 align-self-center">--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="checkbox16">--}}
{{--                                <label class="custom-control-label" for="checkbox16"></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ml-2">--}}
{{--                            <button class="border-0 bg-transparent align-middle p-0"><i--}}
{{--                                    class="fa fa-star" aria-hidden="true"></i></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="email-read.html" class="col-mail col-mail-2">--}}
{{--                        <div class="subject">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ--}}
{{--                            و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون--}}
{{--                            و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز--}}
{{--                        </div>--}}
{{--                        <div class="date">12:10 صبح</div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="message">--}}
{{--                <div>--}}
{{--                    <div class="d-flex message-single">--}}
{{--                        <div class="pl-1 align-self-center">--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="checkbox17">--}}
{{--                                <label class="custom-control-label" for="checkbox17"></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ml-2">--}}
{{--                            <button class="border-0 bg-transparent align-middle p-0"><i--}}
{{--                                    class="fa fa-star" aria-hidden="true"></i></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="email-read.html" class="col-mail col-mail-2">--}}
{{--                        <div class="subject">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ--}}
{{--                            و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون--}}
{{--                            و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز--}}
{{--                        </div>--}}
{{--                        <div class="date">13:10 ظهر</div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="message">--}}
{{--                <div>--}}
{{--                    <div class="d-flex message-single">--}}
{{--                        <div class="pl-1 align-self-center">--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="checkbox18">--}}
{{--                                <label class="custom-control-label" for="checkbox18"></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ml-2">--}}
{{--                            <button class="border-0 bg-transparent align-middle p-0"><i--}}
{{--                                    class="fa fa-star" aria-hidden="true"></i></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="email-read.html" class="col-mail col-mail-2">--}}
{{--                        <div class="subject">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ--}}
{{--                            و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون--}}
{{--                            و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز--}}
{{--                        </div>--}}
{{--                        <div class="date">14:10 ظهر</div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="message unread">--}}
{{--                <div>--}}
{{--                    <div class="d-flex message-single">--}}
{{--                        <div class="pl-1 align-self-center">--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input type="checkbox" class="custom-control-input">--}}
{{--                                <label class="custom-control-label" for="checkbox16"></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ml-2">--}}
{{--                            <button class="border-0 bg-transparent align-middle p-0"><i--}}
{{--                                    class="fa fa-star" aria-hidden="true"></i></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="email-read.html" class="col-mail col-mail-2">--}}
{{--                        <div class="subject">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ--}}
{{--                            و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون--}}
{{--                            و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز--}}
{{--                        </div>--}}
{{--                        <div class="date">12:10 صبح</div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="message">--}}
{{--                <div>--}}
{{--                    <div class="d-flex message-single">--}}
{{--                        <div class="pl-1 align-self-center">--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input type="checkbox" class="custom-control-input">--}}
{{--                                <label class="custom-control-label" for="checkbox17"></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ml-2">--}}
{{--                            <button class="border-0 bg-transparent align-middle p-0"><i--}}
{{--                                    class="fa fa-star" aria-hidden="true"></i></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="email-read.html" class="col-mail col-mail-2">--}}
{{--                        <div class="subject">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ--}}
{{--                            و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون--}}
{{--                            و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز--}}
{{--                        </div>--}}
{{--                        <div class="date">13:10 ظهر</div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="message">--}}
{{--                <div>--}}
{{--                    <div class="d-flex message-single">--}}
{{--                        <div class="pl-1 align-self-center">--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input type="checkbox" class="custom-control-input">--}}
{{--                                <label class="custom-control-label" for="checkbox18"></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ml-2">--}}
{{--                            <button class="border-0 bg-transparent align-middle p-0"><i--}}
{{--                                    class="fa fa-star" aria-hidden="true"></i></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="email-read.html" class="col-mail col-mail-2">--}}
{{--                        <div class="subject">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ--}}
{{--                            و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون--}}
{{--                            و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز--}}
{{--                        </div>--}}
{{--                        <div class="date">14:10 ظهر</div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- panel -->--}}
{{--        <div class="row mt-4">--}}
{{--            <div class="col-12 pl-3">--}}
{{--                <nav>--}}
{{--                    <ul class="pagination pagination-gutter pagination-primary pagination-sm no-bg">--}}
{{--                        <li class="page-item page-indicator"><a class="page-link"--}}
{{--                                                                href="javascript:void()"><i--}}
{{--                                    class="la la-angle-left"></i></a></li>--}}
{{--                        <li class="page-item "><a class="page-link" href="javascript:void()">1</a>--}}
{{--                        </li>--}}
{{--                        <li class="page-item active"><a class="page-link"--}}
{{--                                                        href="javascript:void()">2</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="javascript:void()">3</a>--}}
{{--                        </li>--}}
{{--                        <li class="page-item"><a class="page-link" href="javascript:void()">4</a>--}}
{{--                        </li>--}}
{{--                        <li class="page-item page-indicator"><a class="page-link"--}}
{{--                                                                href="javascript:void()"><i--}}
{{--                                    class="la la-angle-right"></i></a></li>--}}
{{--                    </ul>--}}
{{--                </nav>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
