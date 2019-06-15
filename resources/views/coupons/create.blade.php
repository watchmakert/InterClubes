@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cupón</div>

                <div class="panel-body">                    
                    {{ Form::open(['route' => 'coupons.store', 'files'=>true]) }}

                        @include('coupons.partials.form')
                        
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection