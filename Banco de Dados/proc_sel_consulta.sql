CREATE PROCEDURE `PROC_SEL_CONSULTA` ()
BEGIN
SELECT 
    `consulta`.`dataConsulta`,
    `consulta`.`medico`,
    `consulta`.`paciente_id`
FROM `clinica`.`consulta`;

END
