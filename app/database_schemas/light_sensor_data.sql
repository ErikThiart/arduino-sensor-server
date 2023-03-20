-- Name: light_sensor_data
-- Description: The light sensor data table stores the light data from the light sensor. The device_id column is a foreign key that references the id column in the devices table. This allows you to associate the light data with the device that collected it.
-- Columns: id (primary key), device_id (foreign key), light_level (int), timestamp (datetime)
-- Note: Remember to adjust the column data types and lengths to fit your specific needs, and add or modify the light level options as needed.

CREATE TABLE light_sensor_data (
    id INT NOT NULL AUTO_INCREMENT,
    device_id INT NOT NULL,
    light_level INT NOT NULL, -- 0-1023
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (device_id) REFERENCES devices(id) ON DELETE CASCADE
);

-- Path: app/database_schemas/light_sensor_data.sql