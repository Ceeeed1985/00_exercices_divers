// app.js

const express = require('express');
const sequelize = require('./models');
const User = require('./models/User');

const app = express();
const port = 3000;

// Middleware pour parser le JSON
app.use(express.json());

app.get('/', (req, res) => {
  res.send('Hello World!');
});

// Synchronisation de la base de données et démarrage du serveur
sequelize.sync().then(() => {
  app.listen(port, () => {
    console.log(`Serveur démarré sur http://localhost:${port}`);
  });
}).catch(err => {
  console.error('Impossible de se connecter à la base de données :', err);
});
