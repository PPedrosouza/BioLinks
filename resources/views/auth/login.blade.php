<div>
    <h1>Login</h1>

    @if($message = session()->get('message'))
        <span>{{ $message }}</span>
    @endif

    <form action="/login" method="POST">
        @csrf
        
        <div class="">
            <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}">

            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div class="">
            <input type="password" name="password" id="password" placeholder="Senha">

            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <button>Logar</button>
    </form>
</div>
