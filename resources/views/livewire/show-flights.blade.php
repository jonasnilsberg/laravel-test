<div>
    <h1 class="text-xl text-white my-2">Show flights:</h1>
    <form wire:submit.prevent="submitSearch" class="my-2">
        <x-text-input wire:model.debounce="search"/>
        <x-primary-button>Search</x-primary-button>
    </form>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-2">
        @foreach($flights as $flight)
            <div class="p-3 bg-gray-800 rounded" wire:key="{{$flight->id}}">
                <p class="text-white">Name: {{$flight->name}}</p>
                <p class="text-white truncate">Company: {{$flight->company}}</p>
            </div>
        @endforeach
    </div>

    <div class="mt-2">
        {{$flights->links()}}
    </div>
</div>
