@extends('layouts.app')

@section('content')
<h1>Todos</h1>

@if(count($todos) > 0)
	<div class="card card-body mb-2">
		<ul class="list-group list-group-flush">
			@foreach($todos as $todo)
				<li class="list-group-item"><a href="todo/{{ $todo->id }}">{{ $todo->text }}</a> <small class="badge badge-danger text-wrap font-weight-bold text-white text-monospace">{{ $todo->due }}</small></li>
			@endforeach
		</ul>
	</div>
@endif
@endsection