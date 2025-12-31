const btn = document.getElementById('hamburger');
const sidebar = document.getElementById('sidebar');
const overlay = document.getElementById('sidebar-overlay');

function toggleMenu() {
    sidebar.classList.toggle('-translate-x-full');
    overlay.classList.toggle('hidden');
    const line1 = document.getElementById('line1');
    const line2 = document.getElementById('line2');
    const line3 = document.getElementById('line3');
    if (sidebar.classList.contains('-translate-x-full')) {
        line1.setAttribute('d', 'M4 6h16');
        line2.style.opacity = '1';
        line3.setAttribute('d', 'M4 18h16');
    } else {
        line1.setAttribute('d', 'M6 18L18 6M6 6l12 12');
        line2.style.opacity = '0';
        line3.setAttribute('d', 'M6 18L18 6M6 6l12 12');
    }
}

btn.addEventListener('click', toggleMenu);
overlay.addEventListener('click', toggleMenu);
