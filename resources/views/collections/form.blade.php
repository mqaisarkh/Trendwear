@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl font-bold mb-8">{{ isset($collection) ? 'Edit Collection' : 'Create New Collection' }}</h1>

        <form action="{{ isset($collection) ? route('collections.update', $collection) : route('collections.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @if(isset($collection))
                @method('PUT')
            @endif

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Collection Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $collection->name ?? '') }}" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" rows="4" 
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('description', $collection->description ?? '') }}</textarea>
                @error('description')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center">
                <input type="checkbox" name="is_featured" id="is_featured" value="1" 
                       {{ old('is_featured', $collection->is_featured ?? false) ? 'checked' : '' }}
                       class="h-4 w-4 text-black focus:ring-black border-gray-300 rounded">
                <label for="is_featured" class="ml-4 block text-sm text-gray-700">
                    Featured Collection
                </label>
                @error('is_featured')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Collection Image</label>
                <input type="file" name="image" id="image" accept="image/*" 
                       class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-black file:text-white hover:file:bg-gray-800">
                @error('image')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
                @if(isset($collection) && $collection->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $collection->image) }}" alt="Current image" class="h-32 w-32 object-cover rounded">
                    </div>
                @endif
            </div>

            <div class="flex justify-end">
                <a href="{{ route('collections.index') }}" class="bg-gray-200 text-gray-800 px-6 py-3 rounded-full hover:bg-gray-300 transition duration-300 mr-4">
                    Cancel
                </a>
                <button type="submit" class="bg-black text-white px-6 py-3 rounded-full hover:bg-gray-800 transition duration-300">
                    {{ isset($collection) ? 'Update Collection' : 'Create Collection' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection 