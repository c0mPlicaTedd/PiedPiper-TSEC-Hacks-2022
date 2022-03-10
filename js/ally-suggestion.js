
var choices = ["Play games", "Go through memories", "Make your todo list","Video call your loved ones","Watch feel good videos"];
const num = Math.floor(Math.random()*choices.length);
const suggestion = choices[num];
localStorage.setItem("suggestion",suggestion);
document.getElementById("suggestion").innerHTML = "Ally suggestion: "+suggestion;

