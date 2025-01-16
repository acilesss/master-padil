<?php

namespace App\Livewire;

use App\Models\DbRealtime;
use Livewire\Component;

class RiwayatLivewire extends Component
{
    public $data;

    public function render()
    {
        $this->data = DbRealtime::select('id','r1_arus','r1_tegangan','r1_daya','r1_pengguna','created_at')
                    ->orderBy('created_at', 'DESC')
                    ->take(100)
                    ->get();

        return view('livewire.riwayat-livewire',[
            'data' => $this->data
        ]);
    }
}
