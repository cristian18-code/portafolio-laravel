@extends('layout')

@section('title', 'Portafolio | Editar proyecto')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto">

				@include('partials.validation-errors')

				<form class="bg-white shadow rounded py-3 px-4"
					action="{{ route('projects.update', $project->id) }}"
					method="POST">

					<h1 class="display-4">
						Editar proyecto
					</h1>
					<hr>
					{{ method_field('patch') }}
					@include('projects._form', ['btnText'=>'Actualizar'])
				</form>
			</div>
		</div>
	</div>
@endsection