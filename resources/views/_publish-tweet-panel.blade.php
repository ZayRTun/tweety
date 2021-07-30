<div class="border border-blue-400 rounded-lg px-8 pb-4 pt-6 mb-8">
    <form action="/tweets" method="POST">
        @csrf
        
        <textarea 
            name="body" 
            class="w-full" 
            placeholder="what's up buddy?"
            required 
            autofocus
        ></textarea>
        
        <hr class="mb-4">
        
        <footer class="flex justify-between items-center">
            <img 
                class="rounded-full mr-2" 
                src="{{ auth()->user()->avatar }}" 
                alt=""
                width="50px"
            >
            
            <button 
                type="submit"
                class="bg-blue-500 py-2 px-10 shadow rounded-full text-white text-sm hover:bg-blue-600"
            >
                Publish
            </button>
        </footer>
    </form>
    @error('body')
        <p class="text-red-700 text-sm mt-4">{{ $message }}</p>
    @enderror
</div>

