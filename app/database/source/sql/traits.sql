DROP TABLE IF EXISTS pf_traits;
CREATE TABLE pf_traits(
    id integer  NOT NULL PRIMARY KEY AUTO_INCREMENT
  , name varchar(37)
  , type varchar(28)
  , category varchar(28)
  , prerequisite varchar(58)
  , pfs_legal varchar(7)
  , description text
  , source varchar(19)
  , version varchar(5)
  , created_at datetime
  , updated_at datetime
) engine=innodb default charset=utf8 collate=utf8_unicode_ci;