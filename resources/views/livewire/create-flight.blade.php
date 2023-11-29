<div class="pb-10">
    <form wire:submit.prevent="save">
        <div class="flex mt-2">
            <div>
                <x-input-label for="name" :value="__('Name')"/>
                <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required
                              autofocus/>
                <x-input-error :messages="$errors->get('name')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="company" :value="__('Company')"/>
                <x-text-input wire:model="company" id="company" class="block mt-1 w-full" type="text" name="company"
                              required
                />
                <x-input-error :messages="$errors->get('company')" class="mt-2"/>
            </div>
        </div>
        <x-primary-button class="mt-2">
            {{ __('Add flight') }}
        </x-primary-button>
        <x-action-message on="test">
            {{ __('Saved.') }}
        </x-action-message>
        <p class="text-white" wire:poll>{{$count}}</p>
    </form>
</div>
