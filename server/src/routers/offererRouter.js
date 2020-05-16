import express from 'express';
import offererController from '../controllers/offererController';
const offererRouter = express.Router();

offererRouter.get('/', offererController.showOfferers);
offererRouter.get('/:id', offererController.showOfferer);
offererRouter.post('/', offererController.createOfferer);
offererRouter.put('/:id', offererController.updateOfferer);
offererRouter.delete('/:id', offererController.deleteOfferer);

export default offererRouter;
