import db from '../models';

const { Caregiver } = db;

export default {
  showCaregivers(req, res) {
    res.send(caregivers);
  },
  showCaregiver(req, res) {
    res.send('GET /caregivers/:id');
  },
  async createCaregiver(req, res) {
    const { username, password, name, job, age } = req.body;
    try {
      const result = await Caregiver.create({
        username,
        password,
        name,
        job,
        age,
      });
      console.log('crete success: ', result);
      res.status(201).json(result);
    } catch (error) {
      console.log('createCaregiver: ', error);
    }
  },
  updateCaregiver(req, res) {
    res.send('PUT /caregivers/:id');
  },
  deleteCaregiver(req, res) {
    res.send('DELETE /caregivers/:id');
  },
};
