CREATE DATABASE bffbook;

CREATE USER bffadmin@localhost IDENTIFIED BY 'pa55word'; 

GRANT ALL ON *.* TO bffadmin@localhost;

CREATE TABLE users (
    id              INTEGER                 NOT NULL        AUTO_INCREMENT      ,
    firstName       VARCHAR     (025)       NOT NULL                            ,
    lastName        VARCHAR     (025)       NOT NULL                            ,
    userName        VARCHAR     (100)       NOT NULL                            ,
    email           VARCHAR     (100)       NOT NULL                            ,
    password        VARCHAR     (255)       NOT NULL                            ,
    signup_date     DATE                    NOT NULL                            ,
    profile_pic     VARCHAR     (255)                                           ,
    num_posts       INTEGER                                                     ,
    num_likes       INTEGER                                                     ,
    user_closed     VARCHAR     (003)                                           ,
    friend_array    TEXT                                                        ,
        CONSTRAINT pkc_id
            PRIMARY KEY(id)
);

INSERT INTO users VALUES ("","Olivia","Dunham","olivia.dunham","olivia.dunham@gmail.com","sesame","2018-04-05","",0,0,"No","");

COMMIT;