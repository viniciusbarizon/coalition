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

    let percentageObject = getPercentageObject(partyId);
    let percentage = getPercentage(percentageObject);

    increaseHeight(partyId, percentage);
    decreaseHeightOthers(othersInt);

    decreasePercentage(othersInt, othersPercentage);
    increasePercentage(percentage, percentageObject);
}

function getOthersInt()
{
    return parseInt(othersPercentage.innerHTML);
}

function getPercentageObject(partyId)
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

function getPercentage(percentage)
{
    return parseInt(percentage.innerHTML);
}

function decrease(partyId)
{
    let percentageObject = getPercentageObject(partyId);
    let percentage = getPercentage(percentageObject);

    if (percentage == 0) {
        return;
    }

    decreasePercentage(percentage, percentageObject);
}
