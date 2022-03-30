const button = document.getElementsByTagName("button")[0];
let x = 0;
let limit = 500;

const timer = (ms) => new Promise((res) => setTimeout(res, ms));

button.addEventListener("click", async function handler() {
  button.removeEventListener("click", handler, false);
  const ball = document.getElementById("ball");
  let dir = 1;
  if (!ball.style.left) {
    ball.style.left = "0px";
  }
  while (1) {
    if (dir) {
      x = parseInt(ball.style.left.replace("px", "")) + 1;
    } else {
      x = parseInt(ball.style.left.replace("px", "")) - 1;
    }

    ball.style.left = x + "px";
    switch (x) {
      case 0:
        dir = 1;
        break;
      case limit:
        dir = 0;
        break;
    }
    await timer(5);
  }
});
