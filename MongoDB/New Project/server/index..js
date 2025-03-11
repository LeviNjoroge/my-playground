const express = require('express');
const mongoose = require('mongoose');

const app = express();

mongoose.connect('mongodb://localhost:27017/school');

const studentSchema = new mongoose.Schema({
    name: String,
    age: Number,
    gpa: Double
});

const UserModel = mongoose.model('student', studentSchema);

app.get("/getUsers", (req, res) => {
    res.json(UserModel.find());
})

app.listen(3001, function () {
    console.log('Server is running on port 3001');
})