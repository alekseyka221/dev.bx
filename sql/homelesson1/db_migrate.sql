CREATE TABLE IF NOT EXISTS store
(
	ID int not null auto_increment,
	CITY varchar(50) not null,
	PRIMARY KEY (ID)
);

INSERT INTO store (ID, CITY)
VALUES (1, 'Калининград'),
       (2, 'Черняховск'),
       (3, 'Советск');


CREATE TABLE IF NOT EXISTS book_store
(
	STORE_ID int not null,
	BOOK_ID int not null,
	PRICE DECIMAL(10, 2),
	QUANTITY int unsigned not null default 0,
	PRIMARY KEY (STORE_ID, BOOK_ID),
	INDEX IX_BOOK (BOOK_ID),
	FOREIGN KEY FK_STORE_BOOK_STORE (STORE_ID) references store(ID)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	FOREIGN KEY FK_STORE_BOOK_BOOK (BOOK_ID) references book(ID)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
);

INSERT INTO book_store (STORE_ID, BOOK_ID, PRICE, QUANTITY)
SELECT 1, ID, PRICE, QUANTITY FROM book;

ALTER TABLE book DROP PRICE, DROP QUANTITY;