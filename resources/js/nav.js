document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.getElementById("mainNavbar");
    const mobileMenu = document.getElementById("mobileMenu");
    const mobileMenuBtn = document.getElementById("mobileMenuBtn");
    const menuIcon = document.getElementById("menuIcon");
    const brandName = document.getElementById("brandName");
    const isHome = window.location.pathname === "/";

    function closeMobileMenu() {
        mobileMenu.classList.add("opacity-0", "pointer-events-none");
        setTimeout(() => {
            mobileMenu.classList.add("hidden");
        }, 200);
    }

    function openMobileMenu() {
        mobileMenu.classList.remove("hidden");
        setTimeout(() => {
            mobileMenu.classList.remove("opacity-0", "pointer-events-none");
        }, 10);
    }

    function setScrolledStyle() {
        navbar.classList.remove("absolute", "bg-transparent", "text-white");
        navbar.classList.add("fixed", "bg-white", "shadow-md", "text-gray-900");
        navbar.querySelectorAll(".nav-link").forEach((link) => {
            link.classList.remove("text-white");
            link.classList.add("text-gray-900");
        });
        if (menuIcon) {
            menuIcon.classList.remove("text-white");
            menuIcon.classList.add("text-gray-900");
        }
        if (brandName) {
            brandName.classList.remove("text-white");
            brandName.classList.add("text-green-700");
        }
    }

    function setTopStyle() {
        if (isHome) {
            navbar.classList.remove(
                "fixed",
                "bg-white",
                "shadow-md",
                "text-gray-900"
            );
            navbar.classList.add("absolute", "bg-transparent", "text-white");
            navbar.querySelectorAll(".nav-link").forEach((link) => {
                link.classList.remove("text-gray-900");
                link.classList.add("text-white");
            });
            if (menuIcon) {
                menuIcon.classList.remove("text-gray-900");
                menuIcon.classList.add("text-white");
            }
            if (brandName) {
                brandName.classList.remove("text-green-700");
                brandName.classList.add("text-white");
            }
        }
    }

    const handleScroll = () => {
        if (isHome) {
            if (window.scrollY > 30) {
                setScrolledStyle();
            } else {
                setTopStyle();
            }
        }
    };

    handleScroll();
    document.addEventListener("scroll", handleScroll);

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener("click", (e) => {
            e.stopPropagation();
            const isOpen = !mobileMenu.classList.contains("hidden");

            if (isOpen) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        });

        document.addEventListener("click", (e) => {
            const isOpen = !mobileMenu.classList.contains("hidden");
            if (
                isOpen &&
                !mobileMenu.contains(e.target) &&
                !mobileMenuBtn.contains(e.target)
            ) {
                closeMobileMenu();
            }
        });

        mobileMenu.querySelectorAll("a").forEach((link) => {
            link.addEventListener("click", () => {
                closeMobileMenu();
            });
        });
    }

    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            const href = this.getAttribute("href");
            if (href !== "#") {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: "smooth",
                        block: "start",
                    });
                }
            }
        });
    });
});
