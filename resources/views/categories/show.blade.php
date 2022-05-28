<!doctype html>
<html lang="en">
@include('shared.header')

<body>
    @include('shared.nav')

    <div class="container">

        @include('shared.search')

        @include('categories.filter')

        <hr>

        <h3 class="text-left mb-0">We found
        @if (count($posts) > 50)
            over 50 advertisements!
        @elseif (count($posts) > 100)
            over 100 advertisements!
        @else
            many advertisements!
        @endif</h3>
        <div id="products" class="row mb-5">
            @forelse ($posts as $p)
                <div class="item col-xl-4 col-lg-6">
                    <div class="thumbnail">
                        <div class="caption mt-3 mb-3">
                            <a href="{{route('posts.show', ['id' => $p->id])}}" class="text-decoration-none text-reset">
                                <img class="group list-group-image img-thumbnail" src="{{ $p->image }}" alt="" />
                                <h4 class="group inner list-group-item-heading ptyt"><span>{{ $p->title }}</span></h4>
                            </a>
                            <div class="row mt-5">
                                <p class="lead mb-0">{{$p->city->name}}, {{ $p->date }}</p>
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead fs-3">${{ $p->price }}</p>
                                </div>
                                <div class="col-xs-12 col-md-6 mt-2 ms-auto d-flex justify-content-end">
                                    <a class="text-decoration-none text-reset" href=""><i
                                            class="fas fa-heart btn btn-outline-dark"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                No ads :(
            @endforelse

            <div class="d-flex justify-content-center">
                {!! $posts->links() !!}
            </div>
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
