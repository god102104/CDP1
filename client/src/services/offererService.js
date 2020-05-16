import Api from './Api';

export default {
  get() {
    return Api().get('/offerers');
  },
  getOne(id) {
    return Api().get(`/offerers/${id}`);
  },
  register() {
    return Api().post('/offerers');
  },
  update(id) {
    return Api().put(`/offerers/${id}`);
  },
  delete(id) {
    return Api().delete(`/offerers/${id}`);
  },
};
