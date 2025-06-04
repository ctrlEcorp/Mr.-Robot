create database clinica;

use clinica;

create table pessoas(
id_pessoa int not null auto_increment primary key,
nome varchar(100) not null,
cpf int not null unique,
telefone int not null,
genero varchar(45) not null,
estado_civil varchar(45)  not null
);

create table medicos(
id_medico int not null primary key,
crm int not null unique,
especialidade varchar(45),
id_pessoa int not null,
foreign key (id_pessoa) references pessoas(id_pessoa)
);

create table pacientes(
id_paciente int not null auto_increment primary key,
patologia  varchar (45) not null,
comorbidade  varchar(45) not null,
id_pessoa int not null,
foreign key  (id_pessoa) references pessoas(id_pessoa)
);

create table consultas(
id_consulta int not null auto_increment primary key,
data_consulta date not null,
hora_consulta time not null,
observacao text,
id_medico int not null,
id_paciente int not null,
id_pessoa int not null,
foreign key (id_medico) references medicos(id_medico),
foreign key (id_paciente) references pacientes(id_paciente),
foreign key (id_pessoa) references pessoas(id_pessoa)
);

create table exames(
id_exame int not null auto_increment primary key,
categoria varchar(45) not null,
resultado  varchar(45) not null,
id_consulta int not null,
foreign key (id_consulta) references consultas(id_consulta)
);

