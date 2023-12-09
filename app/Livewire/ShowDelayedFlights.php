<?php

namespace App\Livewire;

use App\Models\Flight;
use Illuminate\View\View;
use Livewire\Component;

class ShowDelayedFlights extends Component
{
    public Flight $flight;

    public function mount(): void
    {
        sleep(3);
        $this->flight = Flight::firstWhere('id', 3);
    }

    public function placeholder(): string
    {
        return <<<'HTML'
        <div>
            <p class="text-white">Loading delayed flights. Please wait...</p>
        </div>
        HTML;
    }

    public function render(): View
    {
        return view('livewire.show-delayed-flights', [
            'flight' => $this->flight
        ]);
    }
}
