import db from '../models';

const { Caregiver } = db;
const caregivers = [
  {
    name: 'John',
    age: 26,
  },
  {
    name: 'Brian',
    age: 26,
  },
  {
    name: 'Justin',
    age: 26,
  },
  {
    name: 'Amy',
    age: 26,
  },
  {
    name: 'James',
    age: 26,
  },
];

export default {
  showCaregivers(req, res) {
    res.send(caregivers);
  },
  showCaregiver(req, res) {
    res.send('GET /caregivers/:id');
  },
  createCaregiver(req, res) {
    caregivers.forEach(async (caregiver) => {
      try {
        const result = await Caregiver.create({
          name: caregiver.name,
          age: caregiver.age,
        });
        console.log('crete success: ', result);
        res.status(201).json(result);
      } catch (err) {
        console.log(err);
      }
    });
    res.send('POST /caregivers');
  },
  updateCaregiver(req, res) {
    res.send('PUT /caregivers/:id');
  },
  deleteCaregiver(req, res) {
    res.send('DELETE /caregivers/:id');
  },
};
