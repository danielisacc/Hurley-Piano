document.getElementById('hamburger').addEventListener('click', function() {
    const links = document.getElementById('links');
    const burger = document.getElementById('hamburger');
    if (links.style.display === 'flex') {
        links.style.display = 'none';
        burger.style.backgroundColor = 'transparent';
    }
    else {
        links.style.display = 'flex';
        burger.style.backgroundColor = 'rgba(200,200,200,20%)';
    }
    });

    const listEl = document.getElementById('links')

    fetch('./menu.json')
    .then(res => res.json())
    .then(data => {
        data.forEach(link => {
            listEl.insertAdjacentHTML('beforeend', `<a href=${link.url}>${link.name}</a>`);
        });
    })

window.addEventListener('resize', function () {
    let width = document.documentElement.clientWidth;
    const links = document.getElementById('links');

    if (width >= 800) {
        links.style.display = 'flex';
    }
    else {
        links.style.display = 'none';
    }
})

function redirect(address) {
    window.location.replace(address);
}

function sign_in_alert(type, message) {
    const listEl = document.getElementById("error");
    if (type == "caution") {
        listEl.insertAdjacentHTML("beforeend", `⚠️ `);
    }
    else if (type == "warning") {
        listEl.insertAdjacentHTML("beforeend", `😨 `);
    }
}