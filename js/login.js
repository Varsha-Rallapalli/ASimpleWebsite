/*const connection = require('database.js');

function insertUser(query, values) {
  pool.getConnection((err, connection) => {
    if (err) {
      console.error(err);
      return;
    }

    connection.query(query, values, (err, result) => {
      connection.release(); // Release the connection
      if (err) {
        console.error(err);
        return;
      }

      console.log("User inserted successfully!");
    });
  });
}
  // Get the login form element
  const loginForm = document.querySelector('.form.login form');
  // Add a click event listener to the login button
  const loginButton = document.querySelector('.form.login input[type="button"]');
  loginButton.addEventListener('click', (event) => {
    event.preventDefault();
    const email = loginForm.querySelector('input[name="email"]').value;
    const password = loginForm.querySelector('input[type="password"]').value;
    const loginQuery = 'INSERT INTO users (email, password) VALUES (?, ?)';
    insertUser(loginQuery, [email, password]);
  });


// Get the signup form element

const signupForm = document.querySelector('.form.signup form');
// Add a click event listener to the signup button
const signupButton = document.querySelector('.form.signup input[type="button"]');
signupButton.addEventListener('click', (event) => {
  event.preventDefault();
  const name = signupForm.querySelector('input[name="name"]').value;
  const email = signupForm.querySelector('input[name="email"]').value;
  const password = signupForm.querySelector('.password').value;
  const signupQuery = 'INSERT INTO users (name, email, password) VALUES (?, ?, ?)';
  insertUser(signupQuery, [name, email, password]);
});

*/
// Wait for the DOM to be fully loaded

