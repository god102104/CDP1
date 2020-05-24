import path from 'path';
import Sequelize from 'sequelize';
import CaregiverSchema from './Caregiver';
import ActivitySchema from './Activity';

const env = process.env.NODE_ENV || 'development';
const config = require(path.join(__dirname, '..', '..', 'config', 'config.js'))[env];
const db = {};

const sequelize = new Sequelize(config.database, config.username, config.password, config);

db.sequelize = sequelize;
db.Sequelize = Sequelize;

db.Caregiver = CaregiverSchema(sequelize, Sequelize);
db.Activity = ActivitySchema(sequelize, Sequelize);

db.Caregiver.belongsToMany(db.Activity, {
  foreignKey: 'caregiverId',
  through: 'caregiver_activity',
});

db.Activity.belongsToMany(db.Caregiver, {
  foreignKey: 'activityId',
  through: 'caregiver_activity',
});

export default db;
