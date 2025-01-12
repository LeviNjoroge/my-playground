function submitForm() {
    let name = document.getElementById("name");
    let age = document.getElementById("age");
    let par = document.getElementById("par");

    if (age >= 18) {
        console.log("You are eligible to vote!");
        par.textContent = "Hello "+name+"! You are eligible to vote!";
    }
    else{
        console.log("Unfortunately, you are not eligible to vote!");
        par.textContent = "Hello "+name+"! Unfortunately, you are not eligible to vote!";
    }
}