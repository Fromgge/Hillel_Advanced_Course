create table Creators
(
    id  int auto_increment
        primary key,
    country     varchar(100) not null,
    company_name varchar(255) not null
);

create table Customers
(
    id  int auto_increment
        primary key,
    first_name   varchar(55)  null,
    last_name    varchar(55)  null,
    phone_number tinyint      null,
    DOB          date         null,
    email        varchar(100) null
);

create table Games
(
    id     int auto_increment
        primary key,
    id_creator  int         null,
    platform    varchar(55) not null,
    genre       varchar(55) not null,
    game_name    varchar(55) not null,
    release_date date        null,
    constraint Games_ibfk_1
        foreign key (id_creator) references Creators (id)
            on update set null
);

create index id_creator
    on Games (id);

create table Sellers
(
    id    int auto_increment
        primary key,
    first_name   varchar(55) null,
    last_name    varchar(55) null,
    phone_number tinyint     null
);

create table Orders
(
    id   int auto_increment
        primary key,
    id_game     int                   null,
    id_seller   int                   null,
    id_customer int                   null,
    payment     enum ('Cash', 'Card') null,
    release_date timestamp             null,
    constraint Orders_ibfk_1
        foreign key (id_game) references Games (id)
            on update set null,
    constraint Orders_ibfk_2
        foreign key (id_seller) references Sellers (id)
            on update set null,
    constraint Orders_ibfk_3
        foreign key (id_customer) references Customers (id)
            on update set null
);

create index id_customer
    on Orders (id);

create index id_game
    on Orders (id);

create index id_seller
    on Orders (id);