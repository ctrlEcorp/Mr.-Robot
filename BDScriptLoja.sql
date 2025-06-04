# Criar banco de Dados

create database loja;

use loja;

drop database loja; -- Apagar banco de dados
# Criar Tabelas
create table clientes(
id_cliente int not null auto_increment primary key,
nome varchar(100) not null,
email varchar(100) unique,
data_nascimento date,
criado_em timestamp default current_timestamp
);

show databases;

show tables;

select * from clientes;

create table pedidos(
id_pedido int not null auto_increment primary key,
data_pedido date not null,
valor_total decimal(10,2) not null, 
id_cliente int not null,
status varchar(45),
check(status in('pendente','enviado','cancelado')),
foreign key (id_cliente) references clientes(id_cliente)
);

create table produtos(
id_produto int not null auto_increment primary key,
nome_produto varchar(45) not null,
preco decimal(10,2) not null,
estoque int default 0
);


alter table pedidos
add column id_produto int not null after id_cliente;

select * from pedidos;
select * from clientes;
##################################################
insert into clientes (nome,email,data_nascimento)
values('Maria das Dores','maria@gmail','1985-08-07');

delete from clientes where id_cliente = 2;

alter table pedidos

modify column status varchar(45) after valor_total;

insert into pedidos (data_pedido,valor_total,status,id_cliente,id_produto)
values ('2025-06-02',1200.85,'pendente',1,10);

############################################################

select * from produtos;

delete from pedidos where id_pedido = 2;

insert into produtos (nome_produto,preco,estoque) value ('Celular',1500,20),
('Teclado',150.75,21);

update produtos set preco = 7500 where id_produto = 1; -- sempre colocar where para descrever onde deseja alterar


#############################################################
select * from produtos where preco > 150 and preco < 800;

select * from produtos where preco between 150 and 2000;

select * from produtos where nome_produto like '%book%';  -- quando esta no meio
select * from produtos where nome_produto like 'book%';  -- quando esta no inicio
select * from produtos where nome_produto like '%book';  -- quando esta no final

select * from produtos order by preco asc; -- desc é para colocar em ordem decrescente

describe produto;

alter table produto  -- para trocar o nome da tabela
rename to produtos;
select * from produto;
select *from pedidos;
############################################################

select pedidos.id_pedido, clientes.nome
from pedidos
inner join clientes on pedidos.id_cliente = clientes.id_cliente;

