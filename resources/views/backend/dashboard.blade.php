@extends('backend.layouts.app')

@section('title', 'Dashboard')
@section('page_title', 'Dashboard')
@section('page_subtitle', 'Welcome back, Admin. Here is what\'s happening today.')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Quick Stats -->
    <div class="bg-surface border border-border p-6 rounded-2xl">
        <p class="text-white/40 text-sm mb-1">Total Blogs</p>
        <h3 class="text-3xl font-bold text-primary">{{ \App\Models\Blog::count() }}</h3>
    </div>
    
    <div class="bg-surface border border-border p-6 rounded-2xl">
        <p class="text-white/40 text-sm mb-1">Published Posts</p>
        <h3 class="text-3xl font-bold text-primary">{{ \App\Models\Blog::where('is_published', true)->count() }}</h3>
    </div>

    <div class="bg-surface border border-border p-6 rounded-2xl">
        <p class="text-white/40 text-sm mb-1">Drafts</p>
        <h3 class="text-3xl font-bold text-white/60">{{ \App\Models\Blog::where('is_published', false)->count() }}</h3>
    </div>
</div>

<div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
    <!-- Recent Blogs -->
    <div class="bg-surface border border-border rounded-2xl overflow-hidden">
        <div class="p-6 border-b border-border flex justify-between items-center">
            <h2 class="font-bold">Recent Blog Posts</h2>
            <a href="{{ route('admin.blogs.index') }}" class="text-primary text-sm hover:underline">View All</a>
        </div>
        <div class="divide-y divide-border">
            @forelse(\App\Models\Blog::latest()->take(5)->get() as $blog)
            <div class="p-4 flex items-center gap-4 hover:bg-white/5 transition-colors">
                <div class="w-12 h-12 bg-white/5 rounded-lg flex-shrink-0 overflow-hidden">
                    @if($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}" class="w-full h-full object-cover">
                    @else
                        <div class="w-full h-full flex items-center justify-center text-white/20">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        </div>
                    @endif
                </div>
                <div class="flex-1 min-w-0">
                    <h4 class="font-medium truncate">{{ $blog->title }}</h4>
                    <p class="text-xs text-white/40">{{ $blog->created_at->diffForHumans() }}</p>
                </div>
                <div>
                    @if($blog->is_published)
                        <span class="px-2 py-1 bg-primary/10 text-primary text-[10px] font-bold uppercase rounded-md">Published</span>
                    @else
                        <span class="px-2 py-1 bg-white/10 text-white/40 text-[10px] font-bold uppercase rounded-md">Draft</span>
                    @endif
                </div>
            </div>
            @empty
            <div class="p-12 text-center">
                <p class="text-white/20">No blogs created yet.</p>
                <a href="{{ route('admin.blogs.create') }}" class="text-primary text-sm mt-2 inline-block hover:underline">+ Create your first post</a>
            </div>
            @endforelse
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="space-y-6">
        <div class="bg-primary/5 border border-primary/20 p-6 rounded-2xl">
            <h3 class="font-bold mb-4">Quick Actions</h3>
            <div class="grid grid-cols-2 gap-4">
                <a href="{{ route('admin.blogs.create') }}" class="p-4 bg-white/5 border border-border rounded-xl hover:border-primary/50 transition-all group">
                    <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center text-primary mb-3 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    </div>
                    <span class="font-medium">New Blog</span>
                </a>
                <a href="{{ route('home') }}" target="_blank" class="p-4 bg-white/5 border border-border rounded-xl hover:border-primary/50 transition-all group">
                    <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center text-white mb-3 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    </div>
                    <span class="font-medium">Live Site</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
