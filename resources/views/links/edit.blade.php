<div>
    <h1>Editar um link</h1>

    @if ($message = session()->get('message'))
        <span>{{ $message }}</span>
    @endif

    <form action="{{ route('links.edit', $link) }}" method="POST">
        @csrf
        @method('put')

        <div class="">
            <input type="link" name="link" id="link" placeholder="link" value="{{ old('link', $link->link) }}">

            @error('link')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div class="">
            <input type="name" name="name" id="name" placeholder="name"
                value="{{ old('name', $link->name) }}">

            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <button>Salvar</button>
    </form>
</div>
