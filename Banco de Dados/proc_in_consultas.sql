CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_IN_CONSULTA`(IN sintomas varchar(255), IN historico varchar(255), IN dataConsulta varchar(15), IN medico varchar(255), IN observacoes varchar(255), IN paciente_id varchar(200))
INSERT INTO `clinica`.`consulta`
(
`sintomas`,
`historico`,
`dataConsulta`,
`medico`,
`observacoes`,
`paciente_id`)
VALUES
(
sintomas,
historico,
dataConsulta,
medico,
observacoes,
paciente_id
)