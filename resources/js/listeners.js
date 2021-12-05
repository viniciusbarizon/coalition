document.getElementById("update-text").addEventListener("click", update);
document.getElementById("update-svg").addEventListener("click", update);

document.getElementById("close-text").addEventListener("click", close);
document.getElementById("close-svg").addEventListener("click", close);

var expandedStyles = document.getElementById('expanded').style;
var startingStyles = document.getElementById('starting').style;

function update()
{
    startingStyles.display = "none";
    expandedStyles.display = "block";
}

function close()
{
    expandedStyles.display = "none";
    startingStyles.display = "block";
}

