
/****************************************************************
* Weather OPA using openweathermap API
***************************************************************/

//require request package
const request = require('request');
const express = require('express')
const path = require('path')
var app = express();

//set port
app.set('port', (process.env.PORT || 5000))
app.use(express.static(path.join(__dirname, 'public')))
app.set('views', path.join(__dirname, 'views'))
app.set('view engine', 'ejs')
	
//Have /forecast set up to take user input for city or zip for forecast
app.get('/forecast', (req, res) => res.render('forecast'))

//API key *****Don't Steal Please :) ***** 
var apiKey = 'c10aa5c735891861ff883743b62e8fea';
var city = '';
var url = '';

//call /forecastInfo using enter city or zip and return JSON with weather info
app.get('/forecastInfo', function(req, res) {
	//get user city or zip
	city =  req.query.city;
	//URL for weather API
	url = `http://api.openweathermap.org/data/2.5/weather?q=${city}&units=imperial&appid=${apiKey}`;
	getWeather(function(err, data){ 
    if(err) return res.send(err);       
    res.send(data);
  	});
});

//Start the server running
app.listen(app.get('port'), function() {
	console.log('Node app is running on port', app.get('port'));
});

//function to get back JSON string.
function getWeather(callback) {
	
	console.log(city);
	request(url, function(err, res, body) {
  		if(!err){
  			var weather = JSON.parse(body);
  			result = weather;        
        	return callback(result, false);   	
  		} else {
    	return callback(null, err);;
  		}
	});
}
