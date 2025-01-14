// Function to make the button move randomly
function moveButton() {
    const button = document.getElementById('movingButton');
    const screenWidth = window.innerWidth;
    const screenHeight = window.innerHeight;
    
    // Set random position within screen boundaries
    const randomX = Math.floor(Math.random() * (screenWidth - button.offsetWidth));
    const randomY = Math.floor(Math.random() * (screenHeight - button.offsetHeight));
    
    button.style.position = 'absolute';
    button.style.left = randomX + 'px';
    button.style.top = randomY + 'px';
}

// Call moveButton function every 1 second to make the button move
setInterval(moveButton, 1000);

// Function when the button is clicked
function clickycat() {
    alert("You clicked the button!");
}


function clickycat() {
    // Replace the entire body content with a greeting message and image
    document.body.innerHTML = `
        <div style="text-align: center; padding: 20px;">
            <h1 style="font-family: Arial, sans-serif; color: #333;">Heyy..</h1>
            <p style="font-family: Arial, sans-serif; color: #555;">Enjoy this adorable cat image! <br>Tap on it to view some fun facts!</p>
            <img src="hello_cat.jpg" 
                 alt="A cute cat" 
                 id="catImage" 
                 style="width: 80%; height: auto; border-radius: 15px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);"
                 title="Click to learn more about cats" />
        </div>
    `;
    
    // Add a click event to the image
    const catImage = document.getElementById('catImage');
    catImage.addEventListener('click', displayCatFacts);
}

function displayCatFacts() {
    const xmlData = `
    <page>
        <header>
            <title>Funny Cat Facts</title>
        </header>
        <body>
            <content>
                <h1>Funny Cat Facts</h1>
                <catFacts>
                    <fact>Cats sleep 12–16 hours a day because plotting world domination is exhausting.</fact>
                    <fact>Domestic cats share 95.6% of their DNA with tigers. The other 4.4% is dedicated to being judgmental.</fact>
                    <fact>A group of cats is called a clowder—which sounds suspiciously like a secret society.</fact>
                    <fact>Hairballs? Nope. Cats are just trying to install a new vocal cord. Bezoar is just a fancy word for "Ew, not again."</fact>
                    <fact>Cats have 32 ear muscles, yet they somehow can’t hear you say "Get off the counter."</fact>
                    <fact>They can run 30 mph, but only when they’re dashing from their mistakes (or at 3 a.m. for no reason).</fact>
                    <fact>Cats use their Jacobson’s organ to "taste" the air. Translation: they’re judging your cooking from a distance.</fact>
                    <fact>Ancient Egyptians worshiped cats, but your cat’s response today would be: "As they should."</fact>
                    <fact>Black cats were once thought to bring bad luck, but these days, they bring sass and Instagram likes.</fact>
                    <fact>The world’s first cat video was filmed in 1894, proving that cats have been dominating entertainment for over a century.</fact>
                    <fact>Cats have a third eyelid because two weren’t creepy enough.</fact>
                    <fact>Their nose prints are unique, which is great for cat crime scenes.</fact>
                    <fact>With 18 toes, cats have no excuse to fail at typing texts, yet they only send messages by walking on keyboards.</fact>
                    <fact>Their tongues are like sandpaper because they’ve decided petting them should feel like exfoliation.</fact>
                    <fact>Cats can jump 6 times their body length, but only when something expensive is in their landing zone.</fact>
                    <fact>Cats "knead" with their paws because they think you’re a giant loaf of bread.</fact>
                    <fact>Purring means they’re happy, but also when they’re annoyed, hungry, sleepy, or plotting your downfall.</fact>
                    <fact>They meow exclusively at humans because they know we’re just that gullible.</fact>
                    <fact>If a cat's tail is quivering, it’s either really excited or malfunctioning.</fact>
                    <fact>Cats are naturally elegant… until they miscalculate a jump and pretend they meant to do that.</fact>
                    <fact>The richest cat, Blackie, inherited millions. Meanwhile, you're out here paying for their gourmet tuna habit.</fact>
                    <fact>Cats push things off tables because gravity is their least favorite law of physics.</fact>
                    <fact>They stare at you for hours because you’re the only TV show available, and it's a boring one.</fact>
                    <fact>Cats think your bed is theirs and that your sleeping on it is a nightly invasion of their kingdom.</fact>
                </catFacts>
            </content>
        </body>
    </page>`;

    // Parse the XML and use it on the page
    const parser = new DOMParser();
    const xmlDoc = parser.parseFromString(xmlData, "application/xml");

    const pageTitle = xmlDoc.getElementsByTagName('title')[0].childNodes[0].nodeValue;
    const facts = xmlDoc.getElementsByTagName('fact');
    
    // Create page structure
    const pageElement = document.createElement('div');
    pageElement.className = 'page';
    
    // Create image element and style it
    const img = document.createElement('img');
    img.src = 'hello_cat.jpg'; // Path to the image
    img.style.width = '100vw'; // Full viewport width
    img.style.height = '100vh'; // Full viewport height
    img.style.position = 'absolute'; // Position the image in the background
    img.style.top = '0';
    img.style.left = '0';
    pageElement.appendChild(img);
    
    // Create content overlay
    const overlay = document.createElement('div');
    overlay.className = 'overlay';
    overlay.style.position = 'absolute';
    overlay.style.top = '0';
    overlay.style.left = '0';
    overlay.style.width = '100vw';
    overlay.style.height = '100vh';
    overlay.style.backgroundColor = 'rgba(0, 0, 0, 0.5)'; // Semi-transparent black background
    overlay.style.color = 'white';
    overlay.style.textAlign = 'center';
    overlay.style.display = 'flex';
    overlay.style.flexDirection = 'column';
    overlay.style.justifyContent = 'center';

    // Create title element
    const headerElement = document.createElement('h1');
    headerElement.innerHTML = pageTitle;
    overlay.appendChild(headerElement);

    // Create facts section
    const factsContainer = document.createElement('div');
    factsContainer.className = 'catFacts';
    
    for (let i = 0; i < facts.length; i++) {
        const factDiv = document.createElement('div');
        factDiv.className = 'fact';
        factDiv.innerHTML = facts[i].childNodes[0].nodeValue;
        factsContainer.appendChild(factDiv);
    }
    
    overlay.appendChild(factsContainer);


    pageElement.appendChild(overlay);

    // Append to body
    document.body.appendChild(pageElement);
}
