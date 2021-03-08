@extends('layout')

@section('title', 'Portafolio | '. $project->title)

@section('content')
	<div class="container">
		<div class="bg-white p-5 shadow rounded">

			<h1 class="display-4">
				{{ $project->title }}
			</h1>

			<p class="text-secondary">
				{{ $project->description }}
			</p>
			<p class="text-black-50">
				{{ $project->created_at->diffForHumans() }}
			</p>

			<div class="d-flex justify-content-between align-items-center">

				<a class="btn btn-outline-primary"
					href=" {{ route('projects.index') }} ">
					Regresar
				</a>

				@auth

					<div class="btn-group btn-group-sm">
						<a class="btn btn-primary"
							href="{{ route('projects.edit', $project->id) }}">
							Editar
						</a>

						<a class="btn btn-danger"
							href="#"
							onclick="document.getElementById('deleteProyect').submit()">
							Eliminar
						</a>
					</div>

					<form class="d-none"
						action="{{ route('projects.destroy', $project->id) }}"
						id="deleteProyect"
						method="POST">
						@csrf
						{{ method_field('DELETE') }}
					</form>
				@endauth
			</div>
		</div>
	</div>
@endsection