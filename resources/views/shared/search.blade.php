<div class="col-md-8 offset-md-2 mt-5 mb-5 pt-3">
    <div class="input-group mb-3">

    {{-- <form action="{{ route('index') }}" method="post">
    @csrf --}}
        <input type="text" name="title" class="form-control shadow-none rounded-0" style="border: 1px solid #6c757d;" placeholder="Search" aria-label="">
        <div class="dropdown">
            <select class="form-select shadow-none border border-dark rounded-0" name="city_id" aria-label="select">
                <option selected value="%">Any city</option>
                @forelse ($cities as $c)
                <option value="{{$c->id}}">{{$c->name}}</option>
                @empty
                    No cities
                @endforelse
            </select>





        </div>
        {{-- <input type="submit"> --}}
        <div class="input-group-append rounded-0">
            <span class="input-group-text"><i class="fa fa-search" style="font-size: 24px;"></i></span>
        </div>
    {{-- </form> --}}
    </div>
</div>
