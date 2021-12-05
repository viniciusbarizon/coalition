function increase(partyId)
{
    updatePercentage('decrease', 'others', getPercentage('others'));
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
        if (percentage == 100) {
            return;
        }

        newPercentage = percentage + 1;

        enableIncrease(partyId, newPercentage);
    }
    else {
        newPercentage = percentage - 1;

        newPercentageIsZero(partyId, newPercentage);
    }

    getPercentageObject(partyId).innerHTML = newPercentage;

    document.getElementById(partyId + '-background').style.height = newPercentage;
}

function enableIncrease(partyId, percentage)
{
    if (percentage != 1) {
        return;
    }

    updateOperationStyles('pointer', 1, 'decrease', partyId, 'auto');

    if (partyId == 'others') {
        allIncreases('pointer', 1, 'auto');
    }
}

function newPercentageIsZero(partyId, percentage)
{
    if (percentage != 0) {
        return;
    }

    updateOperationStyles(null, 0.25, 'decrease', partyId, 'none');

    if (partyId == 'others') {
        allIncreases(null, 0.25, 'none');
    }
}

function updateOperationStyles(cursor, opacity, operation, partyId, pointerEvents)
{
    if (partyId == 'others') {
        return;
    }

    let styles = document.getElementById(partyId + '-' + operation).style;

    styles.cursor = cursor;
    styles.opacity = opacity;
    styles.pointerEvents = pointerEvents;
}

function allIncreases(cursor, opacity, pointerEvents)
{
    let parties = ['be', 'c', 'cds', 'il', 'ps', 'psd',  'pcp'];

    parties.forEach(partyId => updateOperationStyles(cursor, opacity, 'increase', partyId, pointerEvents));
}

function getPercentageObject(partyId)
{
    return document.getElementById(partyId + '-percentage');
}

function decrease(partyId)
{
    updatePercentage('decrease', partyId, getPercentage(partyId));
    updatePercentage('increase', 'others', getPercentage('others'));
}
