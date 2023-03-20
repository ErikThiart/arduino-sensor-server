-- Name: temperature_sensor_data
-- Columns: id (primary key), device_id (foreign key), temperature (float), timestamp (datetime)
-- Context: The temperature_sensor_data table stores the temperature data from the temperature sensor. The device_id column is a foreign key that references the id column in the devices table. This allows you to associate the temperature data with the device that collected it.
-- Note: Remember to adjust the column data types and lengths to fit your specific needs, and add or modify the ENUM options as needed.

CREATE TABLE temperature_sensor_data (
    id INT NOT NULL AUTO_INCREMENT,
    device_id INT NOT NULL,
    temperature FLOAT NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (device_id) REFERENCES devices(id) ON DELETE CASCADE
);

-- Path: app/database_schemas/temperature_sensor_data.sql