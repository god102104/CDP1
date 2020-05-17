import path from 'path';
import Sequelize from 'sequelize';

const env = process.env.NODE_ENV || 'development';
const config = require(path.join(__dirname, '..', '..', 'config', config.js))[
  env
];
const db = {};

const sequelize = new Sequelize(
  config.database,
  config.username,
  config.password,
  config
);

db.sequelize = sequelize;
db.Sequelize = Sequelize;

export default db;
