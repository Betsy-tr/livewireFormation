<?php

namespace App\Livewire;

use App\Models\Employe;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    public string $orderField = 'name';
    public string $orderDirection = 'ASC';

    public $search = ''; 

    public int $editId=0;

    public array $selection = [];

    public function setOrderField(string $name){

        if ($name == $this->orderField) {
            $this->orderDirection = $this->orderDirection == 'ASC'? 'DESC' : 'ASC' ;
        }else{
            $this->orderField = $name;
            $this->reset('orderDirection');
        }
    }

    protected $listenners = [
        'userUpdate' => 'onUserUpdated'
    ];

    public function startEdit(int $id){
        
        $this->editId = $id;
    }

    public function onUserUpdated() {
        session()->flash('success', "L'utilisateur a été mis à jour");
        $this->reset('editId');
    }

    public function deleteUsers(array $ids){

        Employe::destroy($ids);
        session()->flash('success', "utisateur(s) supprimé(s)");
        $this->selection =  [] ;
    }

    public function render()
    {
        return view('livewire.users-table', [
            'users' => Employe::orderBy("name", "asc")->paginate(10)
        ]);


    }
}
