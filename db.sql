create table game (
    id_game  varchar(5),
    name_game varchar(20),
    price number(4),
    type_game varchar(10),
    info varchar(20),
    constraints game_pk primary key (id_game)
);