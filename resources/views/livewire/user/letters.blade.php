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

                        <div class="d-flex justify-content-between flex-column mb-2 mb-md-0">
                            <ul class="nav nav-align-left nav-pills flex-column lh-1-85">

                                <li class="nav-item">
                                    <button wire:click="selectedFolder('ایجاد نامه جدید')"
                                            class="nav-link @if($activeFolder=='ایجاد نامه جدید') active @endif"
                                            data-bs-toggle="tab">
                                        <i class="bx bx-notepad"></i>
                                        <span class="align-middle">ایجاد نامه جدید</span>
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button wire:click="selectedFolder('صندوق ورودی')"
                                            class="nav-link @if($activeFolder=='صندوق ورودی') active @endif"
                                            data-bs-toggle="tab">
                                        <i class="bx bxs-inbox"></i>
                                        <span class="align-middle">صندوق ورودی</span> <span
                                            class="float-end badge badge-center rounded-pill bg-danger">690</span>
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button wire:click="selectedFolder('ارسال شده ها')"
                                            class="nav-link @if($activeFolder=='ارسال شده ها') active @endif"
                                            data-bs-toggle="tab">
                                        <i class="bx bx-book faq-nav-icon me-1"></i>
                                        <span class="align-middle">ارسال شده ها</span>
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button wire:click="selectedFolder('پیش نویس ها')"
                                            class="nav-link @if($activeFolder=='پیش نویس ها') active @endif" data-bs-toggle="tab">
                                        <i class="bx bx-clipboard faq-nav-icon me-1"></i>
                                        <span class="align-middle">پیش نویس ها</span><span
                                            class="float-end badge badge-center rounded-pill bg-warning">690</span>
                                    </button>
                                </li>

                                <hr>


                                {{-- archive menu--}}
                                <div class="accordion-item card">
                                    <h2 class="accordion-header">
                                        <button type="button" class="accordion-button collapsed"
                                                data-bs-toggle="collapse" data-bs-target="#accordionStyle1-1"
                                                aria-expanded="false">
                                            بایگانی نامه ها
                                        </button>
                                    </h2>

                                    <div id="accordionStyle1-1" class="accordion-collapse collapse"
                                         data-bs-parent="#accordionStyle1">
                                        <div class="accordion-body">
                                            @foreach($branchList as $bid=>$branchName)
                                                <div wire:click="selectedFolder('{{$branchName}}')"
                                                     class="form-check form-check-primary mt-3">
                                                    <input name="customRadioPrimary" class="form-check-input"
                                                           type="radio" value="{{$bid}}" id="branch{{$bid}}">
                                                    <label class="form-check-label"
                                                           for="branch{{$bid}}"> {{$branchName}} </label>
                                                </div>
                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                                {{-- ./archive menu--}}
                                <hr>
                                {{-- letter force guide--}}
                                <div class="accordion-item card">
                                    <label> فوریت نامه ها</label>
                                    <span class=" mt-3 badge bg-label-primary">نامه عادی</span>
                                    <span class="mt-1 badge bg-label-warning">نامه فوری</span>
                                    <span class="mt-1 badge bg-label-danger">نامه آنی</span>

                                </div>
                                {{-- ./letter force guide--}}
                            </ul>

                            {{-- image--}}
                            <div class="d-none d-md-block">
                                <div class="mt-5">
                                    <img src="{{asset('assets/img/illustrations/boy-working-light.png')}}"
                                         class="img-fluid scaleX-n1"
                                         alt="FAQ Image" data-app-light-img="illustrations/boy-working-light.png"
                                         data-app-dark-img="illustrations/boy-working-dark.png">
                                </div>
                            </div>
                            {{-- ./image--}}

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
                                    <i class="bx bx-food-menu"></i>
                                  </span>
                                </div>
                                <div>
                                    <h5 class="mb-0">
                                        <span class="align-middle">{{ $activeFolder }}</span>
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
