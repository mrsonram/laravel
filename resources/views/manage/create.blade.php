<h1>Create New Pets</h1>
<a href="{{ url('/') }}/home">back</a>
<form action="{{ url('/') }}/home" method="POST">

	{{ csrf_field() }}
	{{ method_field('POST') }}

	@include("manage/form")

	<div>
		<button type="submit">Create</button>
	</div>
</form>
