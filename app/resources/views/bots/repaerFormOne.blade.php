Требуется ремонт

<b>#{{$id}} {{$title_type}} {{$title_model}}</b>

<b>Отправил: </b>   {{\Illuminate\Support\Facades\Auth::user()->name}}
<b>Что сломалось: </b> {{$statusRepair}}
<b>Стоимость: </b>{{$sum}} ₽
<b>Описание: </b> {{$title_description}}
<b>Дата отправки: </b> {{$dateDispatch}}


