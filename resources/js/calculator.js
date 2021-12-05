document.getElementById("update-text").addEventListener("click", update);
document.getElementById("update-svg").addEventListener("click", update);

function update()
{
    document.getElementById('starting').style.display = "none";
    document.getElementById('expanded').style.display = "block";
}

function increase(partyId)
{
    let percentageOthers = getPercentage('others');

    if (percentageOthers == 0) {
        return;
    }

    let percentage = getPercentage(partyId);

    updatePercentage('decrease', 'others', percentageOthers);
    updatePercentage('increase', partyId, percentage);
}

function getPercentage(partyId)
{
    return parseInt(document.getElementById(partyId + '-percentage').innerHTML);
}

function updatePercentage(operation, partyId, percentage)
{
    let newPercentage;

    if (operation == 'increase') {
        newPercentage = percentage + 1;
    }
    else {
        newPercentage = percentage - 1;
    }

    document.getElementById(partyId + '-percentage').innerHTML = newPercentage;
    document.getElementById(partyId + '-background').style.height = newPercentage;
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
