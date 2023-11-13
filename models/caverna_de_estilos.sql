create database caverna_de_estilos;
use caverna_de_estilos;

create table loja_virtual(	
	endereco_id int primary key not null,
	loja_nome		varchar(40) not null,
	loja_logo		varchar(10) not null,
	loja_foto_logo	varchar(255) not null,
	loja_decricao	text not null,

) ENGINE =InnoDB;
insert into loja_virtual values(
	141,
	"Caverna De Estilos",
	"C. DE E.",
	"logo.png",
	"No entanto, é importante ressaltar que a informática na área da saúde também apresenta desafios, como a segurança e privacidade dos dados médicos, a integração de sistemas diferentes e a necessidade de treinamento adequado para os profissionais de saúde. A implementação eficaz da informática na saúde requer considerações éticas, legais e técnicas para garantir que os benefícios sejam maximizados e os riscos minimizados."
);


create table Admin(
	admin_id int primary key not null,
	admin_nome		varchar(30) not null,
	admin_email		varchar(40) not null,
	admin_senha		varchar(10) not null,
	admin_telefone	varchar(15) not null,
	admin_foto 		text
) ENGINE =InnoDB;
insert into Admin values(14001,"Admin","AdminCaverna@gmail.com","caverna1","+244934212345","adm_perfil.png");


create table enderecos(
	endereco_id int primary key not null,
	provincia	varchar(30) not null,
	municipio	varchar(40) not null,
	distrito	varchar(10) not null,
	bairro	varchar(15) not null,
	rua		varchar(15) not null,
	casa	varchar(15) not null
) ENGINE =InnoDB;
insert into enderecos values(141,"Luanda","Kilamba Kiaxi","Palanca","bairro S/Nome","Raua - F","Casa S/Nome");


create table clientes(
	cliente_id 		int primary key not null,
	cliente_nome	varchar(30) not null,
	cliente_sobrenome	varchar(30) not null,
	cliente_email	varchar(40) not null,
	cliente_tel		varchar(13) not null,
	cliente_senha	varchar(16) not null,
    cliente_sexo	varchar(9) not null,
    cliente_nasc	DATe not null
) ENGINE =InnoDB;
insert into clientes values(
	201,
	"Jorge",
	"Aderito",
	"jorgeaderito@email.com",
	"+244923456734",
	"JA012345",
	"Masculino","2002-11-27"
);


create table categorias(
	categoria_id 		int primary key not null auto_increment,
	categoria_nome		varchar(30) not null
) ENGINE =InnoDB;
INSERT INTO `categorias`( `categoria_nome`) VALUES( "Calções"),("Casacos"),("Blases"),("Chapeus");


create table prdutos(
	prduto_id 		int primary key not null auto_increment,
	prduto_nome		varchar(30) not null,
	prduto_preco	decimal(12,2) not null,
	prduto_iva		decimal(12,2) not null,
	prduto_qtd		int not null,

	prduto_cores	json not null,
	prduto_fotos	json not null,
	prduto_catg_id	int not null,

	prduto_genero	varchar(9) not null,
	prduto_data		date not null,
	prduto_atualiz	date,

	constraint endereco FOREIGN KEY (prduto_catg_id) REFERENCES categorias(categoria_id)
) ENGINE =InnoDB;
INSERT INTO `prdutos` (
	`prduto_id`,
	`prduto_nome`,
	`prduto_preco`,
	`prduto_iva`,
	`prduto_qtd`,
	`prduto_cores`,
	`prduto_fotos`,
	`prduto_catg_id`,
	`prduto_genero`,
	`prduto_data`,
	`prduto_atualiz`
)
VALUES (
	NULL,
	'Adidas 360º',
	'25500.06',
	'1455.05',
	'20',
	"['Verde','Amarelo', Preto]",
	"[\'foto0.jpg\','foto1.png']",
	6,
	'todos',
	'2023-10-27',
	NULL)
; 