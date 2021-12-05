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

        if (newPercentage == 1) {
            updateOperationStyles('pointer', 1, 'decrease', partyId, 'auto');

            if (partyId == 'others') {
                allIncreases('pointer', 1, 'auto');
            }
        }
    }
    else {
        newPercentage = percentage - 1;

        if (newPercentage == 0) {
            updateOperationStyles(null, 0.25, 'decrease', partyId, 'none');

            if (partyId == 'others') {
                allIncreases(null, 0.25, 'none');
            }
        }
    }

    getPercentageObject(partyId).innerHTML = newPercentage;

    document.getElementById(partyId + '-background').style.height = newPercentage;
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
