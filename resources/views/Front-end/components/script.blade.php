@vite('resources/js/app.js')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const optionButton = document.getElementById("option");
        const mobileMenu = document.getElementById("mobile-menu");

        // Toggle mobile menu visibility
        optionButton.addEventListener("click", function() {
            mobileMenu.classList.toggle("hidden");
        });
    });

    document.addEventListener("contextmenu", (event) => {
        event.preventDefault();
    });
</script>
</body>

</html>
