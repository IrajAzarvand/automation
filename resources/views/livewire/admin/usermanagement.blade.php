{{-- ========================== system users ======================== --}}

<div class="col-xl-12 col-xxl-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">لیست کاربران سیستم</h4>
        </div>
        <div class="table-responsive">
            <table class="table display mb-4 dataTablesCard table-responsive-md card-table" id="systemUsers">
                <thead>
                    <tr>
                        <th>
                            <div class="checkbox mr-0 align-self-center">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                                    <label class="custom-control-label" for="checkAll"></label>
                                </div>
                            </div>
                        </th>


                        <th><strong>کد پرسنلی</strong></th>
                        <th><strong>نام</strong></th>
                        <th><strong>شعبه</strong></th>
                        <th><strong>واحد</strong></th>
                        <th><strong>سمت</strong></th>
                        <th><strong>وضعیت</strong></th>
                        <th><strong>عملیات</strong></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allSystemUsers as $user)
                        <tr>
                            <td>
                                <div class="checkbox mr-0 align-self-center">
                                    <div class="custom-control custom-checkbox ">
                                        <input type="checkbox" class="custom-control-input"
                                            id="check{{ $user->id }}" required="">
                                        <label class="custom-control-label" for="check{{ $user->id }}"></label>
                                    </div>
                                </div>
                            </td>
                            <td><strong>{{ $user->personnelCode }}</strong></td>

                            <td>
                                <div class="d-flex align-items-center">
                                    @if (file_exists('storage/Data/' . $user->id . '/profile/profile.jpg'))
                                        <img src="{{ asset('storage/Data/' . $user->id . '/profile/profile.jpg') }}"
                                            class="rounded-lg mr-2" width="24" alt="" />
                                    @else
                                        <img src="{{ asset('storage/Data/global/userIcon.png') }}"
                                            class="rounded-lg mr-2" width="24" alt="" />
                                    @endif
                                    <span class="w-space-no">{{ $user->fName . ' ' . $user->lName }}</span>
                                </div>
                            </td>

                            <td>{{ $user->branch->branchName }}</td>
                            <td>{{ $user->unit->unitName }}</td>
                            <td>
                                <div class="d-flex align-items-center"><span>{{ $user->post->postName }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i>
                                    آنلاین
                                </div>
                            </td>

                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('userProfileSetting',$user->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i
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



{{-- add user --}}

{{-- @livewire('add-user') --}}
