<?php

namespace App\Http\Livewire\Users;
use App\Models\User;

use Livewire\Component;

class Wrapper extends Component
{
	public $state='list';
	public $listeners=['submitted', 'creating'];
	public $user;
	public function submitted(){
		$this->state='list';
	}
	public function creating($id){
		$this->user=User::where('id', $id)->first();
		$this->state='create';
	}
	public function setState(){
		$this->state=$this->state=='list'?'create':'list';
	}
    public function render()
    {
        return view('livewire.users.wrapper');
    }
}
