CREATE TABLE desks_r_us.customer (
    CID INT PRIMARY KEY,
    FName varchar(32),
    LName varchar(32),
    Status varchar(32),
    Email varchar(64),
    Address varchar(128),
    Phone char(10)
);


CREATE TABLE desks_r_us.creditcard (
    CardNumber char(16),
    SecNumber char(3),
    CardOwnerName varchar(64),
    CardType varchar(16),
    BillingAddress varchar(128),
    ExpDate char(5)
);


CREATE TABLE desks_r_us.storedcard (
    CardNumber char(16),
    CID INT,
    PRIMARY KEY (CardNumber, CID),
    FOREIGN KEY (CID) REFERENCES desks_r_us.customer(CID),
    FOREIGN KEY (CardNumber) REFERENCES desks_r_us.creditcard(CardNumber) 
);