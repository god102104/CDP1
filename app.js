import express from "express";
import helmet from "helmet";
import morgan from "morgan";

const app = express();
const PORT = 4000;

app.use(helmet());
app.use(morgan("dev"));

const handleListening = () =>
  console.log(`✅ Listening on: http://localhost:${PORT}`);

app.listen(PORT, handleListening);
