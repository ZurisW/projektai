<!doctype html>
<html lang="pl">

@include('shared.header')

<body>
    @include('shared.nav')
    <div class="container mt-3 mb-5">
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div class="mt-3 mb-1">
            <div class="row">
                <h1>Add post</h1>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{route('posts.store')}}">
            @csrf
            <div class="form-group mb-4">

                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="hidden" name="date" value="{{ $date }}">

                {{-- city --}}
                <select class="form-select mb-4" name="city_id" aria-label="select">
                    @forelse ($cities as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                    @empty
                        No cities
                    @endforelse
                  </select>

                  {{-- category --}}
                <select class="form-select mb-4" name="category_id" aria-label="select">
                    @forelse ($categories as $ca)
                    <option value="{{$ca->id}}">{{$ca->name}}</option>
                    @empty
                        No categories
                    @endforelse
                  </select>

                <label for="title">Title</label>
                <input id="title" name="title" type="text" placeholder="Title"
                    class="@error('title') is-invalid @else is-valid @enderror form-control">
                <div class="invalid-feedback">Invalid title!</div>
            </div>
            <div class="form-group mb-4">
                <label for="content">Content of the ad</label><br>
                <textarea id="content" name="content" type="text"
                    class="@error('content') is-invalid @else is-valid @enderror form-control" rows="5" placeholder="Content of the advertisement"></textarea>
                <div class="invalid-feedback">Invalid description!</div>
            </div>
            {{-- <div class="form-group mb-4">
                <label for="date">Date</label>
                <input id="date" name="date" type="text" placeholder="Date"
                    class="@error('date') is-invalid @else is-valid @enderror form-control">
                <div class="invalid-feedback">Invalid date!</div>
            </div> --}}
            <div class="form-group mb-4">
                <label for="price">Price</label>
                <input id="price" name="price" type="text" placeholder="Price"
                    class="@error('price') is-invalid @else is-valid @enderror form-control">
                <div class="invalid-feedback">Invalid price!</div>
            </div>
            <div class="form-group mb-4">
                <label for="image">Image</label>
                <input id="image" name="image" type="text" placeholder="https://maupka.jpg"
                    class="@error('image') is-invalid @else is-valid @enderror form-control">
                <div class="invalid-feedback">Invalid image!</div>
            </div>

            <label for="star">Promoted ad?</label>
            <select class="form-select mb-4" name="star" aria-label="select">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>

            <input type="submit" class="btn btn-dark" value="Add">

        </form>
    </div>


    @include('shared.footer')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
