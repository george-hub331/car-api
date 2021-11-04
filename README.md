# car-api
I used PHP and mySQL for this project and chrome web browser

# how to use

- Run a web server that supports php and mysql
conf.php contains the configuration for the web host, your server name, username, password, database(which is wootlab) as credentials for server connection

- import the sql file wootlab.sql into mysql.
It contains the database also

The api uses get requests only

the endpoint files are 

- add_location.php to add location to the db
    requires get requests
      "id" => unique id of the model, "long" => longitude, "lat" => latitude, "date" => "date", "time" => time
- add_car.php to add a car
      "id"=> unique id of the car
      "model" => model of the car, "fuel" => fuel type, "max_load" => max load in kg, "km" => current kilometer
      
- last_known.php to view a the last know location of a car model

      "id" => unique id of the model, "num" => last num locations

# Missing specification
I have issues creating a screen cast video, most screen cast applications i have used or checked do not add the audio

# constructive feedback about improving the assignment.

- well i would like to add html forms
- ability to add multiple cars at a time to reduce latency



# Issues

- Had issues running postman which is why i used only get request

