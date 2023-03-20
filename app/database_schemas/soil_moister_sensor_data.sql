-- Name: soil_moister_sensor_data
-- Description: The soil moister sensor data table stores the soil moister data from the soil moister sensor. The device_id column is a foreign key that references the id column in the devices table. This allows you to associate the soil moister data with the device that collected it.
-- Columns: id (primary key), device_id (foreign key), moisture_percentage (int), timestamp (datetime)
-- Note: Remember to adjust the column data types and lengths to fit your specific needs, and add or modify the ENUM options as needed.

CREATE TABLE soil_moister_sensor_data (
    id INT NOT NULL AUTO_INCREMENT,
    device_id INT NOT NULL,
    moisture_percentage INT NOT NULL, -- moisture %
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (device_id) REFERENCES devices(id) ON DELETE CASCADE
);

-- Path: app/database_schemas/soil_moister_sensor_data.sql