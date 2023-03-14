<?php

namespace App\Http\Livewire;

use App\Models\Person;
use Livewire\Component;

class Data extends Component
{
    public string $slug;
    public ?Person $person;

    public function render()
    {
        return view('livewire.data')
            ->extends('layouts.base');
    }

    public function mount(string $slug)
    {
        $this->slug = $slug;
        $this->person = Person::firstWhere('slug', $slug);

        if(!$this->person) {
            abort(404);
        }
    }
}
