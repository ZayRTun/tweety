<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-10 py-8 border border-gray-300 bg-gray-200 rounded-lg">
            <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div class="mb-6">
                    <label for="email" class="block uppercase font-bold text-sm text-gray-700 mb-2">Email</label>
                    
                    <input class="border rounded p-2 w-full" type="text" name="email" id="email" required autocomplete="email" value="{{ old('email') }}">
                    
                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <label for="password" class="block uppercase font-bold text-sm text-gray-700 mb-2">Password</label>
                    
                    <input class="border rounded p-2 w-full" type="password" name="password" id="password" autocomplete="current-password">
                    
                    @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <div>
                        <input class="mr-1" type="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    
                        <label for="remember" class="text-sx text-gray-700 font-bold uppercase">Remember Me</label>
                    </div>
                    
                    @error('remember')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" 
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">
                            Submit
                    </button>
                    
                    <a href="{{ route('password.request') }}" class="text-xs text-gray-700">Forgot Your Password?</a>
                </div>
            </form>
        </div>
    </div>
</x-master>
