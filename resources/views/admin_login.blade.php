<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "secondary-fixed": "#dee0ff",
                        "secondary": "#565c84",
                        "on-surface-variant": "#454652",
                        "on-primary-fixed": "#00105c",
                        "inverse-surface": "#283044",
                        "primary": "#24389c",
                        "primary-fixed-dim": "#bac3ff",
                        "surface-container-highest": "#dae2fd",
                        "secondary-fixed-dim": "#bec4f2",
                        "on-primary": "#ffffff",
                        "background": "#faf8ff",
                        "on-tertiary-fixed-variant": "#713700",
                        "surface-bright": "#faf8ff",
                        "primary-fixed": "#dee0ff",
                        "inverse-on-surface": "#eef0ff",
                        "surface-container": "#eaedff",
                        "on-background": "#131b2e",
                        "on-surface": "#131b2e",
                        "surface-variant": "#dae2fd",
                        "error": "#ba1a1a",
                        "outline": "#757684",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-low": "#f2f3ff",
                        "on-primary-container": "#cacfff",
                        "surface-container-high": "#e2e7ff",
                        "tertiary-fixed": "#ffdcc6",
                        "on-tertiary-container": "#ffc7a2",
                        "error-container": "#ffdad6",
                        "inverse-primary": "#bac3ff",
                        "tertiary-container": "#8f4700",
                        "on-secondary-container": "#51577f",
                        "outline-variant": "#c5c5d4",
                        "surface-dim": "#d2d9f4",
                        "surface-tint": "#4355b9",
                        "on-secondary-fixed-variant": "#3e446b",
                        "on-secondary-fixed": "#12183d",
                        "on-tertiary-fixed": "#301400",
                        "on-primary-fixed-variant": "#293ca0",
                        "primary-container": "#3f51b5",
                        "tertiary": "#6c3400",
                        "on-secondary": "#ffffff",
                        "on-error": "#ffffff",
                        "surface": "#faf8ff",
                        "on-tertiary": "#ffffff",
                        "secondary-container": "#c9cffd",
                        "on-error-container": "#93000a",
                        "tertiary-fixed-dim": "#ffb784"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "fontFamily": {
                        "headline": ["Inter"],
                        "body": ["Newsreader"],
                        "label": ["Inter"]
                    }
                },
            },
        }
    </script>
<link rel="stylesheet" href="{{ asset('css/shared.css') }}">
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
        }
    </style>
  </head>
