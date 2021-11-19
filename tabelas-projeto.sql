create table contato(
    id_nome serial,
    nome varchar (80) not null,
    email varchar (100) not null,
    telefone varchar(30) not null,
    mensagem varchar (550),
    PRIMARY KEY (id_nome)
);