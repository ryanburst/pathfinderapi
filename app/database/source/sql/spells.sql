DROP TABLE IF EXISTS pf_spells;
CREATE TABLE pf_spells(
    id integer  NOT NULL PRIMARY KEY AUTO_INCREMENT
  , name varchar(34)
  , school varchar(14)
  , subschool varchar(23)
  , descriptor varchar(49)
  , spell_level varchar(121)
  , casting_time varchar(47)
  , components text
  , costly_components bit
  , `range` varchar(51)
  , area varchar(94)
  , effect varchar(156)
  , targets varchar(185)
  , duration varchar(81)
  , dismissible bit
  , shapeable bit
  , saving_throw varchar(72)
  , spell_resistence varchar(40)
  , description text
  , description_formatted text
  , source varchar(30)
  , full_text text
  , verbal bit
  , somatic bit
  , material bit
  , focus bit
  , divine_focus bit
  , sor varchar(4)
  , wiz varchar(4)
  , cleric varchar(4)
  , druid varchar(4)
  , ranger varchar(4)
  , bard varchar(4)
  , paladin varchar(4)
  , alchemist varchar(4)
  , summoner varchar(4)
  , witch varchar(4)
  , inquisitor varchar(4)
  , oracle varchar(4)
  , antipaladin varchar(4)
  , magus varchar(4)
  , adept varchar(4)
  , deity varchar(14)
  , sla_level varchar(4)
  , domain varchar(41)
  , short_description varchar(149)
  , acid bit
  , air bit
  , chaotic bit
  , cold bit
  , curse bit
  , darkness bit
  , death bit
  , disease bit
  , earth bit
  , electricity bit
  , emotion bit
  , evil bit
  , fear bit
  , fire bit
  , `force` bit
  , good bit
  , language_dependent bit
  , lawful bit
  , light bit
  , mind_affecting bit
  , pain bit
  , poison bit
  , shadow bit
  , sonic bit
  , water bit
  , linktext varchar(101)
  , material_costs varchar(5)
  , bloodline varchar(49)
  , patron varchar(36)
  , mythic_text text
  , augmented text
  , mythic bit
  , created_at datetime
  , updated_at datetime
) engine=innodb default charset=utf8 collate=utf8_unicode_ci;