<?php

namespace App\Livewire\Web;

use App\Models\Film;
use Livewire\Component;

class ViewFilm extends Component
{
    public Film $film;

    /**
     * Inicializa o componente com o filme que sera visualizado.
     *
     * Este método vai receber o objeto filme diretamente pela rota
     * e vai armazena-lo na váriavel da classe
     *
     * @param \App\Models\Film $film O modelo Film resolvido automaticamente pelo ID presente na URL.
     * @return void
     */
    public function mount(Film $film)
    {
        $this->film = $film;
    }

    public function render()
    {
        return view('livewire.web.view-film');
    }
}
