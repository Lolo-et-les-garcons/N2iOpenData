async function requestAPI () {

    let cityName;

    let url_string = window.location.href
    let url = new URL(url_string);
    cityName = url.searchParams.get("ville_param");

    let request = 'http://api.openweathermap.org/data/2.5/weather?q=' + cityName + '&APPID=0afbd2dc40130488ab73ab64f3f9573a';
    const response = await fetch(request);
    /*try{

    } catch(error){

    }*/
    const myJson = await response.json(); //extract JSON from the http response

    if(myJson.message == 'city not found'){
        document.getElementById('city').textContent = 'La ville ' + cityName + ' n\'a pas été trouvée';
        document.getElementById('weather').textContent = '';
        document.getElementById('temp').textContent = '';
        document.getElementById('wind').textContent = '';
        return;
    }
    //console.log(myJson);
    //console.log(document.getElementById('temp'));

    //let temperatureBlock = document.createElement("h1");
    //temperatureBlock.textContent = document.createElement('Température à ' + document.getElementById('tfCity').value + ' ' + (myJson.main.temp -273.15) + ' °C');

    document.getElementById('city').textContent = 'Météo à ' + cityName + ' :';
    document.getElementById('weather').textContent = myJson.weather[0].main;
    document.getElementById('temp').textContent = Math.round((myJson.main.temp -273.15) * 10) / 10 + '°C';
    document.getElementById('wind').textContent = 'Vent : ' + myJson.wind.speed + 'km/h';
    //document.body.appendChild(temperatureBlock);
    // do something with myJson
}
