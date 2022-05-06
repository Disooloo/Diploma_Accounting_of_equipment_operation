<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gparams;
use App\Models\ModelObject;
use App\Models\notification;
use App\Models\Processes;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

class ProcessesController extends Controller
{
    public function index()
    {
        $notifications = notification::orderBy('id', 'desc')->limit(5)->get();
        $notifications_count = notification::all()->count();

//        $processes = Processes::orderBy('created_at', 'DESC')->paginate(9);

        $Global_param = Gparams::all();

        return view('admin.processes.index', compact(
            'notifications', 'notifications_count', 'Global_param'));
    }

    public function nda_word()
    {

        $document = new TemplateProcessor('./processesFile/nda.docx');

        $outputFile = 'nda_full.docx';

        $general_manager = $_POST['general_manager'];
        $city = $_POST['city'];
        $company = $_POST['company'];
        $date = $_POST['date'];
        $company_adress = $_POST['company_adress'];
        $company_INN = $_POST['company_INN'];
        $company_KPP = $_POST['company_KPP'];
        $company_chet = $_POST['company_chet'];
        $company_bink = $_POST['company_bink'];

        $worker = $_POST['worker'];
        $worker_pass = $_POST['worker_pass'];
        $worker_pass_time = $_POST['worker_pass_time'];
        $worker_pass_adress = $_POST['worker_pass_adress'];
        $worker_adress = $_POST['worker_adress'];
        $worker_straxjvka = $_POST['worker_straxjvka'];

        $document->setValue('general_manager', $general_manager);
        $document->setValue('city', $city);
        $document->setValue('company', $company);
        $document->setValue('date', $date);
        $document->setValue('company_adress', $company_adress);
        $document->setValue('company_INN', $company_INN);
        $document->setValue('company_KPP', $company_KPP);
        $document->setValue('company_chet', $company_chet);
        $document->setValue('company_bink', $company_bink);

        $document->setValue('worker', $worker);
        $document->setValue('worker_pass', $worker_pass);
        $document->setValue('worker_pass_time', $worker_pass_time);
        $document->setValue('worker_pass_adress', $worker_pass_adress);
        $document->setValue('worker_adress', $worker_adress);
        $document->setValue('worker_straxjvka', $worker_straxjvka);

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
    public function vacation()
    {

        $documentVacation = new TemplateProcessor('./processesFile/vacation.docx');

        $outputFile = 'vacation.docx';

        $general_manager = $_POST['general_manager'];
        $company = $_POST['company'];
        $worker = $_POST['worker'];

        $worker_post = $_POST['worker_post'];
        $dateStart = $_POST['dateStart'];
        $dateEnd = $_POST['dateEND'];
        $date = $_POST['date'];


        $d1 = $dateStart;
        $d2 = $dateEnd;
        $d1_ts = strtotime($d1);
        $d2_ts = strtotime($d2);
        $seconds = abs($d1_ts - $d2_ts);
        $count_day = floor($seconds / 86400);



        $documentVacation->setValue('general_manager', $general_manager);
        $documentVacation->setValue('company', $company);
        $documentVacation->setValue('worker', $worker);
        $documentVacation->setValue('worker_post', $worker_post);
        $documentVacation->setValue('dateStart', $dateStart);
        $documentVacation->setValue('dateEnd', $dateEnd);
        $documentVacation->setValue('count_day', $count_day);

        $documentVacation->setValue('date', $date);

        $documentVacation->saveAs($outputFile);
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


    public function Cardinal() // карточка моделей
    {
        $document = new TemplateProcessor('./processesFile/CardItem.docx');


        $outputFile = 'CardItem.docx';

        $title_type = $_POST['title_type'];
        $title_model = $_POST['title_model'];
        $id = $_POST['id'];
        $number_system = $_POST['number_system'];
        $number_individual = $_POST['number_individual'];
        $number_individual_bix = $_POST['number_individual_bix'];
        $number_parties = $_POST['number_parties'];
        $code_product = $_POST['code_product'];
        $code_activation = $_POST['code_activation'];
        $money_sum = $_POST['money_sum'];
        $number_Quantity = $_POST['number_Quantity'];
        $money_cost = $_POST['money_cost'];
        $title_view = $_POST['title_view'];
        $title_company  = $_POST['title_company'];
        $title_branch  = $_POST['title_branch'];
        $title_status  = $_POST['title_status'];
        $title_teams  = $_POST['title_teams'];
        $title_description  = $_POST['title_description'];
        $title_seller   = $_POST['title_seller'];
        $service_organization   = $_POST['service_organization'];
        $title_note = $_POST['title_note'];
        $data_inventory = $_POST['data_inventory'];
        $warranty_do = $_POST['warranty_do'];
//        $data_today = date('Y-m-d');
        $data_today = date('d.m.Y');


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
}
