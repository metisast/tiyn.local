@extends('admin.template._start')

@section('content')
    <section class="content-header">
        <h1>
            {{ trans('interface.adminProductsSales') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.index')}}"><i class="fa fa-dashboard"></i>{{trans('interface.adminStatus')}}</a></li>
            <li class="active">{{trans('interface.adminProductsSales')}}</li>
        </ol>
    </section>
@stop