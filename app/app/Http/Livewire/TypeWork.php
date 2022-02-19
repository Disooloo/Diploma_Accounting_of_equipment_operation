<?php

namespace App\Http\Livewire;

use App\Models\TypeWorks;
use Livewire\Component;
use Livewire\WithPagination;

class TypeWork extends Component
{

    public $createData = true;
    public $term;

    public $title, $description, $selected_id;

    use WithPagination;

    public function render()
    {
        $works_count = TypeWorks::all()->count();
        $term = '%'.$this->term.'%';
        return view('livewire.type-work',
            [
                'works' => TypeWorks::where('title', 'LIKE', $term)->latest()->paginate(8),
                'works_count' => $works_count
            ]);



    }

    public function resetInput()
    {
        $this->title = null;
        $this->description = null;

    }

    public function store()
    {
        $data = $this->validate([
            "title" => "required",
            "description" => "required",
        ]);

        TypeWorks::create($data);
        $this->resetInput();
    }

    public function edit($id)
    {
        $work = TypeWorks::findOrFail($id);

        $this->selected_id = $id;
        $this->title = $work->title;
        $this->description = $work->description;

        $this->createData = false;

    }


    public function update()
    {
        $data = $this->validate([
            "title" => "required",
            "description" => "required",
        ]);

        TypeWorks::create($data);
        $this->resetInput();
    }

    public function add_back()
    {
        $this->createData = true;
        $this->resetInput();

    }

    public function remove($id)
    {
        $work = TypeWorks::findOrFail($id);
        $work->delete();
    }

}
