@extends('layouts.master')

@section('title', 'The Technical Editor | Public Blog')

@section('body-class', 'bg-surface text-on-surface')

@section('content')
<nav class="bg-surface/80 backdrop-blur-xl docked full-width top-0 sticky z-50 no-border bg-surface-container-low/50">
<div class="flex justify-between items-center max-w-7xl mx-auto px-4 md:px-6 h-16 md:h-20">
<div class="flex items-center gap-2 md:gap-3">
<span class="material-symbols-outlined text-indigo-900 dark:text-indigo-400 text-2xl md:text-3xl" data-icon="terminal">terminal</span>
<span class="text-lg md:text-2xl font-serif italic text-indigo-950 dark:text-indigo-50">The Technical Editor</span>
</div>
<div class="hidden lg:flex items-center space-x-6 md:space-x-8">
<a class="text-indigo-900 dark:text-indigo-100 font-bold border-b-2 border-indigo-600 hover:text-indigo-700 dark:hover:text-indigo-300 transition-colors duration-200 text-sm" href="{{ route('home') }}">Articles</a>
<a class="text-slate-500 dark:text-slate-400 font-medium hover:text-indigo-700 dark:hover:text-indigo-300 transition-colors duration-200 text-sm" href="#">Categories</a>
<a class="text-slate-500 dark:text-slate-400 font-medium hover:text-indigo-700 dark:hover:text-indigo-300 transition-colors duration-200 text-sm" href="#">Analytics</a>
<a href="{{ route('login') }}" class="text-slate-500 dark:text-slate-400 font-medium hover:text-indigo-700 dark:hover:text-indigo-300 transition-colors duration-200 text-sm">Admin</a>
</div>
<button class="lg:hidden text-indigo-900" data-mobile-menu="mobile-nav">
<span class="material-symbols-outlined" data-icon="menu">menu</span>
</button>
</div>
</nav>
<nav id="mobile-nav" class="lg:hidden hidden fixed inset-0 z-50 bg-surface/95 backdrop-blur-xl p-4">
<div class="flex justify-end">
<button data-mobile-menu="mobile-nav">
<span class="material-symbols-outlined text-2xl">close</span>
</button>
</div>
<div class="flex flex-col gap-6 mt-8 text-center">
<a class="text-xl font-bold text-indigo-900" href="{{ route('home') }}">Articles</a>
<a class="text-xl font-bold text-indigo-900" href="#">Categories</a>
<a class="text-xl font-bold text-indigo-900" href="#">Analytics</a>
<a class="text-xl font-bold text-indigo-900" href="{{ route('login') }}">Admin</a>
</div>
</nav>
<main class="max-w-7xl mx-auto px-4 md:px-6 pt-8 md:pt-12 pb-16 md:py-24">
<header class="mb-12 md:mb-20 text-center md:text-left">
<h1 class="text-3xl md:text-5xl lg:text-7xl font-bold tracking-tight text-on-background mb-4 md:mb-6 leading-[1.1]">
Perspectives on <span class="italic font-body font-light text-primary">System Architecture</span>
</h1>
<p class="text-base md:text-xl lg:text-2xl text-on-surface-variant max-w-2xl md:max-w-3xl leading-relaxed mx-auto md:mx-0">
Exploring the intersection of high-performance engineering and sophisticated interface design. Written for the discerning lead architect.
</p>
</header>
<section class="mb-12 md:mb-16">
<div class="flex flex-wrap items-center gap-2 md:gap-3 py-3 md:py-4 border-y border-outline-variant/10">
<span class="text-xs font-bold uppercase tracking-widest text-outline mr-2 md:mr-4 font-label">Filter by</span>
<button class="px-4 md:px-6 py-1.5 md:py-2 rounded-full bg-primary text-on-primary font-label text-xs md:text-sm font-semibold transition-all">All Articles</button>
<button class="px-4 md:px-6 py-1.5 md:py-2 rounded-full bg-secondary-container text-on-secondary-container font-label text-xs md:text-sm font-semibold hover:bg-surface-container-highest transition-all">Laravel</button>
<button class="px-4 md:px-6 py-1.5 md:py-2 rounded-full bg-secondary-container text-on-secondary-container font-label text-xs md:text-sm font-semibold hover:bg-surface-container-highest transition-all">PHP</button>
<button class="px-4 md:px-6 py-1.5 md:py-2 rounded-full bg-secondary-container text-on-secondary-container font-label text-xs md:text-sm font-semibold hover:bg-surface-container-highest transition-all">JavaScript</button>
<button class="px-4 md:px-6 py-1.5 md:py-2 rounded-full bg-secondary-container text-on-secondary-container font-label text-xs md:text-sm font-semibold hover:bg-surface-container-highest transition-all">Careers</button>
</div>
</section>
<section class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
<div class="lg:col-span-8 flex flex-col gap-12 lg:gap-20">
<article class="group">
<div class="flex flex-col md:flex-row gap-6 md:gap-8 items-start">
<div class="w-full md:w-2/5 overflow-hidden rounded-xl bg-surface-container-low aspect-[4/3]">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Close-up of a high-end mechanical keyboard" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIw20KADAB3qeUUAOxUEpXlXBCe9YTTQpr2sPXVES4W7FPRt09rQ-jCfdg2FDr1e5wGhoq0CT0zJi8V8lO64zSR8p0vFrklpcytOX_mUhI5ToaPBqGv_b1P0MY7qSwVaAy5WZnIGIpPQeMmoP7mv81ROyQ8KJrnaqYIJEWfZM8uP73BSGQMTZQVimYkVOddkBUiVpNv0qEapJtcPEPcnHQIDlhBONMAgRVOTt-IGt6SbiV3UFCcG8dNNzJ0HmujOi_PM3TNE_G-JY"/>
</div>
<div class="w-full md:w-3/5">
<div class="flex items-center gap-3 md:gap-4 mb-3 md:mb-4">
<span class="bg-secondary-container text-on-secondary-container px-2 md:px-3 py-1 rounded-full text-xs font-bold tracking-wide font-label">LARAVEL</span>
<time class="text-xs md:text-sm font-label text-outline">Oct 24, 2024</time>
</div>
<h2 class="text-xl md:text-3xl font-bold tracking-tight text-on-background mb-3 md:mb-4 group-hover:text-primary transition-colors">Architecting Scalable Micro-Services with Laravel Octane</h2>
<p class="text-sm md:text-lg text-on-surface-variant leading-relaxed mb-4 md:mb-6 font-body">
High-concurrency environments require more than just standard scaling. Explore how Octane redefines the PHP request lifecycle for enterprise-grade performance.
</p>
<a class="inline-flex items-center text-primary font-bold tracking-tight hover:translate-x-2 transition-transform text-sm md:text-base" href="{{ route('article') }}">
Read More <span class="material-symbols-outlined ml-1 md:ml-2 text-sm md:text-base" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
</div>
</article>
<article class="group">
<div class="flex flex-col md:flex-row gap-6 md:gap-8 items-start">
<div class="w-full md:w-2/5 overflow-hidden rounded-xl bg-surface-container-low aspect-[4/3]">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Abstract visualization of data flowing" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7bkC4fQfVxwIGMtWeCxpLb924KzqHhK7T0mVQDHiQslS6sli34Ozv3aR_1zhHlPXH8gZa30G6SKFulJG40qZM5uPKhv13bRBShsdy9kXDHiIp7bhL2N8yjcqKQASpfEcmbo3CXAn-c1WlLyYgYApB6mxEOpCIjkYsgm9-1oLqlKCL8IRWnvxSDZwCIr5-UsxM0Kgb43CcLZ_3olK6fuaHcIHmvz2YSg3VHLpCoX8e-xVMz4m_NS8_6-lfWw3bAI8NmOm9sbuPPt4"/>
</div>
<div class="w-full md:w-3/5">
<div class="flex items-center gap-3 md:gap-4 mb-3 md:mb-4">
<span class="bg-secondary-container text-on-secondary-container px-2 md:px-3 py-1 rounded-full text-xs font-bold tracking-wide font-label">JAVASCRIPT</span>
<time class="text-xs md:text-sm font-label text-outline">Oct 19, 2024</time>
</div>
<h2 class="text-xl md:text-3xl font-bold tracking-tight text-on-background mb-3 md:mb-4 group-hover:text-primary transition-colors">Beyond React: The Rise of Signal-Based State Management</h2>
<p class="text-sm md:text-lg text-on-surface-variant leading-relaxed mb-4 md:mb-6 font-body">
The Virtual DOM is no longer the only way. We examine the shift towards fine-grained reactivity and what it means for the next generation of web apps.
</p>
<a class="inline-flex items-center text-primary font-bold tracking-tight hover:translate-x-2 transition-transform text-sm md:text-base" href="{{ route('article') }}">
Read More <span class="material-symbols-outlined ml-1 md:ml-2 text-sm md:text-base" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
</div>
</article>
<article class="group">
<div class="flex flex-col md:flex-row gap-6 md:gap-8 items-start">
<div class="w-full md:w-2/5 overflow-hidden rounded-xl bg-surface-container-low aspect-[4/3]">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Professional workspace" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDPi3zj5XcLPz1F6iOw8o_jBNLowWwrJXdcwUUEEVQsIGRXPIzVr0DED8DGdNcURhwGniBdspexIuBTKMXwzzUTZSBfd0sRO6Hh2tgJwKojDkpXrSslCY786O-HshGgmfaRQZ2ewFHHJDjByeuQyRwqmpqiWzjRtX_YHcVSDep1JDHr2mBZGiTRcHYfo2--YyOcQswk8GGcJUB1Gw_4EMKJeMQb6vXddzbFtGKsXvGkwLwKhLI9kE5FLQhZvQH5Gwcz9Vgirqfsjmc"/>
</div>
<div class="w-full md:w-3/5">
<div class="flex items-center gap-3 md:gap-4 mb-3 md:mb-4">
<span class="bg-secondary-container text-on-secondary-container px-2 md:px-3 py-1 rounded-full text-xs font-bold tracking-wide font-label">CAREERS</span>
<time class="text-xs md:text-sm font-label text-outline">Oct 12, 2024</time>
</div>
<h2 class="text-xl md:text-3xl font-bold tracking-tight text-on-background mb-3 md:mb-4 group-hover:text-primary transition-colors">The Staff Engineer Path: Bridging Code and Strategy</h2>
<p class="text-sm md:text-lg text-on-surface-variant leading-relaxed mb-4 md:mb-6 font-body">
Transitioning from a Senior role to Staff requires a fundamental shift in mindset. Learn how to amplify your impact without losing your technical edge.
</p>
<a class="inline-flex items-center text-primary font-bold tracking-tight hover:translate-x-2 transition-transform text-sm md:text-base" href="{{ route('article') }}">
Read More <span class="material-symbols-outlined ml-1 md:ml-2 text-sm md:text-base" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
</div>
</article>
</div>
<aside class="lg:col-span-4 space-y-8 lg:space-y-12">
<div class="bg-surface-container-low p-6 lg:p-8 rounded-2xl border border-outline-variant/10">
<h3 class="text-lg lg:text-xl font-bold tracking-tight mb-4">The Newsletter</h3>
<p class="text-on-surface-variant mb-4 lg:mb-6 text-sm leading-relaxed font-body">Weekly insights on system design, editorial UI, and the future of the web. No spam, just engineering.</p>
<div class="space-y-4">
<input class="w-full px-3 lg:px-4 py-2 lg:py-3 rounded-lg bg-surface-container-lowest border border-outline-variant/20 focus:outline-none focus:border-primary transition-colors font-label text-sm" placeholder="architect@firm.com" type="email"/>
<button class="w-full py-2 lg:py-3 rounded-lg bg-primary text-on-primary font-bold tracking-tight text-sm hover:opacity-90 transition-opacity">Subscribe</button>
</div>
</div>
<div>
<h3 class="text-xs font-bold uppercase tracking-widest text-outline mb-4 lg:mb-6 font-label">Featured Categories</h3>
<div class="grid grid-cols-2 gap-3 lg:gap-4">
<div class="bg-surface-container p-3 lg:p-4 rounded-xl hover:bg-primary-container group transition-colors cursor-pointer">
<span class="material-symbols-outlined text-primary group-hover:text-on-primary-container mb-1 lg:mb-2" data-icon="schema">schema</span>
<p class="font-bold text-xs lg:text-sm text-on-background group-hover:text-on-primary-container">Architecture</p>
</div>
<div class="bg-surface-container p-3 lg:p-4 rounded-xl hover:bg-primary-container group transition-colors cursor-pointer">
<span class="material-symbols-outlined text-primary group-hover:text-on-primary-container mb-1 lg:mb-2" data-icon="auto_awesome">auto_awesome</span>
<p class="font-bold text-xs lg:text-sm text-on-background group-hover:text-on-primary-container">Frontend</p>
</div>
<div class="bg-surface-container p-3 lg:p-4 rounded-xl hover:bg-primary-container group transition-colors cursor-pointer">
<span class="material-symbols-outlined text-primary group-hover:text-on-primary-container mb-1 lg:mb-2" data-icon="database">database</span>
<p class="font-bold text-xs lg:text-sm text-on-background group-hover:text-on-primary-container">Database</p>
</div>
<div class="bg-surface-container p-3 lg:p-4 rounded-xl hover:bg-primary-container group transition-colors cursor-pointer">
<span class="material-symbols-outlined text-primary group-hover:text-on-primary-container mb-1 lg:mb-2" data-icon="monitoring">monitoring</span>
<p class="font-bold text-xs lg:text-sm text-on-background group-hover:text-on-primary-container">DevOps</p>
</div>
</div>
</div>
<div class="bg-indigo-950 text-indigo-50 p-6 lg:p-8 rounded-2xl relative overflow-hidden">
<div class="relative z-10">
<h3 class="text-lg lg:text-2xl font-bold tracking-tight mb-2">Editor's Choice</h3>
<p class="text-indigo-200/80 mb-4 lg:mb-6 text-xs lg:text-sm italic font-body">Curated technical deep-dives for the weekend architect.</p>
<ul class="space-y-3 lg:space-y-4">
<li class="border-b border-white/10 pb-3 lg:pb-4 last:border-0 last:pb-0">
<a class="hover:text-primary-fixed-dim transition-colors block text-xs lg:text-sm font-semibold" href="{{ route('article') }}">The Anatomy of a Perfect API Response</a>
</li>
<li class="border-b border-white/10 pb-3 lg:pb-4 last:border-0 last:pb-0">
<a class="hover:text-primary-fixed-dim transition-colors block text-xs lg:text-sm font-semibold" href="{{ route('article') }}">Why Your CSS Architecture is Failing</a>
</li>
</ul>
</div>
<div class="absolute bottom-0 right-0 opacity-10 pointer-events-none">
<span class="material-symbols-outlined text-7xl lg:text-9xl" data-icon="article">article</span>
</div>
</div>
</aside>
</section>
</main>
<footer class="w-full py-8 md:py-12 px-4 md:px-6 flex flex-col md:flex-row justify-between items-center max-w-7xl mx-auto border-t border-slate-200/10 tonal-shift bg-slate-100 dark:bg-slate-900 mt-12 md:mt-20">
<div class="mb-4 md:mb-0 text-center md:text-left">
<p class="font-serif text-sm md:text-base text-slate-600 dark:text-slate-400">© 2024 Technical Editor. Engineered for readability.</p>
</div>
<div class="flex flex-wrap justify-center gap-4 md:gap-8">
<a class="text-slate-500 hover:text-indigo-500 font-serif text-sm md:text-base transition-opacity hover:opacity-70" href="#">RSS Feed</a>
<a class="text-slate-500 hover:text-indigo-500 font-serif text-sm md:text-base transition-opacity hover:opacity-70" href="#">Privacy Policy</a>
<a class="text-slate-500 hover:text-indigo-500 font-serif text-sm md:text-base transition-opacity hover:opacity-70" href="#">Terms of Service</a>
<a class="text-slate-500 hover:text-indigo-500 font-serif text-sm md:text-base transition-opacity hover:opacity-70" href="#">GitHub</a>
</div>
</footer>
@endsection