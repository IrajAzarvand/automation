<div class="col-xl-12 col-xxl-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">مدیریت شعب، واحدها، پست ها</h4>
        </div>
        <div class="card-body">
            <div>


                <h4 class="card-title">شعبه</h4>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" wire:model="newBranch" class="form-control input-rounded"
                            placeholder="نام شعبه جدید را وارد کنید">
                        @error('newBranch')
                            <span style="color: red" class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <select wire:model="selectedBranch" class="form-control default-select form-control-lg">
                            <option value="0">انتخاب کنید</option>
                            @foreach ($branches as $bid => $branch)
                                <option value="{{ $bid }}">{{ $branch }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex-wrap pb-0 border-0">
                        <div class="d-sm-flex d-block">
                            @if ($newBranch)

                                <button wire:click="branchEditSave" class="btn-sm btn-primary btn-rounded ">{{ $selectedBranch? 'بروزرسانی' : 'ذخیره' }}
                                </button>
                            @endif
                            @if ($selectedBranch)
                                <button wire:click="branchRemove" type="submit" class="btn-sm ml-3 btn-danger btn-rounded ">حذف
                                </button>
                            @endif
                        </div>
                    </div>

                </div>

                <hr>
                {{-- ====================================================================== --}}


                <h4 class="card-title">واحد</h4>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" wire:model="newUnit" class="form-control input-rounded"
                            placeholder="نام واحد جدید را وارد کنید" value="{{ old('fName') }}">
                        @error('newUnit')
                            <span style="color: red" class="error">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="form-group col-md-4">
                        <select wire:model="selectedUnit" class="form-control default-select form-control-lg">
                            <option value="0">انتخاب کنید</option>
                            @foreach ($units as $uid => $unit)
                                <option value="{{ $uid }}">{{ $unit }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex-wrap pb-0 border-0">
                        <div class="d-sm-flex d-block">

                            @if ($newUnit)
                                <button wire:click="unitEditSave" class="btn-sm btn-primary btn-rounded ">{{ $selectedUnit? 'بروزرسانی' : 'ذخیره' }} </button>
                            @endif
                            @if ($selectedUnit)
                            <button wire:click="unitRemove" type="submit" class="btn-sm ml-3 btn-danger btn-rounded ">حذف
                            </button>
                        @endif


                        </div>
                    </div>

                </div>
                <hr>
                {{-- ====================================================================== --}}


                <h4 class="card-title">پست</h4>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" wire:model="newPost" class="form-control input-rounded"
                            placeholder="نام پست جدید را وارد کنید" value="{{ old('fName') }}">
                        @error('newPost')
                            <span style="color: red" class="error">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="form-group col-md-4">
                        <select wire:model="selectedPost" class="form-control default-select form-control-lg">
                            <option value="0">انتخاب کنید</option>
                            @foreach ($posts as $pid => $post)
                                <option value="{{ $pid }}">{{ $post }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex-wrap pb-0 border-0">
                        <div class="d-sm-flex d-block">
                            @if ($newPost)
                                <button wire:click="postEditSave" class="btn-sm btn-primary btn-rounded ">{{ $selectedPost? 'بروزرسانی' : 'ذخیره' }} </button>
                            @endif
                            @if ($selectedPost)
                            <button wire:click="postRemove" type="submit" class="btn-sm ml-3 btn-danger btn-rounded ">حذف
                            </button>
                        @endif
                        </div>
                    </div>

                </div>

                {{-- ====================================================================== --}}


            </div>




        </div>
    </div>
</div>
