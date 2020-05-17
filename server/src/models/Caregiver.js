export default (sequelize, DataTypes) => {
  return sequelize.define(
    'Caregiver',
    {
      name: {
        type: DataTypes.STRING(20),
        allowNull: false,
      },
      age: {
        type: DataTypes.INTEGER.UNSIGNED,
        allowNull: false,
      },
      created_at: {
        type: DataTypes.DATE,
        allowNull: false,
        defaultValue: DataTypes.NOW,
      },
    },
    {
      timestamps: false,
    }
  );
};
