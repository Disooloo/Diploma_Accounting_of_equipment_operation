<table>
    <thead>
    <tr>
        <th style="background: #606060; color: #ffffff"><b>id</b></th>
        <th style="background: #606060; color: #ffffff">Вид</th>
        <th style="background: #606060; color: #ffffff">Тип</th>
        <th style="background: #606060; color: #ffffff">Модель</th>
        <th style="background: #606060; color: #ffffff">Описание</th>
        <th style="background: #606060; color: #ffffff">Изображение</th>
        <th style="background: #606060; color: #ffffff">Сотрудник</th>
    </tr>
    </thead>
    <tbody>
    @foreach($models as $model)
        <tr>
            <td style="background: #b5b5b5;"><b>{{$model->id }}</b></td>
            <td style="background: #b5b5b5;">{{ $model->title_view }}</td>
            <td style="background: #b5b5b5;">{{ $model->title_type }}</td>
            <td style="background: #b5b5b5;">{{ $model->title_model }}</td>
            <td style="background: #b5b5b5;">{{ $model->title_description }}</td>
            <td style="background: #b5b5b5;">{{ $model->object_img }}</td>
            <td style="background: #b5b5b5;">{{ $model->title_teams }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
