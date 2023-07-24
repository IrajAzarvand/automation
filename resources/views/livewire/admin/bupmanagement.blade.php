<div class="col-xl-12 col-xxl-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">مدیریت شعب، واحدها، پست ها</h4>

        </div>
        <div class="card-body">

            <div class="row">
                <!-- branch -->
                <h4 class="card-title">شعبه</h4>
                <div class="row">
                    <div class="col-md-4 col-12 mb-4">
                        <input type="text" wire:model="newBranch" class="form-control" value="{{ old('newBranch') }}"
                            placeholder="نام شعبه جدید">
                        @error('newBranch')
                        <span style="color: red" class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-4 col-12 mb-4">
                        <select wire:model="selectedBranch" class="form-select">
                            <option value="">انتخاب</option>
                            @foreach ($branches as $bid => $branchName)
                            <option value="{{ $bid }}">{{ $branchName }}</option>
                            @endforeach
                        </select>

                    </div>



                    <div class="col-md-2 col-12 mb-4 ml-9 ">
                        @if ($newBranch)

                        <button wire:click="branchEditSave" type="button" class="btn rounded-pill btn-primary">{{
                            $selectedBranch?
                            'بروزرسانی' : 'ذخیره' }}</button>

                        @endif

                    </div>
                    <div class="col-md-2 col-12 mb-4 ml-9">

                        @if ($selectedBranch)

                        <button wire:click="branchRemove" type="button" class="btn rounded-pill btn-danger">حذف</button>

                        @endif

                    </div>

                </div>






                <!-- ./branch -->
                <hr>


                <!-- unit -->
                <h4 class="card-title">واحد</h4>

                <div class="row">


                    <div class="col-md-4 col-12 mb-4">
                        <input type="text" wire:model="newUnit" class="form-control" value="{{ old('newUnit') }}"
                            placeholder="نام واحد جدید">
                        @error('newUnit')
                        <span style="color: red" class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-4 col-12 mb-4">
                        <select wire:model="selectedUnit" class="form-select">
                            <option value="">انتخاب</option>
                            @foreach ($units as $uid => $unitName)
                            <option value="{{ $uid }}">{{ $unitName }}</option>
                            @endforeach
                        </select>

                    </div>



                    <div class="col-md-2 col-12 mb-4 ml-9 ">
                        @if ($newUnit)

                        <button wire:click="unitEditSave" type="button" class="btn rounded-pill btn-primary">{{
                            $selectedUnit?
                            'بروزرسانی' : 'ذخیره' }}</button>

                        @endif

                    </div>
                    <div class="col-md-2 col-12 mb-4 ml-9">

                        @if ($selectedUnit)

                        <button wire:click="unitRemove" type="button" class="btn rounded-pill btn-danger">حذف</button>

                        @endif

                    </div>

                </div>
                <!-- ./unit -->
                <hr>

                <!-- post -->
                <h4 class="card-title">پست</h4>

                <div class="row">


                    <div class="col-md-4 col-12 mb-4">
                        <input type="text" wire:model="newPost" class="form-control" value="{{ old('newPost') }}"
                            placeholder="نام پست جدید">
                        @error('newPost')
                        <span style="color: red" class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-4 col-12 mb-4">
                        <select wire:model="selectedPost" class="form-select">
                            <option value="">انتخاب</option>
                            @foreach ($posts as $pid => $postName)
                            <option value="{{ $pid }}">{{ $postName }}</option>
                            @endforeach
                        </select>

                    </div>



                    <div class="col-md-2 col-12 mb-4 ml-9 ">
                        @if ($newPost)

                        <button wire:click="postEditSave" type="button" class="btn rounded-pill btn-primary">{{
                            $selectedPost?
                            'بروزرسانی' : 'ذخیره' }}</button>

                        @endif

                    </div>
                    <div class="col-md-2 col-12 mb-4 ml-9">

                        @if ($selectedPost)

                        <button wire:click="postRemove" type="button" class="btn rounded-pill btn-danger">حذف</button>

                        @endif

                    </div>

                </div>
                <!-- ./post -->
            </div>
        </div>
    </div>