<?php

namespace App\Livewire;

use App\Models\DbRealtime;
use Livewire\Component;

class DashboardLivewire extends Component
{
    public $data;

    public function render()
    {
        $this->data = DbRealtime::orderBy('created_at', 'DESC')->first();

        return view('livewire.dashboard-livewire', [
            'data' => $this->data
        ]);
    }
}
