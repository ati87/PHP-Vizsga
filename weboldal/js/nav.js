let leNyit = document.querySelectorAll(".leNyilo");
let navMenu = document.querySelector("#menu");
navMenu.addEventListener("click", function(){
    for (menu of leNyit) {
        if (menu.style.display === "block") {
            menu.style.display = "none";
        } else {
            menu.style.display = "block";
        }
    }
}
);
if (sessionStorage.getItem("kattintott3") != "igen") {
    document.getElementById("cookieWarning").style.display = "flex";
}

let gomb = document.querySelector("#cookieWarning button");
gomb.addEventListener("click", function () {
    document.getElementById("cookieWarning").style.display = "none";
    sessionStorage.setItem("kattintott3", "igen")
});