<body class="bg-background text-on-background min-h-screen flex flex-col">
<!-- TopAppBar Suppressed as per Destination Rule (Transactional Page) -->
<main class="flex-grow flex items-center justify-center px-4 md:px-6 py-8 md:py-12 relative overflow-hidden">
<!-- Aesthetic Background Element -->
<div class="absolute top-[-10%] right-[-5%] w-48 md:w-96 h-48 md:h-96 bg-primary-container/10 rounded-full blur-3xl"></div>
<div class="absolute bottom-[-10%] left-[-5%] w-48 md:w-96 h-48 md:h-96 bg-secondary-container/20 rounded-full blur-3xl"></div>
<div class="z-10 w-full max-w-md px-4 md:px-0">
<!-- Brand Identity Section -->
<div class="text-center mb-8 md:mb-10">
<div class="inline-flex items-center justify-center w-12 h-12 md:w-16 md:h-16 rounded-xl bg-surface-container-high mb-4 md:mb-6">
<span class="material-symbols-outlined text-primary text-2xl md:text-3xl" data-icon="terminal">terminal</span>
</div>
<h1 class="font-sans-tight text-2xl md:text-4xl font-bold tracking-tight text-on-background mb-2">The Technical Editor</h1>
<p class="font-body italic text-base md:text-lg text-secondary">System Administration Portal</p>
</div>
<!-- Login Card -->
<div class="bg-surface-container-lowest p-6 md:p-10 rounded-xl shadow-[0_20px_50px_rgba(19,27,46,0.05)] border border-outline-variant/10">
<form class="space-y-6">
<div>
<label class="block font-sans-tight text-sm font-bold text-on-surface-variant mb-2" for="email">Email Address</label>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-3 md:pl-4 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-outline text-lg md:text-xl" data-icon="mail">mail</span>
</div>
<input class="block w-full pl-10 md:pl-11 pr-4 py-3 md:py-3.5 bg-surface-container-low border-none rounded-lg text-on-surface font-sans-tight focus:ring-2 focus:ring-primary/20 focus:bg-surface-container-lowest transition-all duration-200 placeholder:text-outline/50 text-base md:text-base" id="email" name="email" placeholder="name@architect.io" required="" type="email"/>
</div>
</div>
<div>
<div class="flex justify-between items-center mb-2">
<label class="block font-sans-tight text-sm font-bold text-on-surface-variant" for="password">Password</label>
<a class="font-sans-tight text-xs font-semibold text-primary hover:text-primary-container transition-colors" href="#">Forgot Access?</a>
</div>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-3 md:pl-4 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-outline text-lg md:text-xl" data-icon="lock">lock</span>
</div>
<input class="block w-full pl-10 md:pl-11 pr-4 py-3 md:py-3.5 bg-surface-container-low border-none rounded-lg text-on-surface font-sans-tight focus:ring-2 focus:ring-primary/20 focus:bg-surface-container-lowest transition-all duration-200 placeholder:text-outline/50 text-base md:text-base" id="password" name="password" placeholder="••••••••" required="" type="password"/>
</div>
</div>
<div class="flex items-center">
<input class="h-4 w-4 text-primary focus:ring-primary border-outline-variant/30 rounded" id="remember-me" name="remember-me" type="checkbox"/>
<label class="ml-2 block font-sans-tight text-sm text-on-surface-variant" for="remember-me">
                            Trust this device for 30 days
                        </label>
</div>
<button class="w-full flex justify-center items-center gap-2 py-3 md:py-4 px-6 rounded-lg bg-gradient-to-r from-primary to-primary-container text-on-primary font-sans-tight font-bold text-base shadow-lg shadow-primary/20 hover:opacity-90 active:scale-[0.98] transition-all duration-200" type="submit">
<span class="material-symbols-outlined text-xl" data-icon="login" style="font-variation-settings: 'FILL' 1;">login</span>
                        Log In
                    </button>
</form>
<div class="mt-6 md:mt-8 pt-6 md:pt-8 border-t border-outline-variant/10">
<div class="flex items-center justify-center gap-2 text-outline">
<span class="material-symbols-outlined text-sm" data-icon="verified_user">verified_user</span>
<span class="font-sans-tight text-xs font-medium tracking-wide uppercase">Encrypted Session</span>
</div>
</div>
</div>
<!-- Contextual Information -->
<div class="mt-8 md:mt-12 grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 opacity-80">
<div class="p-4 rounded-lg bg-surface-container-low/50">
<span class="material-symbols-outlined text-primary mb-2" data-icon="security">security</span>
<h3 class="font-sans-tight text-sm font-bold text-on-background">Secure Access</h3>
<p class="font-body text-sm text-on-surface-variant leading-relaxed">Multi-factor authentication may be required for off-site connections.</p>
</div>
<div class="p-4 rounded-lg bg-surface-container-low/50">
<span class="material-symbols-outlined text-primary mb-2" data-icon="monitoring">monitoring</span>
<h3 class="font-sans-tight text-sm font-bold text-on-background">System Audit</h3>
<p class="font-body text-sm text-on-surface-variant leading-relaxed">All login attempts are logged for security and compliance monitoring.</p>
</div>
</div>
</div>
</div>
</main>
<!-- Footer implementation following JSON structure -->
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
<script src="{{ asset('js/shared.js') }}"></script>
</body></html>