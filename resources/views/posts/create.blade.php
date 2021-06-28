@extends("layouts.app")

@section('content')
<div class="container">
    <form action="/post" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="col-8 offset-2">
            <h1>Add new post</h1>
            <div class="form-group row">
                <label for="caption" class="col-md-4 col-form-label text-md-right">Caption</label>

                <div class="col-md-6">
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>
                <input type="file" name="image" id="image">

                @error('image')>
                    <strong>{{ $message }}</strong>
                @enderror
            </div>

            <div class="row">
                <button class="btn btn-primary">submit</button>
            </div>
        </div>
    </form>
</div>
@endsection