DELETE FROM desks_r_us.bookcase WHERE 1;
DELETE FROM desks_r_us.chair WHERE 1;
DELETE FROM desks_r_us.desk WHERE 1;
DELETE FROM desks_r_us.cartitem WHERE 1;
DELETE FROM desks_r_us.product WHERE 1;
DELETE FROM desks_r_us.cart WHERE 1;
DELETE FROM desks_r_us.silverandabove WHERE 1;
DELETE FROM desks_r_us.storedcard WHERE 1;
DELETE FROM desks_r_us.shipaddress WHERE 1;
DELETE FROM desks_r_us.customer WHERE 1;
DELETE FROM desks_r_us.creditcard WHERE 1;


INSERT INTO desks_r_us.customer
     VALUES (
             1,
             "John",
             "James",
             "regular",
             "jj@gmail.com",
             "1 College St",
             "1111111111"
            );


INSERT INTO desks_r_us.customer
     VALUES (
             2,
             "Jill",
             "Madison",
             "platinum",
             "jm@gmail.com",
             "2 College St",
             "2222222222"
            );


INSERT INTO desks_r_us.customer
     VALUES (
             3,
             "Vicky",
             "Williams",
             "regular",
             "vw@gmail.com",
             "3 College St",
             "3333333333"
            );


INSERT INTO desks_r_us.creditcard
     VALUES (
             "1111111111111111",
             "111",
             "John James",
             "VISA",
             "1 College St",
             "01/11"
            );


INSERT INTO desks_r_us.creditcard
     VALUES (
             "2222222222222222",
             "222",
             "Jill Madison",
             "Mastercard",
             "2 College St",
             "02/22"
            );


INSERT INTO desks_r_us.creditcard
     VALUES (
             "3333333333333333",
             "333",
             "Vicky Williams",
             "VISA",
             "3 College St",
             "03/33"
            );


INSERT INTO desks_r_us.storedcard
     VALUES (
             "1111111111111111",
             1
            );


INSERT INTO desks_r_us.storedcard
     VALUES (
             "2222222222222222",
             2
            );


INSERT INTO desks_r_us.storedcard
     VALUES (
             "3333333333333333",
             3
            );


INSERT INTO desks_r_us.shipaddress
     VALUES (
             "Home",
             1,
             "John James",
             1,
             "College St",
             "12345",
             "Newark",
             "United States of America",
             "New Jersey"
            );


INSERT INTO desks_r_us.shipaddress
     VALUES (
             "Home",
             2,
             "Jill Madison",
             2,
             "College St",
             "12345",
             "Newark",
             "United States of America",
             "New Jersey"
            );


INSERT INTO desks_r_us.shipaddress
     VALUES (
             "Home",
             3,
             "Vicky Williams",
             3,
             "College St",
             "12345",
             "Newark",
             "United States of America",
             "New Jersey"
            );


INSERT INTO desks_r_us.silverandabove
     VALUES (
             1,
             1,
             "Credit Line 1"
            );


INSERT INTO desks_r_us.silverandabove
     VALUES (
             2,
             2,
             "Credit Line 2"
            );


INSERT INTO desks_r_us.silverandabove
     VALUES (
             3,
             3,
             "Credit Line 3"
            );


INSERT INTO desks_r_us.product
     VALUES (
             1,
             "Lamp",
             34.99,
             "light fixture",
             10,
             "Nice lamp to light up dark places"
            );

INSERT INTO desks_r_us.product
     VALUES (
             2,
             "Ceiling Fan",
             64.99,
             "fan",
             5,
             "Ceiling fan to cool you down"
            );


INSERT INTO desks_r_us.product
     VALUES (
             3,
             "Student Desk",
             32.99,
             "desk",
             4,
             "Cheap desk for students"
            );


INSERT INTO desks_r_us.product
     VALUES (
             4,
             "Office Desk",
             120.99,
             "desk",
             7,
             "Good desk for offices"
            );


INSERT INTO desks_r_us.product
     VALUES (
             5,
             "Student Chair",
             20.99,
             "chair",
             2,
             "Cheap chair for a dormitory"
            );


INSERT INTO desks_r_us.product
     VALUES (
             6,
             "Office Chair",
             90.99,
             "chair",
             7,
             "Comfortable chair for professional office"
            );


INSERT INTO desks_r_us.product
     VALUES (
             7,
             "Student Bookcase",
             31.99,
             "bookcase",
             2,
             "Cheap bookcase to hold textbooks"
            );


INSERT INTO desks_r_us.product
     VALUES (
             8,
             "Office Bookcase",
             3331.99,
             "bookcase",
             2,
             "Expensive bookcase for the elites"
            );


INSERT INTO desks_r_us.desk
     VALUES (
             3,
             "raised panel drawers",
             "wood"
            );


INSERT INTO desks_r_us.desk
     VALUES (
             4,
             "inset panel drawers",
             "mahogany"
            );


INSERT INTO desks_r_us.chair
     VALUES (
             5,
             "chiffon",
             "desk chair"
            );


INSERT INTO desks_r_us.chair
     VALUES (
             6,
             "denim",
             "executive chair"
            );


INSERT INTO desks_r_us.bookcase
     VALUES (
             7,
             "plastic",
             "standard"
            );


INSERT INTO desks_r_us.bookcase
     VALUES (
             8,
             "wood",
             "barrister"
            );