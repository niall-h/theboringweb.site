// app.js file
const PORT = 5000;
const express = require("express");
const app = express();
const mongo = require("mongodb").MongoClient;

const url = "mongodb://127.0.0.1:27017";

let db, static, performance, activity;

mongo.connect(
  url,
  {
    useNewUrlParser: true,
    useUnifiedTopology: true,
  },
  (err, client) => {
    if (err) {
      console.error(err);
      return;
    }
    db = client.db("analytics");
    static = db.collection("static");
    performance = db.collection("performance");
    activity = db.collection("activity");
  }
);

app.use(express.json());
app.use(express.urlencoded({ extended: true }));

app.get("/static", (req, res) => {
  res.json(req.query);
});

app.get("/static/:id", (req, res) => {
  res.send(`you is getting /api/static/${req.params["id"]}`);
});

app.post("/static", (req, res) => {
  var data = req.body;
  console.log("Posting static data: ", data.json());
  res.send(data);
});

app.delete("/static/:id", (req, res) => {
  console.log(`deleting ${id}`);
  res.send("delete success");
});

app.put("/static/:id", (req, res) => {
  console.log(`put ${id}`);
  res.send("puttttttt success");
});

// app.post("/performance", (req, res) => {
//   var data = req.body;
//   console.log("Performance Data: ", data);
//   res.send();
// });

app.listen(PORT, () => {
  console.log(`JSON Server is running at ${PORT}`);
});

//////////////////// Anh's code moved here ////////////////////
// const cors       = require('cors');

// Set default middlewares (logger, static, cors and no-cache)
// app.use(bodyParser.urlencoded({extended:true}));
// const corsOptions = {
//     "origin": "*",
//     optionsSuccessStatus: 200
// }
// app.use(cors(corsOptions));

// Add custom routes
// server.get('/api/static/:id', (req, res) => {
//     res.json(req.query)
// })

// server.post('/api/static/', (req, res) => {
//     // res.send("Hit POST endpoint");
//     res.send({ user: 'anh' });
//     // res.json(req.query);
// })

// app.get('/api', (req, res) => {
//     res.send("Hit GET endpoint 2");
//     // res.json(req.query);
// })
