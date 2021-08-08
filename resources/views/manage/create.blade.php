<h1>Create New Pets</h1>
<a href="{{ url('/') }}/home">back</a>
<form action="{{ url('/') }}/home" method="POST">

	{{ csrf_field() }}
	{{ method_field('POST') }}

	@include("manage/form")
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Post Image:</strong>
             <input type="file" name="image" class="form-control" placeholder="Post Title">
            @error('image')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
           @enderror
        </div>
    </div>

	<div>
		<button type="submit">Create</button>
	</div>
</form>
