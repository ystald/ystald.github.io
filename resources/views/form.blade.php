@extends('base')

@section('content')
    <div ng-controller="FormController" ng-init="init(<?=$id?>)" ng-cloak>
        @verbatim
            <form id="form-main" name="mainForm" class="form-horizontal">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="pull-left"><a href="/" class="btn btn-primary">Назад</a></div>

                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary" ng-click="save()">Сохранить</button>
                            <a href="/" class="btn btn-default">Отмена</a>
                        </div>
                    </div>
                </div>

                <br clear="all"/>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label col-sm-4">Организация:</label>

                            <div class="col-sm-8">
                                <input type="text"
                                       ng-model="model.dadata"
                                       placeholder="Начните набирать название или ИНН..."
                                       uib-typeahead="org for org in getDaData($viewValue)"
                                       typeahead-input-formatter="$model.value"
                                       typeahead-template-url="orgTemplate"
                                       typeahead-on-select="onSelectOrg($item, $model, $label)"
                                       class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="org_type" class="control-label col-sm-4">Тип огранизации</label>

                            <div class="col-sm-8">
                                <select id="org_type" class="form-control" name="data[org_type]"
                                        ng-model="model.org_type" required
                                        convert-to-number
                                >
                                    <option value="1">Юридическое лицо</option>
                                    <option value="2">Индивидуальный предприниматель</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group" ng-show="model.org_type==1">
                            <label for="org_name" class="control-label col-sm-4">Название (без ОПФ)</label>

                            <div class="col-sm-8">
                                <input id="org_name" class="form-control" name="data[org_name]"
                                       ng-model="model.org_name"
                                       ng-required="model.org_type==1"
                                />
                            </div>
                        </div>

                        <div class="form-group" ng-show="model.org_type==1">
                            <label for="opf" class="control-label col-sm-4">ОПФ</label>

                            <div class="col-sm-8">
                                <input id="opf" class="form-control" name="data[opf]" ng-model="model.opf"
                                       ng-required="model.org_type==1"
                                />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="fio" class="control-label col-sm-4">ФИО</label>

                            <div class="col-sm-8">
                                <input id="fio" class="form-control" name="data[fio]" ng-model="model.fio" required/>
                            </div>
                        </div>

                        <div class="form-group" ng-show="model.org_type==1">
                            <label for="post" class="control-label col-sm-4">Должность руководителя организации</label>

                            <div class="col-sm-8">
                                <input id="post" class="form-control" name="data[post]" ng-model="model.post"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="document" class="control-label col-sm-4">Сведения о документе, удостоверяющем
                                личность (серия, номер, дата выдачи, кем выдан)</label>

                            <div class="col-sm-8">
                                <textarea id="document" class="form-control" rows="5" name="data[document]"
                                          ng-model="model.document"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inn" class="control-label col-sm-4">ИНН</label>

                            <div class="col-sm-8">
                                <input id="inn" class="form-control" name="data[inn]" ng-model="model.inn" required/>
                            </div>
                        </div>

                        <div class="form-group" ng-show="model.org_type==1">
                            <label for="kpp" class="control-label col-sm-4">КПП</label>

                            <div class="col-sm-8">
                                <input id="kpp" class="form-control" name="data[kpp]" ng-model="model.kpp"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ogrn" class="control-label col-sm-4">ОГРН</label>

                            <div class="col-sm-8">
                                <input id="ogrn" class="form-control" name="data[ogrn]" ng-model="model.ogrn" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="okved" class="control-label col-sm-4">ОКВЕД</label>

                            <div class="col-sm-8">
                                <input id="okved" class="form-control" name="data[okved]" ng-model="model.okved"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="org_size" class="control-label col-sm-4">Размер предприятия</label>

                            <div class="col-sm-8">
                                <select id="org_size" class="form-control" name="data[org_size]"
                                        ng-model="model.org_size">
                                    <option></option>
                                    <option>микро</option>
                                    <option>малое</option>
                                    <option>среднее</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address_region" class="control-label col-sm-4">Регион</label>

                            <div class="col-sm-8">
                                <input id="address_region" class="form-control" name="data[address_region]"
                                       ng-model="model.address_region" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address_city" class="control-label col-sm-4">Город</label>

                            <div class="col-sm-8">
                                <input id="address_city" class="form-control" name="data[address_city]"
                                       ng-model="model.address_city" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address_street" class="control-label col-sm-4">Улица</label>

                            <div class="col-sm-8">
                                <input id="address_street" class="form-control" name="data[address_street]"
                                       ng-model="model.address_street"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address_house" class="control-label col-sm-4">Дом</label>

                            <div class="col-sm-8">
                                <input id="address_house" class="form-control" name="data[address_house]"
                                       ng-model="model.address_house"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address_building" class="control-label col-sm-4">Строение</label>

                            <div class="col-sm-8">
                                <input id="address_building" class="form-control" name="data[address_building]"
                                       ng-model="model.address_building"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address_flat" class="control-label col-sm-4">Квартира</label>

                            <div class="col-sm-8">
                                <input id="address_flat" class="form-control" name="data[address_flat]"
                                       ng-model="model.address_flat"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address_zip" class="control-label col-sm-4">Почтовый индекс</label>

                            <div class="col-sm-8">
                                <input id="address_zip" class="form-control" name="data[address_zip]"
                                       ng-model="model.address_zip"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address_postbox" class="control-label col-sm-4">Абоненсткий ящик</label>

                            <div class="col-sm-8">
                                <input id="address_postbox" class="form-control" name="data[address_postbox]"
                                       ng-model="model.address_postbox"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address_comment" class="control-label col-sm-4">Дополнительная
                                информация</label>

                            <div class="col-sm-8">
                                <input id="address_comment" class="form-control" name="data[address_comment]"
                                       ng-model="model.address_comment"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="control-label col-sm-4">E-mail</label>

                            <div class="col-sm-8">
                                <input id="email" class="form-control" name="data[email]" ng-model="model.email"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="control-label col-sm-4">Телефон</label>

                            <div class="col-sm-8">
                                <input id="phone" class="form-control" name="data[phone]" ng-model="model.phone"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="control-label col-sm-4">Паспорт</label>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="control-label col-sm-4">Серия</label>

                            <div class="col-sm-8">
                                <input id="phone" class="form-control" name="data[passport_serie]" ng-model="model.passport_serie"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="control-label col-sm-4">Номер</label>

                            <div class="col-sm-8">
                                <input id="phone" class="form-control" name="data[passport_number]" ng-model="model.passport_number"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="control-label col-sm-4">Кем выдан</label>

                            <div class="col-sm-8">
                                <input id="phone" class="form-control" name="data[passport_issue]" ng-model="model.passport_issue"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="control-label col-sm-4">Дата выдачи</label>

                            <div class="col-sm-8">
                                <input id="phone" class="form-control" name="data[passport_issue_date]" ng-model="model.passport_issue_date"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="control-label col-sm-4">Адрес регистрации</label>

                            <div class="col-sm-8">
                                <input id="phone" class="form-control" name="data[passport_address]" ng-model="model.passport_address"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th rowspan="2">№ п/п</th>
                                <th rowspan="2">Вид объекта</th>
                                <th rowspan="2">Название</th>
                                <th rowspan="2">Виды деятельности объекта</th>
                                <th rowspan="2">Вид отношения</th>
                                <th colspan="9">Адрес объекта</th>
                            </tr>
                            <tr>
                                <th>Регион</th>
                                <th>Населенный пункт</th>
                                <th>Улица</th>
                                <th>Д.</th>
                                <th>Стр.</th>
                                <th>Кв.</th>
                                <th>Почтовый индекс</th>
                                <th>Доп. информация</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat="object in model.objects">
                                <td>{{ $index+1 }}</td>
                                <td>
                                    <select class="form-control" ng-model="object.type" required>
                                        <option ng-repeat="type in objectTypes"
                                                class="{{ objectTypeClasses[type] }}"
                                        >{{ type }}</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" ng-model="object.name" required/></td>
                                <td>
                                    <select class="form-control" ng-model="object.action_type" required>
                                        <option ng-repeat="type in actionTypes"
                                                class="{{ actionTypeClasses[type] }}"
                                        >{{ type }}</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control" ng-model="object.dep_type" required>
                                        <option>во владении</option>
                                        <option>в пользовании</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" ng-model="object.address_region" required/>
                                </td>
                                <td><input type="text" class="form-control" ng-model="object.address_city" required/>
                                </td>
                                <td><input type="text" class="form-control" ng-model="object.address_street"/></td>
                                <td><input type="text" class="form-control" ng-model="object.address_house"/></td>
                                <td><input type="text" class="form-control" ng-model="object.address_building"/></td>
                                <td><input type="text" class="form-control" ng-model="object.address_flat"/></td>
                                <td><input type="text" class="form-control" ng-model="object.address_zip"/></td>
                                <td><input type="text" class="form-control" ng-model="object.address_comment"/></td>
                                <td>
                                <span class="glyphicon button glyphicon-remove" ng-click="removeObject($index)"
                                      title="Удалить"></span>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="btn-toolbar">
                            <button class="btn btn-primary navbar-btn" ng-click="addObject()">
                                <span class="glyphicon glyphicon-plus"></span>
                                Добавить объект
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>№ п/п</th>
                                <th>ФИО полностью</th>
                                <th>Гражданство</th>
                                <th>
                                    Сведения о документе, удостоверяющем личность (серия, номер, дата выдачи, кем выдан)
                                </th>
                                <th>СНИЛС</th>
                                <th>Адрес электронной почты</th>
                                <th>Номер телефона</th>
                                <th>Должность</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat="person in model.persons">
                                <td>{{ $index+1 }}</td>
                                <td><input type="text" class="form-control" ng-model="person.fio" required/></td>
                                <td><input type="text" class="form-control" ng-model="person.citizenship" required/>
                                </td>
                                <td><textarea class="form-control" rows="3" ng-model="person.document"
                                              required></textarea></td>
                                <td><input type="text" class="form-control" ng-model="person.snils"/></td>
                                <td><input type="text" class="form-control" ng-model="person.email" required/></td>
                                <td><input type="text" class="form-control" ng-model="person.phone"/></td>
                                <td><input type="text" class="form-control" ng-model="person.post" required/></td>
                                <td>
                                <span class="glyphicon button glyphicon-remove" ng-click="removePerson($index)"
                                      title="Удалить"></span>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="btn-toolbar">
                            <button class="btn btn-primary navbar-btn" ng-click="addPerson()">
                                <span class="glyphicon glyphicon-plus"></span>
                                Добавить персону
                            </button>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary" ng-click="save()">Сохранить</button>
                            <a href="/" class="btn btn-default">Отмена</a>
                        </div>
                    </div>
                </div>
            </form>

            <script type="text/ng-template" id="orgTemplate">
                <a tabindex="-1">
                    <span ng-bind-html="match.model.value + '<br/>' + match.model.data.inn + ' ' + match.model.data.address.value | uibTypeaheadHighlight:query"></span>
                </a>
            </script>

        @endverbatim
    </div>

@endsection