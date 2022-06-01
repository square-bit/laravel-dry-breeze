@props(['status'])

@if ($status)
    <p {{ $attributes }}>
        {{ $status }}
    </p>
@endif
