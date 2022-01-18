// Give me a break... I didn't know that I could do all this stuff in PHP, okay? It would have been way easier. I should have learned a bit more I guess. ._.

// Gets content from api and puts it in content boxes. Only does it three times, though. Not sure if there is an easier way to sort them.

async function fetchURL(url) {
  const res = await fetch(url);
  const data = await res.json();

  const array = data.data;

  let i = 0;
  try {
    array.forEach((arrayItem) => {
      if (i > 2) {
        return;
      }
      // Element to append children to
      const contentList = document.querySelector("#contentList");

      //  Creates new element to add as a child for the above element
      const newListItem = document.createElement("li");
      const newDiv = document.createElement("div");
      const divImage = document.createElement("div");
      const h2 = document.createElement("h2");
      const p = document.createElement("p");
      const learnMoreDiv = document.createElement("div");
      const learnMore = document.createElement("a");

      // Creates Images for Each Array Item
      const image = document.createElement("img");

      if (i === 0) {
        image.src = "images/Talkie.png";
        image.alt = "talkieimage";
        divImage.className += "talkie ";
      } else if (i === 1) {
        image.src = "images/Rabbit.png";
        image.alt = "rabbitimage";
        divImage.className += "rabbit ";
      } else if (i === 2) {
        image.src = "images/Shield.png";
        image.alt = "shieldimage";
        divImage.className += "shield ";
      }

      // Other Assignments
      divImage.className += "imagecontainer";
      h2.innerText = arrayItem.title;
      p.innerText = arrayItem.content;
      learnMore.innerText = "Learn More";
      learnMore.href = "/learnmore/" + arrayItem.id;
      learnMoreDiv.className = "learnmore-div";

      // Content Too Long?
      if (p.innerText.length > 110) {
        p.innerText = p.innerText.substring(0, 110);
        p.innerText = p.innerText.trim();
        p.innerText += "...";
      }

      // Appending Children
      divImage.appendChild(image);
      learnMoreDiv.appendChild(learnMore);

      newDiv.appendChild(divImage);
      newDiv.appendChild(h2);
      newDiv.appendChild(p);
      newDiv.appendChild(learnMoreDiv);

      newListItem.appendChild(newDiv);

      contentList.appendChild(newListItem);

      i++;
    });
    document.querySelector("#loading").style.display = "none";
  } catch (err) {
    console.log(err);
  }
}

fetchURL("https://api.mwi.dev/content/home");

// Javascript Puzzle

function puzzle() {
  const puzzleList = document.querySelector("#puzzle");

  if (puzzleList.classList.contains("active")) {
    alert("The link has already been activated!");
    return;
  }
  puzzleList.classList += "active";

  const objectOne = [
    "Matt Johnson",
    "Bart Paden",
    "Ryan Doss",
    "Jared Malcolm",
  ];
  const objectTwo = [
    "Matt Johnson",
    "Bart Paden",
    "Jordan Heigle",
    "Tyler Viles",
  ];

  let objectNew = [...objectOne, ...objectTwo];

  objectNew = [...new Set(objectNew)];

  objectNew.forEach((item) => {
    const listItem = document.createElement("li");

    listItem.innerText = item;

    puzzleList.appendChild(listItem);
  });
}
