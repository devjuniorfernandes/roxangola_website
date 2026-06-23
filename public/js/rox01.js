document.addEventListener('DOMContentLoaded', function () {

    // ========================================
    // 360 Viewer
    // ========================================
    (function () {
        var container = document.getElementById('viewer-container');
        var canvas = document.getElementById('viewer-canvas');
        if (!container || !canvas) return;

        var ctx = canvas.getContext('2d');
        var swatches = document.querySelectorAll('.color-swatch');
        var loading = document.getElementById('viewer-loading');
        var icon360 = document.getElementById('icon-360');

        var currentColor = 'white';
        var currentFrame = 1;
        var totalFrames = 36;
        var images = {};
        var isDragging = false;
        var startX = 0;
        var isLoaded = false;
        var isTouchDevice = ('ontouchstart' in window) || (navigator.maxTouchPoints > 0);

        canvas.width = 1920;
        canvas.height = 1080;

        function loadImagesForColor(color) {
            loading.style.opacity = '1';
            loading.style.pointerEvents = 'auto';
            isLoaded = false;

            if (images[color] && images[color].length === totalFrames) {
                drawFrame(currentFrame, color);
                loading.style.opacity = '0';
                loading.style.pointerEvents = 'none';
                isLoaded = true;
                return;
            }

            images[color] = [];
            var loadedCount = 0;

            for (var i = 1; i <= totalFrames; i++) {
                var img = new Image();
                img.onload = function () {
                    loadedCount++;
                    if (loadedCount === totalFrames) {
                        drawFrame(currentFrame, color);
                        loading.style.opacity = '0';
                        loading.style.pointerEvents = 'none';
                        isLoaded = true;
                    }
                };
                img.src = '/assets/rox_1/' + color + '_' + i + '.png';
                images[color][i - 1] = img;
            }
        }

        function drawFrame(frameIndex, color) {
            if (!images[color] || !images[color][frameIndex - 1]) return;
            var img = images[color][frameIndex - 1];

            ctx.clearRect(0, 0, canvas.width, canvas.height);

            var hRatio = canvas.width / img.width;
            var vRatio = canvas.height / img.height;
            var ratio = Math.min(hRatio, vRatio);
            var centerShift_x = (canvas.width - img.width * ratio) / 2;
            var centerShift_y = (canvas.height - img.height * ratio) / 2;

            ctx.drawImage(img, 0, 0, img.width, img.height,
                centerShift_x, centerShift_y, img.width * ratio, img.height * ratio);
        }

        loadImagesForColor(currentColor);

        swatches.forEach(function (swatch) {
            swatch.addEventListener('click', function (e) {
                swatches.forEach(function (s) { s.classList.remove('ring-2', 'ring-offset-2', 'ring-black'); });
                e.target.classList.add('ring-2', 'ring-offset-2', 'ring-black');
                currentColor = e.target.getAttribute('data-color');
                loadImagesForColor(currentColor);
            });
        });

        container.addEventListener('mouseenter', function () {
            if (!isDragging && !isTouchDevice && isLoaded) icon360.style.opacity = '1';
        });
        container.addEventListener('mouseleave', function () {
            icon360.style.opacity = '0';
            isDragging = false;
        });

        function startDrag(x) {
            if (!isLoaded) return;
            isDragging = true;
            startX = x;
            icon360.style.opacity = '0';
        }

        function onDrag(x, y, isMouse) {
            if (!isLoaded) return;
            if (isMouse && !isDragging && !isTouchDevice) {
                icon360.style.opacity = '1';
                var rect = container.getBoundingClientRect();
                icon360.style.left = (x - rect.left) + 'px';
                icon360.style.top = (y - rect.top) + 'px';
            }
            if (!isDragging) return;
            var diff = x - startX;
            if (Math.abs(diff) > 12) {
                if (diff > 0) { currentFrame--; if (currentFrame < 1) currentFrame = totalFrames; }
                else { currentFrame++; if (currentFrame > totalFrames) currentFrame = 1; }
                drawFrame(currentFrame, currentColor);
                startX = x;
            }
        }

        function stopDrag() {
            isDragging = false;
            if (!isTouchDevice) icon360.style.opacity = '1';
        }

        container.addEventListener('mousedown', function (e) { startDrag(e.pageX); });
        window.addEventListener('mousemove', function (e) { onDrag(e.pageX, e.clientY, true); });
        window.addEventListener('mouseup', stopDrag);

        container.addEventListener('touchstart', function (e) {
            icon360.style.opacity = '0';
            startDrag(e.touches[0].pageX);
        });
        window.addEventListener('touchmove', function (e) { onDrag(e.touches[0].pageX, e.touches[0].pageY, false); }, { passive: true });
        window.addEventListener('touchend', stopDrag);
    })();

    // ========================================
    // Specs Slider (infinite loop with clones)
    // ========================================
    (function () {
        var specsTrack = document.getElementById('specs-track');
        var specsCards = document.querySelectorAll('.specs-card');
        var specsDots = document.querySelectorAll('.specs-dot');
        var specsPrev = document.getElementById('specs-prev');
        var specsNext = document.getElementById('specs-next');
        if (!specsTrack || !specsCards.length) return;

        var realCount = specsDots.length;
        var domIndex = 1;
        var isAnimating = false;

        function layoutSpecs() {
            var vw = window.innerWidth;
            var isMobile = vw < 768;
            var centerW = isMobile ? vw * 0.85 : vw * 0.50;

            specsCards.forEach(function (card) { card.style.width = centerW + 'px'; });

            specsTrack.style.transition = 'none';
            goTo(domIndex);
            void specsTrack.offsetWidth;
            specsTrack.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.1, 0.25, 1)';
        }

        function goTo(idx) {
            domIndex = idx;
            var vw = window.innerWidth;
            var card = specsCards[domIndex];
            var offset = (vw / 2) - (card.offsetLeft + card.offsetWidth / 2);
            specsTrack.style.transform = 'translateX(' + offset + 'px)';
            updateDots();
        }

        function updateDots() {
            var realIdx = domIndex - 1;
            if (realIdx < 0) realIdx = realCount - 1;
            if (realIdx >= realCount) realIdx = 0;
            specsDots.forEach(function (d, i) {
                d.classList.toggle('bg-white', i === realIdx);
                d.classList.toggle('bg-gray-700', i !== realIdx);
            });
        }

        function snapAfterLoop() {
            if (domIndex === 0) {
                specsTrack.style.transition = 'none';
                goTo(realCount);
                void specsTrack.offsetWidth;
                specsTrack.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.1, 0.25, 1)';
            }
            if (domIndex === realCount + 1) {
                specsTrack.style.transition = 'none';
                goTo(1);
                void specsTrack.offsetWidth;
                specsTrack.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.1, 0.25, 1)';
            }
            isAnimating = false;
        }

        specsTrack.addEventListener('transitionend', snapAfterLoop);

        function next() { if (isAnimating) return; isAnimating = true; goTo(domIndex + 1); }
        function prev() { if (isAnimating) return; isAnimating = true; goTo(domIndex - 1); }

        specsPrev.addEventListener('click', prev);
        specsNext.addEventListener('click', next);
        specsDots.forEach(function (dot) {
            dot.addEventListener('click', function () {
                if (isAnimating) return;
                isAnimating = true;
                goTo(parseInt(dot.dataset.index) + 1);
            });
        });

        layoutSpecs();
        window.addEventListener('resize', layoutSpecs);

        var sTouchStart = 0, sTouchDiff = 0;
        specsTrack.addEventListener('touchstart', function (e) { sTouchStart = e.touches[0].clientX; }, { passive: true });
        specsTrack.addEventListener('touchmove', function (e) { sTouchDiff = e.touches[0].clientX - sTouchStart; }, { passive: true });
        specsTrack.addEventListener('touchend', function () {
            if (sTouchDiff > 50) prev();
            else if (sTouchDiff < -50) next();
            sTouchDiff = 0;
        });
    })();

    // ========================================
    // Lifestyle Slider
    // ========================================
    (function () {
        var track = document.getElementById('slider-track');
        var prevBtn = document.getElementById('slider-prev');
        var nextBtn = document.getElementById('slider-next');
        var cursor = document.getElementById('slider-cursor');
        var sliderSection = document.getElementById('lifestyle-slider');
        var cards = document.querySelectorAll('.slider-card');
        var slideButtons = document.querySelectorAll('.slide-btn');
        if (!track || !cards.length) return;

        var currentSlide = 0;
        var isTouchDev = ('ontouchstart' in window) || (navigator.maxTouchPoints > 0);
        var GAP = 16;

        function layout() {
            var vw = window.innerWidth;
            var isMobile = vw < 768;
            var cardW = isMobile ? vw * 0.85 : (vw - GAP * 3) / 3;
            var cardH = isMobile ? 400 : 550;

            cards.forEach(function (card) {
                card.style.width = cardW + 'px';
                card.style.height = cardH + 'px';
                card.style.marginRight = GAP + 'px';
            });

            slideTo(currentSlide);
        }

        function slideTo(index) {
            var vw = window.innerWidth;
            var cardW = cards[0].offsetWidth;
            var step = cardW + GAP;
            var maxIndex = Math.max(0, cards.length - 3);
            currentSlide = Math.max(-1, Math.min(index, maxIndex));

            var initialOffset = -(cardW / 2);
            var offset = initialOffset - currentSlide * step;
            track.style.transform = 'translateX(' + offset + 'px)';
        }

        prevBtn.addEventListener('click', function () { slideTo(currentSlide - 1); });
        nextBtn.addEventListener('click', function () { slideTo(currentSlide + 1); });

        layout();
        window.addEventListener('resize', layout);

        if (!isTouchDev) {
            sliderSection.addEventListener('mousemove', function (e) {
                cursor.style.left = e.clientX + 'px';
                cursor.style.top = e.clientY + 'px';
            });
            cards.forEach(function (card) {
                card.addEventListener('mouseenter', function () { cursor.style.opacity = '1'; });
                card.addEventListener('mouseleave', function () { cursor.style.opacity = '0'; });
            });
            slideButtons.forEach(function (btn) {
                btn.addEventListener('mouseenter', function () {
                    cursor.style.opacity = '0';
                    btn.style.cursor = 'pointer';
                });
                btn.addEventListener('mouseleave', function () { cursor.style.opacity = '1'; });
            });
        }

        var touchStartX = 0, touchDiff = 0;
        track.addEventListener('touchstart', function (e) { touchStartX = e.touches[0].clientX; }, { passive: true });
        track.addEventListener('touchmove', function (e) { touchDiff = e.touches[0].clientX - touchStartX; }, { passive: true });
        track.addEventListener('touchend', function () {
            if (Math.abs(touchDiff) > 50) slideTo(currentSlide + (touchDiff > 0 ? -1 : 1));
            touchDiff = 0;
        });
    })();

    // ========================================
    // Showcase Scroll Reveal
    // ========================================
    (function () {
        var showcaseSection = document.getElementById('showcase-section');
        if (!showcaseSection) return;

        var els = [
            document.getElementById('showcase-label'),
            document.getElementById('showcase-title'),
            document.getElementById('showcase-link')
        ].filter(Boolean);
        var revealed = false;

        function onScroll() {
            var rect = showcaseSection.getBoundingClientRect();
            var vh = window.innerHeight;

            if (rect.top < vh * 0.6 && !revealed) {
                revealed = true;
                els.forEach(function (el) {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                });
            }

            if (rect.bottom < 0 || rect.top > vh) {
                revealed = false;
                els.forEach(function (el) {
                    el.style.opacity = '0';
                    el.style.transform = 'translateY(24px)';
                });
            }
        }

        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    })();

    // ========================================
    // Video Modal
    // ========================================
    (function () {
        var openBtn = document.getElementById('showcase-link');
        var modal = document.getElementById('video-modal');
        var closeBtn = document.getElementById('video-modal-close');
        var player = document.getElementById('video-player');
        if (!openBtn || !modal) return;

        openBtn.addEventListener('click', function () {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            player.currentTime = 0;
            player.play();
        });

        closeBtn.addEventListener('click', function () {
            player.pause();
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) closeBtn.click();
        });
    })();

    // ========================================
    // Feature Sections Scroll Reveal
    // ========================================
    (function () {
        var wrappers = document.querySelectorAll('.feature-wrapper');
        if (!wrappers.length) return;

        function clamp(val, min, max) { return Math.max(min, Math.min(max, val)); }

        function onFeatureScroll() {
            var vh = window.innerHeight;
            wrappers.forEach(function (wrapper) {
                var rect = wrapper.getBoundingClientRect();
                var wrapperH = wrapper.offsetHeight;
                if (wrapperH <= vh) wrapperH = vh + 1;
                var scrolled = Math.max(0, -rect.top);
                var extra = wrapperH - vh;
                var progress = clamp(scrolled / extra, 0, 1);

                var section = wrapper.querySelector('.feature-section');
                if (!section) return;
                var titles = section.querySelectorAll('.feature-title');
                var descs = section.querySelectorAll('.feature-desc');

                var titleT = clamp(progress / 0.5, 0, 1);
                titles.forEach(function (el) {
                    el.style.opacity = String(titleT);
                    el.style.transform = 'translateY(' + Math.round(40 * (1 - titleT)) + 'px)';
                });

                var descT = clamp((progress - 0.1) / 0.5, 0, 1);
                descs.forEach(function (el) {
                    el.style.opacity = String(descT);
                    el.style.transform = 'translateY(' + Math.round(40 * (1 - descT)) + 'px)';
                });
            });
        }

        window.addEventListener('scroll', onFeatureScroll, { passive: true });
        window.addEventListener('resize', onFeatureScroll, { passive: true });
        onFeatureScroll();
    })();

    // ========================================
    // Comfort Section Custom Cursor
    // ========================================
    (function () {
        var comfortCursor = document.getElementById('comfort-cursor');
        var comfortSection = document.getElementById('comfort-section');
        if (!comfortCursor || !comfortSection) return;

        var comfortCards = document.querySelectorAll('.comfort-card');
        var isTouchDev = ('ontouchstart' in window) || (navigator.maxTouchPoints > 0);

        if (!isTouchDev) {
            comfortSection.addEventListener('mousemove', function (e) {
                comfortCursor.style.left = e.clientX + 'px';
                comfortCursor.style.top = e.clientY + 'px';
            });

            comfortCards.forEach(function (card) {
                card.addEventListener('mouseenter', function () { comfortCursor.style.opacity = '1'; });
                card.addEventListener('mouseleave', function () { comfortCursor.style.opacity = '0'; });
            });

            comfortCards.forEach(function (card) {
                var btns = card.querySelectorAll('a');
                btns.forEach(function (btn) {
                    btn.addEventListener('mouseenter', function () {
                        comfortCursor.style.opacity = '0';
                        btn.style.cursor = 'pointer';
                    });
                    btn.addEventListener('mouseleave', function () {
                        comfortCursor.style.opacity = '1';
                    });
                });
            });
        }
    })();

});
