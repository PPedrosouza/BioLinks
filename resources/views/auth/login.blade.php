<div>
    <h1>Login</h1>

    <form action="/login" method="POST">
        @csrf
        
        <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
        <input type="password" name="password" id="password" placeholder="Senha">

        <button>Logar</button>
    </form>
</div>
