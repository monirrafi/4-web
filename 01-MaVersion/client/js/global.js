let validerFormEnreg = () =>{ 
    let msgErrEnreg = "";
    let valide = true;
    let res = document.getElementById("res").value;
    
    if(res.length <5){
        valide = false;
        msgErrEnreg +="Le nom du réalisateur doit avoir au moins 5 caractères!<br/>";
    }
    if(!valide){
        document.getElementById("msgErrEnreg").innerHTML = msgErrEnreg;
        setInterval(() =>{
            document.getElementById("msgErrEnreg").innerHTML = "";

        },5000);
    }
    return valide;
}
let lister = () => {
    document.getElementById('formLister').submit();
}
let listerModifier = (tabFilms) => {
    for(unFilm of tabFilms){
        let tabUnFilm = unFilm.split(';');
        let titre = tabUnFilm[0];
        let res = tabUnFilm[1];
        let duree = tabUnFilm[2];
        document.getElementById('titre').innerHTML = titre;
        document.getElementById('res').innerHTML = res;
        document.getElementById('duree').innerHTML = duree;

    }
    document.getElementById('formModifier').submit();
}
