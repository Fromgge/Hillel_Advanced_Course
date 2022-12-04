INSERT INTO Customers (first_name, last_name, phone_number, date_of_birthday, email)
VALUES ('Nikita', 'Kotlyar', 0930839222, '1997-09-19', 'gapjames1@gmail.com');

INSERT INTO Customers (first_name, last_name, phone_number, date_of_birthday, email)
VALUES ('Dima', 'Starokon', 0933335522, '1992-01-22', 'gapjames1@gmail.com');

INSERT INTO Customers (first_name, last_name, phone_number, date_of_birthday, email)
VALUES ('Andrey', 'Vitun', 0932139900, '2002-11-19', 'gapjames1@gmail.com');

INSERT INTO Customers (first_name, last_name, phone_number, date_of_birthday, email)
VALUES ('Alexey', 'Chudak', 0933565429, '1974-12-2', 'gapjames1@gmail.com');

INSERT Games (platform, genre, game_name, release_date)
VALUES ('PC','Action','Serious Sam', '2001-01-01');

INSERT Games (platform, genre, game_name, release_date)
VALUES ('XBOX','Action','Call of Duty: MW2', '2022-09-01');

INSERT Games (platform, genre, game_name, release_date)
VALUES ('PS4','Horror','Untill Dawn', '2009-05-07');

INSERT Games (platform, genre, game_name, release_date)
VALUES ('PC','Simulator','Sims 4', '2010-05-05');

UPDATE Customers
SET first_name = 'Nikitosik', last_name = 'Kotlyarovskiy'
WHERE id = 1;

DELETE FROM Customers Where id = 4;

SELECT first_name from Customers;

SELECT * from Games;

SELECT Customers.first_name, Orders.id
FROM Customers
         LEFT JOIN Orders on Customers.id = Orders.id_customer
ORDER BY Customers.first_name

SELECT s.first_name as Seller_name, c.first_name as Customer_name, g.platform as platforma
FROM Sellers as s, Customers as c, Games as g, Orders as o
WHERE o.id = s.id

SELECT c.first_name as customer_name, o.payment as pay_to_game,g.genre as genre, g.game_name as game, c.date_of_birthday as customer_burhday
FROM Customers as c, Games as g, Sellers as s
LEFT JOIN Orders o ON o.id = o.seller_id

# тут был немного другой код во 2 строке
# но код не смогу найти так как не сохранил как он выдался в Games
# но внешний ключ именно так и удалил
ALTER TABLE Games
DROP FOREIGN KEY FK_id_creator;

ALTER TABLE Customers
RENAME COLUMN DOB TO date_of_birthday;





