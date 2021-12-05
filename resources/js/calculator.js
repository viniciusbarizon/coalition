document.getElementById("update-text").addEventListener("click", update);
document.getElementById("update-svg").addEventListener("click", update);

function update()
{
    document.getElementById('starting').style.display = "none";
    document.getElementById('expanded').style.display = "block";
}

function increase(partyId)
{
    if (getPercentage('others') == 0) {
        return;
    }

    let percentage = getPercentage(partyId);

    decreasePercentage('others', percentage);
    increasePercentage(partyId, percentage);

    increaseHeight(partyId, percentage);
    decreaseHeightOthers();
}

function getPercentage(partyId)
{
    return parseInt(document.getElementById(partyId + '-percentage').innerHTML);
}

function decreasePercentage(partyId, percentage)
{
    document.getElementById(partyId + '-percentage').innerHTML = percentage - 1;
}

function increasePercentage(partyId)
{
    document.getElementById(partyId + '-percentage').innerHTML = percentage + 1;
}

function increaseHeight(partyId)
{
    document.getElementById(partyId + '-background').style.height = (getPercentage(partyId) + 1) + 'px';
}

function decreaseHeightOthers()
{
    document.getElementById('others-background').style.height = (getPercentage('others') - 1) + 'px';
}

/*function decrease(partyId)
{
    let percentageObject = getPercentageObject(partyId);
    let percentage = getPercentage(percentageObject);

    if (percentage == 0) {
        return;
    }

    decreasePercentage(percentage, percentageObject);
}*/
