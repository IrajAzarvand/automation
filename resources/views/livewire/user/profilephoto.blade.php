<div>
    @if ($profilePhoto)
        {{-- <img src="{{ $profilePhoto->temporaryUrl() }}" alt class="rounded-circle"> --}}
        <img src="{{ $profilePhoto->temporaryUrl() }}" alt="user-avatar" class="d-block rounded" height="100"
            width="100" id="uploadedAvatar">
    @else
        {{-- <img src="{{ $proImg }}" alt class="rounded-circle"> --}}
        <img src="{{ $proImg }}" alt="user-avatar" class="d-block rounded" height="100" width="100"
            id="uploadedAvatar">
    @endif
</div>
