const offerers = [
  {
    id: 1,
    parentName: 'Justin',
    parentAge: 80,
    location: 'fennell St, 706',
  },
  {
    id: 2,
    parentName: 'Justin',
    parentAge: 80,
    location: 'fennell St, 706',
  },
  {
    id: 3,
    parentName: 'Justin',
    parentAge: 80,
    location: 'fennell St, 706',
  },
  {
    id: 4,
    parentName: 'Justin',
    parentAge: 80,
    location: 'fennell St, 706',
  },
];

export default {
  showOfferers(req, res) {
    res.send(offerers);
  },
  showOfferer(req, res) {
    res.send('GET /offerers/:id');
  },
  createOfferer(req, res) {
    res.send('POST /offerers');
  },
  updateOfferer(req, res) {
    res.send('PUT /offerers/:id');
  },
  deleteOfferer(req, ers) {
    res.send('DELETE /offerers/:id');
  },
};
