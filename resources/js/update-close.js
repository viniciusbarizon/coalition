function update()
{
    document.getElementById('starting').style.display = "none";
    document.getElementById('none-possible').style.display = "none";

    document.getElementById('expanded').style.display = "block";
}

function closeExpanded()
{
    document.getElementById('expanded').style.display = "none";
    document.getElementById('starting').style.display = "block";
}
