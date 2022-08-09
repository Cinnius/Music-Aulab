<x-layout>
    <div class="container my-5">
        <h1 class="pt-5">Login</h1>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="my-3" method="POST" action="{{route('login')}}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
         
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
       
        
            <button type="submit" class="btn btn-primary">Accedi</button>
        </form>
        <div class="my-5">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur reiciendis sit, itaque ab quo nam iusto dicta mollitia voluptas beatae odit nobis iste porro molestiae consequatur placeat rem temporibus quia!
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim dolorem ab impedit quos quod quaerat. At laborum ullam dolore vero. Nisi odio pariatur aspernatur eveniet? Sunt id nesciunt dolore mollitia.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores nostrum veniam consequatur consectetur optio laudantium nobis sint expedita odit. Magni quisquam excepturi doloremque delectus velit voluptate. Eum incidunt odio libero.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, neque laborum qui quam ipsam fuga porro recusandae voluptatem odit officia, sint quis nesciunt dicta consequatur aliquam possimus similique vel provident?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam accusamus at necessitatibus, ab sapiente ipsam quidem laudantium quos suscipit dolorum sint perspiciatis quis aliquid quod animi nulla esse perferendis sunt!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, tenetur. Aspernatur quae earum explicabo id voluptatum repudiandae ea quas consequuntur laudantium obcaecati, vitae in nobis asperiores cum eius magni temporibus?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque maxime nulla provident, enim, rem deserunt magnam quae praesentium corporis laboriosam iusto cumque! Recusandae earum nam commodi molestias quam quisquam nulla?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti eius autem porro eaque illo sapiente recusandae nostrum illum vel asperiores, est quia eligendi vero dolores, iusto repudiandae earum nobis ut.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus saepe mollitia molestiae. Non ea officia magni odio. Animi labore sapiente esse ab omnis laboriosam facere numquam ex cum? Earum, quia.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta quidem similique ipsam qui harum accusantium! Aut voluptate architecto id ratione! Sequi aliquid reprehenderit perferendis numquam cum animi odio impedit dicta!
            </p>
        </div>
    </div>

</x-layout>