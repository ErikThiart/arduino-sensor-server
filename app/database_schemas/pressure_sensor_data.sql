-- Name: pressure_sensor_data
-- Description: The pressure sensor data table stores the pressure data from the pressure sensor. The device_id column is a foreign key that references the id column in the devices table. This allows you to associate the pressure data with the device that collected it.
-- Columns: id (primary key), device_id (foreign key), pressure_hpa (int), altitude_meters (int), pressure_at_sealevel (int), real_altitude (int), timestamp (datetime)
-- Note: Remember to adjust the column data types and lengths to fit your specific needs, and add or modify the pressure hpa options as needed.

CREATE TABLE pressure_sensor_data (
    id INT NOT NULL AUTO_INCREMENT,
    device_id INT NOT NULL,
    pressure_hpa INT NOT NULL, 
    altitude_meters INT NULL, 
    pressure_at_sealevel INT NULL, 
    real_altitude INT NULL, -- seaLevelPressure_hPa * 100
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (device_id) REFERENCES devices(id) ON DELETE CASCADE
);

-- Path: app/database_schemas/pressure_sensor_data.sql