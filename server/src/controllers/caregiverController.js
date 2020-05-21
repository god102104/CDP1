import db from '../models';

const { Caregiver } = db;
const caregivers = [
  {
    username: 'hello@naver.com',
    name: 'John',
    age: 26,
  },
  {
    username: 'wow@gmail.com',
    name: 'Brian',
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
