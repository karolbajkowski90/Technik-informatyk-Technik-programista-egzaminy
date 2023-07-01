function lanzarotte() {
    document.getElementById("mainphoto").src = "lanzarotte.jpg";
}
function pekin() {
    document.getElementById("mainphoto").src = "pekin.jpg";
}
function serengeti() {
    document.getElementById("mainphoto").src = "serengeti.jpg";
}
function wenecja() {
    document.getElementById("mainphoto").src = "wenecja.jpg";
}
function tajlandia() {
    document.getElementById("mainphoto").src = "tajlandia.jpg";
}
function ikona() {
    let ikona = document.getElementById("ikona");
    if(ikona.src.includes('icon-off.png')){
        ikona.src = "icon-on.png"
    } else {
        ikona.src = "icon-off.png"
    }
}