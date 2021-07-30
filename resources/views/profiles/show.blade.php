<x-app>
    <header class="mb-8">
        <div class="relative">
            <img class="rounded-lg  object-cover mb-2" src="/images/banner.jpg">

            <img class="rounded-full absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                 width="140px" height="140px" style="left: 50%" src="{{ $user->avatar }}" alt="">

        </div>


        <div class="flex justify-between items-baseline mb-6">
            <div style="max-width:270px">
                <h3 class="text-2xl font-bold">{{ $user->name }}</h3>
                <p class="text-sm text-gray-700">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can ('edit', $user)
                <a href="{{ $user->path('edit') }}" class="py-2 px-4 shadow rounded-full mr-2 text-xs">Edit
                    Profile</a>
                @endcan

                <x-follow-button :user="$user" />
            </div>
        </div>

        <p class="text-sm text-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae saepe, ullam praesentium iure ex
            adipisci nemo reiciendis dicta. Earum saepe eligendi consequuntur, debitis aliquid exercitationem
            fugit similique assumenda ipsa molestias dolores cum mollitia ad sed magni error architecto
            maiores nihil atque consequatur odit quas nulla. Sed, placeat non.
        </p>

    </header>

    @include('_timeline', [
    'tweets' => $tweets
    ])
</x-app>