<div class="static bottom-0 left-0 right-0 font-pixel text-center text-white py-2">
    <p id="output"></p>
</div>
<script>
async function typeEffect() {
  const name = "#BUTUHHEALING";
  const words = ["#","A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W"];
  let newName = "";
  let ind = 0;

  while (true) {
    if (name.toUpperCase() === newName) {
      document.getElementById("output").textContent = name;
      break;
    } else if (name[ind] === " ") {
      newName += " ";
      ind += 1;
    } else {
      for (let i of words) {
        if (name.toUpperCase() === newName) {
          break;
        } else {
          document.getElementById("output").textContent = newName + i;
          await new Promise((resolve) => setTimeout(resolve, 5));
        }

        if (i === name[ind].toUpperCase()) {
          newName += i;
          ind += 1;
        }
      }
    }
  }
}



setTimeout(function() {
    typeEffect(); // Jalankan fungsi pertama kali saat halaman dimuat
  setInterval(typeEffect, 1 * 60 * 1000); // Jalankan fungsi setiap 3 menit sekali
}, 0);
</script>
