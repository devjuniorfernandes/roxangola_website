    <footer class="bg-black text-white pt-10 pb-10">
        <div class="site-container">
            <!-- Top: Logo + disclaimer -->
            <div class="flex flex-col md:flex-row justify-between items-start mb-6 gap-4">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('assets/logo-footer.svg') }}" alt="ROX Logo" class="h-4 md:h-5">
                </div>
                <p class="text-[11px] text-gray-500 font-light italic">{{ __('common.footer.disclaimer') }}</p>
            </div>

            <!-- Contact -->
            <div class="mb-6">
                <h4 class="text-sm font-medium text-white mb-3">{{ __('common.footer.contact_us') }}</h4>
                <div class="flex flex-col md:flex-row gap-3 md:gap-0 text-sm text-white">
                    <span class="flex items-center gap-2">{{ __('common.footer.marketing_sales') }} <a href="mailto:vendas@roxangola.com" class="text-white hover:text-white/70 transition-colors ml-1">info@octamobil.com</a>
                        <button class="copy-btn text-white hover:text-white/70 transition-colors" data-copy="vendas@roxangola.com" title="Copiar">
                            <svg class="w-3.5 h-3.5 copy-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/></svg>
                            <svg class="w-3.5 h-3.5 check-icon hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        </button>
                    </span>
                </div>
            </div>

            <!-- Social icons -->
            <div class="flex gap-3 mb-8">
                <a href="https://www.facebook.com/roxmotor.ao" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full border border-white/30 flex items-center justify-center text-white hover:text-white hover:border-white/60 transition-all duration-300">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <a href="https://www.instagram.com/roxmotor.ao" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full border border-white/30 flex items-center justify-center text-white hover:text-white hover:border-white/60 transition-all duration-300">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                </a>
                <a href="https://www.linkedin.com/company/octamobil/" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full border border-white/30 flex items-center justify-center text-white hover:text-white hover:border-white/60 transition-all duration-300">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
            </div>

            <!-- Divider + bottom links -->
            <div class="border-t border-white/10 pt-5 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                <div class="flex flex-wrap items-center gap-4 md:gap-6 text-xs text-white font-medium tracking-wide">
                    <x-lang-switcher variant="footer" />
                    <a href="{{ route('rox-adamas') }}" class="hover:text-white/70 transition-colors">ROX ADAMAS</a>
                    <a href="{{ route('rox01') }}" class="hover:text-white/70 transition-colors">ROX 01</a>
                    <a href="{{ route('sobre.marca') }}" class="hover:text-white/70 transition-colors">{{ __('common.footer.brand') }}</a>
                    <a href="{{ route('servicos.manual-instrucoes') }}" class="hover:text-white/70 transition-colors">{{ __('common.footer.manual') }}</a>
                    <a href="{{ route('politica-privacidade') }}" class="hover:text-white/70 transition-colors">{{ __('common.footer.privacy') }}</a>
                </div>
                <p class="text-xs text-white">{{ __('common.footer.copyright', ['year' => date('Y')]) }}</p>
            </div>
        </div>
    </footer>
    <script>
    document.querySelectorAll('.copy-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var text = btn.getAttribute('data-copy');
            navigator.clipboard.writeText(text);
            var copyIcon = btn.querySelector('.copy-icon');
            var checkIcon = btn.querySelector('.check-icon');
            copyIcon.classList.add('hidden');
            checkIcon.classList.remove('hidden');
            btn.classList.add('text-green-400');
            setTimeout(function() {
                checkIcon.classList.add('hidden');
                copyIcon.classList.remove('hidden');
                btn.classList.remove('text-green-400');
            }, 2000);
        });
    });
    </script>
