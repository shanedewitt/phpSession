document.addEventListener('DOMContentLoaded', () => {
    const logoutBtn = document.querySelector('#logoutBtn');

    if (logoutBtn) {
        logoutBtn.addEventListener('click', () => {
            fetch('logout.php', {
                method: 'GET'
            })
            .then(response => {
                if (response.redirected) {
                    window.location.href = response.url;
                }
            })
            .catch(error => console.error('Error logging out:', error));
        });
    }
});

