    let count = 0;
    const button = document.querySelector('button');
    const hero = document.querySelector('h1');
    function counter(){
        count++;
        hero.innerHTML = count;
    }

    setInterval(counter, 1000);