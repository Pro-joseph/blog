@extends('layouts.master')

@section('title', 'Edit Article | The Technical Editor')

@section('body-class', 'bg-surface')

@section('content')
<header class="bg-surface/80 backdrop-blur-xl docked full-width top-0 sticky z-50 no-border bg-surface-container-low/50">
<div class="flex justify-between items-center max-w-7xl mx-auto px-4 md:px-6 h-16 md:h-20">
<div class="flex items-center gap-2 md:gap-3">
<a href="{{ route('home') }}" class="flex items-center gap-2 md:gap-3">
<span class="material-symbols-outlined text-indigo-900 dark:text-indigo-400">terminal</span>
<span class="text-lg md:text-2xl font-serif italic text-indigo-950 dark:text-indigo-50">The Technical Editor</span>
</a>
</div>
<nav class="hidden lg:flex gap-6 md:gap-8 items-center">
<a class="text-slate-500 dark:text-slate-400 font-medium hover:text-indigo-700 dark:hover:text-indigo-300 transition-colors duration-200 font-sans-ui text-sm" href="{{ route('dashboard') }}">Dashboard</a>
<a class="text-indigo-900 dark:text-indigo-100 font-bold border-b-2 border-indigo-600 hover:text-indigo-700 dark:hover:text-indigo-300 transition-colors duration-200 font-sans-ui text-sm" href="{{ route('home') }}">Articles</a>
<a class="text-slate-500 dark:text-slate-400 font-medium hover:text-indigo-700 dark:hover:text-indigo-300 transition-colors duration-200 font-sans-ui text-sm" href="#">Categories</a>
</nav>
<button class="lg:hidden text-indigo-900 dark:text-indigo-400" data-mobile-menu="mobile-nav">
<span class="material-symbols-outlined">menu</span>
</button>
<div class="flex items-center gap-4">
<a href="{{ route('dashboard') }}" class="material-symbols-outlined text-indigo-900 dark:text-indigo-400 cursor-pointer scale-95 active:opacity-80 transition-all">account_circle</span>
</div>
</div>
</header>
<nav id="mobile-nav" class="hidden lg:hidden fixed inset-0 z-50 bg-surface/95 backdrop-blur-xl p-4">
<div class="flex justify-end">
<button data-mobile-menu="mobile-nav">
<span class="material-symbols-outlined text-2xl">close</span>
</button>
</div>
<div class="flex flex-col gap-6 mt-8 text-center">
<a class="text-xl font-bold text-indigo-900" href="{{ route('dashboard') }}">Dashboard</a>
<a class="text-xl font-bold text-indigo-900" href="{{ route('home') }}">Articles</a>
<a class="text-xl font-bold text-indigo-900" href="#">Categories</a>
</div>
</nav>
<div class="flex max-w-7xl mx-auto min-h-screen">
<aside class="fixed inset-y-0 left-0 z-40 flex flex-col py-6 md:py-8 bg-slate-50 dark:bg-slate-900 h-screen w-64 md:w-72 rounded-r-none border-r border-slate-200/20 shadow-xl dark:shadow-none hidden lg:flex">
<div class="px-4 md:px-6 mb-8 md:mb-10 flex items-center gap-3 md:gap-4">
<div class="w-10 md:w-12 h-10 md:h-12 rounded-full overflow-hidden bg-surface-container-highest">
<img alt="Lead Architect" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBDTbnPEClJ_sBv4Mfp3cL3lS2_0kxC3XZUix7Cd6j9HsPjS6nGB-MJvbV9qNv1MI8ac5tDUa1ZIGBHDFz2VQ9lI8rNTKM_JXsq4V59w4yklViMeuh9U-e2jFtK0bsvBxghbIAtPMpXfVwymgSnS2voSHuy877xjpugGz3iy-2fJnNFQn7onzAmukYQ4b7PkodCOpLwZXh1p23XmiqemTulTUFsLHr42c-WfT2eaSPtZKtW3NHCNIpvB8nW_gxk0p4SG_vAf3PaGOY"/>
</div>
<div>
<h3 class="text-base md:text-lg font-black text-slate-900 dark:text-white font-sans-ui">Lead Architect</h3>
<p class="text-xs text-slate-500 font-sans-ui uppercase tracking-widest">System Management</p>
</div>
</div>
<nav class="flex-1 space-y-1">
<a class="flex items-center gap-3 md:gap-4 py-2 md:py-3 px-3 md:px-4 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 mx-2 hover:translate-x-1 transition-transform duration-200 font-sans-ui text-sm font-semibold tracking-wide" href="{{ route('dashboard') }}">
<span class="material-symbols-outlined">dashboard</span> Dashboard
</a>
<a class="flex items-center gap-3 md:gap-4 py-2 md:py-3 px-3 md:px-4 bg-indigo-50 dark:bg-indigo-900/30 text-indigo-900 dark:text-indigo-100 rounded-lg mx-2 hover:translate-x-1 transition-transform duration-200 font-sans-ui text-sm font-semibold tracking-wide" href="{{ route('home') }}">
<span class="material-symbols-outlined">description</span> Articles
</a>
<a class="flex items-center gap-3 md:gap-4 py-2 md:py-3 px-3 md:px-4 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 mx-2 hover:translate-x-1 transition-transform duration-200 font-sans-ui text-sm font-semibold tracking-wide" href="#">
<span class="material-symbols-outlined">sell</span> Categories
</a>
</nav>
</aside>
<main class="flex-1 lg:ml-64 xl:ml-72 px-4 md:px-6 py-8 md:py-12 bg-surface">
<div class="mb-6 md:mb-8 flex items-center gap-2 text-xs md:text-sm font-sans-ui text-slate-500 overflow-x-auto">
<a href="{{ route('dashboard') }}" class="hover:text-primary cursor-pointer whitespace-nowrap">Dashboard</a>
<span class="material-symbols-outlined text-xs">chevron_right</span>
<a href="{{ route('home') }}" class="hover:text-primary cursor-pointer whitespace-nowrap">Articles</a>
<span class="material-symbols-outlined text-xs">chevron_right</span>
<span class="text-on-background font-semibold whitespace-nowrap">Edit Article</span>
</div>
<div class="max-w-4xl">
<header class="mb-8 md:mb-12">
<h1 class="text-3xl md:text-5xl font-sans-ui font-extrabold tracking-tight text-on-background mb-3 md:mb-4">Drafting Complexity.</h1>
<p class="text-base md:text-xl text-slate-600 font-serif leading-relaxed italic">Refining the narrative for architectural precision.</p>
</header>
<section class="bg-surface-container-lowest rounded-xl p-4 md:p-8 shadow-sm">
<form class="space-y-8 md:space-y-10">
<div class="space-y-3">
<label class="block font-sans-ui text-sm font-bold tracking-wider text-on-surface-variant uppercase" for="title">Article Title</label>
<input class="w-full bg-surface-container-low p-3 md:p-4 text-lg md:text-2xl font-serif border-none rounded-lg placeholder:text-slate-300 transition-all focus:bg-white focus:shadow-md" id="title" placeholder="The Anatomy of Latency..." type="text" value="Architecting Scalable Micro-Services with Laravel Octane"/>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10">
<div class="space-y-3">
<label class="block font-sans-ui text-sm font-bold tracking-wider text-on-surface-variant uppercase" for="category">Category</label>
<div class="relative">
<select class="w-full appearance-none bg-surface-container-low p-3 md:p-4 font-sans-ui border-none rounded-lg transition-all focus:bg-white" id="category">
<option>Systems Architecture</option>
<option selected>Frontend Engineering</option>
<option>Database Theory</option>
<option>Applied Cryptography</option>
</select>
<span class="material-symbols-outlined absolute right-3 md:right-4 top-1/2 -translate-y-1/2 pointer-events-none text-slate-400">expand_more</span>
</div>
</div>
<div class="space-y-3">
<label class="block font-sans-ui text-sm font-bold tracking-wider text-on-surface-variant uppercase">Publishing Status</label>
<div class="flex items-center h-12 md:h-14 gap-3 md:gap-4">
<span class="font-sans-ui text-sm font-medium text-slate-500">Draft</span>
<button type="button" class="relative inline-flex h-6 md:h-7 w-12 md:w-14 shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out bg-primary focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
<span class="translate-x-5 md:translate-x-7 pointer-events-none inline-block h-5 md:h-6 w-5 md:w-6 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
</button>
<span class="font-sans-ui text-sm font-bold text-primary">Published</span>
</div>
</div>
</div>
<div class="space-y-3">
<div class="flex justify-between items-center flex-wrap gap-2">
<label class="block font-sans-ui text-sm font-bold tracking-wider text-on-surface-variant uppercase" for="content">Editorial Content</label>
<div class="flex gap-2 md:gap-4">
<button type="button" class="material-symbols-outlined text-slate-400 hover:text-primary transition-colors">format_bold</button>
<button type="button" class="material-symbols-outlined text-slate-400 hover:text-primary transition-colors">format_italic</button>
<button type="button" class="material-symbols-outlined text-slate-400 hover:text-primary transition-colors">code</button>
<button type="button" class="material-symbols-outlined text-slate-400 hover:text-primary transition-colors">link</button>
</div>
</div>
<textarea class="w-full bg-surface-container-low p-4 md:p-6 font-serif text-base md:text-lg leading-relaxed border-none rounded-lg transition-all focus:bg-white focus:shadow-inner" id="content" placeholder="Start weaving your technical narrative here..." rows="12">High-concurrency environments require more than just standard scaling. Explore how Octane redefines the PHP request lifecycle for enterprise-grade performance.</textarea>
</div>
<div class="flex flex-col md:flex-row gap-3 md:gap-4 pt-4 md:pt-6">
<button type="submit" class="bg-gradient-to-r from-primary to-primary-container text-on-primary px-6 md:px-10 py-3 md:py-4 rounded-md font-sans-ui font-bold shadow-lg hover:shadow-indigo-200 transition-all active:scale-95 w-full md:w-auto">
Update Article
</button>
<a href="{{ route('dashboard') }}" class="px-6 md:px-10 py-3 md:py-4 text-primary font-sans-ui font-bold hover:bg-surface-container-high rounded-md transition-all w-full md:w-auto text-center">
Cancel
</a>
<div class="md:ml-auto flex items-center gap-2 text-slate-400 text-xs md:text-sm font-sans-ui">
<span class="material-symbols-outlined text-sm">schedule</span>
<span>Last autosaved: 2 minutes ago</span>
</div>
</div>
</form>
</section>
<div class="mt-8 md:mt-12 grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-8">
<div class="p-4 md:p-6 bg-surface-container-low rounded-xl">
<span class="material-symbols-outlined text-indigo-600 mb-2">visibility</span>
<h4 class="font-sans-ui font-bold text-sm mb-1 uppercase tracking-tight">Readability Score</h4>
<p class="text-xl md:text-2xl font-sans-ui font-black text-on-background">84/100</p>
<p class="text-xs text-slate-500 font-sans-ui mt-2">Optimal for senior engineers.</p>
</div>
<div class="p-4 md:p-6 bg-surface-container-low rounded-xl">
<span class="material-symbols-outlined text-indigo-600 mb-2">timer</span>
<h4 class="font-sans-ui font-bold text-sm mb-1 uppercase tracking-tight">Est. Read Time</h4>
<p class="text-xl md:text-2xl font-sans-ui font-black text-on-background">12 min</p>
<p class="text-xs text-slate-500 font-sans-ui mt-2">2,450 words total.</p>
</div>
<div class="p-4 md:p-6 bg-secondary-container rounded-xl">
<span class="material-symbols-outlined text-on-secondary-container mb-2">auto_awesome</span>
<h4 class="font-sans-ui font-bold text-sm mb-1 uppercase tracking-tight text-on-secondary-container">AI Enhancement</h4>
<p class="text-xs text-on-secondary-container/80 leading-snug">Suggesting alternative phrasing for 'Microservices'.</p>
</div>
</div>
</div>
</main>
</div>
<footer class="bg-slate-50 dark:bg-slate-950 full-width mt-12 md:mt-20 tonal-shift bg-slate-100 dark:bg-slate-900 border-t border-slate-200/10">
<div class="w-full py-8 md:py-12 px-4 md:px-6 flex flex-col md:flex-row justify-between items-center max-w-7xl mx-auto">
<div class="mb-4 md:mb-0 text-center md:text-left">
<p class="font-serif text-sm md:text-base text-slate-600 dark:text-slate-400">© 2024 Technical Editor. Engineered for readability.</p>
</div>
<div class="flex flex-wrap justify-center gap-4 md:gap-8">
<a class="font-serif text-sm md:text-base text-slate-500 hover:text-indigo-500 transition-opacity" href="{{ route('home') }}">RSS Feed</a>
<a class="font-serif text-sm md:text-base text-slate-500 hover:text-indigo-500 transition-opacity" href="#">Privacy Policy</a>
<a class="font-serif text-sm md:text-base text-slate-500 hover:text-indigo-500 transition-opacity" href="#">Terms of Service</a>
<a class="font-serif text-sm md:text-base text-slate-500 hover:text-indigo-500 transition-opacity" href="#">GitHub</a>
</div>
</div>
</footer>
@endsection