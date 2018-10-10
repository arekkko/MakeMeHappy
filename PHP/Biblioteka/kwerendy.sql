CREATE TABLE meldunek (
    pesel CHAR(11), 
    id_pok INT
    ); 
    
CREATE TABLE wypozyczenia (
    lp INT AUTO_INCREMENT PRIMARY KEY, 
    pesel CHAR(11), 
    tytul VARCHAR(40)
    ); 
    
CREATE TABLE studenci (
    pesel CHAR(11), 
    nazwisko VARCHAR(40), 
    imie VARCHAR(30)
    ); 