<?php

namespace App\Http\Livewire\Links;

use Livewire\Component;
use App\Models\Link;

class Wrapper extends Component
{
    public $state='list';
	public $listeners=['submitted', 'creating'];
	public $link;
	public function submitted(){
		$this->state='list';
	}
	public function creating($id){
		$this->link=Link::where('id', $id)->first();
		$this->state='create';
	}
	public function setState(){
		$this->state=$this->state=='list'?'create':'list';
		if($this->state=='list'){
			$this->link=null;
		}
	}
    public function render()
    {
        return view('livewire.links.wrapper');
    }
}
