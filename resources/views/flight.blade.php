<x-app-layout>
    <div class="max-w-6xl m-auto">
        <h1 class="text-xl text-blue-900 my-2">Show flights:</h1>
        <div class="grid grid-cols-4 gap-2 ">
            @foreach($flights as $flight)
                <div class="p-3 bg-amber-400">
                    <span class="text-white">Name: {{$flight->name}}</span>
                    <hr>
                    <span class="text-white">Company: {{$flight->company}}</span>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
