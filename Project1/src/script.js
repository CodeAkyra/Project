
/** MODULE LINKS */
/** DROPDOWN BEHAVIOR */
document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.module-grp');
    const content = document.querySelector('.main-content')

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const dropdown = button.nextElementSibling;
            if (dropdown && dropdown.classList.contains('dropdown')) {
                dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';

                buttons.forEach(btn => {
                    if (btn !== button) {
                        btn.classList.remove('active');
                        const otherDropdown = btn.nextElementSibling;
                        if (otherDropdown && otherDropdown.classList.contains('dropdown')) {
                            otherDropdown.style.display = 'none';
                        }
                    }
                });
                button.classList.toggle('active');
            }
        });
    });
});


function loadHTML(file) {
    const mainContent = document.getElementById('main-content'); // Select the main content div

    fetch(file)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(html => {
            mainContent.innerHTML = html; // Inject the loaded HTML into the main-content div
        })
        .catch(error => {
            console.error('Error loading the HTML file:', error);
            mainContent.innerHTML = '<p>Error loading content.</p>'; // Optional: Show an error message
        });
}
