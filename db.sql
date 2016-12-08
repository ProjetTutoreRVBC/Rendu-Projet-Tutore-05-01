create table Nostreamer (
    idNostreamer int auto_increment primary key,
    mailNostreamer varchar(40) not null,
    pseudoNostreamer varchar(30) unique,
    passNostreamer varchar(40)not null,
    avatarNostreamer varchar(100));

create table Page(
    idPage int primary key auto_increment,
    idNostreamer int not null,
    descriptionPage text,
    foreign key(idNostreamer) references Nostreamer(idNostreamer));

create table Channel(
    idChannel int primary key auto_increment,
    nameChannel varchar(50) not null,
    idNostreamer int not null,
    subscribersChannel int default 0,
    descriptionChannel text,
    creationDateChannel date ,
    viewsChannel int default 0,
    foreign key(idNostreamer) references Nostreamer(idNostreamer));

create table Post(
    idPost int primary key auto_increment,
    idPage int not null,
    idChannel int not null,
    titlePost varchar(50),
    datePost date,
    messagePost text not null,
    imagePost varchar(100),
    foreign key(idPage) references Page(idPage),
    foreign key(idChannel) references Channel(idChannel));

create table Video(
    idVideo int primary key auto_increment,
    nameVideo varchar(40) not null,
    idChannel int,
    dateVideo date,
    viewsVideo int default 0,
    descriptionVideo text,
    nbRateVideo int default 0,
    rateVideo float);

create table Comment(
    idComment int primary key auto_increment,
    idPost int,
    idVideo int,
    idChannel int,
    idNostreamer int,
    titleComment varchar(50),
    dateComment date,
    messageComment text not null,
    rateComment float,
    foreign key(idNostreamer) references Nostreamer(idNostreamer),
    foreign key(idPost) references Post(idPost),
    foreign key(idChannel) references Channel(idChannel),
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