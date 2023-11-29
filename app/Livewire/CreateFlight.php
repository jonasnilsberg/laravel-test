<?php

namespace App\Livewire;

use App\Models\Flight;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreateFlight extends Component
{
    #[Rule('string|required')]
    public string $name = '';

    #[Rule('string|required')]
    public string $company = '';

    public function save(): void
    {

        Log::info('Save');
        Flight::create([
            'name' => $this->name,
            'company' => $this->company,
        ]);

        //$this->dispatch('flight-saved');
        redirect()->route('flight')->with('success', 'Success');
    }

    public function render(): View
    {
        return view('livewire.create-flight', [
            'count' => Flight::count(),
        ]);
    }
}
