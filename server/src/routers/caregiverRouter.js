import express from 'express';
import caregiverController from '../controllers/caregiverController';

const caregiverRouter = express.Router();

caregiverRouter.get('/', caregiverController.showCaregivers);
caregiverRouter.get('/:id', caregiverController.showCaregiver);
caregiverRouter.post('/', caregiverController.createCaregiver);
caregiverRouter.put('/:id', caregiverController.updateCaregiver);
caregiverRouter.delete('/:id', caregiverController.deleteCaregiver);

export default caregiverRouter;
