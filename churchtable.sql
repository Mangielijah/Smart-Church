CREATE TABLE IF NOT EXISTS `churchinfo`(
`churchname` varchar(400) NOT NULL,
`password` varchar(400) NOT NULL,
`district` varchar(400) NOT NULL,
`pastor` varchar(400) NOT NULL,
`support` int(255) NOT NULL,
`number` int(255) NOT NULL,
`centralpercent` int(255) NOT NULL,
`areapercent` int(255) NOT NULL,
`churchpercent` int(255) NOT NULL,
primary key(`churchname`)
);

CREATE TABLE IF NOT EXISTS `jan`(
`ID` int(6) AUTO_INCREMENT NOT NULL,
`offering` int(255) NOT NULL,
`tithes` int(255) NOT NULL,
`missions` int(255) NOT NULL,
`totalinc` int(255) NOT NULL,
`male` int(255) NOT NULL,
`female` int(255) NOT NULL,
`visit` int(255) NOT NULL,
`children` int(255) NOT NULL,
`totalmembers` int(255) NOT NULL,
`messagetopic` varchar(400) NOT NULL,
`spastor` varchar(400) NOT NULL,
`year` int(6) NOT NULL,
primary key(`ID`)
);

CREATE TABLE IF NOT EXISTS `feb`(
`ID` int(6) AUTO_INCREMENT NOT NULL,
`offering` int(255) NOT NULL,
`tithes` int(255) NOT NULL,
`missions` int(255) NOT NULL,
`totalinc` int(255) NOT NULL,
`male` int(255) NOT NULL,
`female` int(255) NOT NULL,
`messagetopic` varchar(400) NOT NULL,
`visit` int(255) NOT NULL,
`children` int(255) NOT NULL,
`totalmembers` int(255) NOT NULL,
`spastor` varchar(400) NOT NULL,
`year` int(6) NOT NULL,
primary key(`ID`)
);

CREATE TABLE IF NOT EXISTS `mar`(
`ID` int(6) AUTO_INCREMENT NOT NULL,
`offering` int(255) NOT NULL,
`tithes` int(255) NOT NULL,
`missions` int(255) NOT NULL,
`totalinc` int(255) NOT NULL,
`male` int(255) NOT NULL,
`female` int(255) NOT NULL,
`messagetopic` varchar(400) NOT NULL,
`visit` int(255) NOT NULL,
`children` int(255) NOT NULL,
`totalmembers` int(255) NOT NULL,
`spastor` varchar(400) NOT NULL,
`year` int(6) NOT NULL,
primary key(`ID`)
);

CREATE TABLE IF NOT EXISTS `apr`(
`ID` int(6) AUTO_INCREMENT NOT NULL,
`offering` int(255) NOT NULL,
`tithes` int(255) NOT NULL,
`missions` int(255) NOT NULL,
`totalinc` int(255) NOT NULL,
`male` int(255) NOT NULL,
`female` int(255) NOT NULL,
`messagetopic` varchar(400) NOT NULL,
`visit` int(255) NOT NULL,
`children` int(255) NOT NULL,
`totalmembers` int(255) NOT NULL,
`spastor` varchar(400) NOT NULL,
`year` int(6) NOT NULL,
primary key(`ID`)
);

CREATE TABLE IF NOT EXISTS `may`(
`ID` int(6) AUTO_INCREMENT NOT NULL,
`offering` int(255) NOT NULL,
`tithes` int(255) NOT NULL,
`missions` int(255) NOT NULL,
`totalinc` int(255) NOT NULL,
`male` int(255) NOT NULL,
`female` int(255) NOT NULL,
`messagetopic` varchar(400) NOT NULL,
`visit` int(255) NOT NULL,
`children` int(255) NOT NULL,
`totalmembers` int(255) NOT NULL,
`spastor` varchar(400) NOT NULL,
`year` int(6) NOT NULL,
primary key(`ID`)
);

CREATE TABLE IF NOT EXISTS `jun`(
`ID` int(6) AUTO_INCREMENT NOT NULL,
`offering` int(255) NOT NULL,
`tithes` int(255) NOT NULL,
`missions` int(255) NOT NULL,
`totalinc` int(255) NOT NULL,
`male` int(255) NOT NULL,
`female` int(255) NOT NULL,
`messagetopic` varchar(400) NOT NULL,
`visit` int(255) NOT NULL,
`children` int(255) NOT NULL,
`totalmembers` int(255) NOT NULL,
`spastor` varchar(400) NOT NULL,
`year` int(6) NOT NULL,
primary key(`ID`)
);

