create table movie(
     movieID int not null,
     title varchar(20) not null,
     rating int,
     primary key(movieID)
);

create table theatre(
     theatreID int not null,
     name varchar(20) not null,
     primary key(theatreID)
);

create table theatre_seat (
    seatID int not null primary key,
    seatRow char not null,
    seatCol int not null,
    theatreID int not null,
    foreign key (theatreID) references theatre(theatreID)
);

create table shows(
     showID int not null,
     showDate date not null,
     startTime time not null,
     movieID int not null,
     theatreID int not null,
     primary key(showID),
     foreign key (movieID) references movie(movieID),
     foreign key (theatreID) references theatre(theatreID)
);

create table user (
    userID int not null primary key,
    name varchar(20) not null,
    email varchar(50) not null,
    password varchar(10) not null,
    phone char(10) not null
);

create table booking (
    bookingID int not null primary key,
    numOfSeats int not null,
    userID int not null,
    showID int not null,
    foreign key (userID) references user(userID),
    foreign key (showID) references shows(showID) 
);

create table show_seat (
    showseatID int not null primary key,
    showID int not null,
    seatID int not null,
    bookingID int not null,
    foreign key (showID) references shows(showID),
    foreign key (seatID) references theatre_seat(seatID),
    foreign key (bookingID) references booking(bookingID)
);

create table payment (
    paymentID int not null primary key,
    amount int not null,
    time_stamp timestamp not null,
    paymentMethod varchar(30),
    bookingID int not null,
    foreign key (bookingID) references booking(bookingID)
);