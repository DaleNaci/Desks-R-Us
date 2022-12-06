DROP TABLE desks_r_us.bookcase;
DROP TABLE desks_r_us.chair;
DROP TABLE desks_r_us.desk;
DROP TABLE desks_r_us.cartitem;
DROP TABLE desks_r_us.product;
DROP TABLE desks_r_us.cart;
DROP TABLE desks_r_us.silverandabove;
DROP TABLE desks_r_us.storedcard;
DROP TABLE desks_r_us.shipaddress;
DROP TABLE desks_r_us.customer;
DROP TABLE desks_r_us.creditcard;


CREATE TABLE desks_r_us.customer (
    CID int(8),
    FName varchar(32),
    LName varchar(32),
    Status varchar(32),
    Email varchar(64),
    Address varchar(128),
    Phone char(10),
    PRIMARY KEY (CID)
);


CREATE TABLE desks_r_us.creditcard (
    CardNumber char(16),
    SecNumber char(3),
    CardOwnerName varchar(64),
    CardType varchar(16),
    BillingAddress varchar(128),
    ExpDate char(5),
    PRIMARY KEY (CardNumber)
);


CREATE TABLE desks_r_us.storedcard (
    CardNumber char(16),
    CID int(8),
    PRIMARY KEY (CardNumber, CID),
    FOREIGN KEY (CID) REFERENCES desks_r_us.customer(CID),
    FOREIGN KEY (CardNumber) REFERENCES desks_r_us.creditcard(CardNumber) 
);


CREATE TABLE desks_r_us.shipaddress (
    SAName varchar(128),
    CID int(8),
    ReceipientName varchar(32),
    SNumber int(8),
    Street varchar(64),
    Zip varchar(10),
    City varchar(32),
    Country varchar(32),
    State varchar(32),
    PRIMARY KEY (SAName),
    FOREIGN KEY (CID) REFERENCES desks_r_us.customer(CID)
);



CREATE TABLE desks_r_us.silverandabove (
    SAAId int(8),
    CID int(8),
    CreditLine varchar(32),
    PRIMARY KEY (SAAId),
    FOREIGN KEY (CID) REFERENCES desks_r_us.customer(CID)
);


CREATE TABLE desks_r_us.cart (
    CartId int(8),
    CardNumber char(16),
    CID int(8),
    SAName varchar(128),
    TStatus varchar(16),
    TDate varchar(16),
    TotalAmount double,
    PRIMARY KEY (CartId),
    FOREIGN KEY (CardNumber) REFERENCES desks_r_us.storedcard(CardNumber),
    FOREIGN KEY (CID) REFERENCES desks_r_us.customer(CID),
    FOREIGN KEY (SAname) REFERENCES desks_r_us.shipaddress(SAName)
);


CREATE TABLE desks_r_us.product (
    ProductId int(8),
    PName varchar(32),
    PPrice double,
    PType varchar(32),
    PQuantity double,
    PDescription varchar(256),
    PRIMARY KEY (ProductId)
);


CREATE TABLE desks_r_us.cartitem (
    CartId int(8),
    ProductId int(8),
    Quantity int(8),
    PriceSold double,
    PRIMARY KEY (CartId, ProductId),
    FOREIGN KEY (ProductId) REFERENCES desks_r_us.product(ProductId)
);


CREATE TABLE desks_r_us.desk (
    ProductId int(8),
    Drawers varchar(32),
    Material varchar(32),
    PRIMARY KEY (ProductId),
    FOREIGN KEY (ProductId) REFERENCES desks_r_us.product(ProductId)
);


CREATE TABLE desks_r_us.chair (
    ProductId int(8),
    Fabric varchar(32),
    Type varchar(32),
    PRIMARY KEY (ProductId),
    FOREIGN KEY (ProductId) REFERENCES desks_r_us.product(ProductId)
);


CREATE TABLE desks_r_us.bookcase (
    ProductId int(8),
    Material varchar(32),
    Shelves varchar(32),
    PRIMARY KEY (ProductId),
    FOREIGN KEY (ProductId) REFERENCES desks_r_us.product(ProductId)
);