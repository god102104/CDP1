import express from "express";
import helmet from "helmet";
import morgan from "morgan";

const app = express();
app.use(helmet());
app.use(morgan("dev"));

const PORT = 4000;

const handleListening = () =>
  console.log(`✅ Listening on: http://localhost:${PORT}`);

app.listen(PORT, handleListening);
