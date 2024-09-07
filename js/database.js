const {createPool}=require('mysql')

const pool=createPool({
    host:"localhost",
    user:"sqluser",
    password:"221181981",
    database: "tdb" 
})
pool.query(`select * from tdb.users`,(err,res)=>{
    return console.log(res)
})
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

  function fetchAllUsers() {
    const query = 'SELECT * FROM users';
    pool.query(query, (err, res) => {
      if (err) {
        console.error(err);
        return;
      }
      console.log(res);
    });
  }
  
  module.exports = { insertUser , fetchAllUsers };
*/


/*
const express = require('express');
const { createPool } = require('mysql');

const pool = createPool({
  host: 'localhost',
  user: 'sqluser',
  password: '221181981',
  database: 'tdb'
});

const app = express();
app.use(express.urlencoded({ extended: true }));
app.use(express.json());

function insertUser(query, values) {
  pool.query(query, values, (err, result) => {
    if (err) {
      console.error(err);
      return;
    }

    console.log('User inserted successfully!');
  });
}

app.post('/register', (req, res) => {
  const { name, email, password } = req.body;

  const signupQuery = 'INSERT INTO users (name, email, password) VALUES (?, ?, ?)';
  insertUser(signupQuery, [name, email, password]);

  res.send('User registered successfully!');
});

app.get('/users', (req, res) => {
  const selectQuery = 'SELECT * FROM users';

  pool.query(selectQuery, (err, result) => {
    if (err) {
      console.error(err);
      return;
    }

    res.send(result);
  });
});

app.listen(5501, () => {
  console.log('Server started on port 5501');
});




