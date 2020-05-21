import Api from './Api';

export default {
  get() {
    return Api().get('/caregivers');
  },
  getOne(id) {
    return Api().get(`/caregivers/${id}`);
  },
  register(data) {
    return Api().post('/caregivers', data);
  },
  update(id) {
    return Api().put(`/caregivers/${id}`);
  },
  delete(id) {
    return Api().delete(`/caregivers/${id}`);
  },
};
