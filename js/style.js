function atiraAnimatedCounter() {
    // First we await the document to be fully loaded
    document.addEventListener("DOMContentLoaded", () => {
        const counters = Array.from(document.querySelectorAll(".number"));
        const counterSection = document.querySelector(".pw-counter-section");
        const stepVal = +counterSection.getAttribute("data-pw-step");
        const timeVal = +counterSection.getAttribute("data-pw-interval");

        // Intersection Observer
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    startCounter(entry.target);
                    counterObserver.unobserve(entry.target); // Here you can comment or remove this line if you want repeated counter
                }
            });
        });

        counters.forEach((counter) => {
            counterObserver.observe(counter);
        });

        // Start the counter
        function startCounter(counter) {
            let count = 0;
            const target = +counter.getAttribute("data-pw-target");

            const increment = target / stepVal;

            const interval = setInterval(() => {
                count += increment;
                if (count >= target) {
                    counter.textContent = target;
                    clearInterval(interval);
                } else {
                    counter.textContent = Math.ceil(count);
                }
            }, timeVal);
        }
    });
}

atiraAnimatedCounter();
