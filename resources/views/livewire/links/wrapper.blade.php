<div>
    {{-- Be like water. --}}

    <h2>LINKS</h2>
    <button class="btn btn-success" wire:click="setState">
    	{{$state=='list'?'CREATE':'BACK'}}
   	</button>
    @switch($state)
    	@case('list')
    		<livewire:links.listall/>
    	@break
    	@case('create')
    		<livewire:links.create :link="$link"/>
    	@break
    @endswitch
</div>
