@unless (current_user()->is($user))
<form action="/profiles/{{ $user->username }}/follow" method="POST">
    @csrf

    <button class="bg-blue-500 py-2 px-4 shadow rounded-full text-white text-xs">
        {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
    </button>
</form>
@endunless