<!doctype html>
<html lang="en">
@include('shared.header')
<body>
    @include('shared.nav')

    <div class="container">

        @include('shared.search')

        <div class="row">
            <div class="col-xl-7 col-lg-10">
                @if ( !empty($post->image))
                                <img class="group list-group-image img-thumbnail" src="{{ $post->image }}" alt="" />
                            @else
                                <img class="group list-group-image img-thumbnail" src="https://www.staticwhich.co.uk/static/images/products/no-image/no-image-available.png" alt="" />
                            @endif
            </div>
            <div class="col-xl-4 col-lg-4 mt-5">
                <div class="row border-start border-dark">
                    <h4 class="mb-4">{{ $post->user->name }}</h4>

                    <p>Phone: {{ $phone }}</p>
                    <p>Email: {{ $email }}</p>

                </div>
                <div class="row border-start border-dark mt-5">
                    <h4 class="mb-4">City</h4>
                <p>{{ $post->city->name }}</p>
                </div>
                @if (Auth::check() && Auth::user()->isAdmin())
                <div class="row">
                    <a role="button" href="{{ route('posts.edit', $post->id) }}" class="btn btn-dark mt-5">Change the ad</a>
                    <form method="POST" class="px-0" action="{{ route('posts.destroy', $post->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-dark mt-3 w-100">Delete the ad</button>
                    </form>
                </div>
                @endif


            </div>
            <div class="w-100 mt-4"></div>
            <div class="col mb-5">
                <p class="mb-1"><small>Added: {{ $post->date }}</small></p>
                <h3>{{ $post->title }}</h3>
                <p class="lead fs-3">${{ $post->price }}</p>
                <span>{{ $name }}</span>
                <h3>Description</h3>
                <p>{{ $post->content }}</p>
            </div>

        </div>

        <div>

        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>
@include('shared.footer')
</html>
