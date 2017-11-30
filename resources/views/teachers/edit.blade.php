@extends('template')
@section('main')
    <div class="row">
        <div class="col-xs-12 col-lg-8">
            <section class="panel">
                <header class="panel-heading">
                    Editar {{ $teacher->first_name }}
                </header>
                <div class="panel-body">
                    {!! Form::model($teacher, array('route' => ['teachers.update', $teacher->id], 'method' => 'put', 'id' => 'teachersNew', 'class' => 'form-horizontal')) !!}
                    <div class="col-md-12">
                        @include('teachers.partials.fields')
                    </div>
                    {!! Form::close() !!}
                </div>
            </section>
        </div>
    </div>
@endsection