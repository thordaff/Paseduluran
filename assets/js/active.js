// Get the container element
var navContainer = document.getElementById("Nav");

// Get all buttons with class="btn" inside the container
var navs = navContainer.getElementsByClassName("nav-link");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < navs.length; i++) {
  navs[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");

    // If there's no active class
    if (current.length > 0) {
      current[0].className = current[0].className.replace(" active", "");
    }

    // Add the active class to the current/clicked button
    this.className += " active";
  });
}