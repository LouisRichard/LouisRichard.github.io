// This is taken straight from JonasHau on github
// https://github.com/JonasHau/JonasHau.github.io
// https://jonashau.github.io/
function tab(tab) {
  document.getElementById("peHome").style.display = "none";
  document.getElementById("apprenticeships").style.display = "none";
  document.getElementById("internships").style.display = "none";
  document.getElementById("jobs").style.display = "none";
  document.getElementById("languages").style.display = "none";
  document.getElementById(tab).style.display = "inline-block";
}
tab("peHome");