DROP TABLE IF EXISTS pf_feats;
CREATE TABLE pf_feats(
    id integer  NOT NULL PRIMARY KEY AUTO_INCREMENT
  , name varchar(34)
  , type varchar(15)
  , description text
  , prerequisites text
  , prerequisite_feats varchar(114)
  , benefit text
  , normal text
  , special text
  , source varchar(27)
  , `fulltext` text
  , teamwork bit
  , critical bit
  , grit bit
  , style bit
  , performance bit
  , racial bit
  , companion_familiar bit
  , race_name varchar(28)
  , note text
  , goal text
  , completion_benefit text
  , multiples bit
  , suggested_traits varchar(59)
  , created_at datetime
  , updated_at datetime
) engine=innodb default charset=utf8 collate=utf8_unicode_ci;