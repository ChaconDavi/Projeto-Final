select * from cliente;
SELECT BANCO, count(distinct ID_CONTA)as b from CLIENTE GROUP BY BANCO HAVING b>=3;