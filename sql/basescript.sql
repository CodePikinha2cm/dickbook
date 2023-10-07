CREATE TABLE Usuario(
    IdUsuario int(4) not null auto_increment,
    Nome varchar(100) not null,
    Login varchar(100) not null,
    Senha varchar(255) not null,
    Primary key (IdUsuario),
);

CREATE TABLE Post(
    IdPost int(4) auto_increment not null,
    IdUsuario int(4) not null,
    Descricao varchar(255) not null,
    Primary key (IdPost)
    FOREIGN key (IdUsuario) REFERENCES Usuario (IdUsuario),
);

CREATE TABLE PostImages(
    IdPostImage int(4) auto_increment not null,
    IdPost int(4) not null,
    Arquivo BLOB not null,
    Primary key (IdPostImage)
    FOREIGN key (IdUsIdPostuario) REFERENCES Post (IdPost),
);