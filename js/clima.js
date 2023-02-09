const btnCiudad = document.getElementById("botonCiudad");
const codigoPostal = document.getElementById('ZipCode');
let Ciudad = new Object();
let Clima = new Object();
let key = '6f5a0adb6ab18990405d03a5020778ca';
const nombreCiudad = document.getElementById("Ciudad_Nombre");
const TemperaturaCiudad = document.getElementById("Temperatura_Ciudad");
const MaximaTempCiudad = document.getElementById("Maxima_Ciudad");
const MinimaTempCiudad = document.getElementById("Minima_Ciudad");
const Sensacion_Clima = document.getElementById("Sensacion_Clima");
const iconoClima = document.getElementById("Icono_Clima");

btnCiudad.addEventListener('click', () =>{
    solicitudDatos();
});

function solicitudDatos(){
    var xhttps = new XMLHttpRequest();
    xhttps.open("GET", `http://api.openweathermap.org/geo/1.0/zip?zip=${codigoPostal.value},MX&appid=${key}`);
    
    xhttps.addEventListener("load", (data) => {
      Ciudad = JSON.parse(data.target.response);
      obtenClima();
    });

    xhttps.send();
}

function obtenClima(){
  var xhttpsC = new XMLHttpRequest();
  xhttpsC.open("GET", `https://api.openweathermap.org/data/2.5/weather?lat=${Ciudad.lat}&lon=${Ciudad.lon}&appid=${key}&units=metric`);
    
  xhttpsC.addEventListener("load", (data) => {
      Clima = JSON.parse(data.target.response);
      MuestraDatosPantalla();
    });

    xhttpsC.send();
}

function MuestraDatosPantalla(){
  nombreCiudad.innerText = `${Clima.name}, ${Clima.sys.country}`;
  TemperaturaCiudad.innerText = `${Clima.main.temp} °C`;
  Sensacion_Clima.innerText = `Con una sensacion térmica de ${Clima.main.feels_like} °C`;
  // MinimaTempCiudad.innerText = `La temperatura minima es de ${Clima.main.temp_min} °C`;
  // MaximaTempCiudad.innerText = `Y la máxima es de ${Clima.main.temp_max} °C`;
  stringClima = `http://openweathermap.org/img/wn/${Clima.weather[0].icon}@2x.png`
  iconoClima.setAttribute("src", stringClima);
}
