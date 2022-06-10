<?php

namespace App\Http\Livewire;

use App\Models\FStatus;
use Livewire\Component;

class StatusLive extends Component
{

    public $title, $description, $selected_id;

    public $createData = true;

    public function render()
    {
        $status = FStatus::orderBy('id', 'desc')->paginate(15);
        $stats_count = FStatus::all()->count();

        return view('livewire.status-live', compact('status', 'stats_count'));
    }

    private function resetInput()
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

        FStatus::create($data);
        $this->resetInput();

    }

    public function edit($id)
    {
        $status = FStatus::findOrFail($id);

        $this->selected_id = $id;
        $this->title = $status->title;
        $this->description = $status->description;

        $this->createData = false;
    }

    public function update()
    {
        $data = $this->validate([
            "selected_id" => "required",
            "title" => "required",
            "description" => "required",
        ]);

        if ($this->selected_id) {

            $status = FStatus::find($this->selected_id);

            $status->update($data);

            $this->resetInput();
            $this->createData = true;
        }
    }

    public function backAdd()
    {
        $this->createData = true;
        $this->resetInput();
    }

    public function remove($id)
    {
        $status = FStatus::findOrFail($id);
        $status->delete();
    }
}
