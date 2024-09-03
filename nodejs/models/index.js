// models/index.js

const { Sequelize } = require('sequelize');
const sequelize = new Sequelize({
  dialect: 'sqlite',
  storage: 'database.sqlite'  // Le nom du fichier SQLite
});

module.exports = sequelize;
