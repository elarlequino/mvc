function tab() {
  let html = "<table><tr>";
  let i = 0,
    y = 0,
    N = 0;
  id = 0;
  while (y < 10) {
    while (i < 10) {
      id++;
      html += '<th id="' + id + '">' + id + "</th>";
      i++;
    }
    i = 0;
    html += "</tr><tr>";
    y++;
  }
  html += "</tr></table>";
  return html;
}
function prem(t) {
  for (let i = 1; i < 100; i++) {
    t[i] = true;
  }
  t[1] = false;
  t[0] = false;
  for (i = 1; i < 100 / 2; i++) {
    if (t[i] == true) {
      j = i + i;
      while (j <= 100) {
        t[j] = false;
        j = j + i;
      }
    }
  }
}
let p = [];
prem(p);
console.log(p);
function verif(ref) {
  for (let i = 1; i <= 100; i++) {
    temp = document.getElementById(i);
    console.log(temp, i);
    if (ref[i] == false) {
      console.log(document.getElementById(i));
      document.getElementById(i).textContent = "    "; // on la pas vue mais c'était trop pratique pour moi
    }
  }
}
verif(p);
console.log(p);
