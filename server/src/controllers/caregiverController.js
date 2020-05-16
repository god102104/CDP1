const caregivers = [
  {
    name: 'John',
    age: 26,
  },
  {
    name: 'John',
    age: 26,
  },
  {
    name: 'John',
    age: 26,
  },
  {
    name: 'John',
    age: 26,
  },
  {
    name: 'John',
    age: 26,
  },
  {
    name: 'John',
    age: 26,
  },
  {
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
