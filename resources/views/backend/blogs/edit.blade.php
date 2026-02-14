@extends('backend.layouts.app')

@section('title', 'Edit Blog')
@section('page_title', 'Edit Post')
@section('page_subtitle', 'Updating: ' . $blog->title)

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/css/ckeditor.css') }}">
@endpush

@section('content')
<form action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data" class="space-y-8 max-w-5xl">
    @csrf
    @method('PUT')
    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6">
            <div class="bg-surface border border-border p-6 rounded-2xl space-y-4">
                <div>
                    <label class="block text-sm font-bold text-white/60 mb-2 uppercase tracking-widest">Blog Title</label>
                    <input type="text" name="title" value="{{ old('title', $blog->title) }}" required
                        class="w-full bg-black border border-border rounded-xl px-4 py-3 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all placeholder:text-white/20"
                        placeholder="Enter a catchy title...">
                    @error('title') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-bold text-white/60 mb-2 uppercase tracking-widest">Content</label>
                    <textarea name="description" id="editor" data-upload-url="{{ route('admin.upload') }}">{{ old('description', $blog->description) }}</textarea>
                    @error('description') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
            </div>
        </div>

        <!-- Sidebar Actions -->
        <div class="space-y-6">
            <div class="bg-surface border border-border p-6 rounded-2xl space-y-6">
                <div>
                    <label class="block text-sm font-bold text-white/60 mb-2 uppercase tracking-widest">Featured Image</label>
                    <div class="relative group">
                        <input type="file" name="image" id="imageInput" class="hidden" accept="image/*">
                        <label for="imageInput" class="block aspect-video w-full bg-black border-2 border-dashed border-border rounded-xl cursor-pointer overflow-hidden group-hover:border-primary/50 transition-all">
                            <div id="imagePreview" class="w-full h-full">
                                @if($blog->image)
                                    <img src="{{ asset('storage/' . $blog->image) }}" class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full flex flex-col items-center justify-center text-white/20 p-4">
                                        <svg class="w-8 h-8 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                        <span class="text-xs font-medium">Click to change image</span>
                                    </div>
                                @endif
                            </div>
                        </label>
                    </div>
                    @error('image') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="flex items-center justify-between p-4 bg-white/5 rounded-xl border border-border">
                    <span class="text-sm font-bold text-white/60 uppercase tracking-widest">Publish Status</span>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" name="is_published" value="1" class="sr-only peer" {{ old('is_published', $blog->is_published) ? 'checked' : '' }}>
                        <div class="w-11 h-6 bg-white/10 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                    </label>
                </div>

                <div class="pt-4 space-y-3">
                    <button type="submit" class="w-full bg-primary text-black font-bold py-4 rounded-xl hover:bg-primary/90 transition-all active:scale-[0.98] shadow-lg shadow-primary/20">
                        Update Post
                    </button>
                    <a href="{{ route('admin.blogs.index') }}" class="block w-full text-center text-white/40 hover:text-white text-sm font-bold py-2 transition-colors">
                        Cancel & Return
                    </a>
                </div>
            </div>

            <div class="bg-white/5 border border-border p-4 rounded-xl text-xs text-white/40 space-y-2">
                <p>Created: {{ $blog->created_at->format('M d, Y H:i') }}</p>
                <p>Last Updated: {{ $blog->updated_at->format('M d, Y H:i') }}</p>
            </div>
        </div>
    </div>
</form>
@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<script src="{{ asset('backend/js/ckeditor.js') }}"></script>
@endpush
