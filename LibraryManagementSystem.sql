-- Table: register (Contains student/staff details)
CREATE TABLE register (
    fname VARCHAR(20),
    lname VARCHAR(20),
    Id VARCHAR(5) PRIMARY KEY,
    Branch VARCHAR(10),
    Email VARCHAR(20),
    Password VARCHAR(20)
);

-- Table: books (Contains details of books in the Library)
CREATE TABLE books (
    Bid VARCHAR(5) PRIMARY KEY,
    Bname VARCHAR(20),
    Bauthor VARCHAR(20),
    Copies INTEGER
);

-- Table: issue (Contains details of books issued by students)
CREATE TABLE issue (
    Sid VARCHAR(20),
    Bid VARCHAR(20),
    Issue_date DATE,
    Last_date DATE,
    PRIMARY KEY(Sid, Bid)
);

-- Table: recommend (Contains details of books recommended to the admin)
CREATE TABLE recommend (
    Bname VARCHAR(20),
    Bauthor VARCHAR(20)
);

-- Table: issue_request (Contains details of book issue requests)
CREATE TABLE issue_request (
    Sid VARCHAR(10),
    Bid VARCHAR(10),
    PRIMARY KEY(Sid, Bid)
);

-- Table: renew_request (Contains details of book renewal requests)
CREATE TABLE renew_request (
    Sid VARCHAR(10),
    Bid VARCHAR(10),
    PRIMARY KEY(Sid, Bid)
);

-- Table: return_request (Contains details of book return requests)
CREATE TABLE return_request (
    Sid VARCHAR(10),
    Bid VARCHAR(10),
    Admin_response VARCHAR(20),
    PRIMARY KEY(Sid, Bid)
);

-- Table: response (Contains admin responses for issue requests)
CREATE TABLE response (
    Sid VARCHAR(10),
    Bid VARCHAR(10),
    Admin_response VARCHAR(20),
    PRIMARY KEY(Sid, Bid)
);


-- Table: return_request (Contains details of book return requests)
CREATE TABLE return_response (
    Sid VARCHAR(10),
    Bid VARCHAR(10),
    Admin_response VARCHAR(20),
    PRIMARY KEY(Sid, Bid)
);

-- Table: renew_request (Contains details of book renewal requests)
CREATE TABLE renew_response (
    Sid VARCHAR(10),
    Bid VARCHAR(10),
    Admin_response VARCHAR(20),
    PRIMARY KEY(Sid, Bid)
);

-- Foreign key constraint for 'Sid' in each table referencing 'Id' in 'register' table
ALTER TABLE issue
ADD CONSTRAINT fk_issue_Sid FOREIGN KEY (Sid) REFERENCES register(Id);

ALTER TABLE issue_request
ADD CONSTRAINT fk_issue_request_Sid FOREIGN KEY (Sid) REFERENCES register(Id);

ALTER TABLE renew_request
ADD CONSTRAINT fk_renew_request_Sid FOREIGN KEY (Sid) REFERENCES register(Id);

ALTER TABLE return_request
ADD CONSTRAINT fk_return_request_Sid FOREIGN KEY (Sid) REFERENCES register(Id);

ALTER TABLE response
ADD CONSTRAINT fk_response_Sid FOREIGN KEY (Sid) REFERENCES register(Id);

ALTER TABLE renew_response
ADD CONSTRAINT fk_renew_request_Bid FOREIGN KEY (Sid) REFERENCES register(Id);

ALTER TABLE return_response
ADD CONSTRAINT fk_return_request_Bid FOREIGN KEY (Bid) REFERENCES register(Id);


-- Foreign key constraint for 'Bid' in each table referencing 'Bid' in 'books' table
ALTER TABLE issue
ADD CONSTRAINT fk_issue_Bid FOREIGN KEY (Bid) REFERENCES books(Bid);

ALTER TABLE issue_request
ADD CONSTRAINT fk_issue_request_Bid FOREIGN KEY (Bid) REFERENCES books(Bid);

ALTER TABLE renew_request
ADD CONSTRAINT fk_renew_request_Bid FOREIGN KEY (Bid) REFERENCES books(Bid);

ALTER TABLE return_request
ADD CONSTRAINT fk_return_request_Bid FOREIGN KEY (Bid) REFERENCES books(Bid);

ALTER TABLE response
ADD CONSTRAINT fk_response_Bid FOREIGN KEY (Bid) REFERENCES books(Bid);

ALTER TABLE renew_response
ADD CONSTRAINT fk_renew_request_Bid FOREIGN KEY (Bid) REFERENCES books(Bid);

ALTER TABLE return_response
ADD CONSTRAINT fk_return_request_Bid FOREIGN KEY (Bid) REFERENCES books(Bid);
