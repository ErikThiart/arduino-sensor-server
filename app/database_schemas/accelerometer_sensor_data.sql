-- Name: accelerometer_sensor_data
-- Description: The accelerometer sensor data table stores the accelerometer data from the accelerometer sensor. The device_id column is a foreign key that references the id column in the devices table. This allows you to associate the accelerometer data with the device that collected it.
-- Columns: id (primary key), device_id (foreign key), x_axis (float), y_axis (float), z_axis (float), x_g (float), y_g (float), z_g (float), timestamp (datetime)
-- Note: Remember to adjust the column data types and lengths to fit your specific needs, and add or modify the ENUM options as needed.

CREATE TABLE accelerometer_sensor_data (
    id INT NOT NULL AUTO_INCREMENT,
    device_id INT NOT NULL,
    x_axis FLOAT NOT NULL,
    y_axis FLOAT NOT NULL,
    z_axis FLOAT NOT NULL,
    x_g FLOAT NOT NULL,
    y_g FLOAT NOT NULL,
    z_g FLOAT NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (device_id) REFERENCES devices(id) ON DELETE CASCADE
);

-- Path: app/database_schemas/accelerometer_sensor_data.sql