CREATE TABLE pay_method (
pay_id int,
card_name varchar(80)
);

CREATE TABLE budget_item (
budget_id int,
budget_name varchar(80)
);


CREATE TABLE vendors (
vendor_id int,
vendor_name varchar(80)
);

CREATE TABLE transaction (
trans_id int,
date date,
vend_id int,
payment_id int,
budget_id int
);




