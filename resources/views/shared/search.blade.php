<div class="col-md-8 offset-md-2 mt-5 mb-5 pt-3">
    <div class="input-group mb-3">
        <input type="text" class="form-control shadow-none rounded-0" style="border: 1px solid #6c757d;" placeholder="Search" aria-label="">
        <div class="dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle shadow-none rounded-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Choose a city
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @forelse ($cities as $ci)
                    <a class="dropdown-item" href="#">{{$ci->name}}</a>
                @empty
                    Nie ma miast. Dziwne.
                @endforelse
            </div>
        </div>
        <div class="input-group-append rounded-0">
            <span class="input-group-text"><i class="fa fa-search" style="font-size: 24px;"></i></span>
        </div>
    </div>
</div>
