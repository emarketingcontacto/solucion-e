<button
    id="btn-back-to-top"
    class="fixed bottom-8 right-8 z-50 hidden p-3 rounded-full bg-brand/80 text-white shadow-lg backdrop-blur-sm transition-all duration-300 hover:bg-brand hover:scale-110 focus:outline-none border border-white/10"
>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
    </svg>
</button>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById("btn-back-to-top");

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 400) {
                btn.classList.remove("hidden");
                btn.classList.add("flex");
            } else {
                btn.classList.add("hidden");
                btn.classList.remove("flex");
            }
        });

        btn.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    });
</script>
