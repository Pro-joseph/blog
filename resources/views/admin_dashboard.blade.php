@extends('layouts.master')

@section('title', 'Admin Dashboard | The Technical Editor')

@section('body-class', 'font-body selection:bg-primary-fixed selection:text-on-primary-fixed')

@section('content')
    <aside
        class="fixed inset-y-0 left-0 z-40 flex flex-col py-6 md:py-8 bg-slate-50 dark:bg-slate-900 h-screen w-64 md:w-72 rounded-r-none border-r border-slate-200/20 shadow-xl dark:shadow-none transition-all hidden lg:flex">
        <div class="px-4 md:px-6 mb-8 md:mb-10 flex items-center gap-3">
            <span class="material-symbols-outlined text-primary text-2xl md:text-3xl" data-icon="terminal">terminal</span>
            <span
                class="text-base md:text-lg font-black text-slate-900 dark:text-white font-headline tracking-tighter">EDITOR.OS</span>
        </div>
        <div
            class="px-4 md:px-6 mb-6 md:mb-8 flex items-center gap-3 md:gap-4 tonal-layering bg-slate-100 dark:bg-slate-800/50 py-3 md:py-4 rounded-xl mx-3 md:mx-4">
            <div
                class="w-8 md:w-10 h-8 md:h-10 rounded-full bg-primary-container flex items-center justify-center overflow-hidden">
                <img alt="Lead Architect"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA0Dk98RAUIcWoT4-37s1kcfNEMdtGWy42GhXZwDVv8lnvF8ckm8cyR8ija8SeqLjrf9dDf5v9dgZ_U3mQuXV0FPQsJnUbaS9I-GYeFjAHxxnwz1EOzq-MiQvvIhuYCOflmpTy8JHZHxPQIem3g62N0I9FoxBy_dTPkhkc5DX_X7VBR4gntEra3W9qERBI_G4WkaX08WEOORKAsZoyi8a6T61WRyNfUzO3nxaE0oWQ0LkCQU6pl3WBG9-Pd7t28S_eydR-3lrOAh38" />
            </div>
            <div>
                <p class="font-headline text-xs md:text-sm font-bold text-on-surface">Lead Architect</p>
                <p class="font-label text-xs text-slate-500">System Management</p>
            </div>
        </div>
        <nav class="flex-1 space-y-1">
            <a class="flex items-center gap-2 md:gap-3 px-4 md:px-6 py-2 md:py-3 font-label text-sm font-semibold tracking-wide text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 mx-2 hover:translate-x-1 transition-transform duration-200"
                href="{{ route('dashboard') }}">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                Dashboard
            </a>
            <a class="flex items-center gap-2 md:gap-3 px-4 md:px-6 py-2 md:py-3 font-label text-sm font-semibold tracking-wide bg-indigo-50 dark:bg-indigo-900/30 text-indigo-900 dark:text-indigo-100 rounded-lg mx-2"
                href="{{ route('home') }}">
                <span class="material-symbols-outlined" data-icon="description">description</span>
                Articles
            </a>
            <a class="flex items-center gap-2 md:gap-3 px-4 md:px-6 py-2 md:py-3 font-label text-sm font-semibold tracking-wide text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 mx-2 hover:translate-x-1 transition-transform duration-200"
                href="#">
                <span class="material-symbols-outlined" data-icon="sell">sell</span>
                Categories
            </a>
            <a class="flex items-center gap-2 md:gap-3 px-4 md:px-6 py-2 md:py-3 font-label text-sm font-semibold tracking-wide text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 mx-2 hover:translate-x-1 transition-transform duration-200"
                href="#">
                <span class="material-symbols-outlined" data-icon="insights">insights</span>
                Analytics
            </a>
        </nav>
        <div class="px-4 md:px-6 mt-auto">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full flex items-center justify-center gap-2 py-2 md:py-3 text-xs md:text-sm font-bold font-label text-error hover:bg-error/5 rounded-lg transition-colors">
                    <span class="material-symbols-outlined" data-icon="logout">logout</span>
                    Sign Out
                </button>
            </form>
        </div>
    </aside>
    <header
        class="lg:hidden bg-surface/80 dark:bg-slate-950/80 backdrop-blur-xl sticky top-0 z-50 bg-surface-container-low/50 px-4 py-3">
        <div class="flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary" data-icon="terminal">terminal</span>
                </span>
                <span class="font-bold">Editor.OS</span>
            </a>
            <button data-mobile-menu="mobile-sidebar">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </div>
    </header>
    <nav id="mobile-sidebar" class="lg:hidden fixed inset-0 z-50 bg-surface/95 backdrop-blur-xl p-4 hidden">
        <div class="flex justify-between items-center mb-6">
            <span class="material-symbols-outlined text-primary text-2xl" data-icon="terminal">terminal</span>
            <button data-mobile-menu="mobile-sidebar">
                <span class="material-symbols-outlined text-2xl">close</span>
            </button>
        </div>
        <div class="flex flex-col gap-4">
            <a class="flex items-center gap-3 py-3 text-slate-600" href="{{ route('dashboard') }}">Dashboard</a>
            <a class="flex items-center gap-3 py-3 text-indigo-900 font-bold" href="{{ route('home') }}">Articles</a>
            <a class="flex items-center gap-3 py-3 text-slate-600" href="#">Categories</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex items-center gap-3 py-3 text-slate-600">Sign Out</button>
            </form>
        </div>
    </nav>
    <main class="lg:ml-64 xl:ml-72 min-h-screen">
        <header
            class="bg-surface/80 dark:bg-slate-950/80 backdrop-blur-xl sticky top-0 z-50 no-border bg-surface-container-low/50">
            <div class="flex justify-between items-center max-w-7xl mx-auto px-10 h-20">
                <div class="flex items-center gap-4">
                    <a href="{{ route('home') }}" class="text-2xl font-serif italic text-indigo-950 dark:text-indigo-50">The
                        Technical Editor</a>
                </div>
                <div class="flex items-center gap-6">
                    <button class="material-symbols-outlined text-slate-500 hover:text-indigo-900 transition-colors"
                        data-icon="search">search</button>
                    <button class="material-symbols-outlined text-slate-500 hover:text-indigo-900 transition-colors"
                        data-icon="notifications">notifications</button>
                    <div class="h-8 w-[1px] bg-outline-variant/20"></div>
                    <div class="flex items-center gap-2 group">
                        <span class="material-symbols-outlined text-indigo-900 dark:text-indigo-400 text-3xl"
                            data-icon="account_circle">account_circle</span>
                        <span
                            class="font-label text-sm font-bold text-on-surface group-hover:text-primary transition-colors">{{ Auth::user()->name }}</span>
                    </div>
                </div>
            </div>
        </header>
        <div class="max-w-7xl mx-auto px-10 py-12">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                <div class="space-y-2">
                    <span class="text-primary font-label text-xs font-black tracking-[0.2em] uppercase">Content
                        Management</span>
                    <h2 class="text-5xl font-headline font-bold text-on-background tracking-tighter">Article Library</h2>
                    <p class="text-lg text-slate-500 max-w-lg font-body italic leading-relaxed">Manage your technical
                        publications, draft system specifications, and oversee the editorial workflow.</p>
                </div>
                <a href="{{ route('create') }}"
                    class="group relative inline-flex items-center gap-3 px-8 py-4 bg-primary text-on-primary rounded-lg font-headline font-bold overflow-hidden transition-all hover:shadow-2xl hover:shadow-primary/20 active:scale-95">
                    <span class="material-symbols-outlined" data-icon="add">add</span>
                    Create New Article
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                <div class="bg-surface-container-low p-6 rounded-xl space-y-2">
                    <p class="font-label text-xs font-bold text-slate-500 uppercase tracking-widest">Total Articles</p>
                    <p class="text-4xl font-headline font-black text-on-background">{{ $articles->count() }}</p>
                </div>
                <div class="bg-surface-container-low p-6 rounded-xl space-y-2">
                    <p class="font-label text-xs font-bold text-slate-500 uppercase tracking-widest">Published</p>
                    <p class="text-4xl font-headline font-black text-primary">
                        {{ $articles->where('published', true)->count() }}</p>
                </div>
                <div class="bg-surface-container-low p-6 rounded-xl space-y-2">
                    <p class="font-label text-xs font-bold text-slate-500 uppercase tracking-widest">In Draft</p>
                    <p class="text-4xl font-headline font-black text-tertiary">
                        {{ $articles->where('published', false)->count() }}</p>
                </div>
            </div>
            <div class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm border border-outline-variant/10">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-surface-container-low/50 border-b border-outline-variant/10">
                                <th
                                    class="px-8 py-5 font-headline text-xs font-black uppercase tracking-widest text-slate-500">
                                    Title</th>
                                <th
                                    class="px-8 py-5 font-headline text-xs font-black uppercase tracking-widest text-slate-500">
                                    Category</th>
                                <th
                                    class="px-8 py-5 font-headline text-xs font-black uppercase tracking-widest text-slate-500">
                                    Status</th>
                                <th
                                    class="px-8 py-5 font-headline text-xs font-black uppercase tracking-widest text-slate-500">
                                    Date Created</th>
                                <th
                                    class="px-8 py-5 font-headline text-xs font-black uppercase tracking-widest text-slate-500 text-right">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant/10">
                            @forelse($articles as $article)
                                <tr class="hover:bg-surface-container-low/30 transition-colors group">
                                    <td class="px-8 py-6">
                                        <div class="flex flex-col">
                                            <span
                                                class="font-headline font-bold text-on-surface text-base group-hover:text-primary transition-colors">{{ $article->title }}</span>
                                            <span
                                                class="text-xs text-slate-400 font-label">{{ $article->slug ?? 'article-' . $article->id . '.md' }}</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        @if ($article->category)
                                            <span
                                                class="px-3 py-1 bg-secondary-container text-on-secondary-container rounded-full text-xs font-bold font-label">{{ $article->category->name }}</span>
                                        @else
                                            <span
                                                class="px-3 py-1 bg-secondary-container text-on-secondary-container rounded-full text-xs font-bold font-label">Uncategorized</span>
                                        @endif
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="flex items-center gap-2">
                                            <span
                                                class="w-2 h-2 rounded-full {{ $article->published ? 'bg-emerald-500' : 'bg-amber-500' }}"></span>
                                            <span
                                                class="text-sm font-bold text-on-surface font-label">{{ $article->published ? 'Published' : 'Draft' }}</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <span
                                            class="text-sm text-slate-600 font-label">{{ $article->created_at->format('M d, Y') }}</span>
                                    </td>
                                    <td class="px-8 py-6 text-right">
                                        <div class="flex items-center justify-end gap-3">
                                            <a href="{{ route('edit', $article->id) }}"
                                                class="p-2 text-slate-400 hover:text-primary hover:bg-primary-fixed transition-all rounded-lg material-symbols-outlined"
                                                data-icon="edit">edit</a>
                                            <form action="{{ route('article.destroy', $article->id) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="p-2 text-slate-400 hover:text-error hover:bg-error-container transition-all rounded-lg material-symbols-outlined"
                                                    data-icon="delete">delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-8 py-12 text-center text-slate-500">No articles yet. <a
                                            href="{{ route('create') }}" class="text-primary hover:underline">Create your
                                            first article</a></td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="bg-surface-container-low/20 px-8 py-6 flex items-center justify-between">
                    <span class="text-sm text-slate-500 font-label">Showing {{ $articles->count() }}
                        article{{ $articles->count() !== 1 ? 's' : '' }}</span>
                    <div class="flex items-center gap-2">
                        <button
                            class="p-2 rounded hover:bg-surface-container-high transition-colors material-symbols-outlined text-slate-400"
                            data-icon="chevron_left">chevron_left</button>
                        <button class="w-8 h-8 rounded bg-primary text-on-primary text-xs font-bold font-label">1</button>
                        <button
                            class="w-8 h-8 rounded hover:bg-surface-container-high text-xs font-bold font-label transition-colors">2</button>
                        <button
                            class="w-8 h-8 rounded hover:bg-surface-container-high text-xs font-bold font-label transition-colors">3</button>
                        <button
                            class="p-2 rounded hover:bg-surface-container-high transition-colors material-symbols-outlined text-slate-400"
                            data-icon="chevron_right">chevron_right</button>
                    </div>
                </div>
            </div>
        </div>
        <footer
            class="w-full py-12 px-6 flex flex-col md:flex-row justify-between items-center max-w-7xl mx-auto border-t border-slate-200/10 bg-slate-50 dark:bg-slate-950 full-width mt-20 tonal-shift bg-slate-100 dark:bg-slate-900">
            <div class="mb-6 md:mb-0">
                <p class="font-serif text-base text-slate-600 dark:text-slate-400">© 2024 Technical Editor. Engineered for
                    readability.</p>
            </div>
            <div class="flex gap-8">
                <a class="font-serif text-base text-slate-500 hover:text-indigo-500 transition-opacity hover:opacity-70"
                    href="{{ route('home') }}">RSS Feed</a>
                <a class="font-serif text-base text-slate-500 hover:text-indigo-500 transition-opacity hover:opacity-70"
                    href="#">Privacy Policy</a>
                <a class="font-serif text-base text-slate-500 hover:text-indigo-500 transition-opacity hover:opacity-70"
                    href="#">Terms of Service</a>
                <a class="font-serif text-base text-slate-500 hover:text-indigo-500 transition-opacity hover:opacity-70"
                    href="#">GitHub</a>
            </div>
        </footer>
    </main>
@endsection
