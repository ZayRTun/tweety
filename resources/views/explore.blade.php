<x-app>
    <div>
        @foreach ($users as $user)
            <a href="{{ $user->path() }}">
                <div class="flex mb-4 align-content-center items-center">
                    <img src="{{ $user->avatar }}" alt="{{ $user->name }}" width="50px" class="rounded">
                    
                    <p class="ml-4 text-bold">{{ '@'.$user->name }}</p>
                </div>
            </a>
        @endforeach
    </div>
</x-app>
