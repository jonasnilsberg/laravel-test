<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Livewire\Attributes\Url;
use Livewire\Component;

class Pagination extends Component
{
    #[Url]
    public int $page = 1;

    #[Url]
    public int $page_size = 1;

    public int $total = 0;

    public function nextPage(): void
    {
        $this->page++;
    }

    public function previousPage(): void
    {
        if ($this->page > 1) {
            $this->page--;
        }
    }

    public function render(): View
    {
        return view('livewire.pagination');
    }
}
