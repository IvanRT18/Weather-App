const btnCiudad = document.getElementById("botonCiudad");
const nombreCiudad = document.getElementById('Nombre_Ciudad');
const nombrePrueba = document.getElementById("ciudadPrueba");
let Ciudad = {
  zipcode,
  name,
  lat,
  lon,
  country,
};

let key = '6f5a0adb6ab18990405d03a5020778ca';
let datosClima;

btnCiudad.addEventListener('click', () =>{
    nombrePrueba.innerText = nombreCiudad.value;
    zipcode = nombreCiudad.value;
    solicitudDatos();
});



function solicitudDatos(){
    var xhttps = new XMLHttpRequest();
    xhttps.open("GET", `http://api.openweathermap.org/geo/1.0/zip?zip=${zipcode},MX&appid=${key}`);
    
    xhttps.addEventListener("load", (data) => {
      datosClima = JSON.parse(data.target.response);
    });

    Ciudad.zipcode = datosClima.zipcode;
    Ciudad.name = datosClima.name;
    Ciudad.lat = datosClima.lat;
    Ciudad.lon = datosClima.lon;
    Ciudad.country = datosClima.country;
    
    console.log(Ciudad);

    xhttps.send();
}

