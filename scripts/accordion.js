function collapseAccordian(expBtnID, collpBtnID, pageID) {
    const collapseBtn = document.getElementById(collpBtnID);
    const expBtn = document.getElementById(expBtnID);
    const page = document.getElementById(pageID);

    collapseBtn.style.display = 'none';
    expBtn.style.display = 'block';
    page.style.display = 'none';
}

function expandAccordian(expBtnID, collpBtnID, pageID) {
    const collapseBtn = document.getElementById(collpBtnID);
    const expBtn = document.getElementById(expBtnID);
    const page = document.getElementById(pageID);

    collapseBtn.style.display = 'block';
    expBtn.style.display = 'none';
    page.style.display = 'block';
}