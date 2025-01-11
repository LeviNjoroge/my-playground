function submitForm() {
    let name = document.getElementById("name");
    let age = document.getElementById("age");
    let para = document.getElementById("para");

    if (age >= 18) {
        console.log("You are eligible to vote!");
        para.textContent = "Hello "+name+"! You are eligible to vote!";
    }
    else{
        console.log("Unfortunately, you are too young to vote.");
        para.textContent = "Hello "+name+"! Unfortunately, you are too young to vote.";
    }
}