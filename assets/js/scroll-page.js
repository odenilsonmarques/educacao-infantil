document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector(".main-menu");

    function handleScroll() {
        if (window.innerWidth > 768) { // Verifica se está no desktop
            if (window.scrollY > 50) {
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
            }
        } else {
            header.classList.remove("scrolled"); // Remove a classe no mobile, caso tenha sido adicionada
        }
    }

    window.addEventListener("scroll", handleScroll);
    window.addEventListener("resize", handleScroll); // Reaplica ao redimensionar a tela
});
