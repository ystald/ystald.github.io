@extends('templates.word')

@section('title')ДОГОВОР №@endsection

@section('container')

    <div class="Landscape">
        <p class="right">
            <strong>
                Руководителю<br/>
                Территориального управления<br/>
                Россельхознадзора по<br/>
                ______________________________________<br/>
                ______________________________________<br/>
            </strong>
        </p>

        <br/>

        <p>
        <center>
            <strong>ЗАЯВЛЕНИЕ<br/>о регистрации в ФГИС ВетИС и предоставлении доступа к ФГИС «Меркурий» сотрудникам
            </strong>
        </center>
        </p>

        <p>
            <strong>Индивидуального предпринимателя</strong>
        </p>

        <table class="MsoTableGrid" border=1 cellspacing=0 cellpadding=3>
            <tr>
                <td width="40">1</td>
                <td width="45%">Фамилия, Имя, Отчество (ФИО) индивидуального предпринимателя (ИП)</td>
                <td width="50%">{{ $data->fio }}</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Сведения о документе, удостоверяющем личность ИП, гражданина (серия, номер, дата выдачи, кем
                    выдан)
                </td>
                <td>{{ $data->document }}</td>
            </tr>
            <tr>
                <td>3</td>
                <td>ИНН</td>
                <td>{{ $data->inn }}</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Код ОКВЭД</td>
                <td>{{ $data->okved }}</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Размер предприятия (отметка об отнесении к субъекту малого и среднего предпринимательства:
                    МИКРО/МАЛОЕ/СРЕДНЕЕ)
                </td>
                <td>{{ $data->org_size }}</td>
            </tr>
            <tr>
                <td>6</td>
                <td colspan="2">Адрес регистрации по месту жительства ИП</td>
            </tr>
            <tr>
                <td></td>
                <td>Регион</td>
                <td>{{ $data->address_region }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Населенный пункт</td>
                <td>{{ $data->address_city }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Улица</td>
                <td>{{ $data->address_street }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Дом</td>
                <td>{{ $data->address_house }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Строение</td>
                <td>{{ $data->address_building }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Квартира</td>
                <td>{{ $data->address_flat }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Почтовый индекс</td>
                <td>{{ $data->address_zip }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Абонентский ящик</td>
                <td>{{ $data->address_postbox }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Дополнительная информация</td>
                <td>{{ $data->address_comment }}</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Адрес электронной почты</td>
                <td>{{ $data->email }}</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Контактный телефон/факс</td>
                <td>{{ $data->phone }}</td>
            </tr>
        </table>

        <p><strong>осуществляющего подконтрольную деятельность на объектах (зона обслуживания), перечисленных в
                Приложении
                №1 к настоящему заявлению.</strong></p>

        <table width="100%">
            <tr>
                <td width="30%"><strong>В лице (для представителя)</strong></td>
                <td width="70%" style="border-bottom: 1px solid #000;">{{ $data->fio }}</td>
            </tr>
            <tr>
                <td></td>
                <td align="center">
                    <small>(фамилия, имя, отчество, должность руководителя или представителя)</small>
                </td>
            </tr>
            <tr>
                <td><strong>действующего на основании</strong></td>
                <td style="border-bottom: 1px solid #000;">ОГРН {{ $data->ogrn }}</td>
            </tr>
            <tr>
                <td></td>
                <td align="center">
                    <small>(ОГРН – для ИП, доверенности – для представителя)</small>
                </td>
            </tr>
        </table>

        <p><strong>прошу предоставить доступ к сервисным функциям ФГИС «Меркурий» лицам в соответствии с Приложением №2
                к
                настоящему заявлению.</strong></p>

        <p>Достоверность представленных сведений подтверждаю.</p>

        <p>Обязуюсь в случае увольнения лица, имеющего доступ к ФГИС «Меркурий», или принятия решения об аннулировании
            регистрации лица с доступом к ФГИС «Меркурий» или изменения прав его доступа, в течение 3 рабочих дней
            предоставить данные для аннулирования регистрации данного лица.</p>

        <table>
            <tr>
                <td width="30%">
                    Индивидуальный предприниматель<br/>
                    (представитель по доверенности)
                </td>
                <td width="20%" style="border-bottom: 1px solid #000;">
                </td>
                <td width="3%"></td>
                <td width="30%" style="border-bottom: 1px solid #000;">
                </td>
            </tr>
            <tr>
                <td></td>
                <td align="center">(подпись)</td>
                <td></td>
                <td align="center">(Ф.И.О.)</td>
            </tr>
            <tr><td>&nbsp;</td></tr>
            <tr>
                <td>"_____"	______________ 20___  г.</td>
                <td align="center">М.П.</td>
                <td></td>
                <td align="center"></td>
            </tr>
        </table>

    </div>

    <br style="page-break-after: always;"/>

    <div class="Landscape">
        <p class="right">
            <strong>Приложение №1</strong><br/>
            Перечень подконтрольных объектов (зона обслуживания)
        </p>

        <table class="MsoTableGrid" border=1 cellspacing=0 cellpadding=3>
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
            </tr>
            </thead>
            <tbody>
            @foreach ($data->objects as $object)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $object->type }}</td>
                    <td>{{ $object->name }}</td>
                    <td>{{ $object->action_type }}</td>
                    <td>{{ $object->dep_type }}</td>
                    <td>{{ $object->address_region }}</td>
                    <td>{{ $object->address_city }}</td>
                    <td>{{ $object->address_street }}</td>
                    <td>{{ $object->address_house }}</td>
                    <td>{{ $object->address_building }}</td>
                    <td>{{ $object->address_flat }}</td>
                    <td>{{ $object->address_zip }}</td>
                    <td>{{ $object->address_comment }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <p>* Молокоперерабатывающее предприятие, Свиноводческое предприятие, Птицеводческое предприятие, Охотхозяйство,
            Личное подсобное хозяйство (ЛПХ) и др. Полный перечень видов объекта размещен в Приложении №3 к настоящему
            заявлению.</p>
        <p>** Разведение животных, Убой животных, Получение подконтрольной продукции (молоко, яйца, мёд и т.д.),
            Производство/переработка подконтрольной продукции, Хранение подконтрольной продукции, Реализация
            подконтрольной
            продукции и др. Полный перечень видов деятельности объекта размещен в Приложении №4 к настоящему
            заявлению.</p>
        <p>*** 1 – В пользовании / 2 – Во владении.</p>

        <table>
            <tr>
                <td width="30%">
                    Индивидуальный предприниматель<br/>
                    (представитель по доверенности)
                </td>
                <td width="20%" style="border-bottom: 1px solid #000;">
                </td>
                <td width="3%"></td>
                <td width="30%" style="border-bottom: 1px solid #000;">
                </td>
            </tr>
            <tr>
                <td></td>
                <td align="center">(подпись)</td>
                <td></td>
                <td align="center">(Ф.И.О.)</td>
            </tr>
            <tr><td>&nbsp;</td></tr>
            <tr>
                <td>"_____"	______________ 20___  г.</td>
                <td align="center">М.П.</td>
                <td></td>
                <td align="center"></td>
            </tr>
        </table>

    </div>

    <br style="page-break-after: always;"/>

    <div class="Landscape">
        <p class="right">
            <strong>Приложение №2</strong><br/>
            Перечень регистрируемых лиц
        </p>

        <table class="MsoTableGrid" border=1 cellspacing=0 cellpadding=3>
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
                <th>Права доступа</th>
                <th>Наличие ветеринарного образования (да/нет)</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($data->persons as $person)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $person->fio }}</td>
                    <td>{{ $person->citizenship }}</td>
                    <td>{{ $person->document }}</td>
                    <td>{{ $person->snils }}</td>
                    <td>{{ $person->email }}</td>
                    <td>{{ $person->phone }}</td>
                    <td>{{ $person->post }}</td>
                    <td>
                        8- Администратор ХС<br/>
                        2- Гашение ВСД
                    </td>
                    <td>Нет</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <p>* 1 – Авторизованный заявитель, 2 – Гашение ВСД, 3 – Оформление ВСД на производственную партию, 4 –
            Оформление
            ВСД на сырое молоко (при наличии справки о безопасности сырого молока), 5 – Оформление возвратных ВСД, 6 –
            Сертификация уловов ВБР, 7 – Уполномоченное лицо (Оформление ВСД на продукцию из Приказа МСХ РФ №646), 8 –
            Администратор ХС.</p>
        <p>** ДА – сведения о документе, подтверждающих наличие у регистрируемых уполномоченных лиц ветеринарного
            образования.</p>

        <table>
            <tr>
                <td width="30%">
                    Индивидуальный предприниматель<br/>
                    (представитель по доверенности)
                </td>
                <td width="20%" style="border-bottom: 1px solid #000;">
                </td>
                <td width="3%"></td>
                <td width="30%" style="border-bottom: 1px solid #000;">
                </td>
            </tr>
            <tr>
                <td></td>
                <td align="center">(подпись)</td>
                <td></td>
                <td align="center">(Ф.И.О.)</td>
            </tr>
            <tr><td>&nbsp;</td></tr>
            <tr>
                <td>"_____"	______________ 20___  г.</td>
                <td align="center">М.П.</td>
                <td></td>
                <td align="center"></td>
            </tr>
        </table>
    </div>

    <br style="page-break-after: always;"/>

    <div class="Landscape">
        <p class="right">
            <strong>Приложение №3</strong><br/>
            Перечень видов объекта
        </p>

        <table class="MsoTableGrid" border=1 cellspacing=0 cellpadding=3>
            <tr>
                <td>№ п/п</td>
                <td>Название вида объекта</td>
            </tr>
            <tr>
                <td>1</td>
                <td>предприятие по производству фасованной продукции пчеловодства, её хранению, транспортировке,
                    реализации
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>СББЖ госветслужбы субъекта РФ</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Жироперерабатывающие предприятия</td>
            </tr>
            <tr>
                <td>4</td>
                <td>транспортные средства, осуществляющие транспортировку поднадзорной продукции и животных</td>
            </tr>
            <tr>
                <td>5</td>
                <td>предприятия по производству (переработке) подконтрольной продукции</td>
            </tr>
            <tr>
                <td>6</td>
                <td>предприятия (организации), занимающиеся розничной реализацией лекарственных средств для
                    ветприменения (в
                    том числе ветеринарные аптеки)
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>предприятия (организации), занимающиеся оптовой торговлей лекарственными средствами для
                    ветеринарного
                    применения
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>биофабрики</td>
            </tr>
            <tr>
                <td>9</td>
                <td>предприятия по производству ветпрепаратов</td>
            </tr>
            <tr>
                <td>10</td>
                <td>предприятия и организации, осуществляющие реализацию и хранение кормов/кормовых добавок</td>
            </tr>
            <tr>
                <td>11</td>
                <td>предприятия по производству комбикормов</td>
            </tr>
            <tr>
                <td>12</td>
                <td>предприятия по производству кормов</td>
            </tr>
            <tr>
                <td>13</td>
                <td>предприятия/организации розничной торговли, осуществляющие реализацию мяса/мясосырья,
                    рыбы/рыбопродукции
                </td>
            </tr>
            <tr>
                <td>14</td>
                <td>предприятия общественного питания</td>
            </tr>
            <tr>
                <td>15</td>
                <td>предприятия по ввозу/вывозу, хранению и реализации продукции животного происхождения/гидробионтов
                    (холодильники и хладокомбинаты, склады и базы по хранению)
                </td>
            </tr>
            <tr>
                <td>16</td>
                <td>скотомогильники, ямы Беккари</td>
            </tr>
            <tr>
                <td>17</td>
                <td>производитель удобрений</td>
            </tr>
            <tr>
                <td>18</td>
                <td>ветсанутильзаводы</td>
            </tr>
            <tr>
                <td>19</td>
                <td>предприятия по переработке кишечного сырья</td>
            </tr>
            <tr>
                <td>20</td>
                <td>пухо-перовые фабрики</td>
            </tr>
            <tr>
                <td>21</td>
                <td>фабрики первичной обработки шерсти</td>
            </tr>
            <tr>
                <td>22</td>
                <td>кожевенные заводы</td>
            </tr>
            <tr>
                <td>23</td>
                <td>пушно-меховые фабрики</td>
            </tr>
            <tr>
                <td>24</td>
                <td>рыбоперерабатывающие предприятия</td>
            </tr>
            <tr>
                <td>25</td>
                <td>предприятия (суда) по добыче, переработке и транспортировке гидробионтов</td>
            </tr>
            <tr>
                <td>26</td>
                <td>пункты сбора молока</td>
            </tr>
            <tr>
                <td>27</td>
                <td>молокоперерабатывающие предприятия</td>
            </tr>
            <tr>
                <td>28</td>
                <td>мясоперерабатывающие предприятия (полного/неполного цикла)</td>
            </tr>
            <tr>
                <td>29</td>
                <td>боенские предприятия</td>
            </tr>
            <tr>
                <td>30</td>
                <td>государственные ветеринарные клиники</td>
            </tr>
            <tr>
                <td>31</td>
                <td>частные ветеринарные клиники</td>
            </tr>
            <tr>
                <td>32</td>
                <td>продовольственные рынки, в т.ч. оптовые</td>
            </tr>
            <tr>
                <td>33</td>
                <td>предприятия/организации, осуществляющие временное содержание животных</td>
            </tr>
            <tr>
                <td>34</td>
                <td>предприятия по разведению и содержанию декоративных и экзотических животных</td>
            </tr>
            <tr>
                <td>35</td>
                <td>питомники служебного собаководства</td>
            </tr>
            <tr>
                <td>36</td>
                <td>зоомагазины</td>
            </tr>
            <tr>
                <td>37</td>
                <td>цирки, зоопарки</td>
            </tr>
            <tr>
                <td>38</td>
                <td>ипподромы, конюшни</td>
            </tr>
            <tr>
                <td>39</td>
                <td>Земельный участок</td>
            </tr>
            <tr>
                <td>40</td>
                <td>личные подсобные хозяйства (ЛПХ)</td>
            </tr>
            <tr>
                <td>41</td>
                <td>Объект, деятельность которого связана с повышенным риском негативного воздействия на почвы</td>
            </tr>
            <tr>
                <td>42</td>
                <td>предприятие по разведению и содержанию насекомых</td>
            </tr>
            <tr>
                <td>43</td>
                <td>крестьянские (фермерские) хозяйства (КФХ)</td>
            </tr>
            <tr>
                <td>44</td>
                <td>предприятия аквакультуры</td>
            </tr>
            <tr>
                <td>45</td>
                <td>пасеки</td>
            </tr>
            <tr>
                <td>46</td>
                <td>охотхозяйства</td>
            </tr>
            <tr>
                <td>47</td>
                <td>звероводческие хозяйства (зверофермы)</td>
            </tr>
            <tr>
                <td>48</td>
                <td>предприятия по разведению и содержанию животных (КРС, МРС, лошадей, лосей, маралов)</td>
            </tr>
            <tr>
                <td>49</td>
                <td>молочно-товарные фермы</td>
            </tr>
            <tr>
                <td>50</td>
                <td>птицеводческие предприятия</td>
            </tr>
            <tr>
                <td>51</td>
                <td>свиноводческие предприятия</td>
            </tr>
        </table>

    </div>

    <br style="page-break-after: always;"/>

    <div class="Landscape">
        <p class="right">
            <strong>Приложение №5</strong><br/>
            Согласие н обработку персональных данных
        </p>

        <p>
            <center>
            СОГЛАСИЕ НА ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ
            </center>
        </p>

        <p class="left">
        Субъект персональных данных, {{ $data->fio }}<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i>(Фамилия, Имя, Отчество (при наличии) полностью)</i></p>
        <p class="left">паспорт серия {{ $data->passport_serie }} № {{ $data->passport_number }} выдан {{ $data->passport_issue_date }}<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i>(вид основного документа, удостоверяющего личность)</i></p>
        <p class="left">{{ $data->passport_issue }}  <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i>(кем и когда)</i></p>
        <p class="left">проживающий(ая) по адресу {{ $data->passport_address }},<br/>
            <strong>В лице представителя субъекта персональных данных</strong> (заполняется в случае получения согласия от представителя субъекта персональных данных),</p>
        <p>______________________________________________________________________________________________________________________<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i>(Фамилия, Имя, Отчество (при наличии) полностью)</i></p>
        <p>________________________серия________№_____________выдан_____________________________________________________________<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i>(вид основного документа, удостоверяющего личность)</i>
        </p>
        <p>______________________________________________________________________________________________________________________<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i>(кем и когда)</i></p>
        проживающий(ая) по адресу________________________________________________________________________________________________________________,<br/>
        действующий от имени субъекта персональных данных на основании______________________________________________________________________________________________________________<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i>(реквизиты доверенности или иного документа, подтверждающего полномочия представителя)</i><br/>
            <strong>принимаю решение о предоставлении моих персональных данных и даю согласие на их обработку свободно, своей волей и в своем интересе.</strong>
        </p>
        <p>Наименование и адрес оператора, получающего согласие субъекта персональных данных: Федеральная служба по ветеринарному и фитосанитарному надзору (Россельхознадзор), 107139, г. Москва,
            Орликов переулок, 1/11.</p>
        <p>Со следующей целью обработки персональных данных: подтверждение личности для предоставления санкционированного доступа для внесения и получения информации, содержащейся в федеральной государственной информационной системе в области ветеринарии (далее ФГИС ВетИС), для идентификации и аутентификации пользователей ФГИС ВетИС.</p>
        <p>Перечень персональных данных, на обработку которых дается согласие субъекта персональных данных: фамилия, имя, отчество; Гражданство; Сведения о документе, удостоверяющем личность (серия, номер, дата выдачи, кем выдан); Адрес электронной почты; Контактный телефон; Должность; Сведения об образовании.</p>
        <p>Наименование и адрес организации, осуществляющей обработку персональных данных по поручению оператора: ФГБУ "ВНИИЗЖ", Россия, 600901, г. Владимир, мкр. Юрьевец.</p>
        <p>Перечень действий с персональными данными, на совершение которых дается согласие: обработка вышеуказанных персональных данных будет осуществляться путем смешанной обработки персональных данных (сбор, систематизацию, накопление, хранение, уточнение, обновление.</p>
        <p>Срок, в течение которого действует согласие субъекта персональных данных, а также способ его отзыва, если иное не установлено законом: на основании письменного обращения субъекта персональных данных с требованием о прекращении обработки его персональных данных оператор прекратит обработку таких персональных данных в течение 3 (трех) рабочих дней. Я согласен с тем, что по моему письменному требованию уведомление об уничтожении персональных данных будет вручаться мне (моему представителю) по месту нахождения организации, осуществляющей обработку персональных данных по поручению оператора.</p>

        <p><strong>Подпись субъекта персональных данных (либо представителя):</strong></p>

        <table border="0">
            <tr>
                <td>{{ $data->fio }}</td>
                <td>____________</td>
            </tr>
            <tr>
                <td>(Фамилия, Имя, Отчество (при наличии) полностью, подпись)</td>
                <td align="center">(дата)</td>
            </tr>
        </table>

    </div>

@endsection