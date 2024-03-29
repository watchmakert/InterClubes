@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Marcas</div>

                <div class="panel-body">                    
                    {!! Form::model($brand, ['route' => ['brands.update', $brand->id],
                    'method' => 'PUT','files'=>true]) !!}

                        @include('brands.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection