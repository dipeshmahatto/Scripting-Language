document.cookie = "username=John Doe";

// Get the value of the cookie
const username = document.cookie.split('=')[1];

// Display the value
console.log("Username:", username);
