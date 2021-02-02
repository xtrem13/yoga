<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
 
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <h2>MEDIA</h2>
    <button class="btn btn-success" wire:click="setState">
    	{{$state=='list'?'CREATE':'BACK'}}
   	</button>
    @switch($state)
    	@case('list')
    		<livewire:media.listall/>
    	@break
    	@case('create')
    		<livewire:media.create :media="$media"/>
    	@break
    @endswitch
</div>


