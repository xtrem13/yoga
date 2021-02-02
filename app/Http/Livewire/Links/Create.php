<?php

namespace App\Http\Livewire\Links;

use Livewire\Component;
use App\Models\Link;
use App\Models\User;
use Livewire\WithFileUploads;

class Create extends Component
{
   
    public $link;
    public $users;

	protected $rules=[
		'link.user_id'=>''
	];
    public function mount(){
    	if(!$this->link){
    		$this->link=new Link();
    	}
        $this->users=User::all();
    }
    public function save(){
        if($this->link->count){
            $this->link->hash=hash("sha256", $this->link->user_id.$this->link->count);
        }
        $this->link->hash=hash("sha256", $this->link->user_id.$this->link->count);

     	$this->link->save();
        $this->emitUp('submitted');
    }
    public function render()
    {
        return view('livewire.links.create');
    }
}
