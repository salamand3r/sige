@extends('template')
@section('breadcrumb')
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="{{ route('home') }}">Home</a></li>
                <li><i class="fa fa-user-md"></i>Docentes</li>
                <li>Nuevo</li>
            </ol>
        </div>
    </div>
@endsection
@section('main')
    <div class="row">
        <div class="col-xs-12 col-lg-8">
            <section class="panel">
                <header class="panel-heading">
                    Nuevo Docente
                </header>
                <div class="panel-body">
                    {!! Form::open(array('route' => 'teachers.store', 'method' => 'post', 'id' => 'teachersNew', 'class' => 'form-horizontal')) !!}
                    <div class="col-md-12">
                        @include('teachers.partials.fields')
                    </div>
                    {!! Form::close() !!}
                </div>
            </section>
        </div>
    </div>
@endsection