<div class="form-group">
	{{ Form::label('name', 'Nombre del cupón') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('imgUrl', 'imagen') }}
	{{ Form::file('imgUrl', null, ['class' => 'form-control-file']) }}
</div>
<div class="form-group">
	{{ Form::label('description', 'Descripción') }}
	{{ Form::text('description', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('startDate', 'Fecha de inicio') }}
	{{ Form::dateTime('startDate', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('endingDate', 'Fecha de finalización') }}
	{{ Form::dateTime('endingDate', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('active', 'Estado del cupón') }}
	<label>
		{{ Form::radio('active', True) }} Activo
	</label>
	<label>
		{{ Form::radio('active', False) }} Inactivo
	</label>
</div>
<div class="form-group">
	{{ Form::label('idBrand', 'Id de la marca') }}
	{{ Form::number('idBrand', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('slug', 'Url amigable') }}
	{{ Form::text('slug', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')
	<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
	<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
	<script>
		$(document).ready(function(){
			$("#name, #slug").stringToSlug({
				callback: function(text){
					$("#slug").val(text);
				}
			})
		})

		CKEDITOR.config.height = 400;
		CKEDITOR.config.width = 'auto';
		CKEDITOR.replace('description');
	</script>
@endsection