<div>
    @if ($profilePhoto)
        <img src="{{ $profilePhoto->temporaryUrl() }}" alt class="rounded-circle">
    @else
        <img src="{{ $proImg }}" alt class="rounded-circle">
    @endif

    {{-- <div class="avatar-upload">
        <div class="avatar-edit">
            <input wire:model="profilePhoto" type='file' id="imageUpload" accept=".jpg" />
            <label for="imageUpload"></label>
        </div>
        <div class="avatar-preview" data-toggle="tooltip" title="اندازه بهینه تصویر 150×150 پیکسل است">
            @if ($profilePhoto)
                <div id="imagePreview" style="background-image: url({{ $profilePhoto->temporaryUrl() }});"
                    class="rounded-circle">
                </div>
            @else
                <div id="imagePreview" style="background-image: url({{ $proImg }});" class="rounded-circle">
                </div>
            @endif


        </div>
    </div>
    @if ($userHaveProfileImg)
        <a wire:click="confirmDelete('profileImage')" class="btn btn-primary btn-rounded btn-sm mb-2">حذف تصویر پروفایل</a>
    @endif --}}
</div>
