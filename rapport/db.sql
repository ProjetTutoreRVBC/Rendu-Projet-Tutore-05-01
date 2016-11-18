create table Nostreamer (
    mailNostreamer varchar(40) not null,
    pseudoNostreamer varchar(30) primary key,
    passNostreamer varchar(40)not null);

create table Page(
    idPage int primary key auto_increment,
    pseudoNostreamer varchar(30) not null,
    descriptionPage text,
    foreign key(pseudoNostreamer) references Nostreamer(pseudoNostreamer));

create table Channel(
    nameChannel varchar(50) primary key,
    pseudoNostreamer varchar(30) not null,
    subscribersChannel int default 0,
    descriptionChannel text,
    creationDateChannel ,
    viewsChannel int default 0);

create table Post(
    idPost int primary key auto_increment,
    idPage int not null,
    nameChannel varchar(50) not null,
    titlePost varchar(50),
    datePost date default NOW(),
    messagePost text not null,
    foreign key(idPage) references Page(idPage),
    foreign key(nameChannel) references Channel(nameChannel));

create table Video(
    idVideo int primary key auto_increment,
   nameVideo varchar(40) not null,
   dateVideo date default NOW(),
   viewsVideo int default 0,
   descriptionVideo text,
   nbRateVideo int default 0,
   rateVideo float);

create table Comment(
    idComment int primary key auto_increment,
    titleComment varchar(50),
    dateComment date default NOW(),
    messageComment text not null,
    nbRateComment int default 0,
    rateComment float,
    pseudoNostreamer varchar(30) not null,
    idPost int,
    nameChannel varchar(50),
    idVideo int,
    foreign key(pseudoNostreamer) references Nostreamer(pseudoNostreamer),
    foreign key(idPost) references Post(idPost),
    foreign key(nameChannel) references Channel(nameChannel),
    foreign key(idVideo) references Video(idVideo));

create table SubscribedChannel(
    idNostreamer int,
    idChannel int,
    primary key(idNostreamer,idChannel),
    foreign key(idChannel) references Channel(idChannel),
    foreign key(idNostreamer) references Nostreamer(idNostreamer));
    
create table SubscribedPage(
    idNostreamer int,
    idPage int,
    primary key(idNostreamer,idPage),
    foreign key(idPage) references Page(idPage),
    foreign key(idNostreamer) references Nostreamer(idNostreamer));