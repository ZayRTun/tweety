<div class="bg-gray-200 border border-gray-300 rounded-lg py-4 px-4">
    <h3 class="font-bold text-xl mb-4">Following</h3>
    
    <ul>
        @forelse (auth()->user()->follows as $user)
            <li class="{{ $loop->last ? '' : 'mb-4' }}">
                <div >
                    <a class="flex items-center text-xs" href="{{ $user->path() }}">
                        <img class="rounded-full flex-shrink-0 mr-2" width="50"  src="{{ $user->avatar }}" alt="{{ $user->name }}">
                        
                        {{ $user->name }}
                    </a>
                </div>
            </li>
        @empty
            <li class="mb-4">No friends yet.</li>  
        @endforelse
    </ul>
</div>
