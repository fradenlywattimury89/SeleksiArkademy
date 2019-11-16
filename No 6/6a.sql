SELECT c.name cashier,p.name,k.name category,p.price
FROM product p
LEFT JOIN category k USING (id_category)
LEFT JOIN cashier c USING (id_cashier);
