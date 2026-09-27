# Tietomalli

## Taulut

OPPISKELIJA:

- id
- etunimi
- sukunimi
- email
- puhelin

TYOPAIKKA:

- id
- nimi
- email
- puhelin
- y-tunnus

TYOPAIKKAOHJAAJA:

- id
- etunimi
- sukunimi
- puhelin
- email
- tyopaikka_id FK

OPETTAJA:

- id
- etunimi
- sukunimi
- puhelin
- email

TEO-JAKSO:

- id
- opsikelija_id FK
- tyopaikka_id FK
- opettaja_id FK
- alku_pvm
- loppu_pvm
- tila
- arvosana
- kommentti

NAYTTO:

- id
- teo-jakso_id FK
- pvm
- arviointi

## Taulujen relaatiot

Opiskelijalla voi olla monta teo-jaksoa, mutta yksi teo-jakso liittyy yhteen oppilaaseen

Työpaikalla voi olla monta teo-jaksoa. mutta yksi teo-jakso liittyy yhteen työpaikkaan

opettajalla voi olla monta teo-jaksoa, mutta yksi teo jakso liittyy yhteen opettajaaan

oppilaalla voi olla monta näyttöä, mutta yksi näyttö liittyy yhteen teo jaksoon

Yhdellä työpaikalla voi olla monta työpaikkaohjaajaa, mutta yksi ohjaaja kuuluu yhteen työpaikkaan ja yhdellä teojaksolla on yksi työpaikkaohjaaja