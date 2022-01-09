CREATE DATABASE jachty;
CREATE TABLE jachty.rezerwacja (
id INT(3) UNSIGNED AUTO_INCREMENT,
model_jachtu VARCHAR(50) NOT NULL,
imie_nazwisko VARCHAR(50) NOT NULL,
adres VARCHAR(100) NOT NULL,
telefon int(9) NOT NULL,
email VARCHAR(50) NOT NULL,
data_od_kiedy date NOT NULL,
data_do_kiedy date NOT NULL,
PRIMARY KEY (id)
)