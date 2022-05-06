DROP DATABASE if exists FAQ;
CREATE DATABASE FAQ;
USE FAQ;
CREATE TABLE inquiry (
	question varchar(250),
    recency datetime,
    id int auto_increment primary key
);
INSERT INTO inquiry (question, recency)
VALUES 
	( 'How do I register my pet for a stay at the kennels?', now()),
    ( 'Where do I make my account for the website?', now()),
    ( 'What services will be provided for my pet once I bring them in?', now());
CREATE TABLE resp (
	question varchar(100),
    response varchar(800),
    id int auto_increment primary key
);
INSERT INTO resp (question, response)
VALUES
	( 'How do I register my pet for a stay at the kennels?', 'It is very simple to get your own account started. This can be done at our website''s sign-up page. There, you will be asked to register so we can be in contact with you while your Dog is under our care! Simply go to our page and enter your email and phone number, and you''re done!'),
    ( 'What services are provided for My dog?', 'Here at Happy Avlley Kennels, your Dog''s health and wellbeing are our top priority! We will be sure to provide your pet with all required medical attention it needs, be sure it gets regular play time, and is kept safe during its entire stay! Our Nurses are trained professionals and will make sure your dog recieves its proper perscriptions. Our staff will also be actively overseeing your pet''s activities. Our hope is that your dog will be excited for any visit back to our establishment!');