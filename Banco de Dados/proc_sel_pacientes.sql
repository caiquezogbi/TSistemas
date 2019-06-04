CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_SEL_PACIENTE`()
BEGIN
SELECT `usuario`.`nome` FROM `clinica`.`usuario`;

END