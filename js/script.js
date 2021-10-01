links = document.querySelectorAll('nav a');

ajaxFunction = function (link, key, arraySSS) {
    if (key > 0) {

        link.onclick = function (event) {

            event.preventDefault();

            fetch(this.href).then(function (response) {
                if (response.ok)
                    return response.text();
                else
                    alert("ocorreu um erro");
            }).then(function (html) {
                document.querySelector("#content").innerHTML = html;
            });
        };
    }
};

links.forEach(ajaxFunction);

console.log(links);