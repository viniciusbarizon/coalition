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
        if (percentage == 100) {
            return;
        }

        newPercentage = percentage + 1;

        if (newPercentage == 1) {
            updateOperationStyles('pointer', 1, 'decrease', partyId);
        }
    }
    else {
        newPercentage = percentage - 1;

        if (newPercentage == 0) {
            updateOperationStyles('not-allowed', 0.25, 'decrease', partyId);

            if (partyId == 'others') {
                disableAllIncreases();
            }
        }
    }

    getPercentageObject(partyId).innerHTML = newPercentage;

    document.getElementById(partyId + '-background').style.height = newPercentage;
}

function updateOperationStyles(cursor, opacity, operation, partyId)
{
    if (partyId == 'others') {
        return;
    }

    let styles = document.getElementById(partyId + '-' + operation).style;

    styles.cursor = cursor;
    styles.opacity = opacity;
}

function disableAllIncreases()
{
    let parties = ['be', 'c', 'cds', 'il', 'ps', 'psd',  'pcp'];

    parties.forEach(partyId => updateOperationStyles('not-allowed', 0.25, 'increase', partyId));
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