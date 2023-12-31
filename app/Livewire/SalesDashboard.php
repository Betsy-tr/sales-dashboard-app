<?php

namespace App\Livewire;


use App\Service\Stats;
use Livewire\Component;

class SalesDashboard extends Component
{

   
    public function render()
    {
        return view('livewire.sales-dashboard', [

            'newOrders' => Stats::newOrders(),
            'salesAmount' => Stats::salesAmount(),
            'satisfaction' => Stats::satisfaction(),
        ]);
    }

}
