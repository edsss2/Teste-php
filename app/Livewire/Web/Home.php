<?php

namespace App\Livewire\Web;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Film;

class Home extends Component
{
    use WithPagination;

    public function render()
    {
        $films = Film::latest()->paginate(8);

        return view('livewire.web.home', [
            'films' => $films
        ]);
    }
}
