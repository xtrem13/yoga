<?php

namespace App\Http\Livewire\Media;
use App\Models\Media;
use Livewire\Component;

class Listall extends Component
{
    public function edit($id){
		$this->emitUp('creating', $id);
	}
	public function delete($id){
		Media::where('id', $id)->delete();
	}
    public function render()
    {
    	$data['media']=Media::all();
    	return view('livewire.media.listall', $data);
    }
}
