<?php

namespace App\Livewire;

use App\Models\DbRealtime;
use App\Models\DbRealtime2;
use Livewire\Component;

class DashboardLivewire extends Component
{
    public $data;
    public $data2;

    public function render()
    {
        $this->data = DbRealtime::orderBy('created_at', 'DESC')->first();
        $this->data2 = DbRealtime2::orderBy('created_at', 'DESC')->first();

        return view('livewire.dashboard-livewire', [
            'data' => $this->data,
            'data2' => $this->data2
        ]);
    }
}
