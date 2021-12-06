const scenarios = [];

scenarios['2015'] = [
    ['ps', 40],
    ['psd', 28],
    ['cds', 14],
    ['pcp', 6],
    ['be', 4],
    ['il', 4],
    ['c', 4],
    ['others', 0]
];

scenarios['2019'] = [
    ['ps', 36],
    ['psd', 32],
    ['cds', 10],
    ['pcp', 10],
    ['be', 6],
    ['il', 4],
    ['c', 2],
    ['others', 0]
];

scenarios['sic'] = [
    ['ps', 44],
    ['psd', 24],
    ['cds', 12],
    ['pcp', 8],
    ['be', 6],
    ['il', 4],
    ['c', 2],
    ['others', 0]
];

scenarios['tvi'] = [
    ['psd', 36],
    ['ps', 32],
    ['pcp', 10],
    ['be', 10],
    ['il', 6],
    ['cds', 4],
    ['c', 2],
    ['others', 0]
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
