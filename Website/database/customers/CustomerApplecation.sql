create table customers.CustomerApplecation
(
    firstname VARCHAR(30) not null,
    lastname  VARCHAR(30) not null,
    Address   VARCHAR(50) not null,
    email     VARCHAR(50) not null,
    phone     INT(20)     not null,
    dogName   VARCHAR(50) not null,
    dogType   VARCHAR(50) not null,
    age       INT(3)      null,
    addinfo   VARCHAR(50) not null,
    dogImage  LONGBLOB    null,
    primary key (id)
);

