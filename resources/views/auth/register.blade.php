<x-layout>
    <div class="container">
        <h1>Register</h1>

        <form method="POST" action="{{route('register')}}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Scegli una Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label class="form-label">Conferma la Password</label>
                <input type="password" class="form-control" name="password_confirmation">
            </div>
        
            <button type="submit" class="btn btn-primary">Registrati</button>
        </form>
    </div>
</x-layout>