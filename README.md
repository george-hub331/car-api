# car-api
I used PHP and mySQL for this project and chrome web browser

# how to use

- Run a web server that supports php and mysql
conf.php contains the configuration for the web host, your server name, username, password, database(which is wootlab) as credentials for server connection

- import the sql file wootlab.sql into mysql.
It contains the database also

The api uses get requests only
the end point files are 

- addcar.html
- addlocation.html
- viewlast.html

the api files are 

- add_location.php to add location to the database requires get requests


      "id" => unique id of the model, "long" => longitude, "lat" => latitude, "date" => "date", "time" => time
      
- add_car.php adds a car to the database

      "id" => unique id of the car, "model" => model of the car, "fuel" => fuel type, "max_load" => max load in kg, "km" => current kilometer
      
- last_known.php to view a the last x known location of a car model in json format

      "id" => unique id of the model, "num" => last num locations

# Missing specification
- I could not add the ability to view the latitude and longitude on google map
- I could not add styles and forms, this was because i did not start the project early
- I have issues creating a screen cast video, most screen cast applications i have used or checked do not add the audio

# constructive feedback about improving the assignment.

- well i would like to add html forms and styles and also the ability to view on google maps
- ability to add multiple cars at a time to reduce latency

# extensions
- used json formatter, a chrome extension that formats json

Issues

- Had issues running postman which is why i used only get requests

github-repository - https://github.com/george_hub331/car-api
