async function typeEffect() {
  let div = document.querySelector(".w-screen");
  div.style.width = window.innerWidth + "px";

  const name = "welcome adventurer";
  const words = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w"];
  let newName = "";
  let ind = 0;

  while (true) {
    if (name.toLowerCase() === newName) {
      document.getElementById("output").textContent = name;
      break;
    } else if (name[ind] === " ") {
      newName += " ";
      ind += 1;
    } else {
      for (let i of words) {
        if (name.toLowerCase() === newName) {
          break;
        } else {
          document.getElementById("output").textContent = newName + i;
          await new Promise((resolve) => setTimeout(resolve, 17));
        }

        if (i === name[ind].toLowerCase()) {
          newName += i;
          ind += 1;
        }
      }
    }
  }
}

function opacity() {
  const main = document.querySelector(".main");
  const welcome = document.querySelector(".welcomingText");

  setTimeout(() => {
    main.classList.add("show");
  }, 5100);

  setTimeout(() => {
    welcome.classList.add("hide");
  }, 5000);
}

setTimeout(() => {
  typeEffect();
  opacity();
}, 1000);
