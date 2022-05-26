<div class="mt-5 mb-5 row">
    <div class="input-group mb-3">
        <div class="dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle shadow-none rounded-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{$name}}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @forelse ($categories as $c)
                    <a class="dropdown-item" href="/offers/{{$c->id}}">{{$c->name}}</a>
                @empty
                    No cities :(
                @endforelse
            </div>
        </div>

    </div>
</div>
