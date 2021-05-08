@extends('layouts.app')
@section('title', '| Edit')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('users.edit') {{$users->name}}
        </div>
        <div class="panel-body">
            {{ Form::model($users, ['route' => ['users.update', $users->id],  'method' => 'PUT', 'class' => 'form-horizontal'  ])}}
            <div class="form-group">
                {{Form::label('name' ,trans('users.name'), ['class' => 'control-label col-sm-2'])}}
                <div class="col-sm-10">
                    {{Form::text('name',  $users->name, ['class'=>'form-control', 'placeholder' => trans('users.name')])}}
                </div>
            </div>
            <div class="form-group">
                {{Form::label('email' , trans('users.email'), ['class' => 'control-label col-sm-2'])}}
                <div class="col-sm-10">
                    {{Form::text('email',  $users->email, ['class'=>'form-control', 'placeholder' => trans('users.email')])}}
                </div>
            </div>
            <div class="form-group">
                {{Form::label('password' , trans('users.password'), ['class' => 'control-label col-sm-2'])}}
                <div class="col-sm-10">
                    {{Form::text('password',null, ['class'=>'form-control', 'placeholder' => trans('users.password') ])}}
                </div>
            </div>
            <div class="form-group">
                {{Form::label('permission' , trans('users.permission'), ['class' => 'control-label col-sm-2'])}}
                <div class="col-sm-10">
                    <div class="togglebutton">
                        <label>
                            <input {{$users->roles_id==1?'checked':''}} id="togglePermission" name="permission" type="radio" value="1"/>
                            @lang('users.superadmin')
                        </label>
                    </div>
                    <div class="togglebutton">
                        <label>
                            <input {{$users->roles_id==2?'checked':''}} id="togglePermission1" name="permission" type="radio" value="2"/>
                            Manager
                        </label>
                    </div>
                    <div class="togglebutton">
                        <label>
                            <input {{$users->roles_id==3?'checked':''}} id="togglePermission2" name="permission" type="radio" value="3"/>
                            Cashier
                        </label>
                    </div>
                    <div class="togglebutton">
                        <label>
                            <input {{$users->roles_id==4?'checked':''}} id="togglePermission3" name="permission" type="radio" value="4"/>
                            Pharmacist
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button class="btn btn-info" type="submit">
                        <i class="fa fa-pencil" aria-hidden="true"></i> @lang('button.update')
                    </button>
                </div>
            </div>
        {{ Form::close() }}
        <!-- end form -->
        </div>
        <!-- end div .panel-body -->
    </div>
    <!-- end div .panel -->
@endsection