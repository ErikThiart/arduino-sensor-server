-- Name: humidity_sensor_data
-- Columns: id (primary key), device_id (foreign key), humidity (float), timestamp (datetime)
-- Context: The humidity_sensor_data table stores the humidity data from the humidity sensor. The device_id column is a foreign key that references the id column in the devices table. This allows you to associate the humidity data with the device that collected it.
-- Note: Remember to adjust the column data types and lengths to fit your specific needs, and add or modify the ENUM options as needed.


CREATE TABLE humidity_sensor_data (
    id INT NOT NULL AUTO_INCREMENT,
    device_id INT NOT NULL,
    humidity FLOAT NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (device_id) REFERENCES devices(id) ON DELETE CASCADE
);

-- Path: app/database_schemas/motion_sensor_data.sql