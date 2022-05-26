@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <p>
            {{ __('Whoops! Something went wrong.') }}
        </p>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
