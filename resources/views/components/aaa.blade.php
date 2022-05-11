<x-layout>
    <div>
        <label for="title" class="block text-sm font-medium text-gray-700"> Main Quote for this Movie </label>
        <div class="mt-1">
            <textarea id="title" name="title" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder='"Where are they?!"'>{{ old('title') }}</textarea>
        </div>
        @error('title')
        <p class="text-red-500 text-lg mt-2">
            {{$message}}
        </p>
        @enderror
    </div>
</x-layout>
