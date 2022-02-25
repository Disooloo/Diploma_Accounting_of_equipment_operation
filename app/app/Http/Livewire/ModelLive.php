<?php

namespace App\Http\Livewire;

use App\Models\ModelObject;
use App\Models\Team;
use App\Models\tobject;
use App\Models\View_object;
use App\Models\vobject;
use Livewire\Component;

class ModelLive extends Component
{

    public $views, $type, $model, $title, $description, $img, $teams;

    public $storeOn = true;

    protected $rules = [
        'views' => 'required',
        'type' => 'required',
        'model' => ['required', 'string', 'distinct'],
        'description' => 'required',
        'img' => 'required',
        'teams' => 'required',
    ];

    protected $messages = [
        'views.required' => 'Поле "Вид" является обязательным.',
        'type.required' => 'Поле "Тип" является обязательным для заполнения.',
        'options.*.distinct' => 'Варианты ответов не должны совпадать'
    ];

    public function store()
    {
        $date = $this->validate([
            'views' => 'required',
            'type' => 'required',
            'model' => 'required',
            'description' => 'required',
            'img' => 'required',
        ]);

        ModelObject::create($date);
        $this->storeOn = true;
    }

    public function addCard()
    {
        $this->storeOn = false;
    }

    public function editOn()
    {
        $this->storeOn = true;
    }

    public function remove($id)
    {
        $model = ModelObject::findOrFail($id);
        $model->delete();
    }


    public function render()
    {
        $viewss = View_object::all();
        $typess = tobject::all();
        $teamss = Team::all();
        $models = ModelObject::latest()->paginate(10);

        return view('livewire.model-live', compact('models',
            'viewss', 'typess', 'teamss'));
    }
}
