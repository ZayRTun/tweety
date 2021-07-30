<div class="flex">
    <form action="/tweets/{{ $tweet->id }}/like" method="post">
        @csrf
        
        <div class="flex mr-4">
            <svg class="h-4 w-4 fill-current {{ $tweet->isLikedBy(current_user()) ? 'text-blue-500' : 'text-gray-500'}} mr-2" style="transform: scaleX(-1)" viewBox="0 0 20 20">
                <path d="M11 0h1v3l3 7v8a2 2 0 01-2 2H5c-1.1 0-2.31-.84-2.7-1.88L0 12v-2a2 2 0 012-2h7V2a2 2 0 012-2zm6 10h3v10h-3V10z"/>
            </svg>

            <button type="submit" class="text-sm {{ $tweet->isLikedBy(current_user()) ? 'text-blue-500' : 'text-gray-500'}}">{{ $tweet->likes ?: 0 }}</button>
        </div>
    </form>
    
    <form action="/tweets/{{ $tweet->id }}/like" method="post">
        @csrf
        @method('DELETE')
        
        <div class="flex">
            <svg class="h-4 w-4 fill-current {{ $tweet->isDislikedBy(current_user()) ? 'text-blue-500' : 'text-gray-500'}} mr-2" style="transform: scaleX(-1)" viewBox="0 0 20 20">
                <path d="M11 20a2 2 0 0 1-2-2v-6H2a2 2 0 0 1-2-2V8l2.3-6.12A3.11 3.11 0 0 1 5 0h8a2 2 0 0 1 2 2v8l-3 7v3h-1zm6-10V0h3v10h-3z"/>
            </svg>

            <button type="submit" class="text-sm {{ $tweet->isDislikedBy(current_user()) ? 'text-blue-500' : 'text-gray-500'}}">{{ $tweet->dislikes ?: 0 }}</button>
        </div>
    </form>
</div>
