-- Name: magnetometer_sensor_data
-- Description: The magnetometer sensor data table stores the magnetometer data from the magnetometer sensor. The device_id column is a foreign key that references the id column in the devices table. This allows you to associate the magnetometer data with the device that collected it.
-- Columns: id (primary key), device_id (foreign key), utesla_x (float), utesla_y (float), utesla_z (float), timestamp (datetime)
-- Note: Remember to adjust the column data types and lengths to fit your specific needs, and add or modify the ENUM options as needed.

CREATE TABLE magnetometer_sensor_data (
    id INT NOT NULL AUTO_INCREMENT,
    device_id INT NOT NULL,
    utesla_x FLOAT NOT NULL,
    utesla_y FLOAT NOT NULL,
    utesla_z FLOAT NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (device_id) REFERENCES devices(id) ON DELETE CASCADE
);

-- Path: app/database_schemas/magnetometer_sensor_data.sql