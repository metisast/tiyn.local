@extends('admin.template._start')

@section('content')
    <section class="content-header">
        <h1>
            {{trans('interface.adminProductsAdd')}}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.index')}}"><i class="fa fa-dashboard"></i>{{trans('interface.adminStatus')}}</a></li>
            <li><a href="{{route($lang.'.admin.products.index')}}">{{trans('interface.adminProducts')}}</a></li>
            <li class="active">{{trans('interface.adminProductsAdd')}}</li>
        </ol>
    </section>
@stop