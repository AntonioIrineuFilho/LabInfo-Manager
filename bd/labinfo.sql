create table professores(
	matricula integer NOT NULL,
	nome_cad varchar(100) NOT NULL,
	email varchar(100) NOT NULL,
	senha varchar(100) NOT NULL,

	primary key(email)
);


create  table data_horario(
	data_agend date NOT NULL,
	horario time NOT NULL,

	primary key(data_agend, horario)
);

create  table agendamentos(
	id integer AUTO_INCREMENT NOT NULL,
	nome_agend varchar(100) NOT NULL,
	email varchar(100) NOT NULL,
	data_agend date NOT NULL,
	horario time NOT NULL,

	primary key(id),
	foreign key(data_agend, horario) references data_horario(data_agend, horario),
	foreign key(email) references professores(email)
);
