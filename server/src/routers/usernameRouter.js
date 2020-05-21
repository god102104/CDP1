import express from 'express';
import db from '../models';

const { Caregiver } = db;

const usernameRouter = express.Router();

usernameRouter.get('/duplicate', async (req, res) => {
  const { username } = req.query;
  try {
    const caregiver = await Caregiver.findOne({ where: { username } });
    if (caregiver === null) {
      res.status(200).json({ doesExist: false });
    } else {
      res.status(200).json({ doesExist: true });
    }
  } catch (error) {
    console.log('usernameRouter.js: ', error);
  }
});

export default usernameRouter;
