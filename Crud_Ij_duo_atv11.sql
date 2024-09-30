create table usuario (
id int primary key auto_increment,
nome varchar(50) not null unique ,
email varchar(100) not null unique 
);

create table notas(
id int primary key auto_increment,
nota varchar (500) not null,
titulo varchar (50),
dono varchar(50),
foreign key (dono) references usuario(nome)
);


CREATE TABLE usuario_notas (
    usuario_id INT,
    nota_id INT,
    PRIMARY KEY (usuario_id, nota_id),
    FOREIGN KEY (usuario_id) REFERENCES usuario(id),
    FOREIGN KEY (nota_id) REFERENCES notas(id)
);
