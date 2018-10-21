SELECT * FROM products INNER JOIN categories 
ON products.categoryID = categories.categoryID
WHERE categories.categoryName = 'Guitars'
AND products.listPrice > 500