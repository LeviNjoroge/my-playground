document.addEventListener('DOMContentLoaded', function(){

    
    document.querySelector("#submit").onclick = function(){
        const name = document.querySelector("#name").value;
        alert("Hello "+name);
    }
})