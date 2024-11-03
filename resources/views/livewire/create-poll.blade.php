<div>
    <form wire:submit.prevent="createPoll">
        <label>Poll Title</label>
        {{-- <input type="text" wire:model="title" /> --}}
        <input type="text" wire:model.live="title" />

        <div class="mt-4 mb-4">
            <button class="btn" wire:click.prevent="addOption"> Add Option </button>
        </div>


        <div>
            @foreach ( $options as $index => $option )
                <div class="mb-4">
                    <label>Option {{$index + 1}} </label>

                    <div class="flex gap-2">
                        <input type="text" wire:model="options.{{$index}}" />
    
                        <button class="btn" wire:click.prevent="removeOption({{$index}})"> Remove Option </button>
                    </div>

                </div>

                
            @endforeach
        </div>

        <button type="submit" class="btn" {{-- wire:click.prevent="createPoll" --}}> Create Poll </button>
    </form>
</div>