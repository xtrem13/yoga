<?php

namespace App\Http\Livewire\Media;

use Livewire\Component;
use App\Models\Media;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Create extends Component
{
    use WithFileUploads;


    public $media;
    public $file;

	protected $rules=[
		'media.title'=>'',
		'media.type'=>''
	];

    public function mount(){
    	if(!$this->media){
    		$this->media=new Media();
            $this->media->type='video';
    	}
    }
    public function save(){
        
        if($this->media->path && $this->file){
           Storage::delete($this->media->path);
        }
    	if($this->file){
            $this->media->path=$this->file->store('media');
        }
    	$this->media->save();
    	$this->emitUp('submitted');
    }
    public function render()
    {
    	
        return view('livewire.media.create');
    }
}
