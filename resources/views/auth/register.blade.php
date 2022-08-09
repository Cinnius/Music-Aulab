<x-layout>
    <div class="container my-5">
        <h1 class="pt-5">Registrati</h1>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

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
        <div class="my-5">
            <h3>Termini di registrazione:</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur reiciendis sit, itaque ab quo nam iusto dicta mollitia voluptas beatae odit nobis iste porro molestiae consequatur placeat rem temporibus quia!
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim dolorem ab impedit quos quod quaerat. At laborum ullam dolore vero. Nisi odio pariatur aspernatur eveniet? Sunt id nesciunt dolore mollitia.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores nostrum veniam consequatur consectetur optio laudantium nobis sint expedita odit. Magni quisquam excepturi doloremque delectus velit voluptate. Eum incidunt odio libero.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, neque laborum qui quam ipsam fuga porro recusandae voluptatem odit officia, sint quis nesciunt dicta consequatur aliquam possimus similique vel provident?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam accusamus at necessitatibus, ab sapiente ipsam quidem laudantium quos suscipit dolorum sint perspiciatis quis aliquid quod animi nulla esse perferendis sunt!
            </p>
        </div>
    </div>
</x-layout>