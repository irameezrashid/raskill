document.addEventListener("DOMContentLoaded", () => {
    // Sticky bar scroll
    let prevScrollpos = window.pageYOffset;
    const linksBar = document.getElementById("important-links");

    if (linksBar) {
        window.addEventListener("scroll", () => {
            let currentScrollPos = window.pageYOffset;
            linksBar.style.top = (prevScrollpos > currentScrollPos) ? "0" : "-40px";
            prevScrollpos = currentScrollPos;
        });
    }

    // Account dropdown
    const accountBtn = document.getElementById('account-btn');
    const accountDropdown = document.getElementById('account-dropdown');

    if (accountBtn && accountDropdown) {
        accountBtn.addEventListener('click', e => {
            e.stopPropagation();
            accountDropdown.classList.toggle('hidden');
        });

        window.addEventListener('click', e => {
            if (!accountBtn.contains(e.target) && !accountDropdown.contains(e.target)) {
                accountDropdown.classList.add('hidden');
            }
        });
    }

    // Sidebar active link tracking
    const sections = document.querySelectorAll('main section');
    const navLinks = document.querySelectorAll('aside a');

    if (sections.length && navLinks.length) {
        window.addEventListener('scroll', () => {
            let closestSection = null;
            let closestDistance = Number.POSITIVE_INFINITY;

            sections.forEach(sec => {
                const rect = sec.getBoundingClientRect();
                const offset = 180;
                if (rect.top - offset >= -100 && rect.top - offset < closestDistance) {
                    closestDistance = rect.top - offset;
                    closestSection = sec;
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active-link');
                if (closestSection && link.getAttribute('href') === '#' + closestSection.id) {
                    link.classList.add('active-link');
                }
            });
        });
    }
});

// Alpine store must load AFTER Alpine
document.addEventListener('alpine:init', () => {
    Alpine.store('menu', {
        open: null,
        sidebarOpen: false,
        activePath: '',

        toggle(name) {
            this.open = (this.open === name) ? null : name;
        },
        close() {
            this.open = null;
            this.sidebarOpen = false;
        },
        setSidebar(val) {
            this.sidebarOpen = val;
            if (!val) this.open = null;
        },
        isActive(href) {
            if (!href) return false;
            try {
                const u = new URL(href, location.origin);
                href = u.pathname;
            } catch (e) { }

            if (!this.activePath) return false;
            return this.activePath === href || this.activePath.endsWith(href);
        }
    });
});
