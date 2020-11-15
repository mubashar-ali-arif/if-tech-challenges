## Produce queries to answer the following questions

-- Find author by name "Leo" 
	SELECT * FROM db_schema_challenge.authors WHERE NAME like '%Leo%'; 
	--O(n)

-- Find books of author "Fitzgerald"
	SELECT * FROM db_schema_challenge.books WHERE author LIKE '%Fitzgerald%';
	--O(n)
	
-- Find authors without books 
	SELECT a.* FROM db_schema_challenge.authors a LEFT JOIN db_schema_challenge.books b ON a.name = b.author WHERE b.author IS NULL;
	-- minimum O(n log(n))
	-- maximum O(n^2)

	
-- Count books per country
	SELECT A.COUNTRY, COUNT(B.NAME) AS BOOK_COUNT FROM DB_SCHEMA_CHALLENGE.AUTHORS A LEFT JOIN DB_SCHEMA_CHALLENGE.BOOKS B ON A.NAME = B.AUTHOR GROUP BY A.COUNTRY ORDER BY A.COUNTRY;
	-- minimum O(n log(n))
	-- maximum O(n^2)


-- Count average book length (in pages) per author	
	SELECT A.name, CAST(COALESCE(AVG(b.pages),0) AS DECIMAL(10,2)) FROM DB_SCHEMA_CHALLENGE.AUTHORS A LEFT JOIN DB_SCHEMA_CHALLENGE.BOOKS B ON A.NAME = B.AUTHOR GROUP BY a.name ORDER BY A.name;
	-- minimum O(n log(n))
	-- maximum O(n^2)


## Analyze and explain the time complexity of the queries
	-- [Mubashar Ali] As there is no indexing on columns which are being used in WHERE clause, the time complexity will be minimum or maximum as the complexity of the queries is based on the execution time and the result set which is proportional of each other.
	
## Include potential suggestions on how to improve it.
	-- [Mubashar Ali] We can improve in many ways as mentioned below:-
		-- Normalize the database minimum 3NF.
		-- Create necessary indexing.
		-- Apply caching technique.
		-- Use database engine wisely based on the data operations. 
		-- Use Load Balancer if necessary.
	
## Consider that there might be millions of authors with millions of books.
	-- [Mubashar Ali] Create indexing on columns (e.g AUTHOR.NAME, BOOKS.AUTHOR etc.) which are being used in WHERE CALUSE that would speed up the execution time.