const scenarios = [];

scenarios['sic'] = [
    ['ps', 44],
    ['psd', 24],
    ['cds', 12],
    ['pcp', 8],
    ['be', 6],
    ['il', 4],
    ['c', 2]
];

function setScenario(scenario)
{
    scenarios[scenario].forEach(party => {
        setPercentage(party[0], party[1]);
        setBackgroundHeight(party[0], party[1]);
    });
}

function setPercentage(partyId, percentage)
{
    document.getElementById(partyId + '-percentage').innerHTML = percentage;
    
}

function setBackgroundHeight(partyId, percentage)
{
    document.getElementById(partyId + '-background').style.height = percentage;
}
