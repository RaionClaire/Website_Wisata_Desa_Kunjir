import "./bootstrap";
import "./nav";

document.getElementById("navToggle")?.addEventListener("click", () => {
    document.getElementById("navMenuMobile")?.classList.toggle("hidden");
});

// snap carousel controls
const bySel = (s) => document.querySelectorAll(s);
bySel("[data-snap-prev]").forEach((btn) => {
    btn.addEventListener("click", () => {
        const id = btn.getAttribute("data-snap-prev");
        const el = document.querySelector(id);
        if (!el) return;
        el.scrollBy({ left: -el.clientWidth * 0.9, behavior: "smooth" });
    });
});
bySel("[data-snap-next]").forEach((btn) => {
    btn.addEventListener("click", () => {
        const id = btn.getAttribute("data-snap-next");
        const el = document.querySelector(id);
        if (!el) return;
        el.scrollBy({ left: el.clientWidth * 0.9, behavior: "smooth" });
    });
});
