// Sidebar toggle for mobile
const sidebarToggle = document.getElementById('sidebarToggle');
if (sidebarToggle) {
    sidebarToggle.addEventListener('click', () => {
        document.body.classList.toggle('sidebar-collapsed');
    });
}

// Dark mode toggle
const themeToggle = document.getElementById('themeToggle');
if (themeToggle) {
    const storedTheme = localStorage.getItem('theme');
    if (storedTheme === 'dark') {
        setDarkMode(true);
    }
    themeToggle.addEventListener('click', () => {
        const dark = document.body.classList.toggle('dark-mode');
        setDarkMode(dark);
    });
}

function setDarkMode(enable) {
    if (enable) {
        document.getElementById('theme-dark').disabled = false;
        localStorage.setItem('theme', 'dark');
    } else {
        document.getElementById('theme-dark').disabled = true;
        localStorage.setItem('theme', 'light');
    }
}
