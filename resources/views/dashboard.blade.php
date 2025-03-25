<div>
    <h1>Dashboard</h1>

    @if ($message = session()->get('message'))
        <span>{{ $message }}</span>
    @endif

    <ul>
        @foreach ($links as $link)
            <li>
                <a href="{{ route('links.edit', $link) }}">{{ $link->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
