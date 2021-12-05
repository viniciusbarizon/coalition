function increase(partyId)
{
    let newPercentage = getNewPercentage(partyId);

    if (newPercentage == 100) {
        if (!confirm('Após esta mudança, vamos calcular se o cenário consegue formar uma maioria. Deseja continuar?')) {
            return;
        }
    }

    increasePercentage(partyId, newPercentage);
    decreasePercentage('others', getPercentage('others'));
}

function getPercentage(partyId)
{
    return parseInt(getPercentageObject(partyId).innerHTML);
}

function getNewPercentage(partyId)
{
    return getPercentage(partyId) + 1;
}

function increasePercentage(partyId, newPercentage)
{
    enableIncrease(partyId, newPercentage);

    getPercentageObject(partyId).innerHTML = newPercentage;

    document.getElementById(partyId + '-background').style.height = newPercentage;
}

function decreasePercentage(partyId, percentage)
{
    let newPercentage = percentage - 1;

    newPercentageIsZero(partyId, newPercentage);

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
    decreasePercentage(partyId, getPercentage(partyId));

    increasePercentage('others', getNewPercentage('others'));
}
