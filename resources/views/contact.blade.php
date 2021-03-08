@extends('layout')

@section('title'){{ __('Contact') }}@endsection

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto">

				<form class="bg-white shadow rounded py-3 px-4"
					action="{{ route('contact.message') }}"
					method="POST">
					<h1 class="display-4">{{ __('Contact')}} </h1>
					<hr>
					@csrf
					<div class="form-group">
						<label for="nombre">{{__('Nombre')}}</label>
						<input class="form-control bg-light shadow-sm
							@error('nombre') is-invalid @else border-0 @enderror"
							type="text"
							id="nombre"
							name="nombre"
							placeholder="Nombre..."
							value="{{ old('nombre') }}" />
							@error('nombre')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
					</div>

					<div class="form-group">
						<label for="email">{{__('Email')}}</label>
						<input class="form-control bg-light shadow-sm
							@error('email') is-invalid @else border-0 @enderror"
							type="email"
							id="email"
							name="email"
							placeholder="{{__('Email')}}..."
							value="{{ old('email') }}" />
							@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
					</div>

					<div class="form-group">
						<label for="subject">{{__('Subject')}}</label>
						<input class="form-control bg-light shadow-sm
							@error('subject') is-invalid @else border-0 @enderror"
							type="text"
							id="subject"
							name="subject"
							placeholder="{{__('Subject')}}..."
							value="{{ old('subject') }}" />
							@error('subject')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
					</div>

					<div class="form-group">
						<label for="content">{{__('Content')}}</label>
						<textarea class="form-control bg-light shadow-sm
							@error('content') is-invalid @else border-0 @enderror"
							name="content"
							placeholder="Escribe aqui el contenido del mensaje...">
							{{ old('content') }}</textarea>
							@error('content')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
					</div>
					<button class="btn btn-primary btn-lg btn-block">{{ __('Send') }}</button><br>
				</form>
			</div>
		</div>

	</div>
@endsection