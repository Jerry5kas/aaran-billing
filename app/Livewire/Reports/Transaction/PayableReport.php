<?php

namespace App\Livewire\Reports\Transaction;

use Aaran\Master\Models\Contact;
use App\Livewire\Trait\CommonTraitNew;
use Livewire\Component;

class PayableReport extends Component
{
    use CommonTraitNew;

    public function getList()
    {
        return Contact::where('contact_type_id', '124')->get();
    }

    public function render()
    {
        return view('livewire.reports.transaction.payable-report')->with([
            'list' => $this->getList(),
        ]);
    }
}