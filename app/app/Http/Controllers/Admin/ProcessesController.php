<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

        $processes = Processes::orderBy('created_at', 'DESC')->paginate(9);

        return view('admin.processes.index', compact('processes', 'notifications', 'notifications_count'));
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
}
