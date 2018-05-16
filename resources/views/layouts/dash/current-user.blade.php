@php
    $user = Auth::user();
@endphp

<div class="navbar-text ml-auto">
    <span class="badge badge-light badge-pill">{{ $user->rol }}</span>
    <span class="badge badge-dark badge-pill text-uppercase">{{ $user->name }}</span>
</div>
