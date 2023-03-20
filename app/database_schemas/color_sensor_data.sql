-- Name: color_sensor_data
-- Description: The color sensor data table stores the color data from the color sensor. The device_id column is a foreign key that references the id column in the devices table. This allows you to associate the color data with the device that collected it.
-- Columns: id (primary key), device_id (foreign key), red (int), green (int), blue (int), timestamp (datetime)
-- Note: Remember to adjust the column data types and lengths to fit your specific needs, and add or modify the ENUM options as needed.

CREATE TABLE color_sensor_data (
    id INT NOT NULL AUTO_INCREMENT,
    device_id INT NOT NULL,
    red INT NOT NULL,
    green INT NOT NULL,
    blue INT NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (device_id) REFERENCES devices(id) ON DELETE CASCADE
);

-- Path: app/database_schemas/color_sensor_data.sql