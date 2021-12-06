function update()
{
    console.log('update');
    document.getElementById('starting').style.display = "none";
    document.getElementById('none-possible').style.display = "none";

    document.getElementById('expanded').style.display = "block";
}

function closeExpanded()
{
    console.log('close');
    document.getElementById('expanded').style.display = "none";
    document.getElementById('starting').style.display = "block";
}
