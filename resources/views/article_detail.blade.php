@extends('layouts.master')

@section('title', 'Architecting Resilience | The Technical Editor')

@section('body-class', 'bg-surface text-on-surface font-body selection:bg-secondary-container
    selection:text-on-secondary-container')

@section('content')
    <header class="bg-surface/80 backdrop-blur-xl sticky top-0 z-50 no-border bg-surface-container-low/50">
        <div class="flex justify-between items-center max-w-7xl mx-auto px-4 md:px-6 h-16 md:h-20">
            <div class="flex items-center gap-2 md:gap-3">
                <a href="{{ route('home') }}" class="flex items-center gap-2 md:gap-3">
                    <span class="material-symbols-outlined text-indigo-900" data-icon="terminal">terminal</span>
                    <span class="text-lg md:text-2xl font-serif italic text-indigo-950">The Technical Editor</span>
                </a>
            </div>
            <nav class="hidden lg:flex items-center gap-6 md:gap-8">
                <a class="text-slate-500 font-medium hover:text-indigo-700 transition-colors duration-200 text-sm"
                    href="{{ route('dashboard') }}">Dashboard</a>
                <a class="text-indigo-900 font-bold border-b-2 border-indigo-600 transition-colors duration-200 text-sm"
                    href="{{ route('home') }}">Articles</a>
                <a class="text-slate-500 font-medium hover:text-indigo-700 transition-colors duration-200 text-sm"
                    href="#">Categories</a>
            </nav>
            <button class="lg:hidden text-indigo-900" data-mobile-menu="mobile-nav">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </div>
    </header>
    <nav id="mobile-nav" class="lg:hidden hidden fixed inset-0 z-50 bg-surface/95 backdrop-blur-xl p-4">
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
    <main class="max-w-4xl mx-auto px-4 md:px-6 pt-8 md:pt-12 pb-16 md:pb-24">
        <nav class="mb-8 md:mb-12">
            <a class="inline-flex items-center gap-2 group text-primary font-label font-semibold text-sm tracking-wide"
                href="{{ route('home') }}">
                <span class="material-symbols-outlined text-sm transition-transform group-hover:-translate-x-1"
                    data-icon="arrow_back">arrow_back</span>
                BACK TO EXPLORE
            </a>
        </nav>
        <article>
            <header class="mb-8 md:mb-16">
                <div class="flex flex-wrap items-center gap-2 md:gap-3 mb-4 md:mb-8">
                    <span
                        class="px-3 md:px-4 py-1 md:py-1.5 rounded-full bg-secondary-container text-on-secondary-container font-label text-xs font-bold tracking-widest uppercase">
                        System Architecture
                    </span>
                    <span class="text-outline/60 font-label text-xs">•</span>
                    <time class="font-label text-xs font-medium text-on-surface-variant tracking-wider">OCTOBER 24,
                        2024</time>
                </div>
                <h1
                    class="font-headline font-extrabold text-3xl md:text-5xl lg:text-7xl text-on-background tracking-tight leading-[1.1] mb-6 md:mb-10">
                    Architecting Resilience in Distributed Consensus Systems
                </h1>
                <div class="flex items-start gap-4 pt-4 md:pt-8">
                    <div class="w-10 md:w-12 h-10 md:h-12 rounded-full overflow-hidden bg-surface-container-high">
                        <img alt="Author" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1dwTIQB0N-H1b7HTIRYlxrBr-ev_2apEEsVVpK76VFMZU1g-Pt9fm1kYgDu0V8DSdi_QfL4KKHDe3IxmZ_ckFvWXrGeOhMGKBDCfihEn3gT362LAWnF4jBFPOAZ0qpsqxiPsiI4jWTSW2urFX8cod-DYr8m8cwqAYy1DnOIzoIyK7lq6184EQaPkUR94FRavS3P-6pPMbnzcUVOXJ8-rGrlil65Cao9wa7uDewovxzJl550YLOf_QSFbHoaOCTfy7ra5BrvkMoag" />
                    </div>
                    <div class="flex-1">
                        <p class="font-label font-bold text-on-background text-sm leading-none mb-1">Lead Architect</p>
                        <p class="font-label text-on-surface-variant text-xs font-medium">Distributed Systems Group</p>
                    </div>
                    <div class="ml-auto flex gap-2">
                        <button class="p-2 rounded-lg hover:bg-surface-container-high transition-colors">
                            <span class="material-symbols-outlined text-secondary" data-icon="share">share</span>
                        </button>
                        <button class="p-2 rounded-lg hover:bg-surface-container-high transition-colors">
                            <span class="material-symbols-outlined text-secondary" data-icon="bookmark">bookmark</span>
                        </button>
                    </div>
                </div>
            </header>
            <div
                class="w-full aspect-[4/3] md:aspect-[21/9] rounded-xl overflow-hidden mb-8 md:mb-16 bg-surface-container-low">
                <img alt="Article Hero" class="w-full h-full object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxPnRdINXa17HcA3QMMIZv1TSTfJr1oD34lwRP4ILhL0Psl7OrV2opnuqtw8Q8ubDF9HV5b8a-g5kM3K5133Q17CcXebOhIIk6Hdik_EFVkfxnaP6WNPDqyO1LT02ve6IyVWbV6xAA5UvqG_wPEcCmzOMCHPJCYaOAaHyCw3Y0EvejX5JXT3wi9I83l9ZpHpQ5tFrjNEZHYVQsKJao7hOUVqIYknMR6dTwXP_vqhyENNtc0vZ-LiSRLUZdJi34DutxhjvaNgdER18" />
            </div>
            <section class="editorial-body text-on-background max-w-2xl mx-auto">
                <p class="text-base md:text-xl font-medium leading-relaxed mb-8 md:mb-12 text-slate-700 italic">
                    The fundamental challenge of distributed computing lies not in the transmission of data, but in the
                    agreement upon its state. As we push the boundaries of high-availability clusters, the nuances of Paxos
                    and Raft protocols become the structural pillars of our digital reality.
                </p>
                <p class="text-base md:text-lg leading-relaxed">
                    When we discuss resilience in modern architecture, we often default to redundancy. However, redundancy
                    without a rigorous consensus mechanism is merely a multiplication of potential failure points. True
                    resilience is born from the mathematical certainty that a cluster can reach a definitive state even in
                    the face of partial partition.
                </p>
                <h2 class="font-headline font-bold text-2xl md:text-3xl mt-12 md:mt-16 mb-4 md:mb-6 tracking-tight">The
                    Anatomy of a Failure State</h2>
                <p class="text-base md:text-lg leading-relaxed">
                    Consider a scenario where three nodes in a five-node cluster are isolated. In a naive implementation,
                    the minority might continue to accept writes, leading to a catastrophic split-brain scenario. The
                    editorial approach to engineering demands that we visualize these edge cases not as anomalies, but as
                    the primary context of our design.
                </p>
                <div
                    class="my-8 md:my-12 p-4 md:p-8 bg-inverse-surface rounded-xl font-mono text-xs md:text-sm overflow-x-auto text-on-surface-variant">
                    <pre class="text-indigo-200"><code>async function validateQuorum(cluster) {
  const activeNodes = await cluster.getHeartbeats();
  const threshold = Math.floor(cluster.totalNodes / 2) + 1;

  if (activeNodes.length &lt; threshold) {
    throw new Error("QUORUM_LOST: Transitioning to Read-Only Mode");
  }
  return true;
}</code></pre>
                </div>
                <p class="text-base md:text-lg leading-relaxed">
                    The code above illustrates a simplistic yet vital guard. By enforcing a strict quorum check before any
                    state mutation, we prioritize consistency over availability—a choice that defines the "Editor"
                    philosophy of precision over volume.
                </p>
                <blockquote class="text-base md:text-lg italic">
                    "The goal is not to eliminate failure, but to make failure legible. A system that crashes gracefully is
                    infinitely superior to one that lies convincingly."
                </blockquote>
                <p class="text-base md:text-lg leading-relaxed">
                    As we move forward into an era of edge computing and decentralized state, the principles we apply to our
                    local clusters must scale. We are no longer just building applications; we are curating flows of
                    information across a globally distributed canvas.
                </p>
                <div class="mt-12 md:mt-20 pt-8 md:pt-12 border-t border-outline-variant/20 flex flex-wrap gap-2 md:gap-4">
                    <span
                        class="px-2 md:px-3 py-1 bg-surface-container-high rounded text-xs font-label font-bold text-on-secondary-container">#DISTRIBUTED</span>
                    <span
                        class="px-2 md:px-3 py-1 bg-surface-container-high rounded text-xs font-label font-bold text-on-secondary-container">#CONSENSUS</span>
                    <span
                        class="px-2 md:px-3 py-1 bg-surface-container-high rounded text-xs font-label font-bold text-on-secondary-container">#SYSTEMS_DESIGN</span>
                </div>
            </section>
        </article>

    </main>
    <footer
        class="w-full py-8 md:py-12 px-4 md:px-6 flex flex-col md:flex-row justify-between items-center max-w-7xl mx-auto border-t border-slate-200/10 tonal-shift bg-slate-100 dark:bg-slate-900 mt-12 md:mt-20">
        <div class="mb-4 md:mb-0 text-center md:text-left">
            <p class="font-serif text-sm md:text-base text-slate-600 dark:text-slate-400">© 2024 Technical Editor.
                Engineered for readability.</p>
        </div>
        <div class="flex flex-wrap justify-center gap-4 md:gap-8">
            <a class="text-slate-500 hover:text-indigo-500 transition-opacity font-serif text-sm md:text-base"
                href="#">RSS Feed</a>
            <a class="text-slate-500 hover:text-indigo-500 transition-opacity font-serif text-sm md:text-base"
                href="#">Privacy Policy</a>
            <a class="text-slate-500 hover:text-indigo-500 transition-opacity font-serif text-sm md:text-base"
                href="#">Terms of Service</a>
            <a class="text-slate-500 hover:text-indigo-500 transition-opacity font-serif text-sm md:text-base"
                href="#">GitHub</a>
        </div>
    </footer>
@endsection
