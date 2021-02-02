<?php

namespace App\Http\Livewire\Links;
use App\Models\Link;

use Livewire\Component;

class Listall extends Component
{
    public function edit($id){
		$this->emitUp('creating', $id);
	}
	public function delete($id){
		Link::where('id', $id)->delete();
	}
    public function render()
    {
    	$data['links']=Link::all();
    	return view('livewire.links.listall', $data);
    }
}
