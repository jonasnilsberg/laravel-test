<x-app-layout>
    <div class="max-w-6xl m-auto">
        <livewire:show-flights/>
        <h3 class="text-lg text-white">Delayed Flight:</h3>
        <livewire:show-delayed-flights lazy/>
        <div class="mt-3">
            <livewire:create-flight/>
        </div>
    </div>
</x-app-layout>
