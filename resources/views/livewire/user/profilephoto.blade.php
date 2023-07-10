<div>
    @if ($profilePhoto)
        <img src="{{ $profilePhoto->temporaryUrl() }}" alt class="rounded-circle">
    @else
        <img src="{{ $proImg }}" alt class="rounded-circle">
    @endif
</div>
