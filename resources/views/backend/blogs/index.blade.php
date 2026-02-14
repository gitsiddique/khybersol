@extends('backend.layouts.app')

@section('title', 'Blogs')
@section('page_title', 'Blog Management')
@section('page_subtitle', 'Manage your stories and company updates.')

@section('header_actions')
<a href="{{ route('admin.blogs.create') }}" class="inline-flex items-center gap-2 bg-primary text-black px-6 py-3 rounded-xl font-bold hover:bg-primary/90 transition-all active:scale-95">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
    Create New Blog
</a>
@endsection

@section('content')
<div class="bg-surface border border-border rounded-2xl overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b border-border bg-white/5">
                    <th class="px-6 py-4 text-xs uppercase tracking-widest font-bold text-white/40">Blog</th>
                    <th class="px-6 py-4 text-xs uppercase tracking-widest font-bold text-white/40">Status</th>
                    <th class="px-6 py-4 text-xs uppercase tracking-widest font-bold text-white/40">Created At</th>
                    <th class="px-6 py-4 text-xs uppercase tracking-widest font-bold text-white/40 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-border">
                @forelse($blogs as $blog)
                <tr class="hover:bg-white/5 transition-colors group">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-white/5 rounded-lg flex-shrink-0 overflow-hidden">
                                @if($blog->image)
                                    <img src="{{ asset('storage/' . $blog->image) }}" class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-white/20">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    </div>
                                @endif
                            </div>
                            <div>
                                <h4 class="font-bold group-hover:text-primary transition-colors">{{ $blog->title }}</h4>
                                <p class="text-xs text-white/40">{{ Str::limit(strip_tags($blog->description), 50) }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        @if($blog->is_published)
                            <span class="px-3 py-1 bg-primary/10 text-primary text-[10px] font-bold uppercase rounded-full border border-primary/20">Published</span>
                        @else
                            <span class="px-3 py-1 bg-white/10 text-white/40 text-[10px] font-bold uppercase rounded-full border border-white/10">Draft</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-sm text-white/60">
                        {{ $blog->created_at->format('M d, Y') }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-2">
                            <a href="{{ route('admin.blogs.edit', $blog) }}" class="w-10 h-10 bg-white/5 border border-border rounded-lg flex items-center justify-center hover:bg-primary/10 hover:border-primary/50 hover:text-primary transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 00-2 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                            </a>
                            <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-10 h-10 bg-white/5 border border-border rounded-lg flex items-center justify-center hover:bg-red-500/10 hover:border-red-500/50 hover:text-red-500 transition-all">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-12 text-center">
                        <div class="flex flex-col items-center gap-4">
                            <div class="w-16 h-16 bg-white/5 rounded-full flex items-center justify-center text-white/20">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2zM14 4v4h4"/></svg>
                            </div>
                            <div class="text-white/40">No blogs found. Start sharing your stories.</div>
                            <a href="{{ route('admin.blogs.create') }}" class="text-primary hover:underline">Create First Post</a>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($blogs->hasPages())
    <div class="p-6 border-t border-border bg-white/5">
        {{ $blogs->links() }}
    </div>
    @endif
</div>
@endsection
