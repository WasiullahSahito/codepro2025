     document.addEventListener('DOMContentLoaded', function() {
            var typed = new Typed('#typed', {
                strings: ['Web Developer', 'Designer'],
                typeSpeed: 50,
                backSpeed: 50,
                backDelay: 2000,
                loop: true
            });

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });