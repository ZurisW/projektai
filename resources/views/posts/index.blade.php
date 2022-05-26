<!doctype html>
<html lang="en">
@include('shared.header')
<body>
    @include('shared.nav')

    {{-- szukańsko --}}
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
