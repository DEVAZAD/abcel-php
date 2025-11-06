document.addEventListener('DOMContentLoaded', function() {
            const sliderTrack = document.querySelector('.slider-track');
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.dot');
            
            let currentSlide = 0;
            let slideInterval;
            
            function initSlider() {
                updateSlider();
                startAutoSlide();
                
                dots.forEach(dot => {
                    dot.addEventListener('click', function() {
                        const slideIndex = parseInt(this.getAttribute('data-slide'));
                        goToSlide(slideIndex);
                    });
                });
            }
            
            function updateSlider() {
                sliderTrack.style.transform = `translateX(-${currentSlide * 25}%)`;
                
                slides.forEach(slide => slide.classList.remove('active'));
                slides[currentSlide].classList.add('active');
                
                dots.forEach(dot => dot.classList.remove('active'));
                dots[currentSlide].classList.add('active');
            }
            
            function goToSlide(slideIndex) {
                currentSlide = slideIndex;
                updateSlider();
                resetAutoSlide();
            }
            
            function nextSlide() {
                currentSlide = (currentSlide + 1) % slides.length;
                updateSlider();
            }
            
            function startAutoSlide() {
                slideInterval = setInterval(nextSlide, 5000);
            }
            
            function resetAutoSlide() {
                clearInterval(slideInterval);
                startAutoSlide();
            }
            
            initSlider();
        });