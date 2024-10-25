<?php

namespace App\Livewire;

use App\Models\DbRealtime;
use Livewire\Component;

class RiwayatLivewireV2 extends Component
{
    public $data;

    public function render()
    {
        $this->data = DbRealtime::select('id','r2_arus','r2_tegangan','r2_daya','r2_pengguna','created_at')->orderBy('created_at', 'DESC')->get();

        return view('livewire.riwayat-livewire-v2',[
            'data' => $this->data
        ]);
    }
}
