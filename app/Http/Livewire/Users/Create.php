<?php

namespace App\Http\Livewire\Users;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Create extends Component
{
	public $user;

	protected $rules=[
		'user.name'=>'',
		'user.email'=>'',
		'user.password_pure'=>''
	];
    public function mount(){
    	if(!$this->user){
    		$this->user=new User();
    	}
    }
    public function save(){
    	$this->user->password=Hash::make($this->user->password_pure);
        $this->user->save();
    	$this->emitUp('submitted');
    }
    public function render()
    {
    	
        return view('livewire.users.create');
    }
}
