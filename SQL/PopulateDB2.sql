USE HAPPY_KENNEL;

INSERT INTO owners(first_name, last_name, email_address, password) VALUES ("Bill", "Nye", "science_guy@test.edu", "I<3Sporky");

INSERT INTO dogs(owner_id, name) VALUES (1, "Sporky");

INSERT INTO cages(cage_size) VALUES ("Large");

INSERT INTO employees(role, first_name, last_name, password, pending_reset) VALUES ("Employee", "Bill", "Board", "$2y$10$EU6Me6ejb7P.J1wOoaognO55VHMvt3iSw.gG8izmlCVEZQPzPH75a", False), ("Human Resources", "Laura", "Ipsum", "$2y$10$EU6Me6ejb7P.J1wOoaognO55VHMvt3iSw.gG8izmlCVEZQPzPH75a", False); 

INSERT INTO open_drop_offs(owner_id, dog_id, cage_id, drop_date, retrieve_date) VALUES (1, 1, 1, now(), date_add(now(), INTERVAL 3 DAY));

/* TEST STATEMENTS
SELECT * FROM owners;
SELECT * FROM dogs;
SELECT concat(first_name, " " ,last_name) AS "Owner", name AS "Dog", drop_date AS "Dropped Off", retrieve_date AS "Will Be Picked Up"
	FROM open_drop_offs JOIN owners
		ON open_drop_offs.owner_id = owners.owner_id
	JOIN dogs
		ON open_drop_offs.dog_id = dogs.dog_id;
*/

DROP USER IF EXISTS "HR"@"localhost";
CREATE USER "HR"@"localhost" IDENTIFIED BY "HR";
GRANT SELECT, UPDATE, INSERT ON happy_kennel.employees TO "HR"@"localhost";

DROP USER IF EXISTS "logincheck"@"localhost";
CREATE USER "logincheck"@"localhost" IDENTIFIED BY "loginmanage";
GRANT SELECT, UPDATE ON happy_kennel.employees TO "logincheck"@"localhost";