function expandMobileMenu(expandBtnID, collapseBtnID, menuId) {

    const expandBtn = document.getElementById(expandBtnID);
    const collapseBtn = document.getElementById(collapseBtnID);
    const menu = document.getElementById(menuId);

    expandBtn.style.display = 'none';
    collapseBtn.style.display = 'block';
    menu.style.display = 'flex';

    
}

function collapseMobileMenu(expandBtnID, collapseBtnID, menuID) {
    const expandBtn = document.getElementById(expandBtnID);
    const collapseBtn = document.getElementById(collapseBtnID);
    const menu = document.getElementById(menuID);

    collapseBtn.style.display = 'none';
    expandBtn.style.display = 'block';
    menu.style.display = 'none';
}