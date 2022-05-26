<h1 class="text-center mb-5">Advertisements</h1>
<div class="container">
    <div id="products" class="row ">
        @forelse ($cheap_posts as $p)
        <div class="item col-xl-4 col-lg-6">
            <div class="thumbnail">
                {{-- {{route('posts.show', ['id' => $p->id])}} --}}
                <a href="" class="text-decoration-none text-reset">
                <img class="group list-group-image img-thumbnail" src="{{ $p->image }}" alt="" />
                <div class="caption mt-3 mb-3">
                    <h4 class="group inner list-group-item-heading ptyt"><span>{{ $p->title }}</span></h4>
                </a>
                    <p class="group inner mb-4 popis">
                       {{ $p->content }}
                    </p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6 mt-1">
                            <p class="lead">${{ $p->price }}</p>
                        </div>
                        <div class="col-xs-12 col-md-6 mt-1 ms-auto d-flex justify-content-end">
                            <a class="text-decoration-none text-reset" href=""><i class="fas fa-heart btn btn-outline-dark"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
            Brak ogłoszeń. Dziwne.
        @endforelse
    </div>
</div>


