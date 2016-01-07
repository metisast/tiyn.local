@extends('admin.template._start')

@section('content')
    <section class="content-header">
        <h1>
            {{ trans('interface.adminProducts') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
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
                                    <select name="count" class="form-control">
                                        <option value="0">Выберите количество</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="9">9</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <a class="glyphicon glyphicon-refresh"></a>
                                    <a class="glyphicon glyphicon-trash"></a>
                                </div>
                            </form>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="view-table" class="table table-bordered table-hover dataTable" role="grid">
                                    {{ csrf_field() }}
                                    <input type="hidden" data-path="http://tiyn.local/ru/admin/products" id="system-path">
                                    <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Название</th>
                                            <th>Описание</th>
                                            <th>Количество</th>
                                            <th>Действия</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop