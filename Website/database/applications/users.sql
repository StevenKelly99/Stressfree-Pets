create table users
(
    id         int auto_increment
        primary key,
    firstname  varchar(50)                          not null,
    lastname   varchar(50)                          not null,
    email      varchar(100)                         not null,
    password   varchar(255)                         not null,
    is_admin   tinyint(1) default 0                 null,
    created_at timestamp  default CURRENT_TIMESTAMP null,
    constraint email
        unique (email)
);

