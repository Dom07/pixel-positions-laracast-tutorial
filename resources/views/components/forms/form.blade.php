<form {{ $attributes(["class" => "max-w-2xl mx-auto space-y-6", "method" => "GET"]) }}>
    @if ($attributes->get('method', 'GET') !== 'GET')
        @csrf
        @method($attributes->get('method'))
    @endif
    @if ($errors->any())
        <div class="text-sm text-red-500 mt-1">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ $slot }}
</form>
