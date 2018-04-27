@if(session('fail'))

<div class="alert alert-danger">
	<strong>Failed !! </strong> {{ session('fail') }}
</div>

@endif