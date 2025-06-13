function loadModule(id, url) {
    fetch(url)
        .then(response => response.text())
        .then(html => document.getElementById(id).innerHTML = html)
        .catch(error => console.error(`Error cargando ${url}:`, error));
}

loadModule('header', 'modules/header.html');
loadModule('hero', 'modules/hero.html');
loadModule('about', 'modules/about.html');
loadModule('services', 'modules/services.html');
loadModule('contact', 'modules/contact.html');
loadModule('footer', 'modules/footer.html');