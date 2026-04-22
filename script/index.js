// Load Footer
async function loadFooter() {
    const response = await fetch('/html/footer.html');
    const footerHTML = await response.text();
    document.getElementById('footer-placeholder').innerHTML = footerHTML;
}

loadFooter();