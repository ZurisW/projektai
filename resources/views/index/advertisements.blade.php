<h1 class="text-center mb-5">Advertisements</h1>
<div class="container">
    <div id="products" class="row mb-5">
        @forelse ($cheap_posts as $p)
            <div class="item col-xl-4 col-lg-6">
                <div class="thumbnail">
                    <div class="caption mt-3 mb-3">
                        <a href="{{route('posts.show', $p->id)}}" class="text-decoration-none text-reset">
                            @if ( !empty($p->image))
                                <img class="group list-group-image img-thumbnail" src="{{ $p->image }}" alt="" />
                            @else
                                <img class="group list-group-image img-thumbnail" src="https://www.staticwhich.co.uk/static/images/products/no-image/no-image-available.png" alt="" />
                            @endif


                            <h4 class="group inner list-group-item-heading ptyt" style="height: 57.6px;"><span>{{ $p->title }}</span></h4>

                        </a>
                        {{-- <p class="group inner mb-4 popis">
                            {{ $p->content }}
                        </p> --}}
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
    </div>
</div>
