<div>
    <div class="avatar-upload">
        <div class="avatar-edit">
            <input wire:model="profilePhoto" type='file' id="imageUpload" accept=".jpg" />
            <label for="imageUpload"></label>
        </div>
        <div class="avatar-preview">
            @if ($profilePhoto)
                <div id="imagePreview" style="background-image: url({{ $profilePhoto->temporaryUrl() }});" class="rounded-circle">
                </div>
            @else
                <div id="imagePreview" style="background-image: url({{ $proImg }});" class="rounded-circle">
                </div>
            @endif
        </div>
    </div>
</div>
