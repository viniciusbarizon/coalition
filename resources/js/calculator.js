document.getElementById("update-text").addEventListener("click", update);
document.getElementById("update-svg").addEventListener("click", update);

function update()
{
    document.getElementById('starting').style.display = "none";
    document.getElementById('expanded').style.display = "block";
}

function increase(partyId)
{
    let percentage = document.getElementById(partyId + '-percentage');
    let percentageInt = parseInt(percentage.innerHTML);

    if (percentageInt == 100) {
        return;
    }

    percentage.innerHTML = percentageInt + 1;
}

function decrease()
{

}
