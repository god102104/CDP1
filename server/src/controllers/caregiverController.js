const caregivers = [
  {
    id: 1,
    name: 'John',
    age: 26,
  },
  {
    id: 2,
    name: 'John',
    age: 26,
  },
  {
    id: 3,
    name: 'John',
    age: 26,
  },
  {
    id: 4,
    name: 'John',
    age: 26,
  },
  {
    id: 5,
    name: 'John',
    age: 26,
  },
  {
    id: 6,
    name: 'John',
    age: 26,
  },
  {
    id: 7,
    name: 'John',
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
    res.send('POST /caregivers');
  },
  updateCaregiver(req, res) {
    res.send('PUT /caregivers/:id');
  },
  deleteCaregiver(req, res) {
    res.send('DELETE /caregivers/:id');
  },
};
