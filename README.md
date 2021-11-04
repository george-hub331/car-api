# car-api

# I used only PHP and mySQL for this project and web browser
# the api uses get requests to communicate with the


# the endpoint files are 
#  add_location.php to add location to id
    requires get requests
      id => unique id of the model, long => longitude, lat => latitude, date => date, time => time
#  add_car.php to add a car
      id=> unique id of the car
      model => model of the car, fuel => fuel type, max_load => max load in kg, km => current kilometer
      
# last_known.php to view a the last know location of a car model
      id => unique id of the model, num => last num locations
