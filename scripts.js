const requestAPI = async () => {
    let request = 'http://api.openweathermap.org/data/2.5/weather?q=' + document.getElementById('tfCity').value + '&APPID=0afbd2dc40130488ab73ab64f3f9573a';
    const response = await fetch(request);
    /*try{
        
    } catch(error){
        
    }*/
    const myJson = await response.json(); //extract JSON from the http response
    
    if(myJson.message == 'city not found'){
        document.getElementById('city').textContent = 'La ville ' + document.getElementById('tfCity').value + ' n\'a pas été trouvée';
        document.getElementById('temp').textContent = '';
        document.getElementById('wind').textContent = '';
        return;
    }
    //console.log(myJson);
    //console.log(document.getElementById('temp'));

    //let temperatureBlock = document.createElement("h1");
    //temperatureBlock.textContent = document.createElement('Température à ' + document.getElementById('tfCity').value + ' ' + (myJson.main.temp -273.15) + ' °C');
    document.getElementById('city').textContent = document.getElementById('tfCity').value;
    document.getElementById('temp').textContent = 'Température à ' + document.getElementById('tfCity').value + ' ' + Math.round((myJson.main.temp -273.15) * 10) / 10 + '°C';
    document.getElementById('wind').textContent = 'Vitesse du vent ' + myJson.wind.speed + 'km/h';
    //document.body.appendChild(temperatureBlock);
    // do something with myJson
}