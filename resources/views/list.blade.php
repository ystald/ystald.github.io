@extends('base')

@section('content')
    @verbatim
    <div ng-controller="ListController" ng-init="init()" ng-cloak>
        <div class="row">
            <div class="col-xs-12">
                <div class="btn-toolbar">
                    <a href="/form" class="btn btn-primary navbar-btn">
                        <span class="glyphicon glyphicon-plus"></span>
                        Новая анкета
                    </a>
                </div>

                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ФИО</th>
                        <th>ИНН</th>
                        <th>ОГРН</th>
                        <th>ОКВЕД</th>
                        <th>Регион</th>
                        <th>Город</th>
                        <th>Улица</th>
                        <th width="230"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr ng-repeat="item in list">
                        <td>{{ item.fio }}</td>
                        <td>{{ item.inn }}</td>
                        <td>{{ item.ogrn }}</td>
                        <td>{{ item.okved }}</td>
                        <td>{{ item.address_region }}</td>
                        <td>{{ item.address_city }}</td>
                        <td>{{ item.address_street }}</td>
                        <td>
                            <a href="/download/{{ item.id }}" class="btn btn-info">Скачать заявление</a>
                            &nbsp;
                            <span class="glyphicon button glyphicon-edit" ng-click="edit(item)" title="Редактировать"></span>
                            <span class="glyphicon button glyphicon-remove" ng-click="remove(item)" title="Удалить"></span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endverbatim
@endsection