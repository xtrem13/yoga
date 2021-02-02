<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <h2>USERS</h2>
    <button class="btn btn-success" wire:click="setState">
    	{{$state=='list'?'CREATE':'BACK'}}
   	</button>
    @switch($state)
    	@case('list')
    		<livewire:users.listall/>
    	@break
    	@case('create')
    		<livewire:users.create :user="$user"/>
    	@break
    @endswitch
</div>
