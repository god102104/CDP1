import express from 'express';
import morgan from 'morgan';
import bodyParser from 'body-parser';
import helmet from 'helmet';
import cors from 'cors';
import caregiverRouter from './routers/caregiverRouter';
import offerRouter from './routers/offererRouter';
import { sequelize } from './models';

const app = express();
sequelize.sync(); // MySQL과 연동
const PORT = process.env.PORT || 3000;

app.use(helmet());
app.use(bodyParser.json());
app.use(morgan('dev'));
app.use(cors());

app.use('/caregivers', caregiverRouter);
app.use('/offerers', offerRouter);

app.listen(PORT, () => {
  console.log(`✅ Listening on: http://localhost:${PORT}`);
});
