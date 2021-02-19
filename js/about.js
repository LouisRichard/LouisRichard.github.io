// This is taken straight from JonasHau on github
// https://github.com/JonasHau/JonasHau.github.io
// https://jonashau.github.io/
function tab(tab) {
  document.getElementById("aboutHome").style.display = "none";
  document.getElementById("programming").style.display = "none";
  document.getElementById("networking").style.display = "none";
  document.getElementById("systems").style.display = "none";
  document.getElementById(tab).style.display = "inline-block";
}
tab("aboutHome");