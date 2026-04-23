@extends('layouts.master')

@section('title', 'Forgot Password | The Technical Editor')

@section('body-class', 'bg-background text-on-background min-h-screen flex flex-col')

@section('content')
<main class="flex-grow flex items-center justify-center px-4 md:px-6 py-8 md:py-12 relative overflow-hidden">
<div class="absolute top-[-10%] right-[-5%] w-48 md:w-96 h-48 md:h-96 bg-primary-container/10 rounded-full blur-3xl"></div>
<div class="absolute bottom-[-10%] left-[-5%] w-48 md:w-96 h-48 md:h-96 bg-secondary-container/20 rounded-full blur-3xl"></div>
<div class="z-10 w-full max-w-md px-4 md:px-0">
<div class="text-center mb-8 md:mb-10">
<div class="inline-flex items-center justify-center w-12 h-12 md:w-16 md:h-16 rounded-xl bg-surface-container-high mb-4 md:mb-6">
<a href="{{ route('home') }}">
<span class="material-symbols-outlined text-primary text-2xl md:text-3xl" data-icon="terminal">terminal</span>
</a>
</div>
<h1 class="font-sans-tight text-2xl md:text-4xl font-bold tracking-tight text-on-background mb-2">The Technical Editor</h1>
<p class="font-body italic text-base md:text-lg text-secondary">Reset your password</p>
</div>
<div class="bg-surface-container-lowest p-6 md:p-10 rounded-xl shadow-[0_20px_50px_rgba(19,27,46,0.05)] border border-outline-variant/10">
@if(session('status'))
<div class="mb-4 p-4 rounded-lg bg-green-50 text-green-700 text-sm">
{{ session('status') }}
</div>
@endif
<p class="font-body text-sm text-on-surface-variant mb-6">Enter your email address and we'll send you a link to reset your password.</p>
<form class="space-y-5" method="POST" action="{{ route('password.email') }}">
@csrf
<div>
<label class="block font-sans-tight text-sm font-bold text-on-surface-variant mb-2" for="email">Email Address</label>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-3 md:pl-4 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-outline text-lg md:text-xl" data-icon="mail">mail</span>
</div>
<input class="block w-full pl-10 md:pl-11 pr-4 py-3 md:py-3.5 bg-surface-container-low border-none rounded-lg text-on-surface font-sans-tight focus:ring-2 focus:ring-primary/20 focus:bg-surface-container-lowest transition-all duration-200 placeholder:text-outline/50 text-base md:text-base" id="email" name="email" placeholder="name@architect.io" required="" type="email" value="{{ old('email') }}"/>
</div>
@error('email')
<p class="mt-1 text-sm text-error">{{ $message }}</p>
@enderror
</div>
<button class="w-full flex justify-center items-center gap-2 py-3 md:py-4 px-6 rounded-lg bg-gradient-to-r from-primary to-primary-container text-on-primary font-sans-tight font-bold text-base shadow-lg shadow-primary/20 hover:opacity-90 active:scale-[0.98] transition-all duration-200" type="submit">
<span class="material-symbols-outlined text-xl" data-icon="mail_lock" style="font-variation-settings: 'FILL' 1;">mail_lock</span>
Send Reset Link
</button>
</form>
<div class="mt-6 text-center">
<p class="font-sans-tight text-sm text-on-surface-variant">
Remember your password?
<a class="font-semibold text-primary hover:text-primary-container transition-colors" href="{{ route('login') }}">Sign in</a>
</p>
</div>
</div>
</div>
</main>
<footer class="w-full py-8 md:py-12 px-4 md:px-6 flex flex-col md:flex-row justify-between items-center max-w-7xl mx-auto border-t border-slate-200/10 bg-slate-50 dark:bg-slate-950">
<div class="mb-4 md:mb-0 text-center md:text-left">
<p class="font-serif text-sm md:text-base text-slate-600 dark:text-slate-400">© 2024 Technical Editor. Engineered for readability.</p>
</div>
<div class="flex flex-wrap justify-center gap-4 md:gap-8">
<a class="font-serif text-sm md:text-base text-slate-500 hover:text-indigo-500 transition-opacity hover:opacity-70" href="#">RSS Feed</a>
<a class="font-serif text-sm md:text-base text-slate-500 hover:text-indigo-500 transition-opacity hover:opacity-70" href="#">Privacy Policy</a>
<a class="font-serif text-sm md:text-base text-slate-500 hover:text-indigo-500 transition-opacity hover:opacity-70" href="#">Terms of Service</a>
<a class="font-serif text-sm md:text-base text-slate-500 hover:text-indigo-500 transition-opacity hover:opacity-70" href="#">GitHub</a>
</div>
</footer>
@endsection