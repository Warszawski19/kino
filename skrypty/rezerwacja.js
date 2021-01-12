var nr = 1;
var tekst = "";
var data = [];

function akcja(a) {
    // console.log(this.getAttribute("stan"))
    if (a.getAttribute("stan") == "no") {
        a.style.background = "orange";
        a.setAttribute("stan", "yes")
        data.push(a.id);
    } else if (a.getAttribute("stan") == "yes") {
        a.style.background = "green";
        a.setAttribute("stan", "no")
        let num = data.indexOf(a.id)
        // console.log(num)
        if (num >= 0) {
            data.splice(num, 1)
        };
    }
    // console.log(data)
    tekst = "";
    for (let i = 0; i < data.length; i++) {
        tekst += data[i] + ",";
    }
    document.getElementById("seats").value = tekst;
};
for (let i = 0; i < 15; i++) {
    var rzad = document.createElement("tr");
    rzad.classList.add("rzad")
    for (let j = 0; j < 20; j++) {
        let miejsce = document.createElement("td");
        miejsce.classList.add("miejsce")
        miejsce.innerHTML = nr;
        miejsce.id = nr;
        miejsce.setAttribute("stan", "no")
        miejsce.setAttribute("onselectstart", "return false")
        miejsce.setAttribute("onclick", "akcja(this)")
        rzad.appendChild(miejsce)
        if (j == 9) {
            let schody = document.createElement("td");
            schody.classList.add("schody")
            schody.innerHTML = "---"
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
for (let j = 0; j < tab.length; j++) {
    var mc = document.getElementById(tab[j])
    if (mc) {
        mc.classList.remove("miejsce");
        mc.classList.add("zajety");
        mc.setAttribute("onclick", "return false")
    }
}
