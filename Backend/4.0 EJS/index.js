import express from "express";

const app = express();
const port = 3000;

app.get("/", (req, res) => {

    const currentDate = new Date();
    const day = currentDate.getDay();

    res.render("index.ejs", {
        day,
    });
});

// Listener
app.listen(port, () => {
    console.log(`Listening on port ${port}`);
});
  