@extends('admin.template._start')

@section('content')
    <section class="content-header">
        <h1>
            {{trans('interface.adminStatus')}}
            <small>{{trans('interface.adminStatusTitle')}}</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i> {{trans('interface.adminStatus')}}</li>
        </ol>
    </section>
@stop