// Shared JavaScript for The Technical Editor Blog

document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle functionality
    const mobileMenuButtons = document.querySelectorAll('[data-mobile-menu]');
    
    mobileMenuButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            const targetId = button.getAttribute('data-mobile-menu');
            const target = document.getElementById(targetId);
            
            if (target) {
                target.classList.toggle('hidden');
                
                // Handle body scroll lock
                if (target.classList.contains('hidden')) {
                    document.body.style.overflow = '';
                } else {
                    document.body.style.overflow = 'hidden';
                }
            }
        });
    });

    // Close mobile menu on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const openMenus = document.querySelectorAll('[id^="mobile-"]:not(.hidden)');
            openMenus.forEach(function(menu) {
                menu.classList.add('hidden');
            });
            document.body.style.overflow = '';
        }
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
        const openMenus = document.querySelectorAll('[id^="mobile-"]:not(.hidden)');
        openMenus.forEach(function(menu) {
            if (!menu.contains(e.target) && !e.target.closest('[data-mobile-menu]')) {
                menu.classList.add('hidden');
                document.body.style.overflow = '';
            }
        });
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href').substring(1);
            const target = document.getElementById(targetId);
            
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});