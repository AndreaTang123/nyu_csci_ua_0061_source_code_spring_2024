// Programming Challenge:
// Ask the user for their name
let username = prompt("What is your name?");
// Then have the website welcome the user using an <h1> tag
document.write("<h1>Welcome! "+username+"</h1>");
// Next, ask the user for a hex color code
let hexcode = prompt("What hex color code you want?");
// Use this code to create a div (give it a class of colorBox) on the screen with the correct color
document.write("<div class="colorBox" style = "background-color:#${hexcode};"></div>);
