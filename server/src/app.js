import express from "express";
import morgan from "morgan";
import bodyParser from "body-parser";
import helmet from "helmet";

const app = express();
const PORT = process.env.PORT || 3000;

app.use(helmet());
app.use(bodyParser.json());
app.use(morgan("dev"));

app.listen(PORT, () => {
  console.log(`✅ Listening on: http://localhost:${PORT}`);
});
