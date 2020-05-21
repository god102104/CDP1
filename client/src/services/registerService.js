import Api from './Api';

export default {
  checkUsernameDuplication(config) {
    return Api().get('/username/duplicate', config);
  },
};
