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

    updatePercentage('decrease', 'others', percentageOthers);
    updatePercentage('increase', partyId, getPercentage(partyId));
}

function getPercentage(partyId)
{
    return parseInt(getPercentageObject(partyId).innerHTML);
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

    getPercentageObject(partyId).innerHTML = newPercentage;
    document.getElementById(partyId + '-background').style.height = newPercentage;
}

function getPercentageObject(partyId)
{
    return document.getElementById(partyId + '-percentage');
}

function decrease(partyId)
{
    let percentage = getPercentage(partyId);

    if (percentage == 0) {
        return;
    }

    updatePercentage('decrease', partyId, percentage);
    updatePercentage('increase', 'others', getPercentage('others'));
}
