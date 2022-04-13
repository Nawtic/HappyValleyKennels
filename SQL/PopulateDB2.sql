USE HAPPY_KENNEL;

INSERT INTO owners(first_name, last_name, email_address) VALUES ("Bill", "Nye", "science_guy@test.edu");

INSERT INTO dogs(owner_id, name) VALUES (1, "Sporky");

INSERT INTO open_drop_offs(owner_id, dog_id, drop_date, retrieve_date) VALUES (1, 1, now(), date_add(now(), INTERVAL 3 DAY));

SELECT * FROM owners;
SELECT * FROM dogs;
SELECT concat(first_name, " " ,last_name) AS "Owner", name AS "Dog", drop_date AS "Dropped Off", retrieve_date AS "Will Be Picked Up"
	FROM open_drop_offs JOIN owners
		ON open_drop_offs.owner_id = owners.owner_id
	JOIN dogs
		ON open_drop_offs.dog_id = dogs.dog_id;