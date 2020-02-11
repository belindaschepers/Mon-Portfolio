let todo = document.getElementById("")

async function showRepository(){
    let url = "https://api.github.com/search/repositories?q=user:belindaschepers"
    let fetching = await fetch(url)
    let data = await fetching.json()

    data.items.forEach(element => {
        if(element.full_name === 'belindaschepers/todolist-json'){
        let lien = document.createElement("a");
        lien.href = element.html_url;
        console.log(element.full_name);
        lien.textContent = element.full_name
        let resultat = document.createElement("p")
        resultat.appendChild(lien)
        todo.appendChild(resultat);
        }
    });
}
showRepository();