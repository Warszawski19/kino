var nr = 1;
var tekst = "";
var data = [];

for (let i = 0; i < 15; i++) {
    var rzad = document.createElement("div");
    rzad.classList.add("rzad")
    for (let j = 0; j < 20; j++) {
        let miejsce = document.createElement("div");
        miejsce.classList.add("miejsce")
        miejsce.style.width = 3.5 + "%";
        miejsce.innerHTML = nr;
        miejsce.id = nr;
        miejsce.setAttribute("stan", "no")
        miejsce.setAttribute("onselectstart", "return false")
        rzad.appendChild(miejsce)
        if (j == 9) {
            let schody = document.createElement("div");
            schody.classList.add("schody")
            schody.innerHTML = "-----"
            schody.setAttribute("onselectstart", "return false")
            rzad.appendChild(schody)
        }
        nr++;
    }
    document.getElementById("widownia").appendChild(rzad)
}
var res = document.getElementById("pustak").innerHTML;
var tab = res.split(",");
for (let i = 0; i < tab.length; i++) {
    if (tab[i].charAt(0) == " ") {
        tab[i] = tab[i].substr(1, 4)
    }
}

if (tab[0].length > 3) {
    tab[0] = tab[0].slice(((tab[0].length) - 3), tab[0].length)
}

if (tab[0].charAt(0) == " ") {
    tab[0] = tab[0].slice(1, tab[0].length)
}

for (let k = 0; k < tab.length; k++) {
    let nu = tab[k].length - 1;

    if (tab[k].charAt(0) == " " && tab[k].charAt(nu) == " ") {
        tab.splice(k, 1);
    }
}

console.log(tab)
var liczba = 0;
for (let j = 0; j < tab.length; j++) {
    var mc = document.getElementById(tab[j])
    if (mc) {
        mc.classList.remove("miejsce");
        mc.classList.add("zajety");
        liczba = liczba + 1;
    }
}
let procent = ((liczba / 300)*100).toPrecision(4);
document.getElementById("tresc").innerHTML = "<h5>Zajęte miejsca: " + liczba + "</h5><h5>Wolne miejsca: " + (300 - liczba) + "</h5><h5>Pojemność sali: " + 300 + "</h5><h5>Procent zapełnienia: " + procent + " %</h5>";
