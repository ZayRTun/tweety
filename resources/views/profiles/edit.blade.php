<x-app>
    <form action="{{ $user->path() }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        
        <div class="mb-6">
            <label for="name" class="block uppercase font-bold text-sm text-gray-700 mb-2">Name</label>
            
            <input class="border rounded p-2 w-full" type="text" name="name" id="name" value="{{ $user->name }}" required>
            
            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="mb-6">
            <label for="username" class="block uppercase font-bold text-sm text-gray-700 mb-2">User Name</label>
            
            <input class="border rounded p-2 w-full" type="text" name="username" id="username" value="{{ $user->username }}" required>
            
            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="mb-6">
            <label for="avatar" class="block uppercase font-bold text-sm text-gray-700 mb-2">Avatar</label>
            
            <div class="flex">
                <input class="border rounded p-2 w-full" type="file" name="avatar" id="avatar">
                
                @error('avatar')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
                
                <div>
                    <img class="ml-2" src="{{ $user->avatar }}" alt="your avatar" width="40px" height="40px">
                </div>
            </div>
            
        </div>
        
        <div class="mb-6">
            <label for="email" class="block uppercase font-bold text-sm text-gray-700 mb-2">Email</label>
            
            <input class="border rounded p-2 w-full" type="email" name="email" id="email" value="{{ $user->email }}" required>
            
            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="mb-6">
            <label for="password" class="block uppercase font-bold text-sm text-gray-700 mb-2">Password</label>
            
            <input class="border rounded p-2 w-full" type="password" name="password" id="password" required>
            
            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="mb-6">
            <label for="password_confirmation" class="block uppercase font-bold text-sm text-gray-700 mb-2">Password Confirmation</label>
            
            <input class="border rounded p-2 w-full" type="password" name="password_confirmation" id="password_confirmation" required>
            
            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="mb-6">
            <button type="submit" 
                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-4">
                    Submit
            </button>
            
            <a class="hover:underline" href="{{ $user->path() }}">Cancel</a>
        </div>
        
    </form>
</x-app>
