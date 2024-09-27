document.getElementById('loadContent').addEventListener('click', () => {
    loadContent();
});

// Function to load content from content.html
function loadContent() {
    const contentContainer = document.querySelector('.content-container');

    fetch('content.html')
        .then(response => response.text())
        .then(html => {
            contentContainer.innerHTML = html; // Load content HTML

            // Add event listener to button inside content.html
            const modalButton = contentContainer.querySelector('button'); // Assuming there's only one button
            modalButton.addEventListener('click', () => {
                loadModal(); // Call the loadModal function to load modal.html
            });
        })
        .catch(error => {
            console.error('Error loading content:', error);
        });
}

// Function to load modal from modal.html
function loadModal() {
    const contentContainer = document.querySelector('.content-container');

    fetch('modal.html')
        .then(response => response.text())
        .then(html => {
            contentContainer.innerHTML += html; // Append modal HTML

            const modal = document.getElementById('myModal');
            const closeModal = document.getElementById('closeModal');
            const loadBirthdayMessageButton = document.getElementById('loadBirthdayMessage'); // New button

            // Display the modal
            modal.style.display = 'block';

            // Close the modal when clicking the close button
            closeModal.addEventListener('click', () => {
                modal.style.display = 'none';
                // Optional: Clear modal from the container
                contentContainer.innerHTML = ''; // Clear the content container
                loadContent(); // Reload content.html after closing modal
            });

            // Close the modal when clicking outside of the modal content
            window.addEventListener('click', (event) => {
                if (event.target === modal) {
                    modal.style.display = 'none';
                    // Optional: Clear modal from the container
                    contentContainer.innerHTML = ''; // Clear the content container
                    loadContent(); // Reload content.html after closing modal
                }
            });

            // Load Happy Birthday message when the button is clicked
            loadBirthdayMessageButton.addEventListener('click', () => {
                contentContainer.innerHTML = '<div>Happy Birthday!</div>'; // Load birthday message
                modal.style.display = 'none'; // Close modal after loading message
            });
        })
        .catch(error => {
            console.error('Error loading modal:', error);
        });
}
