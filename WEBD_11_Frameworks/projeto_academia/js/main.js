/*var copy= document.querySelector(".logos-slide").cloneNode(true);
document.querySelector(".logos").appendChild(copy);*/

document.addEventListener("DOMContentLoaded", () => {
    const slider = document.querySelector(".logos-slide");

    slider.innerHTML += slider.innerHTML;

    let position = 0;
    const speed = 0.8;
    const resetPoint = slider.scrollWidth / 2;

    let paused = false;

    slider.parentElement.addEventListener("mouseenter", () => paused = true);
    slider.parentElement.addEventListener("mouseleave", () => paused = false);

    function animate() {
        if (!paused) {
            position += speed;

            if (position >= resetPoint) {
                position = 0;
            }

            slider.style.transform = `translateX(-${position}px)`;
        }

        requestAnimationFrame(animate);
    }

    animate();
});