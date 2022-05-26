<h1 class="text-center mb-5">Main categories</h1>
<div class="container-fluid">
    <div class="row justify-content-center">
        @forelse ($categories_12 as $c)
            <div class="col-lg-2 col-md-4 col-sm-6 mb-5 text-center">
                <a href="{{route('categories.show', ['id' => $c->id])}}" class="text-decoration-none text-reset">
                <img src="{{$c->image}}" class="img-thumbnail col-lg-10 border-0 rounded-circle" alt="">
                <h4><span>{{$c->name}}</span></h4>
                </a>
            </div>
        @empty
            No categories :(
        @endforelse
    </div>
</div>
