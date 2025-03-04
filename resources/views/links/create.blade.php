<div>
    <h1>Criar um link</h1>

    @if ($message = session()->get('message'))
        <span>{{ $message }}</span>
    @endif

    <form action="{{ route('links.create') }}" method="POST">
        @csrf

        <div class="">
            <input type="link" name="link" id="link" placeholder="link" value="{{ old('link') }}">

            @error('link')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div class="">
            <input type="name" name="name" id="name" placeholder="name" value="{{ old('name') }}">

            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <button>Salvar</button>
    </form>
</div>
