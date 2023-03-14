<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Rules\GithubUrl;
use Illuminate\Support\Str;
use App\Models\Person as ModelPerson;
use App\Rules\LinkedinUrl;
use App\Services\QRCodeGenerate;

class Person extends Component
{
    public string $name = '';
    public string $github = '';
    public string $linkedin = '';
    public string $slug = '';
    public string $image = '';

    protected function rules()
    {
        return [
            'name' => ['required', 'unique:persons,name'],
            'slug' => ['required', 'unique:persons,slug'],
            'github' => ['url', new GithubUrl()],
            'linkedin' => ['url', new LinkedinUrl()],
        ];
    }

    public function render()
    {
        return view('livewire.generate')
            ->extends('layouts.base');
    }

    public function generateQRCode()
    {
        $this->slug = Str::snake($this->name);
        $this->validate();


        ModelPerson::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'github' => $this->github,
            'linkedin' => $this->linkedin,
        ]);

        $url = url('/' . $this->slug);
        $this->image = QRCodeGenerate::new($url);
    }

    public function inputResetValidation()
    {
        $this->resetValidation();
    }
}