CREATE TABLE IF NOT EXISTS `jul`(
`ID` int(6) AUTO_INCREMENT NOT NULL,
`offering` int(255) NOT NULL,
`tithes` int(255) NOT NULL,
`missions` int(255) NOT NULL,
`totalinc` int(255) NOT NULL,
`male` int(255) NOT NULL,
`female` int(255) NOT NULL,
`messagetopic` varchar(400) NOT NULL,
`visit` int(255) NOT NULL,
`children` int(255) NOT NULL,
`totalmembers` int(255) NOT NULL,
`spastor` varchar(400) NOT NULL,
`year` int(6) NOT NULL,
primary key(`ID`)
);

CREATE TABLE IF NOT EXISTS `aug`(
`ID` int(6) AUTO_INCREMENT NOT NULL,
`offering` int(255) NOT NULL,
`tithes` int(255) NOT NULL,
`missions` int(255) NOT NULL,
`totalinc` int(255) NOT NULL,
`male` int(255) NOT NULL,
`female` int(255) NOT NULL,
`messagetopic` varchar(400) NOT NULL,
`visit` int(255) NOT NULL,
`children` int(255) NOT NULL,
`totalmembers` int(255) NOT NULL,
`spastor` varchar(400) NOT NULL,
`year` int(6) NOT NULL,
primary key(`ID`)
);

CREATE TABLE IF NOT EXISTS `sep`(
`ID` int(6) AUTO_INCREMENT NOT NULL,
`offering` int(255) NOT NULL,
`tithes` int(255) NOT NULL,
`missions` int(255) NOT NULL,
`totalinc` int(255) NOT NULL,
`male` int(255) NOT NULL,
`female` int(255) NOT NULL,
`messagetopic` varchar(400) NOT NULL,
`visit` int(255) NOT NULL,
`children` int(255) NOT NULL,
`totalmembers` int(255) NOT NULL,
`spastor` varchar(400) NOT NULL,
`year` int(6) NOT NULL,
primary key(`ID`)
);

CREATE TABLE IF NOT EXISTS `oct`(
`ID` int(6) AUTO_INCREMENT NOT NULL,
`offering` int(255) NOT NULL,
`tithes` int(255) NOT NULL,
`missions` int(255) NOT NULL,
`totalinc` int(255) NOT NULL,
`male` int(255) NOT NULL,
`female` int(255) NOT NULL,
`messagetopic` varchar(400) NOT NULL,
`visit` int(255) NOT NULL,
`children` int(255) NOT NULL,
`totalmembers` int(255) NOT NULL,
`spastor` varchar(400) NOT NULL,
`year` int(6) NOT NULL,
primary key(`ID`)
);

CREATE TABLE IF NOT EXISTS `nov`(
`ID` int(6) AUTO_INCREMENT NOT NULL,
`offering` int(255) NOT NULL,
`tithes` int(255) NOT NULL,
`missions` int(255) NOT NULL,
`totalinc` int(255) NOT NULL,
`male` int(255) NOT NULL,
`messagetopic` varchar(400) NOT NULL,
`female` int(255) NOT NULL,
`visit` int(255) NOT NULL,
`children` int(255) NOT NULL,
`totalmembers` int(255) NOT NULL,
`spastor` varchar(400) NOT NULL,
`year` int(6) NOT NULL,
primary key(`ID`)
);

CREATE TABLE IF NOT EXISTS `dec`(
`ID` int(6) AUTO_INCREMENT NOT NULL,
`offering` int(255) NOT NULL,
`tithes` int(255) NOT NULL,
`missions` int(255) NOT NULL,
`totalinc` int(255) NOT NULL,
`male` int(255) NOT NULL,
`female` int(255) NOT NULL,
`messagetopic` varchar(400) NOT NULL,
`visit` int(255) NOT NULL,
`children` int(255) NOT NULL,
`totalmembers` int(255) NOT NULL,
`spastor` varchar(400) NOT NULL,
`year` int(6) NOT NULL,
primary key(`ID`)
);
CREATE TABLE IF NOT EXISTS `expenditures`(
`ID` int(25) AUTO_INCREMENT NOT NULL,
`mon` varchar(400) NOT NULL,
`year` int(255) NOT NULL,
`others` int(255) NOT NULL,
PRIMARY KEY(`ID`)
);
CREATE TABLE IF NOT EXISTS `mission`(
`id` int(25) AUTO_INCREMENT NOT NULL,
`mission` int(255) NOT NULL,
`areaeva` int(255) NOT NULL,
`edu` int(255) NOT NULL,
`mon` varchar(400) NOT NULL,
`year` int(255) NOT NULL,
primary key (`id`)
);
CREATE TABLE IF NOT EXISTS `otherincome`(
`id` int(25) AUTO_INCREMENT NOT NULL,
`pension` int(255) NOT NULL,
`childrenthirty` int(255) NOT NULL,
`districtfund` int(255) NOT NULL,
`districtevang` int(255) NOT NULL,
`childrenfifteen` int(255) NOT NULL,
`childrentwenty` int(255) NOT NULL,
`others` int(255) NOT NULL,
`mon` varchar(400) NOT NULL,
`year` int(255) NOT NULL,
primary key (`id`)
);