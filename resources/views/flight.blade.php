<x-app-layout wire:poll>
    <div class="max-w-6xl m-auto">
        <h1 class="text-xl text-blue-900 my-2">Show flights:</h1>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-2">
            @foreach($flights as $flight)
                <div class="p-3 bg-amber-400" wire:key="{{$flight->id}}" wire:poll>
                    <span class="text-white" wire:poll>Name: {{$flight->name}}</span>
                    <hr>
                    <span class="text-white">Company: {{$flight->company}}</span>
                </div>
            @endforeach
        </div>
        <livewire:create-flight/>
    </div>
</x-app-layout>
