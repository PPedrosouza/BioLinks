<div>
    <h1>Register</h1>

    @if ($message = session()->get('message'))
        <span>{{ $message }}</span>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="">
            <input type="name" name="name" id="name" placeholder="name" value="{{ old('name') }}">

            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div class="">
            <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}">

            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div class="">
            <input type="email_confirmation" name="email_confirmation" id="email_confirmation"
                placeholder="Email Confirmation">

            @error('email_confirmation')
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

        <button>Register</button>
    </form>
</div>
