<section class="ours-numbers">
    <div class="container">
        <div class="row justify-content-center text-center mt-5"> 
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3 mb-5 mt-5 border mx-4">
                <h3 class="mt-5 mb-2 fs-1 fw-bolder text-white">
                    <span class="count" data-target="1500">0</span> <span class="sinal-custom fs-2">+</span>
                </h3>
                <p class="fs-5 fw-bolder text-white">Alunos matriculados</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3 mb-5 mt-5 border mx-4">
                <h3 class="mt-5 mb-2 fs-1 fw-bolder text-white">
                    <span class="count" data-target="500">0</span> <span class="sinal-custom fs-2">+</span>
                </h3>
                <p class="fs-5 fw-bolder text-white">Alunos formados</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3 mb-5 mt-5 border mx-4">
                <h3 class="mt-5 mb-2 fs-1 fw-bolder text-white">
                    <span class="count" data-target="100">0</span> <span class="sinal-custom fs-2">+</span>
                </h3>
                <p class="fs-5 fw-bolder text-white">Equipe educacional</p>
            </div>
        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('.count');
        const duration = 2000; // Duração da animação em milissegundos

        const fadeIn = (element) => {
            let opacity = 0;
            element.style.opacity = opacity;
            const interval = setInterval(() => {
                opacity += 0.05;
                element.style.opacity = opacity;
                if (opacity >= 1) clearInterval(interval);
            }, 50); // Velocidade do fade
        };

        const countUp = (counter) => {
            const target = +counter.getAttribute('data-target');
            const increment = target / (duration / 20); // Ajusta a velocidade

            const updateCount = () => {
                const currentCount = +counter.innerText;
                if (currentCount < target) {
                    counter.innerText = Math.ceil(currentCount + increment);
                    setTimeout(updateCount, 20);
                } else {
                    counter.innerText = target; // Garante o valor final
                }
            };

            fadeIn(counter); // Aplicando efeito de fade-in
            updateCount();
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    countUp(counter);
                    observer.unobserve(counter);
                }
            });
        }, {
            threshold: 0.5
        });

        counters.forEach(counter => {
            observer.observe(counter);
        });
    });
</script>