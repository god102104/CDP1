import express from "express";
import helmet from "helmet";
import morgan from "morgan";
import indexRouter from "./routes/index";
import history from "connect-history-api-fallback";

const app = express();
const PORT = 3000;

app.use(helmet());
app.use(morgan("dev"));
app.use(express.static("public"));
app.use(history());

app.use("/", indexRouter);

const handleListening = () =>
  console.log(`✅ Listening on: http://localhost:${PORT}`);

app.listen(PORT, handleListening);
