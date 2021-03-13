@if ($session)
    <div class="alert alert-{{ $type }}">
        {{ $session }}
    </div>
@endif