document.getElementById("update-text").addEventListener("click", update);
document.getElementById("update-svg").addEventListener("click", update);

function update()
{
    document.getElementById('starting').style.display = "none";
    document.getElementById('expanded').style.display = "block";
}

function increase(partyId)
{
    let others = getOthers();
    let othersInt = getOthersInt(others);

    if (othersInt == 0) {
        return;
    }

    let percentage = getPercentage(partyId);
    let percentageInt = getPercentageInt(percentage);

    increaseBackgroundHeight(partyId, percentageInt);

    decreasePercentage(othersInt, others);
    increasePercentage(percentageInt, percentage);
}

function getOthers()
{
    return document.getElementById('others-percentage');
}

function getOthersInt(others)
{
    return parseInt(others.innerHTML);
}

function getPercentage(partyId)
{
    return document.getElementById(partyId + '-percentage');
}

function increaseBackgroundHeight(partyId, percentageInt)
{
    document.getElementById(partyId + '-background').style.height = (percentageInt + 1) + 'px';
}

function decreasePercentage(currentPercentage, party)
{
    party.innerHTML = currentPercentage - 1;
}

function increasePercentage(currentPercentage, party)
{
    party.innerHTML = currentPercentage + 1;
}

function getPercentageInt(percentage)
{
    return parseInt(percentage.innerHTML);
}

function decrease()
{

}
