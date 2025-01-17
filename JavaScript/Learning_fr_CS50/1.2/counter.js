    let count = 0;
    const button = document.querySelector('button');
    const hero = document.querySelector('h1');
    function counter(){
        count++;
        hero.innerHTML = count;
        if(count % 10 == 0){
            alert(`The count is now ${count}`);
        }
    }
    button.onclick = counter;