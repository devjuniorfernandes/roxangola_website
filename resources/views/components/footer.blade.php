    <footer class="bg-black text-white pt-16 pb-10 px-6 md:px-[10%]">
        <div class="max-w-[1400px] mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-16 gap-8 md:gap-0">
                <img src="{{ asset('assets/logo-w.svg') }}" alt="ROX Logo" class="h-5">
                <div class="flex gap-8">
                    <a href="{{ route('sobre-nos') }}" class="text-sm hover:text-gray-400 transition-colors">Sobre Nós</a>
                    <a href="#" class="text-sm hover:text-gray-400 transition-colors">Junte-se a Nós</a>
                    <a href="{{ route('contactos') }}" class="text-sm hover:text-gray-400 transition-colors">Contacte-nos</a>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center border-t border-gray-800 pt-8 text-xs text-gray-500 gap-5 md:gap-0">
                <p>Copyright © {{ date('Y') }} ROX Angola. Todos os direitos reservados. - Desenvolvido por <a href="https://xamarizmarketing.ao" class="hover:text-white transition-colors" target="_blank">Xamariz Marketing</a>
                    <a href="#" class="ml-2 hover:text-white transition-colors">Política de Privacidade</a> |
                    <a href="#" class="ml-2 hover:text-white transition-colors">Termos de Utilização</a>
                </p>
            </div>
        </div>
    </footer>
