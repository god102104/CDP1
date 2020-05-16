export default {
  showOfferers(req, res) {
    res.send('GET /offerers');
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
