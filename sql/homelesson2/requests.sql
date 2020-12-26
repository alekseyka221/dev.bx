#1. Подсчитать количество книг каждого автора (наименований). Столбцы ответа: Имя автора, общее количество книг
SELECT author.NAME, count(*)

FROM author
	JOIN author_book ON author.ID = author_book.AUTHOR_ID
GROUP BY author.ID;

#2. Подсчитать суммарный остаток книг каждого автора во всех магазинах. Столбцы ответа: Имя автора, Город магазина, Суммарный остаток книг
SELECT a.NAME, s.CITY, SUM(QUANTITY)

FROM book_store bs
	JOIN store s ON bs.STORE_ID = s.ID
	JOIN ab ab ON bs.BOOK_ID = ab.BOOK_ID
	JOIN author a ON ab.AUTHOR_ID = a.ID
GROUP BY a.NAME, s.CITY;

#3. Вывести среднюю стоимость книг издательства "Азбука". Столбцы ответа: Название книги, средняя стоимость.
SELECT b.NAME, AVG(PRICE)

FROM book b
	JOIN book_store bs ON b.ID = bs.BOOK_ID
	JOIN publisher p ON b.PUBLISHER_ID = p.ID
WHERE p.ID=3;

#4. Вывести среднюю стоимость книг издательства "Азбука" в каждом магазине. Столбцы ответа: Город, Название книги, средняя стоимость
SELECT s.CITY, b.NAME, AVG(PRICE)

FROM book b
	JOIN book_store bs ON b.ID = bs.BOOK_ID
	JOIN publisher p ON b.PUBLISHER_ID = p.ID
	JOIN store s ON bs.STORE_ID = s.ID
WHERE p.ID=3
GROUP BY s.CITY, b.NAME;

#5. Вывести разницу между остатком книг в Калининграде и Черняховске.
#Столбцы ответа: Название книги, остаток в Калининграде, остаток в Черняховске, Разница.
SELECT b.NAME,
       SUM(IF(store_id = 1, QUANTITY, 0)) AS QUANTITY_KLD,
       SUM(IF(store_id = 2, QUANTITY, 0)) AS QUANTITY_CHK,
       SUM(IF(store_id = 1, QUANTITY, 0)) - SUM(IF (store_id = 2, QUANTITY, 0)) AS DIFF
FROM book_store bs
	JOIN book b ON bs.BOOK_ID = b.ID
GROUP BY b.NAME;


