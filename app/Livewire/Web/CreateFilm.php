<?php

namespace App\Livewire\Web;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Livewire\Forms\FilmForm;

class CreateFilm extends Component
{

    use WithFileUploads;

    public FilmForm $form;

    public function create()
    {
        $this->form->store();

        session()->flash('status', 'Filme criado com sucesso!');

        $this->redirectRoute('home', navigate: true);
    }

    public function render()
    {
        return view('livewire.web.create-film');
    }
}
