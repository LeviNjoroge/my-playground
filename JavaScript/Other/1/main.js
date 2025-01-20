name = "Levi"
age = 20
isStudent = true
height = 1.65

typeOfNam = typeof(name)
typeOfAge = typeof(age)
typeOfIsStudent = typeof(isStudent)
typeOfHeight = typeof(height)

document.querySelector("div").innerHTML = 
    `The type of name attribute is ${typeOfNam} <br>
     The type of age atr is ${typeOfAge} <br>
     The type of isStudent attribute is ${typeOfIsStudent} <br>
     The type of height attr is ${typeOfHeight} <br><br>

     the value of "true+true+true*4" = ${true+true+true*4}
    `

const par = document.createElement("p");
par.innerHTML= `
<p>
IN August 2003, 
Mars came within <b title="56 million km">35 million miles</b> of our home planet, 
its closest approach in nearly 60,000 years. On the astronomical scale, 
that put the red planet practically in our backyard, much to the delight of sky watchers. </p>
<p>
By early 2004, a number of spacecraft had converged on Mars. 
Some studied the planet from its surface, and others from orbit. 
What have these missions taught us about our planetary neighbor?
</p>
        `
par.style.fontFamily = "Monocrome"
document.body.appendChild(par)