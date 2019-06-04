CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_IN_PACIENTE`(IN nome varchar(200), IN cpf varchar(45),  IN planoSaude varchar(45), IN dataNascimento varchar(45), IN responsavel varchar(45),  IN telefone varchar(45), IN endereco varchar(100), IN bairro varchar(45),  IN cidade varchar(45))
BEGIN
INSERT INTO `clinica`.`usuario`
(
`nome`,
`cpf`,
`planoSaude`,
`dataNascimento`,
`responsavel`,
`telefone`,
`endereco`,
`bairro`,
`cidade`)
VALUES
(
nome,
cpf,
planoSaude,
dataNascimento,
responsavel,
telefone,
endereco,
bairro,
cidade);
END