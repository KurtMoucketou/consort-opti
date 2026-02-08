// Theme Toggle amélioré
function initThemeToggle() {
    const themeToggle = document.getElementById('themeToggle');
    const lightIcon = document.getElementById('lightIcon');
    const darkIcon = document.getElementById('darkIcon');
    const htmlElement = document.documentElement;
    
    if (!themeToggle || !lightIcon || !darkIcon) return;
    
    const savedTheme = localStorage.getItem('theme') || 'light';
    htmlElement.setAttribute('data-bs-theme', savedTheme);
    updateThemeButton(savedTheme);
    
    themeToggle.addEventListener('click', function() {
        const currentTheme = htmlElement.getAttribute('data-bs-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        
        htmlElement.setAttribute('data-bs-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        updateThemeButton(newTheme);
    });
    
    function updateThemeButton(theme) {
        if (theme === 'dark') {
            lightIcon.classList.remove('d-none');
            darkIcon.classList.add('d-none');
            themeToggle.classList.remove('btn-outline-dark');
            themeToggle.classList.add('btn-dark', 'text-white');
        } else {
            lightIcon.classList.add('d-none');
            darkIcon.classList.remove('d-none');
            themeToggle.classList.remove('btn-dark', 'text-white');
            themeToggle.classList.add('btn-outline-dark');
        }
    }
}

// Initialiser quand le DOM est chargé
document.addEventListener('DOMContentLoaded', initThemeToggle);