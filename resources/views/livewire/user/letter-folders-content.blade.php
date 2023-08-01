<div>
    <!-- this part will load into letters and show the user selected folder content(inbox,sent,...) -->
    @switch($selectedFolder)

        @case('ایجاد نامه جدید')
ایجاد نامه جدید
            @break
            {{--==============================================================================--}}

        @case('صندوق ورودی')
            <table id="example3" class="text-nowrap table">
                <thead>
                <tr>
                    <th><i class="align-middle bx bxs-envelope"></i></th>
                    <th><i class="align-middle fa fa-paperclip"></i></th>
                    <th>تاریخ</th>
                    <th>فرستنده</th>
                    <th>شماره نامه</th>
                    <th>گیرندگان</th>
                    <th>موضوع</th>
                    <th>شرح ارجاع</th>
                </tr>
                </thead>
                <tbody>
                <tr class="table-warning">
                    <td><i class="align-middle bx bxs-envelope"></i>
                    </td>
                    <td>1234134</td>
                    <td>ایرج آذروند</td>
                    <td>23452345</td>
                    <td>ستاد</td>
                    <td>انفورماتیک</td>
                    <td>کارشناس</td>
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
                    <td>کارشناس</td>

                </tr>
                </tbody>
            </table>
            @break
            {{--==============================================================================--}}
        @case('ارسال شده ها')
ارسال شده ها
            @break
            {{--==============================================================================--}}
        @case('پیش نویس ها')
پیش نویس ها
            @break
            {{--==============================================================================--}}
        @default()
دفاتر
            @break
            {{--==============================================================================--}}
            {{--==============================================================================--}}
            {{--==============================================================================--}}
            {{--==============================================================================--}}
            {{--==============================================================================--}}
    @endswitch
</div>
