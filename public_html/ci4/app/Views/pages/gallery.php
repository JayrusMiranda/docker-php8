<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Processing forms with events</title>
    </head>
    <body>
    <div>
        <label>What's your name?
        <input id="name" type="text">
        </label>
        <br>
        <label>What language do you speak?
        <select id="lang">
            <option value="en">English</option>
            <option value="es">Spanish</option>
            <option value="plt">Pig-latin</option>
        </select>
        </label>
        <br>
        <button id="button" type="button">Greet me, please!</button>
        <div id="message"></div>
    </div>
    
  <script>
  // Step 1: Find the element we want the event on
  var button = document.getElementById("button");
  // Step 2: Define the event listener function
     
  var onButtonClick = function() {
    var name = document.getElementById("name").value;
    var lang = document.getElementById("lang").value;
    var greeting;
    if (lang === "es") {
        greeting = "Hola, " + name;
    } else if (lang === "plt") {
        greeting = "Ello-hay, " + name;
    } else {
        greeting = "Heyaz, " + name;
    }
    document.getElementById("message").textContent += greeting;  
  };
  // Step 3: Attach event listener to element
  button.addEventListener("click", onButtonClick);
  </script>

    </body>
</html>