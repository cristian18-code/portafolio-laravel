		@csrf

		<div class="form-group">
			<label for="title">Titulo del proyecto</label><br>
			<input class="form-control bg-light border-0 shadow-sm"
				type="text"
				name="title"
				value="{{ old('title', $project->title) }}" />
		</div>

		<div class="form-group">
			<label for="title">Dirección del proyecto</label><br>
			<input class="form-control bg-light border-0 shadow-sm"
				type="text"
				name="url"
				value="{{ old('url', $project->url) }}" />
		</div>

		<div class="form-group">
			<label for="title">Descripcion del proyecto</label><br>
			<textarea class="form-control bg-light border-0 shadow-sm"
				name="description">{{ old('description', $project->description) }}
			</textarea>
		</div>

		<button class="btn btn-primary btn-lg btn-block">
			{{ $btnText }}
		</button>

		<a class="btn btn-link btn-block"
			href=" {{ route('projects.index') }} ">
			Cancelar
		</a>