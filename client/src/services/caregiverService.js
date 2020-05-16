import Api from './Api';

export default {
  get() {
    return Api().get('/caregivers');
  },
  getOne(id) {
    return Api().get(`/caregivers/${id}`);
  },
  register() {
    return Api().post('/caregivers');
  },
  update(id) {
    return Api().put(`/caregivers/${id}`);
  },
  delete(id) {
    return Api().delete(`/caregivers/${id}`);
  },
};
