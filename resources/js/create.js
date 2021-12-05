function increase(partyId)
{
    let newPercentageOthers = getNewPercentageMinus('others');

    if (newPercentageOthers == 0) {
        if (!confirm('Após esta mudança, vamos calcular se o cenário consegue formar uma maioria. Deseja continuar?')) {
            return;
        }

        // I do not see on Figma any instructions about the response for the successfull coalition.
        document.getElementById('expanded').style.display = 'none';
        document.getElementById('none-possible').style.display = 'block';
    }

    decreasePercentage('others', newPercentageOthers);
    increasePercentage(partyId);
}

function getNewPercentageMinus(partyId)
{
    return getPercentageInt(partyId) - 1;
}

function getPercentageInt(partyId)
{
    return parseInt(getPercentageObject(partyId).innerHTML);
}

function increasePercentage(partyId)
{
    let newPercentage = getPercentageInt(partyId) + 1;

    enableIncrease(partyId, newPercentage);

    getPercentageObject(partyId).innerHTML = newPercentage;

    document.getElementById(partyId + '-background').style.height = newPercentage;
}

function decreasePercentage(partyId, newPercentage)
{
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
    decreasePercentage(partyId, getNewPercentageMinus(partyId));

    increasePercentage('others', getNewPercentage('others'));
}
