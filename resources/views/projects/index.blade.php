@extends('layout')

@section('title') {{__('Briefcase')}} @endsection

@section('content')
	<div class="container">
		<div class="d-flex justify-content-between align-items-center">
			<h1 class="display-4 mb-0">{{__('Briefcase')}}</h1>
			@auth
				<a class="btn btn-primary"
					href="{{ route('projects.create') }}">
					Agregar nuevo proyecto
				</a>
			@endauth
		</div>
		<hr>
		<p class="lead text-secondary">proyectos realizados Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae reiciendis quaerat incidunt.</p>

		<ul class="list-group">
			@forelse($projects as $projectsItem)
				<li class="list-group-item border-0 mb-3 shadow-sm">
					<a class=" text-secondary d-flex justify-content-between align-items-center"
						href=" {{ route('projects.show', $projectsItem->id) }}">
					<span class="font-weight-bold">
						{{ $projectsItem->title }}
					</span>
					<span class="text-black-50">
						{{ $projectsItem->created_at->format('d/m/Y') }}
					</span>
					</a>
				</li>
			@empty
				<li class="list-group-item border-0 mb-3 shadow-sm">
					No hay proyectos para mostrar
				</li>
			@endforelse
			{{ $projects->links() }}
		</ul>
	</div>
@endsection