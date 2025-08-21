
let prevScrollpos = window.pageYOffset;
const linksBar = document.getElementById("important-links");

window.onscroll = function () {
    let currentScrollPos = window.pageYOffset;
    linksBar.style.top = (prevScrollpos > currentScrollPos) ? "0" : "-40px";
    prevScrollpos = currentScrollPos;
};

document.getElementById('account-btn').addEventListener('click', e => {
    e.stopPropagation();
    document.getElementById('account-dropdown').classList.toggle('hidden');
});

window.addEventListener('click', e => {
    if (
        !document.getElementById('account-btn').contains(e.target) &&
        !document.getElementById('account-dropdown').contains(e.target)
    ) {
        document.getElementById('account-dropdown').classList.add('hidden');
    }
});

// Sidebar active link tracking
const sections = document.querySelectorAll('main section');
const navLinks = document.querySelectorAll('aside a');

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

//Alpine store for menu state
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

