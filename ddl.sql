CREATE TABLE  IF NOT EXISTS AUTOVETTURA(
    id integer unsigned auto_increment,
    marca varchar(20),
    modello varchar(20),--n caratteri variabili
    annoImmatricolazione char(4),
    provincia char(2), --2 caratteri obbligatori
    uniproprietario boolean,
    kilometraggio integer unsigned,

    primary key(id)
);

