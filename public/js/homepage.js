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
