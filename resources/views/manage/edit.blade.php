<h1>Edit Pets</h1>
<a href="{{ url('/') }}/home">back</a>
<form method="POST" action="{{ url('/') }}/home/{{ $animals->id }}">

	{{ csrf_field() }}
	{{ method_field('PUT') }}

	@include("manage/form")

	<div>
		<button type="submit">Update</button>
	</div>
</form>
