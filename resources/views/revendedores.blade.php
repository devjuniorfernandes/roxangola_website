<x-front-layout>
    <x-slot name="title">Revendedores Globais</x-slot>

    <!-- Banner Hero -->
    <section class="relative h-[60vh] md:h-[70vh] w-full overflow-hidden flex items-center justify-center">
        <img src="{{ asset('assets/services.jpg') }}" alt="Revendedores Globais" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-medium mb-4 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.3s forwards;">Revendedores Globais</h1>
            <p class="text-base md:text-lg font-light text-gray-200 max-w-2xl mx-auto opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.5s forwards;">Serviço premium para guiar as suas aventuras</p>
        </div>
    </section>

    <!-- Dealers Section -->
    <section class="bg-white py-16 md:py-24">
        <div class="content-container">
            <div class="mb-10 md:mb-14 animate-up">
                <h2 class="text-3xl md:text-4xl font-normal tracking-wide mb-4">Revendedores Globais</h2>
                <p class="text-base md:text-lg text-gray-500 font-light max-w-4xl">Com a rede de revendedores da ROX Motor presente em múltiplas regiões do mundo, estamos comprometidos em oferecer o serviço e suporte da mais elevada qualidade a cada utilizador. Para mais detalhes, contacte o seu revendedor ROX Motor local.</p>
            </div>

            <!-- Filters -->
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 lg:gap-5 pb-8 lg:pb-12 animate-up">
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 shrink-0">
                    <!-- Region filter -->
                    <div class="relative" id="region-filter">
                        <button type="button" class="flex items-center justify-between gap-4 border border-black/20 min-w-[240px] h-10 px-4 text-base transition-colors hover:border-black/40" id="region-btn">
                            <span id="region-label">Todas as Regiões</span>
                            <svg class="w-3 h-3 transition-transform duration-150" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                        </button>
                        <div class="absolute z-20 top-full mt-2 w-[280px] max-h-[336px] overflow-y-auto bg-white shadow-lg p-4 hidden" id="region-dropdown">
                            <ul class="space-y-1">
                                <li class="dealer-region-opt cursor-pointer text-base py-2.5 px-4 hover:bg-[#F8F9F9] transition-colors font-medium" data-region="all">Todas</li>
                                <li class="dealer-region-opt cursor-pointer text-base py-2.5 px-4 hover:bg-[#F8F9F9] transition-colors" data-region="Africa">África</li>
                                <li class="dealer-region-opt cursor-pointer text-base py-2.5 px-4 hover:bg-[#F8F9F9] transition-colors" data-region="America">América</li>
                                <li class="dealer-region-opt cursor-pointer text-base py-2.5 px-4 hover:bg-[#F8F9F9] transition-colors" data-region="Central Asia">Ásia Central</li>
                                <li class="dealer-region-opt cursor-pointer text-base py-2.5 px-4 hover:bg-[#F8F9F9] transition-colors" data-region="Europe">Europa</li>
                                <li class="dealer-region-opt cursor-pointer text-base py-2.5 px-4 hover:bg-[#F8F9F9] transition-colors" data-region="Middle East">Médio Oriente</li>
                                <li class="dealer-region-opt cursor-pointer text-base py-2.5 px-4 hover:bg-[#F8F9F9] transition-colors" data-region="Southeast Asia">Sudeste Asiático</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Country filter -->
                    <div class="relative" id="country-filter">
                        <button type="button" class="flex items-center justify-between gap-4 border border-black/20 min-w-[240px] h-10 px-4 text-base transition-colors hover:border-black/40" id="country-btn">
                            <span id="country-label">Todos os Países</span>
                            <svg class="w-3 h-3 transition-transform duration-150" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                        </button>
                        <div class="absolute z-20 top-full mt-2 w-[280px] max-h-[336px] overflow-y-auto bg-white shadow-lg p-4 hidden" id="country-dropdown">
                            <ul class="space-y-1" id="country-list"></ul>
                        </div>
                    </div>
                </div>

                <!-- Search -->
                <div class="flex items-center border border-black/20 h-10 px-4 min-w-[240px] lg:max-w-xs">
                    <svg class="w-4 h-4 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/></svg>
                    <input type="text" id="dealer-search" placeholder="Pesquisar" class="w-full h-full text-sm lg:text-base outline-none border-none bg-transparent">
                </div>
            </div>

            <!-- Dealer Cards Grid -->
            <div class="columns-1 md:columns-2 lg:columns-3 gap-5 lg:gap-6" id="dealers-grid">
                <!-- Cards are rendered by JS -->
            </div>

            <p class="text-center text-gray-400 text-sm mt-10 hidden" id="no-results">Nenhum revendedor encontrado.</p>
        </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var dealers = [
            { name: 'Concept Auto', email: 'y.tordjman@csamotors.com', location: 'Concept Auto, 12 Av. Ahmed Charci, Casablanca 20050, Morocco', phone: '+212 522398461', country: 'Morocco', region: 'Africa' },
            { name: 'Doscar group (Almaty)', email: '', location: 'Samal-3 microdistrict, 15/1, Almaty, Kazakhstan 050000', phone: '+7 7754433609', country: 'Kazakhstan', region: 'Central Asia' },
            { name: 'AUTOLAND SC LLC (20-Khoroo)', email: 'info@autoland.mn', location: 'Ulaanbaatar city 20-Khoroo Khan-Uul district Autoland branch no1', phone: '+976 76787878', country: 'Mongolia', region: 'Central Asia' },
            { name: 'Vector Tajikistan', email: 'info@rox.tj', location: 'Dushanbe city Sokhili street 48', phone: '+992 418000111', country: 'Tajikistan', region: 'Central Asia' },
            { name: 'EREV MOTORS', email: 'info@roxmotors.md', location: 'Strada Calea Basarabiei 26/5, Chisinau MD-2002, Republic of Moldova', phone: '+373 76080808', country: 'Moldova', region: 'Europe' },
            { name: 'Al Laith Al Lamea (Baghdad)', email: 'contact@alobaidi-cars.com', location: 'El Nahda, Baghdad, Baghdad, Iraq', phone: '+964 07822000028', country: 'Iraq', region: 'Middle East' },
            { name: 'DALHOM MOTORS LTD.', email: 'info@dalhom.co.il', location: "Ze'ev Blefer 15, Kfar Saba", phone: '+972 97935849', country: 'Israel', region: 'Middle East' },
            { name: 'Automak Automall', email: 'crm@automak.com', location: '8WRV+26P, Shuwaikh Industrial, Kuwait', phone: '+965 1845555', country: 'Kuwait', region: 'Middle East' },
            { name: 'NTT Motors S.A.L. (Beirut)', email: 'rox@nttmotors.me', location: 'Corniche Du Fleuve Saad & Trad Building, Beirut 11002806', phone: '01-613670', country: 'Lebanon', region: 'Middle East' },
            { name: 'Muscat International Automobiles LLC', email: 'customerfirst@rox-oman.com', location: 'Behind Daleel Petroleum & Bahwan Automobiles and Services, Muscat 112, Oman', phone: '+968 96628901', country: 'Oman', region: 'Middle East' },
            { name: 'Dalhom vehicle trading company', email: 'info@dalhom.ps', location: 'Al-Balou 10, Ramallah', phone: '+970 593310311', country: 'Palestine', region: 'Middle East' },
            { name: 'SKY Motors W.L.L.', email: 'Info@rox.qa', location: '69 Street 352, Lusail, Qatar', phone: '+974 55477597', country: 'Qatar', region: 'Middle East' },
            { name: 'Al Laith Al Lamea (Riyadh)', email: 'info.ksa@alobaidi-cars.com', location: 'Khurais Rd, Al Manar, Riyadh 14221, Saudi Arabia', phone: '+966 920015338', country: 'Saudi Arabia', region: 'Middle East' },
            { name: 'Long Teng Jin Lu Auto', email: 'Levcautocar@gmail.com', location: 'St. OCIC, Phnom Penh, Cambodia', phone: '+015 278618', country: 'Cambodia', region: 'Southeast Asia' },
            { name: 'TRANSCORP INC (Valenzuela)', email: 'transcorp_inc@roxmotor.com.ph', location: '88 West Service Road NLEX, Valenzuela City, Metro Manila, Philippines', phone: '+63 9178666868', country: 'Philippines', region: 'Southeast Asia' },
            { name: 'Doscar group (Utegen Batyra)', email: '', location: '732 Utegen Batyra Street, Almaty 050062, Kazakhstan', phone: '+7 7020002707', country: 'Kazakhstan', region: 'Central Asia' },
            { name: 'AUTOLAND SC LLC (5-Khoroo)', email: 'info@autoland.mn', location: 'Ulaanbaatar city 5-Khoroo Khan-Uul district Autoland branch no2 Horse Auto Expo', phone: '+976 76787878', country: 'Mongolia', region: 'Central Asia' },
            { name: 'Al Laith Al Lamea (Erbil)', email: 'contact@alobaidi-cars.com', location: '100 Meter Road Erbil Kurdistan, Erbil, Iraq', phone: '+964 07516668000', country: 'Iraq', region: 'Middle East' },
            { name: 'Automak Automotive Company K.S.S.C', email: 'crm@automak.com', location: '8WMR+3PR, 12 St, Shuwaikh Industrial, Kuwait', phone: '+965 99875678', country: 'Kuwait', region: 'Middle East' },
            { name: 'NTT Motors S.A.L. (Dbayeh)', email: 'rox@nttmotors.me', location: 'Dbayeh Main Road, Tohme Motors Showroom, Sea Side Rd', phone: '03-444859', country: 'Lebanon', region: 'Middle East' },
            { name: 'Al Laith Al Lamea (Riyadh 2)', email: 'info.ksa@alobaidi-cars.com', location: 'Abdulrahman bin Abdullatif street, Riyadh, Saudi Arabia', phone: '+966 0536594000', country: 'Saudi Arabia', region: 'Middle East' },
            { name: 'ROX Motor Cambodia', email: 'Levcautocar@gmail.com', location: 'Samdach Hun Sen Blvd, Phnom Penh 120602, Cambodia', phone: '+015 278618', country: 'Cambodia', region: 'Southeast Asia' },
            { name: 'TRANSCORP INC (EDSA-Greenhills)', email: 'transcorp_inc@roxmotor.com.ph', location: 'V.V. Soliven Building, Epifanio de los Santos Ave, San Juan City, 1500 Metro Manila', phone: '+63 9177086868', country: 'Philippines', region: 'Southeast Asia' },
            { name: 'Doscar group (Baidibek Bi)', email: '', location: '149/2 Baidibek Bi Avenue, Almaty, Kazakhstan', phone: '+7 7717600101', country: 'Kazakhstan', region: 'Central Asia' },
            { name: 'Al Laith Al Lamea (Iraq)', email: 'contact@alobaidi-cars.com', location: 'Al Byaa, Baghdad, Baghdad, Iraq', phone: '+964 07833000048', country: 'Iraq', region: 'Middle East' },
            { name: 'Al Wifaq Motors', email: 'Info@rox-jordan.com', location: 'Amman - Wadi Saqra, Arar st.', phone: '+962 797999979', country: 'Jordan', region: 'Middle East' },
            { name: 'NTT Motors S.A.L. (Amchit)', email: 'rox@nttmotors.me', location: 'Mountain side Tohme Motors Showroom (Next to IPT), Amchit', phone: '71-444502', country: 'Lebanon', region: 'Middle East' },
            { name: 'Al Laith Al Lamea (Jeddah)', email: 'info.ksa@alobaidi-cars.com', location: 'Al Mohammadiyyah, Jeddah 23617, Saudi Arabia', phone: '+966 0536594000', country: 'Saudi Arabia', region: 'Middle East' },
            { name: 'SINOEQUIP INC', email: 'transcorp_inc@roxmotor.com.ph', location: '1129 Epifanio de los Santos Ave, Quezon City, 1106 Metro Manila, Philippines', phone: '+63 234745353', country: 'Philippines', region: 'Southeast Asia' },
            { name: 'Doscar group (Astana)', email: '', location: '34a Sarayshyq Street, Yesil District, Astana 010000, Kazakhstan', phone: '+7 7715252425', country: 'Kazakhstan', region: 'Central Asia' },
            { name: 'Al Laith Al Lamea (Mosul)', email: 'contact@alobaidi-cars.com', location: 'Mosul, Nineveh Governorate, Iraq', phone: '', country: 'Iraq', region: 'Middle East' },
            { name: 'Al Laith Al Lamea (Madina)', email: 'info.ksa@alobaidi-cars.com', location: 'Al-Madinah Al-Munawarah Road, Jeddah 23443, Saudi Arabia', phone: '+966 0536594000', country: 'Saudi Arabia', region: 'Middle East' },
            { name: 'Doscar group (K. Satpayev)', email: '', location: '17/3 K. Satpayev Avenue, Almaty 050000, Kazakhstan', phone: '+7 7711110222', country: 'Kazakhstan', region: 'Central Asia' },
            { name: 'Bahus', email: '', location: '40 Kariboz Shektybaev Street, Almaty 050000, Kazakhstan', phone: '+7 7750075657', country: 'Kazakhstan', region: 'Central Asia' },
            { name: 'Futures Trans Motors', email: 'info@rox-uae.com', location: 'Rox showroom, Joud Hotel Building - 97 Al Maktoum Rd, Deira, Dubai', phone: '+971 048849069', country: 'UAE', region: 'Middle East' }
        ];

        var grid = document.getElementById('dealers-grid');
        var noResults = document.getElementById('no-results');
        var searchInput = document.getElementById('dealer-search');
        var regionBtn = document.getElementById('region-btn');
        var regionDropdown = document.getElementById('region-dropdown');
        var regionLabel = document.getElementById('region-label');
        var countryBtn = document.getElementById('country-btn');
        var countryDropdown = document.getElementById('country-dropdown');
        var countryLabel = document.getElementById('country-label');
        var countryList = document.getElementById('country-list');

        var activeRegion = 'all';
        var activeCountry = 'all';

        function renderCards(list) {
            grid.innerHTML = '';
            if (list.length === 0) {
                noResults.classList.remove('hidden');
                return;
            }
            noResults.classList.add('hidden');
            list.forEach(function(d) {
                var card = document.createElement('div');
                card.className = 'break-inside-avoid mb-5 lg:mb-6 bg-[#F8F9F9] p-8 md:p-10 flex flex-col gap-5 text-left';
                var html = '<h3 class="text-lg font-semibold break-words">' + d.name + '</h3>';
                if (d.email) {
                    html += '<a href="mailto:' + d.email + '" class="flex items-start gap-3 hover:text-black/70 transition-colors">'
                        + '<svg class="w-[18px] h-[18px] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>'
                        + '<span class="text-base break-all">' + d.email + '</span></a>';
                }
                html += '<p class="flex items-start gap-3">'
                    + '<svg class="w-[18px] h-[18px] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>'
                    + '<span class="text-base break-words">' + d.location + '</span></p>';
                if (d.phone) {
                    html += '<a href="tel:' + d.phone.replace(/\s/g, '') + '" class="flex items-start gap-3 hover:text-black/70 transition-colors">'
                        + '<svg class="w-[18px] h-[18px] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>'
                        + '<span class="text-base break-words">' + d.phone + '</span></a>';
                }
                card.innerHTML = html;
                grid.appendChild(card);
            });
        }

        function updateCountryList() {
            var countries = ['all'];
            dealers.forEach(function(d) {
                if (activeRegion === 'all' || d.region === activeRegion) {
                    if (countries.indexOf(d.country) === -1) countries.push(d.country);
                }
            });
            countries.sort(function(a, b) { return a === 'all' ? -1 : b === 'all' ? 1 : a.localeCompare(b); });
            countryList.innerHTML = '';
            countries.forEach(function(c) {
                var li = document.createElement('li');
                li.className = 'dealer-country-opt cursor-pointer text-base py-2.5 px-4 hover:bg-[#F8F9F9] transition-colors' + (c === activeCountry ? ' font-medium' : '');
                li.setAttribute('data-country', c);
                li.textContent = c === 'all' ? 'Todos' : c;
                li.addEventListener('click', function() {
                    activeCountry = c;
                    countryLabel.textContent = c === 'all' ? 'Todos os Países' : c;
                    countryDropdown.classList.add('hidden');
                    filterAndRender();
                });
                countryList.appendChild(li);
            });
        }

        function filterAndRender() {
            var query = searchInput.value.toLowerCase();
            var filtered = dealers.filter(function(d) {
                if (activeRegion !== 'all' && d.region !== activeRegion) return false;
                if (activeCountry !== 'all' && d.country !== activeCountry) return false;
                if (query) {
                    var haystack = (d.name + ' ' + d.location + ' ' + d.email + ' ' + d.phone + ' ' + d.country).toLowerCase();
                    if (haystack.indexOf(query) === -1) return false;
                }
                return true;
            });
            renderCards(filtered);
        }

        // Region dropdown
        regionBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            regionDropdown.classList.toggle('hidden');
            countryDropdown.classList.add('hidden');
        });
        document.querySelectorAll('.dealer-region-opt').forEach(function(opt) {
            opt.addEventListener('click', function() {
                activeRegion = opt.getAttribute('data-region');
                regionLabel.textContent = activeRegion === 'all' ? 'Todas as Regiões' : opt.textContent;
                regionDropdown.classList.add('hidden');
                activeCountry = 'all';
                countryLabel.textContent = 'Todos os Países';
                updateCountryList();
                filterAndRender();
            });
        });

        // Country dropdown
        countryBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            countryDropdown.classList.toggle('hidden');
            regionDropdown.classList.add('hidden');
        });

        // Search
        searchInput.addEventListener('input', filterAndRender);

        // Close dropdowns on outside click
        document.addEventListener('click', function() {
            regionDropdown.classList.add('hidden');
            countryDropdown.classList.add('hidden');
        });

        // Init
        updateCountryList();
        renderCards(dealers);
    });
    </script>
</x-front-layout>
