<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use App\Models\User;

class Listall extends Component
{

	public function edit($id){
		$this->emitUp('creating', $id);
	}
	public function delete($id){
		User::where('id', $id)->delete();
	}
    public function render()
    {
    	$data['users']=User::where('role','client')->get();
    	return view('livewire.users.listall', $data);
    }
}
