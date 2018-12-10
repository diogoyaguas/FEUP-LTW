INSERT INTO User (Username, Password, Name, Email, Profile_Pic) VALUES ('diogoyaguas', 'yaguas98', 'Diogo Yaguas', 'diogo.yaguas@hotmail.com', '1.jpg');
INSERT INTO User (Username, Password, Name, Email, Profile_Pic) VALUES ('joanasmramos', 'joaninha1998', 'Joana Ramos', 'joanasmramos98@gmail.com', '2.png');
INSERT INTO User (Username, Password, Name, Email, Profile_Pic) VALUES ('mrpinemyapple', 'ananasevida1998', 'Gonçalo Nuno Bernardo', 'mrpinemyapple@gmail.com', '3.png');
INSERT INTO User (Username, Password, Name, Email, Profile_Pic) VALUES ('mafaldafalcaotvf', 'professora2012', 'Mafalda Falcão', 'mafaldafferreira@fe.up.pt', '4.png');
INSERT INTO User (Username, Password, Name, Email, Profile_Pic) VALUES ('joao.malheiro', 'whiskey1998', 'João Malheiro', 'joaomalheiro@gmail.com', '5.png');
INSERT INTO User (Username, Password, Name, Email, Profile_Pic) VALUES ('smbea', 'foodie98', 'Beatriz Mendes', 'smbeatriz@gmail.com', '6.png');
INSERT INTO User (Username, Password, Name, Email, Profile_Pic) VALUES ('m._.duarte', 'presinerd98', 'Miguel Duarte', 'miguelduarte@gmail.com', '7.png');

INSERT INTO Quotes (Quote) VALUES ('Keep your face to the sunshine and you cannot see a shadow.');
INSERT INTO Quotes (Quote) VALUES ('Limit your "always" and your "nevers".');
INSERT INTO Quotes (Quote) VALUES ('Spread love everywhere you go.');
INSERT INTO Quotes (Quote) VALUES ('A champion is defined not by their wins but by how they can recover when they fall.');
INSERT INTO Quotes (Quote) VALUES ('Each person must live their life as a model for others.');
INSERT INTO Quotes (Quote) VALUES ('Motivation comes from working on things we care about.');
INSERT INTO Quotes (Quote) VALUES ('No matter what people tell you, words and ideas can change the world.');
INSERT INTO Quotes (Quote) VALUES ('With the right kind of coaching and determination you can accomplish anything.');
INSERT INTO Quotes (Quote) VALUES ('If you look at what you have in life, you''ll always have more.');
INSERT INTO Quotes (Quote) VALUES ('Life has got all those twists and turns. You''ve got to hold on tight and off you go.');
INSERT INTO Quotes (Quote) VALUES ('You are enough just as you are.');
INSERT INTO Quotes (Quote) VALUES ('My mission in life is not merely to survive, but to thrive.');
INSERT INTO Quotes (Quote) VALUES ('Let us make our future now, and let us make our dreams tomorrow''s reality.');
INSERT INTO Quotes (Quote) VALUES ('You get what you give.');

INSERT INTO Post (User_ID, Title, Text, Date, Score) VALUES (1, 'First Post', 'Por outro lado, a revolução dos costumes é uma das consequências das diversas correntes de pensamento.', '2018-11-28 14:05:22', '0');
INSERT INTO Post (User_ID, Title, Text, Date, Score) VALUES (2, 'New in here?', 'Por outro lado, a hegemonia do ambiente político é uma das consequências do investimento em reciclagem técnica.', '2018-12-01 12:22:34', '2');
INSERT INTO Post (User_ID, Title, Text, Date, Score) VALUES (3, 'What about this', 'Neste sentido, o desafiador cenário globalizado promove a alavancagem do sistema de formação de quadros que corresponde às necessidades.', '2018-11-30 17:35:55', '1');
INSERT INTO Post (User_ID, Title, Text, Date, Score) VALUES (4, 'Grande Site!', 'Adoro o aspeto deste site', '2018-12-04 09:32:45', '5');
INSERT INTO Post (User_ID, Title, Text, Date, Score) VALUES (6, 'Não entendo nada', 'Para que serve isto mesmo???', '2018-11-29 20:11:34', '0');

INSERT INTO Comments (Post_ID, User_ID, Text, Date, Likes) VALUES (1, 5, 'Isto é lero lero?', '2018-11-29 23:43:43', '0');
INSERT INTO Comments (Post_ID, User_ID, Text, Date, Likes) VALUES (3, 2, 'Gosto do que leio!', '2018-12-01 17:32:45', '1');
INSERT INTO Comments (Post_ID, User_ID, Text, Date, Likes) VALUES (2, 3, 'LOOOOOL', '2018-12-02 04:32:23', '0');
INSERT INTO Comments (Post_ID, User_ID, Text, Date, Likes) VALUES (1, 4, 'Não pode ser lero lero', '2018-11-29 01:23:34', '0');