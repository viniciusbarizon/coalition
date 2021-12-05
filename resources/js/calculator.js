document.getElementById("update-text").addEventListener("click", update);
document.getElementById("update-svg").addEventListener("click", update);

function update()
{
    document.getElementById('starting').style.display = "none";
    document.getElementById('expanded').style.display = "block";
}

var othersPercentage = document.getElementById('others-percentage');

function increase(partyId)
{
    let othersInt = getOthersInt();

    if (othersInt == 0) {
        return;
    }

    let percentage = getPercentage(partyId);
    let percentageInt = getPercentageInt(percentage);

    increaseHeight(partyId, percentageInt);
    decreaseHeightOthers(othersInt);

    decreasePercentage(othersInt, othersPercentage);
    increasePercentage(percentageInt, percentage);
}

function getOthersInt()
{
    return parseInt(othersPercentage.innerHTML);
}

function getPercentage(partyId)
{
    return document.getElementById(partyId + '-percentage');
}

function increaseHeight(partyId, percentageInt)
{
    document.getElementById(partyId + '-background').style.height = (percentageInt + 1) + 'px';
}

function decreaseHeightOthers(percentageInt)
{
    document.getElementById('others-background').style.height = (percentageInt - 1) + 'px';
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
