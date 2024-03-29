create database clinica;

CREATE TABLE `usuario` (
  `id_cadastro` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `planoSaude` varchar(45) DEFAULT NULL,
  `dataNascimento` varchar(15) DEFAULT NULL,
  `responsavel`varchar(200) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `endereco`varchar(100) DEFAULT NULL,
  `bairro`varchar(45) DEFAULT NULL,
  `cidade`varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_cadastro`)
) ENGINE=InnoDB;

CREATE TABLE `consulta` (
  `id_consulta` int(11) NOT NULL AUTO_INCREMENT,
  `sintomas` varchar(255) DEFAULT NULL,
  `historico` varchar(255) DEFAULT NULL,
  `dataConsulta` varchar(15) DEFAULT NULL,
  `medico`varchar(255) DEFAULT NULL,
  `observacoes`varchar(255) DEFAULT NULL,
  `paciente_id` varchar (200),
  PRIMARY KEY (`id_consulta`)
  
) ENGINE=InnoDB;