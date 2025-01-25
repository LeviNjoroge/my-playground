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