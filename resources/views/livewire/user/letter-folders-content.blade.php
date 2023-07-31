<div>

    <!-- this part will load into letters and show the user selected folder content(inbox,sent,...) -->
    <div>
        <table id="example3" class=" text-nowrap table">
            <thead>
            <tr>
                <th><i class="align-middle bx bxs-envelope"></i></th>
                <th>کد پرسنلی</th>
                <th>نام و نام خانوادگی</th>
                <th>شماره همراه</th>
                <th>شعبه</th>
                <th>واحد</th>
                <th>سمت</th>
            </tr>
            </thead>
            <tbody>
            <tr class="table-warning">
                <td><i class="align-middle bx bxs-envelope"></i>
                </td>
                <td>1234134</td>
                <td>dایرج آذروند</td>
                <td>23452345</td>
                <td>ستاد</td>
                <td>انفورماتیک</td>
                <td>کارشناس</td>
            </tr>

            <tr class="table-primary">
                <td><i class="align-middle bx bx-envelope-open"></i>
                </td>
                <td>1234134</td>
                <td>ایرج آذروند</td>
                <td>23452345</td>
                <td>ستاد</td>
                <td>انفورماتیک</td>
                <td>کارشناس</td>
            </tr>

            <tr class="table-danger">
                <td><i class="align-middle bx bx-envelope-open"></i>
                </td>

                <td>96325</td>
                <td>حسن رنجبر</td>
                <td>23452345</td>
                <td>ستاد</td>
                <td>انفورماتیک</td>
                <td>کارشناس</td>
            </tr>

            <tr class="table-active">
                <td><i class="align-middle bx bxs-envelope"></i>
                </td>

                <td>1234134</td>
                <td>ایرج آذروند</td>
                <td>23452345</td>
                <td>ستاد</td>
                <td>انفورماتیک</td>
                <td>کارشناس</td>

            </tr>
            </tbody>
        </table>
    </div>


    {{--    ====================================================================================================--}}
    {{--    ====================================================================================================--}}
    {{--    ====================================================================================================--}}
    {{--    ====================================================================================================--}}
    {{--    ====================================================================================================--}}
    <h5 class="card-header">کلاس های کاربردی</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
            <tr>
                <th>پروژه</th>
                <th>مشتری</th>
                <th>کاربران</th>
                <th>وضعیت</th>
                <th>عمل‌ها</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            <tr class="table-default">
                <td><i class="align-middle fab fa-sketch fa-lg text-warning me-3"></i> <strong>پروژه Sketch</strong>
                </td>
                <td>دیوید بکهام</td>
                <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="تونی استارک">
                            <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="بیل گیتس">
                            <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="دیوید بکهام">
                            <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                        </li>
                    </ul>
                </td>
                <td><span class="badge bg-label-primary me-1">فعال</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                ویرایش</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> حذف</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr class="table-active">
                <td><i class="align-middle fab fa-react fa-lg text-info me-3"></i> <strong>پروژه React</strong></td>
                <td>بری الن</td>
                <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="تونی استارک">
                            <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="بیل گیتس">
                            <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="دیوید بکهام">
                            <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                        </li>
                    </ul>
                </td>
                <td><span class="badge bg-label-success me-1">اتمام یافته</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                ویرایش</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> حذف</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr class="table-primary">
                <td><i class="align-middle fab fa-angular fa-lg text-danger me-3"></i> <strong>پروژه انگولار</strong>
                </td>
                <td>استیو جابز</td>
                <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="تونی استارک">
                            <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="بیل گیتس">
                            <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="دیوید بکهام">
                            <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                        </li>
                    </ul>
                </td>
                <td><span class="badge bg-label-primary me-1">فعال</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                ویرایش</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> حذف</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr class="table-secondary">
                <td><i class="align-middle fab fa-vuejs fa-lg text-success me-3"></i> <strong>پروژه VueJs</strong></td>
                <td>تونی استارک</td>
                <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="تونی استارک">
                            <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="بیل گیتس">
                            <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="دیوید بکهام">
                            <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                        </li>
                    </ul>
                </td>
                <td><span class="badge bg-label-info me-1">زمان‌بندی شده</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                ویرایش</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> حذف</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr class="table-success">
                <td>
                    <i class="align-middle fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>پروژه
                        بوت‌استرپ</strong>
                </td>
                <td>بیل گیتس</td>
                <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="تونی استارک">
                            <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="بیل گیتس">
                            <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="دیوید بکهام">
                            <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                        </li>
                    </ul>
                </td>
                <td><span class="badge bg-label-warning me-1">در انتظار</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                ویرایش</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> حذف</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr class="table-danger">
                <td><i class="align-middle fab fa-sketch fa-lg text-warning me-3"></i> <strong>پروژه Sketch</strong>
                </td>
                <td>لورم ایپسوم</td>
                <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="تونی استارک">
                            <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="بیل گیتس">
                            <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="دیوید بکهام">
                            <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                        </li>
                    </ul>
                </td>
                <td><span class="badge bg-label-primary me-1">فعال</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                ویرایش</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> حذف</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr class="table-warning">
                <td><i class="align-middle fab fa-react fa-lg text-info me-3"></i> <strong>React سفارشی</strong></td>
                <td>استیو راجرز</td>
                <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="تونی استارک">
                            <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="بیل گیتس">
                            <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="دیوید بکهام">
                            <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                        </li>
                    </ul>
                </td>
                <td><span class="badge bg-label-info me-1">زمان‌بندی شده</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                ویرایش</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> حذف</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr class="table-info">
                <td>
                    <i class="align-middle fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>جدیدترین
                        بوت‌استرپ</strong>
                </td>
                <td>پیتر پارکر</td>
                <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="تونی استارک">
                            <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="بیل گیتس">
                            <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="دیوید بکهام">
                            <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                        </li>
                    </ul>
                </td>
                <td><span class="badge bg-label-warning me-1">در انتظار</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                ویرایش</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> حذف</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr class="table-light">
                <td><i class="align-middle fab fa-angular fa-lg text-danger me-3"></i> <strong>UI انگولار</strong></td>
                <td>بروس وین</td>
                <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="تونی استارک">
                            <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="بیل گیتس">
                            <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="دیوید بکهام">
                            <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                        </li>
                    </ul>
                </td>
                <td><span class="badge bg-label-success me-1">اتمام یافته</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                ویرایش</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> حذف</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr class="table-dark">
                <td><i class="align-middle fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>رابط کاربری
                        بوت‌استرپ</strong></td>
                <td>بیل گیتس</td>
                <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="تونی استارک">
                            <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="بیل گیتس">
                            <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                            class="avatar avatar-xs pull-up" title="دیوید بکهام">
                            <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                        </li>
                    </ul>
                </td>
                <td><span class="badge bg-label-success me-1">اتمام یافته</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                ویرایش</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> حذف</a>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
