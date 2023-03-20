-- Name: gyroscope_sensor_data
-- Description: The gyroscope sensor data table stores the gyroscope data from the gyroscope sensor. The device_id column is a foreign key that references the id column in the devices table. This allows you to associate the gyroscope data with the device that collected it.
-- Columns: id (primary key), device_id (foreign key), accelerometer_x (float), accelerometer_y (float), accelerometer_z (float), gyroscope_x (float), gyroscope_y (float), gyroscope_z (float), timestamp (datetime)
-- Note: Remember to adjust the column data types and lengths to fit your specific needs, and add or modify the ENUM options as needed.

CREATE TABLE gyroscope_sensor_data (
    id INT NOT NULL AUTO_INCREMENT,
    device_id INT NOT NULL,
	accelerometer_x DECIMAL(7,4) NOT NULL,
	accelerometer_y DECIMAL(7,4) NOT NULL,
	accelerometer_z DECIMAL(7,4) NOT NULL,
	gyroscope_x DECIMAL(7,4) NOT NULL,
	gyroscope_y DECIMAL(7,4) NOT NULL,
	gyroscope_z DECIMAL(7,4) NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (device_id) REFERENCES devices(id) ON DELETE CASCADE
);

-- -- Path: app/database_schemas/gyroscope_sensor_data.sql