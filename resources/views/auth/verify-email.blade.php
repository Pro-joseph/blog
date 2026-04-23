@extends('layouts.master')

@section('title', 'Verify Email | The Technical Editor')

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
<p class="font-body italic text-base md:text-lg text-secondary">Verify your email</p>
</div>
<div class="bg-surface-container-lowest p-6 md:p-10 rounded-xl shadow-[0_20px_50px_rgba(19,27,46,0.05)] border border-outline-variant/10">
<div class="text-center mb-6">
<span class="material-symbols-outlined text-primary text-5xl md:text-6xl mb-4" data-icon="mark_email_read">mark_email_read</span>
</div>
<p class="font-body text-sm text-on-surface-variant mb-6">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we'll gladly send you another.</p>
@if(session('status') == 'verification-link-sent')
<div class="mb-4 p-4 rounded-lg bg-green-50 text-green-700 text-sm">
A new verification link has been sent to your email address.
</div>
@endif
<form class="space-y-4" method="POST" action="{{ route('verification.notice') }}">
@csrf
<button class="w-full flex justify-center items-center gap-2 py-3 md:py-4 px-6 rounded-lg bg-gradient-to-r from-primary to-primary-container text-on-primary font-sans-tight font-bold text-base shadow-lg shadow-primary/20 hover:opacity-90 active:scale-[0.98] transition-all duration-200" type="submit">
<span class="material-symbols-outlined text-xl" data-icon="refresh" style="font-variation-settings: 'FILL' 1;">refresh</span>
Resend Verification Email
</button>
</form>
<form class="mt-4" method="POST" action="{{ route('logout') }}">
@csrf
<button class="w-full flex justify-center items-center gap-2 py-3 md:py-4 px-6 rounded-lg bg-surface-container-low text-on-surface font-sans-tight font-bold text-base hover:bg-surface-container-high transition-all duration-200" type="submit">
<span class="material-symbols-outlined text-xl" data-icon="logout" style="font-variation-settings: 'FILL' 1;">logout</span>
Log Out
</button>
</form>
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