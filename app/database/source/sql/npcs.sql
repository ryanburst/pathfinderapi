DROP TABLE IF EXISTS pf_npcs;
CREATE TABLE pf_npcs(
    id integer  NOT NULL PRIMARY KEY AUTO_INCREMENT
  , name text
  , cr varchar(5)
  , xp varchar(7)
  , race varchar(40)
  , class varchar(75)
  , monster_source varchar(164)
  , alignment varchar(2)
  , size varchar(10)
  , type varchar(18)
  , subtype varchar(56)
  , init varchar(26)
  , senses varchar(125)
  , aura varchar(98)
  , ac varchar(28)
  , ac_mods varchar(100)
  , hp varchar(17)
  , hd varchar(43)
  , hp_mods varchar(57)
  , saves varchar(156)
  , fort integer
  , ref varchar(19)
  , will varchar(43)
  , save_mods varchar(127)
  , defensive_abilities varchar(163)
  , dr varchar(50)
  , immune varchar(141)
  , resist varchar(62)
  , sr varchar(31)
  , weaknesses varchar(69)
  , speed varchar(56)
  , speed_mod varchar(61)
  , melee varchar(283)
  , ranged varchar(150)
  , space varchar(9)
  , reach varchar(45)
  , special_attacks text
  , spell_like_abilities text
  , spells_known text
  , spells_prepared text
  , spell_domains varchar(65)
  , ability_scores varchar(58)
  , ability_score_mods varchar(1)
  , base_atk integer
  , cmb varchar(53)
  , cmd varchar(58)
  , feats text
  , skills text
  , racial_mods varchar(138)
  , languages varchar(207)
  , sq text
  , environment varchar(1)
  , organization varchar(1)
  , treasure varchar(1)
  , description_visual varchar(1)
  , `group` varchar(4)
  , source varchar(37)
  , is_template bit
  , special_abilities text
  , description varchar(1)
  , `fulltext` text
  , gender varchar(15)
  , bloodline varchar(30)
  , prohibited_schools varchar(26)
  , before_combat text
  , during_combat text
  , morale text
  , gear text
  , other_gear text
  , vulnerability varchar(4)
  , note varchar(181)
  , character_flag bit
  , companion_flag bit
  , fly bit
  , climb bit
  , burrow bit
  , swim bit
  , land bit
  , templates_applied varchar(29)
  , offense_note varchar(99)
  , base_statistics text
  , extracts_prepared text
  , age_category varchar(12)
  , mystery varchar(20)
  , class_archetypes varchar(27)
  , patron varchar(18)
  , companion_familiar_link varchar(4)
  , focused_school varchar(7)
  , traits varchar(66)
  , alternate_name_form varchar(11)
  , linktext varchar(1)
  , unique_monster bit
  , thassilonian_specialization varchar(14)
  , variant bit
  , mr integer
  , mythic bit
  , mt integer
  , created_at datetime
  , updated_at datetime
) engine=innodb default charset=utf8 collate=utf8_unicode_ci;