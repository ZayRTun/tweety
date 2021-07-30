<div class="flex py-6 px-8 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="mr-4 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user) }}">
            <img class="rounded-full mr-2" width="40px" src="{{ $tweet->user->avatar }}" alt="">
        </a>
    </div>

    <div>
        <h5 class="font-bold">
            <a href="{{ route('profile', $tweet->user) }}">
                {{ $tweet->user->name }}
            </a>
        </h5>

        <p class="text-sm mb-3">
            {{ $tweet->body }}
        </p>

        <x-like-dislike-button :tweet="$tweet"/>
    </div>

</div>
