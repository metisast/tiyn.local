@extends('admin.template._start')

@section('content')
    <section class="content-header">
        <h1>
            {{ trans('interface.adminProducts') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.index')}}"><i class="fa fa-dashboard"></i>{{trans('interface.adminStatus')}}</a></li>
            <li class="active">{{trans('interface.adminProducts')}}</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Поиск</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <form name="search" class="as-search">
                                <div class="col-md-3">
                                    <input type="text" class="form-control" placeholder="Название" name="title">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" placeholder="Имя" name="name">
                                </div>
                                <div class="col-md-3">
                                    <select name="count" class="form-control">
                                        <option value="0">Выберите количество</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="9">9</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <a class="glyphicon glyphicon-refresh" id="as-search-update"></a>
                                    <a class="glyphicon glyphicon-trash" id="as-search-clear"></a>
                                </div>
                            </form>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="view-table" class="table table-bordered table-hover dataTable" role="grid">
                                    <input type="hidden" data-path="{{route($lang.'.admin.products.store')}}" id="system-path">
                                    <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Название</th>
                                            <th>Описание</th>
                                            <th>Количество</th>
                                            <th colspan="2" class="text-center">Действия</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <!-- Action buttons -->
                            <div class="col-sm-12 text-right">
                                <a href="{{route($lang.'.admin.products.create')}}" class="btn btn-primary">{{trans('interface.adminProductsAdd')}}</a>
                                <button class="btn btn-default" disabled id="btn-delete">Удалить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop