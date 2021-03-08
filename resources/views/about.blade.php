@extends('layout')

@section('title') About @endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6">
				<img class="img-fluid mb-4" src="/img/about.svg" alt="Desarrollo Web">
			</div>
			<div class="col-12 col-lg-6">
				<h1 class="display-4 text-primary">
					{{ __('About') }}
				</h1>
				<p class="lead text-secondary">
					Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Rem asperiores cupiditate blanditiis nulla in tempora aut numquam officia neque suscipit, qui, unde nesciunt, inventore. Dolor harum optio maiores rem perspiciatis?
				</p>
				<a class="btn btn-lg btn-block btn-primary"
					href=" {{ route('contact') }} ">
					Contactame
				</a>
				<a class="btn btn-lg btn-block btn-outline-primary"
					href=" {{ route('projects.index') }} ">
					Portafolio
				</a>
			</div>
		</div>
	</div>
@endsection