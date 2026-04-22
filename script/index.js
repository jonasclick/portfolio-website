// Load Footer
async function loadFooter() {
    const response = await fetch('html/footer.html');
    const footerHTML = await response.text();
    document.getElementById('footer-placeholder').innerHTML = footerHTML;
}

// Load Footer
async function loadHeader() {
    const response = await fetch('html/header.html');
    const footerHTML = await response.text();
    document.getElementById('header-placeholder').innerHTML = footerHTML;
}

loadHeader();
loadFooter();