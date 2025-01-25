// 1. If statements
{
    console.log("Result of if statement:");
    let num1 = 10;
    let num2 = 12;

    if(num1>num2){
        console.log("num1 is greater");
    }
    else if(num1<num2){
        console.log("num2 is greater");
    }
    else{
        console.log("Both are equal");
    }
}

// 2. Switch case
{
    console.log("The day is:");
    let day = Math.ceil((Math.random())*7);
    console.log(day);
    switch(day){
        case 1:
            console.log("Monday");
            break;
        
        case 2:
            console.log("Tuesday");
            break;
        case 3:
            console.log("Wednesday");
            break;
        case 4:
            console.log("Thursday");
            break;
        case 5: 
            console.log("Friday");
            break;
        case 6:
            console.log("Saturday");
            break;
        case 7:
            console.log("Sunday");
            break;
        default:
            console.log("Invalid Day");
            break;
    }
}

// 3. For loop
{
    for(let i = 0; i<=10;i++){
        console.log(i);
    }
}

// 4. While loop
{   
    let i = 1;
    while(i<=10){
        console.log("I love JavaScript");
        i++;
    }
}

// 5. Do while loop
{
    let y = 0;
    do{
        console.log("We play cricket");
        y++;
    }
    while(y < 5);
}

// Functions
{
    console.log("Addition of two numbers using function:");
    function add(num1, num2) {
        return num1+num2;
    }
    console.log(add(10,20));
}

// Classes and Objects
{
    class Vehicle {
        constructor(name, year, model) {
            this.name = name;
            this.year = year;
            this.model = model;
        }
        hoot(times){
            for(let i = 0; i<times; i++){
                console.log( `Hoot! Hoot! I am a ${this.name} ${this.model}`);
            }
        }
    }
    let tesla = new Vehicle("Tesla", 2024, "Model Y");
    let lambo = new Vehicle("Lamborghini", 2023, "Huracan");
    tesla.hoot(7);
    lambo.hoot(5);
}

// Arrow functions
{
    console.log("Arrow function:");
    const substract = (num1, num2) => {
        return num1 - num2;
    }
    console.log(substract(10, 5));
}

{
    let multipy = (num1, num2) => num1 * num2;
    console.log(multipy(8, 5));
}

{
    const lovePizza = (times) => {
        for(let i = 0; i<times; i++){
            console.log("I love Pizza");
        }
    }
    lovePizza(5);
}

{
    const hello = (name, age) => {
        console.log(`Hello ${name}, you are ${age} years old`);
    }
    hello("John", 25);
}

{
    function outerFuction(){

        let name = "Brian";
        
        function innerFunction(){
            var age = 18;
            console.log(`Hello ${name}, you are ${age} years old`);
        }

        innerFunction();
        // console.log(age);
    }
    outerFuction();
    
}

{
    function Human(name){
        const sayHi = () => {
            console.log(`Hello ${name}`);
        }
        const sayHowYouFeel = () => {
            console.log(`${name} is feeling good!`);
        }
        return {
            sayHi,
            sayHowYouFeel
        }
    }
    const qoli = Human("Qoli");
    qoli.sayHi();
    qoli.sayHowYouFeel();
}

// {
//     function q(limit){
//         for(let i = 0; i<=limit; i++){
//             setInterval(() => console.log(i), i*1000);
//         }
//     }
// }

setTimeout(() => {for(let i = 0; i<=5;i++){console.log(i)}},6000);