<?php

namespace App\Http\Livewire\Media;
use Livewire\Component;
use App\Models\Media;

class Wrapper extends Component
{
    public $state='list';
	public $listeners=['submitted', 'creating'];
	public $media;
	public function submitted(){
		$this->state='list';
	}
	public function creating($id){
		$this->media=Media::where('id', $id)->first();
		$this->state='create';
	}
	public function setState(){
		$this->state=$this->state=='list'?'create':'list';
		if($this->state=='list'){
			$this->media=null;
		}
	}
    public function render()
    {
        return view('livewire.media.wrapper');
    }
}
