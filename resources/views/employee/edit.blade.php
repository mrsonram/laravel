<h1>Edit Employee</h1>
<a href="{{ url('/') }}/employee">back</a>
<form method="POST" action="{{ url('/') }}/employee/{{ $employee->employee_id }}">

	{{ csrf_field() }}
	{{ method_field('PUT') }}

	@include("employee/form")

	<div>
		<button type="submit">Update</button>
	</div>
</form>
