@extends("layouts.app")

@section('content')
<div class="container">
    <form action="/post" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>
                        Add New Post
                    </h1>
                </div>

                <div class="form-group row">
                    <label for="caption" class="col-form-label">{{ __('Caption') }}</label>

                    <input id="caption" type="text"
                        class="form-control @error('caption') is-invalid @enderror" 
                        name="caption"
                        value="{{ old('caption') }}" 
                        autocomplete="caption">

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>        

                <div class="row">
                    <label for="image" class="col-form-label">Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row mt-3">
                    <button class="btn btn-primary">
                        Add new post
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection