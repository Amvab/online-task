@extends('layout')
@section('title')Task Edit @endsection

@section('content')
    <div class="col-md-12" style="background-color: white">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">

                    {!! Form::model($task,['method'=>'PUT','route'=>['task.update',$task->id],'class'=>'form-horizontal','role'=>'form','files' => true]) !!}
                    <fieldset>
                        <div class="form-group">
                            {!! Form::label('title', 'Title', ['class' => 'col-md-2 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('title', $value = null, ['id'=>'title','placeholder'=>'Title','class'=>'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Short Descriptions', ['class' => 'col-md-2 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::textarea('description', $value = null, ['id'=>'description','placeholder'=>'Short Description','class'=>'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            </div>
                        </div>


                        <div class="form-group">
                            {!! Form::label('expiry', 'Expiry Date', ['class' => 'col-md-2 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::date('expiry_date', $value = null, ['id'=>'expiry','placeholder'=>'Expiry Date','class'=>'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('expiry_date') }}</span>
                            </div>
                        </div>


                        <div class="form-group">

                            <div class="col-md-10 col-md-offset-2">

                                {!! Form::submit('Update',['class'=>'btn btn-success']) !!}
                                <a href="{{ route('task.index') }}">
                                    {!! Form::button('Back',['class'=>'btn btn-primary']) !!}
                                </a>
                            </div>

                        </div>

                    </fieldset>


                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
@endsection
