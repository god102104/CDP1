export default (sequelize, DataTypes) => {
  return sequelize.define('Activity', {
    activity: {
      type: DataTypes.STRING(40),
      allowNull: false,
      unique: true,
    },
  });
};
