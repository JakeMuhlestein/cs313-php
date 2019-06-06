CREATE TABLE pay_method (
id SERIAL,
card_name VARCHAR(255),
PRIMARY KEY (id)
);

CREATE TABLE budget_item (
id SERIAL,
budget_name VARCHAR (255),
PRIMARY KEY(id)
);


CREATE TABLE vendors (
id SERIAL,
vendor_name VARCHAR (255),
PRIMARY KEY(id)
);

CREATE TABLE transaction (
id SERIAL,
date date,
vend_id int,
payment_id int,
budget_id int,
PRIMARY KEY (id),
FOREIGN KEY (vend_id) REFERENCES vendors (id),
FOREIGN KEY (payment_id) REFERENCES pay_method (id),
FOREIGN KEY (budget_id) REFERENCES budget_item (id)
);


INSERT INTO transaction 
(transdate, vend_id, payment_id, budget_id, amount)
VALUES (:transDate, :vendor, :payment, :budget, :amount);

UPDATE budget_Item
SET budget_amount = $amount
WHERE budget_name = $budget;