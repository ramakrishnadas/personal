import express from "express";
import bodyParser from "body-parser";

const app = express();
const port = 3000;

app.use(bodyParser.urlencoded({ extended: true }));

app.get("/", (req, res) => {
  res.render("index.ejs");
});

app.post("/submit", (req, res) => {
  const name = req.body.fName + req.body.lName;
  const letters = name.length;

  res.render("index.ejs", {
    letters: letters,
  })
});

app.listen(port, () => {
  console.log(`Server running on port ${port}`);
});
