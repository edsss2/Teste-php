<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\WithFileUploads;
use Livewire\Attributes\Rule;
use App\Models\Film;

/**
 * Formulário responsável pela validação e criação de Filmes.
 */
class FilmForm extends Form
{
    /**
     * O título do filme.
     * @var string
     */
    #[Rule('required|min:3|max:50')]
    public $title = '';

    /**
     * O resumo ou sinopse do filme.
     * @var string
     */
    #[Rule('required|min:10|max:3000')]
    public $summary = '';

    /**
     * A imagem de capo do filme.
     * @var TemporaryUploadedFile|null
     */
    #[Rule('required|image|max:1024|mimes:png,jpg')]
    public $cover;

    /**
     * O nome do diretor do filme.
     * @var string
     */
    #[Rule('required|min:3|max:100')]
    public $director = '';


    public function store()
    {
        $this->validate();

        $path = null;
        if ($this->cover) {
            $path = $this->cover->store('capas', 'public');
        }

        Film::create([
            'title' => $this->title,
            'summary' => $this->summary,
            'director' => $this->director,
            'cover' => $path,
        ]);

        $this->reset();
    }
}
