function createSuggestion(){
var choices = ["Play games", "Go through memories", "Make your todo list","Video call your loved ones","Watch feel good videos"];
const num = Math.floor(Math.random()*choices.length);
localStorage.setItem("suggestion",choices[num]);
var suggestion = localStorage.getItem("suggestion")
document.getElementById("suggestion").innerHTML = suggestion;
document.getElementById("suggestion").style.color = "rgb(159,144,212)";
};

window.onload = createSuggestion;