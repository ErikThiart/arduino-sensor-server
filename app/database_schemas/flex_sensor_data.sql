-- Name: flex_sensor_data
-- Description: The flex sensor data table stores the flex data from the flex sensor. The device_id column is a foreign key that references the id column in the devices table. This allows you to associate the flex data with the device that collected it.
-- Columns: id (primary key), device_id (foreign key), flex_value (float), timestamp (datetime)
-- Note: Remember to adjust the column data types and lengths to fit your specific needs, and add or modify the ENUM options as needed.

CREATE TABLE flex_sensor_data (
    id INT NOT NULL AUTO_INCREMENT,
    device_id INT NOT NULL,
    flex_value FLOAT NOT NULL, -- bend degrees
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (device_id) REFERENCES devices(id) ON DELETE CASCADE
);

-- Path: app/database_schemas/flex_sensor_data.sql