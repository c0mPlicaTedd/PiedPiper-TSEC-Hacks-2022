function createSuggestion(){
var choices = ["Play games", "Go through memories", "Make your todo list","Video call your loved ones","Watch feel good videos"];
const num = Math.floor(Math.random()*choices.length);
localStorage.setItem("suggestion",choices[num]);
const suggestion = localStorage.getItem("suggestion");
console.log(suggestion);
document.getElementById("suggestion").innerHTML = "Ally suggestion: "+suggestion;
};

window.onload = createSuggestion;

