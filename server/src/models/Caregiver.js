export default (sequelize, DataTypes) => {
  return sequelize.define(
    'Caregiver',
    {
      username: {
        type: DataTypes.STRING(40),
        allowNull: false,
        unique: true,
      },
      password: {
        type: DataTypes.STRING(100),
        allowNull: false,
      },
      name: {
        type: DataTypes.STRING(40),
        allowNull: false,
      },
      hasCertificate: {
        type: DataTypes.BOOLEAN,
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
