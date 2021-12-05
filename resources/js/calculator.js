document.getElementById("update-text").addEventListener("click", update);
document.getElementById("update-svg").addEventListener("click", update);

function update()
{
    document.getElementById('starting').style.display = "none";
    document.getElementById('expanded').style.display = "block";
}

function increase(partyId)
{
    let others = document.getElementById('others-percentage');
    let othersInt = parseInt(others.innerHTML);

    if (othersInt == 0) {
        return;
    }

    let percentage = document.getElementById(partyId + '-percentage');
    let percentageInt = parseInt(percentage.innerHTML);

    others.innerHTML = othersInt - 1;
    percentage.innerHTML = percentageInt + 1;
}

function decrease()
{

}
