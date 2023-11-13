CREATE TABLE IF NOT EXISTS Utilizatori (
    id INT AUTO_INCREMENT PRIMARY KEY ,
    name VARCHAR(255),
    email VARCHAR(100)
);

CREATE TABLE Comments(
    id INT AUTO_INCREMENT PRIMARY KEY ,
    name VARCHAR(255),
    comment TEXT,
    posted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Cart(
  id INT AUTO_INCREMENT PRIMARY KEY ,
  product_id INT,
  quantity INT,
  added_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Rezervations(
    id INT AUTO_INCREMENT PRIMARY KEY ,
    name VARCHAR(255),
    email VARCHAR(100),
    phone VARCHAR(15),
    rezervation_date DATE,
    rezervation_time TIME,
    number_of_people INT,
    special_requests TEXT,
    created_at TIMESTAMP DEFAULT current_timestamp
);