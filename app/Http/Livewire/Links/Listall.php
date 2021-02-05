<?php

namespace App\Http\Livewire\Links;
use App\Models\Link;

use Livewire\Component;

class Listall extends Component
{
    protected $link;
    public function remake($id){
		$this->link=Link::where('id', $id)->first();
        $this->link->count++;
        $this->link->hash=hash("sha256", $this->link->user_id.$this->link->count);
        $this->link->save();
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
