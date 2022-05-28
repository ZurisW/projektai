<h3 class="text-left mt-5 mb-3">Filters</h3>
<div class="mb-2 row">
    <div class="input-group mb-3 col-md-4 col-sm-3 col-2">
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
        <div class="row">
            <div class="input-group-prepend col-md-3 col-sm-3 col-2 ps-md-5 ps-sm-0 ps-0 pe-0">
                <span class="input-group-text rounded-0" id="from">Price</span>
            </div>
            <div class="col-md-2 col-sm-2 px-0 col-2">
                <input type="text" class="form-control rounded-0" placeholder="From" aria-label="pricefrom" aria-describedby="from" size="10">
            </div>
            <div class="col-md-2 col-sm-2 px-0 col-2">
                <input type="text" class="form-control rounded-0" placeholder="To" aria-label="priceto" aria-describedby="to" size="10">
            </div>

            <div class="input-group-prepend col-md-3 col-sm-3 ps-5 pe-0 col-3">
                <span class="input-group-text rounded-0" id="from">Sort</span>
            </div>
            <button class="btn btn-outline-secondary dropdown-toggle shadow-none rounded-0 col-md-2 col-sm-2 col-2 px-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                by
            <div class="dropdown-menu col-md-2 col-sm-2 px-0" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Cheapest</a>
                <a class="dropdown-item" href="#">Most expensive</a>
            </div>
        </div>
    </div>
</div>
