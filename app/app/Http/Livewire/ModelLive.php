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
use PhpOffice\PhpWord\TemplateProcessor;

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

    public function edit()
    {

    }


    public function cardItem($id)
    {
        $document = new TemplateProcessor('./processesFile/CardItem.docx');

        $outputFile = 'CardItem.docx';

        $modelObject = ModelObject::findOrFail($id);

        $title_type = $modelObject['title_type'];
//        $title_type = $_POST['title_type'];
        $title_model = $modelObject['title_model'];
        $id = $modelObject['id'];
        $number_system = $modelObject['number_system'];
        $number_individual = $modelObject['number_individual'];
        $number_individual_bix = $modelObject['number_individual_bix'];
        $number_parties = $modelObject['number_parties'];
        $code_product = $modelObject['code_product'];
        $code_activation = $modelObject['code_activation'];
        $money_sum = $modelObject['money_sum'];
        $number_Quantity = $modelObject['number_Quantity'];
        $money_cost = $modelObject['money_cost'];
        $title_view = $modelObject['title_view'];
        $title_company  = $modelObject['title_company'];
        $title_branch  = $modelObject['title_branch'];
        $title_status  = $modelObject['title_status'];
        $title_teams  = $modelObject['title_teams'];
        $title_description  = $modelObject['title_description'];
        $title_seller   = $modelObject['title_seller'];
        $service_organization   = $modelObject['service_organization'];
        $title_note = $modelObject['title_note'];
        $data_inventory = $modelObject['data_inventory'];
        $warranty_do = $modelObject['warranty_do'];
        $data_today = date('Y-m-d');


        $document->setValue('title_type', $title_type);
        $document->setValue('title_model', $title_model);
        $document->setValue('id', $id);
        $document->setValue('number_system', $number_system);
        $document->setValue('number_individual', $number_individual);
        $document->setValue('number_individual_bix', $number_individual_bix);
        $document->setValue('number_parties', $number_parties);
        $document->setValue('code_product', $code_product);
        $document->setValue('code_activation', $code_activation);

        $document->setValue('money_sum', $money_sum);
        $document->setValue('number_Quantity', $number_Quantity);
        $document->setValue('money_cost', $money_cost);
        $document->setValue('title_view', $title_view);
        $document->setValue('title_company', $title_company);
        $document->setValue('title_branch', $title_branch);
        $document->setValue('title_status', $title_status);
        $document->setValue('title_teams', $title_teams);
        $document->setValue('title_description', $title_description);
        $document->setValue('title_seller', $title_seller);
        $document->setValue('service_organization', $service_organization);
        $document->setValue('title_note', $title_note);
        $document->setValue('data_inventory', $data_inventory);
        $document->setValue('warranty_do', $warranty_do);
        $document->setValue('data_today', $data_today);

        $document->saveAs($outputFile);
        // Имя скачиваемого файла
        $downloadFile = $outputFile;

        // Контент-тип означающий скачивание
        header("Content-Type: application/octet-stream");
        // Размер в байтах
        header("Accept-Ranges: bytes");
        // Размер файла
        header("Content-Length: " . filesize($downloadFile));
        // Расположение скачиваемого файла
        header("Content-Disposition: attachment; filename=" . $downloadFile);
        // Прочитать файл

        readfile($downloadFile);
        unlink($outputFile);

    }

    //



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
