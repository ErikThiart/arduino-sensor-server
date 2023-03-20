-- Name: water_level_sensor_data
-- Description: The water level sensor data table stores the water level data from the water level sensor. The device_id column is a foreign key that references the id column in the devices table. This allows you to associate the water level data with the device that collected it.
-- Columns: id (primary key), device_id (foreign key), water_level (float), timestamp (datetime)
-- Note: Remember to adjust the column data types and lengths to fit your specific needs, and add or modify the ENUM options as needed.

CREATE TABLE water_level_sensor_data (
    id INT NOT NULL AUTO_INCREMENT,
    device_id INT NOT NULL,
    water_level_percentage FLOAT NOT NULL, -- water level %
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (device_id) REFERENCES devices(id) ON DELETE CASCADE
);

-- Path: app/database_schemas/water_level_sensor_data.sql