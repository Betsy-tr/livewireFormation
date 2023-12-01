<?php

namespace App\Livewire;

use App\Models\Employe;
use Livewire\Component;

class UserForm extends Component
{
    public Employe $user;

    protected $rules = [
        'user.name'=>'required|string|min:6'
    ];

    public function save(){
        $this->validate();
        $this->user->save();
        $this->emit('userUpdate');
    }

    public function render()
    {
        return view('livewire.user-form');
    }
}
