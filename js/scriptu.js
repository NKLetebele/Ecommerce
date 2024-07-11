  // Function to save the username to localStorage
  function saveUsernameToLocalStorage(username) {
    localStorage.setItem('userName', username);
}

// Function to check if user is logged in
function isLoggedIn() {
    const userName = localStorage.getItem('userName');
    return !!userName; // Returns true if userName exists, false otherwise
}

// Retrieve username from localStorage
const userName = localStorage.getItem('userName');

// Get the element where the username will be displayed
const usernameDisplay = document.getElementById('usernameDisplay');

if (userName) {
    // Display the username in the element
    usernameDisplay.textContent = userName ;

    // Check if user is logged in and add CSS if they are
    if (isLoggedIn()) {
        const styleElement = document.createElement('style');
        styleElement.textContent = `
            .dropdown:hover .dropdown-content {
                display: block;
            }
        `;
        document.head.appendChild(styleElement);
    }
} else {
    // Display a message if the username is not found
    usernameDisplay.textContent = 'User name not found.';
}

// Call the saveUsernameToLocalStorage function when the user logs in
const loggedInUsername = userName; // Replace with the actual username
saveUsernameToLocalStorage(loggedInUsername);