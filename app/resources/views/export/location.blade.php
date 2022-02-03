<table>
    <thead>
    <tr>
        <th style="background: #606060; color: #ffffff"><b>id</b></th>
        <th style="background: #606060; color: #ffffff">Местоположение</th>
        <th style="background: #606060; color: #ffffff">Привязка к филиалу</th>
        <th style="background: #606060; color: #ffffff">Описание</th>
        <th style="background: #606060; color: #ffffff">Бух номер местоположения</th>
        <th style="background: #606060; color: #ffffff">Телефон</th>
        <th style="background: #606060; color: #ffffff">Адрес</th>
        <th style="background: #606060; color: #ffffff">Сайт</th>
        <th style="background: #606060; color: #ffffff">Email</th>
        <th style="background: #606060; color: #ffffff">Контактное лицо</th>
        <th style="background: #606060; color: #ffffff">Реквизиты</th>
        <th style="background: #606060; color: #ffffff">Примечание</th>
        <th style="background: #606060; color: #ffffff">Изображение</th>
    </tr>
    </thead>
    <tbody>
    @foreach($location as $locations)
        <tr>
            <td style="background: #b5b5b5;"><b>{{$locations->id }}</b></td>
            <td style="background: #b5b5b5;">{{ $locations->local }}</td>
            <td style="background: #b5b5b5;">{{ $locations->id_branches }}</td>
            <td style="background: #b5b5b5;">{{ $locations->Description }}</td>
            <td style="background: #b5b5b5;">{{ $locations->Accountant_code }}</td>
            <td style="background: #b5b5b5;">{{ $locations->phone }}</td>
            <td style="background: #b5b5b5;">{{ $locations->Adress }}</td>
            <td style="background: #b5b5b5;">{{ $locations->Site }}</td>
            <td style="background: #b5b5b5;">{{ $locations->Email }}</td>
            <td style="background: #b5b5b5;">{{ $locations->Contact_person }}</td>
            <td style="background: #b5b5b5;">{{ $locations->Requisites }}</td>
            <td style="background: #b5b5b5;">{{ $locations->Note }}</td>
            <td style="background: #b5b5b5;">{{ $locations->img }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
