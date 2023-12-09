<?php

namespace App\Livewire;

use App\Models\Flight;
use Illuminate\View\View;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ShowFlights extends Component
{
    use WithPagination;

    #[Url]
    public string $search = "";

    public function submitSearch(): void
    {
        $this->resetPage();
    }

    public function render(): View
    {
        return view('livewire.show-flights', [
            'flights' => Flight::where('name', 'like', '%' . $this->search . '%')->paginate(10),
        ]);
    }
}
