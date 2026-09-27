# SQL taulut

## Opiskelija

CREATE TABLE opiskelija (
    id INT AUTO_INCREMENT PRIMARY KEY,
    etunimi VARCHAR(50) NOT NULL,
    sukunimi VARCHAR(50) NOT NULL,
    email VARCHAR(100),
    puhelin VARCHAR(20)
);

## Työpaikka

CREATE TABLE tyopaikka (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nimi VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    puhelin VARCHAR(20),
    y_tunnus VARCHAR(20)
);

## Työpaikkaohjaaja

CREATE TABLE tyopaikkaohjaaja (
    id INT AUTO_INCREMENT PRIMARY KEY,
    etunimi VARCHAR(50) NOT NULL,
    sukunimi VARCHAR(50) NOT NULL,
    puhelin VARCHAR(20),
    email VARCHAR(100),
    tyopaikka_id INT NOT NULL,

    FOREIGN KEY (tyopaikka_id)
        REFERENCES tyopaikka(id)
);

## Opettaja

CREATE TABLE opettaja (
    id INT AUTO_INCREMENT PRIMARY KEY,
    etunimi VARCHAR(50) NOT NULL,
    sukunimi VARCHAR(50) NOT NULL,
    puhelin VARCHAR(20),
    email VARCHAR(100)
);

## Teo jakso liitostaulu

CREATE TABLE teo_jakso (
    id INT AUTO_INCREMENT PRIMARY KEY,
    opiskelija_id INT NOT NULL,
    tyopaikka_id INT NOT NULL,
    opettaja_id INT NOT NULL,
    alku_pvm DATE,
    loppu_pvm DATE,
    tila VARCHAR(30),
    arvosana INT,
    kommentti TEXT,

    FOREIGN KEY (opiskelija_id)
        REFERENCES opiskelija(id),

    FOREIGN KEY (tyopaikka_id)
        REFERENCES tyopaikka(id),

    FOREIGN KEY (opettaja_id)
        REFERENCES opettaja(id)
);

## Näyttö

CREATE TABLE naytto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    teo_jakso_id INT NOT NULL,
    pvm DATE,
    arviointi TEXT,

    FOREIGN KEY (teo_jakso_id)
        REFERENCES teo_jakso(id)
);