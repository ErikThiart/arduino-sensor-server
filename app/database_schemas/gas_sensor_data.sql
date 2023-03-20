-- Name: gas_sensor_data
-- Description: The gas_sensor_data table stores the gas data from the gas sensor. The sensor_id column is a foreign key that references the id column in the sensors table. This allows you to associate the gas data with the sensor that collected it.
-- Columns: id (primary key), sensor_id (foreign key), gas_sensor_type (ENUM), sensor_data (text), created_at (datetime)
-- Note: Remember to adjust the column data types and lengths to fit your specific needs, and add or modify the gas sensor type options as needed.

CREATE TABLE IF NOT EXISTS gas_sensor_data (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    device_id INTEGER NOT NULL,
    gas_sensor_type ENUM ('MQ2', 'MQ3', 'MQ4', 'MQ5', 'MQ6', 'MQ7', 'MQ8', 'MQ9', 'MQ135') NOT NULL,
    sensor_data TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (device_id) REFERENCES devices(id) ON DELETE CASCADE
);

-- Path: app/database_schemas/gas_sensor_data.sql