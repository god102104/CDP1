export default (sequelize, DataTypes) => {
  return sequelize.define('Caregiver', {
    name: {
      type: DataTypes.STRING(20),
      allowNull: false,
    },
    age: {
      type: DataTypes.INTEGER_UNSIGNED,
      allowNull: false,
    },
  });
};
