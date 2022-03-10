<?php

namespace App\Http\Livewire;

use App\Models\Branches;
use App\Models\Company;
use App\Models\FStatus;
use App\Models\Location;
use App\Models\ModelObject;
use App\Models\Oganizations;
use App\Models\Team;
use App\Models\tobject;
use App\Models\View_object;
use App\Models\vobject;
use Livewire\Component;

class ModelLive extends Component
{

    public $views, $type, $model, $title, $description, $img, $teams, $number_Quantity,
        $money_cost, $money_sum, $inventory_boolean_true;

    public $storeOn = true;
    public $nextBtn = false;
    public $nextBtn1 = false;


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

    public function bntNext()
    {
        $this->nextBtn = true;
    }

    public function bntNext1()
    {
        $this->nextBtn1 = true;
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

    public function inventory_boolean1()
    {
        $this->inventory_boolean_true = 1;
    }

    public function inventory_boolean0()
    {
        $this->inventory_boolean_true = 0;
    }


    public function render()
    {
        $viewss = View_object::all();
        $typess = tobject::all();
        $teamss = Team::all();
        $models = ModelObject::latest()->paginate(10);
        $company = Company::all();
        $branch = Branches::all();
        $status = FStatus::all();
        $t_spawn = Location::all();
        $oganizations = Oganizations::all();

        return view('livewire.model-live', compact('models',
            'viewss', 'typess', 'teamss', 'company', 'branch', 'status', 't_spawn', 'oganizations'));
    }
}
