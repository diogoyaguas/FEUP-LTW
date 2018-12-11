INSERT INTO User (Username, Password, Name, Email, Profile_Pic, Bio, ParticipationDate) VALUES ('diogoyaguas', '8034EFDEFD3F3C9A870A54DD1DC3A3230CF8B48A6F2F7CFAA309C3631FBBE201', 'Diogo Yaguas', 'diogo.yaguas@hotmail.com', '1.jpg', '20 anos - Espinho', '2018/09');
INSERT INTO User (Username, Password, Name, Email, Profile_Pic, Bio, ParticipationDate) VALUES ('joanasmramos', 'BF136913B026621105FD11E7B1F8CB21A03071D48D9B5520346E4107C0DA1E92', 'Joana Ramos', 'joanasmramos98@gmail.com', '2.png', 'LOVE CATS', '2018/09');
INSERT INTO User (Username, Password, Name, Email, Profile_Pic, Bio, ParticipationDate) VALUES ('mrpinemyapple', '1A78E982B1185E2322EA747925B45CBF78534B9963D49D924BA6F2391D010BDE', 'Gonçalo Nuno Bernardo', 'mrpinemyapple@gmail.com', '3.png', 'ANANÁS E DRAGS', '2018/09');
INSERT INTO User (Username, Password, Name, Email, Profile_Pic, Bio, ParticipationDate) VALUES ('mafaldafalcaotvf', '0217F78A5F51A5BB8F6D49C7B81C84C63E37C1BE9EC29591ECA1971355B87545', 'Mafalda Falcão', 'mafaldafferreira@fe.up.pt', '4.png', 'Ensino LTW', '2018/12');
INSERT INTO User (Username, Password, Name, Email, Profile_Pic, Bio, ParticipationDate) VALUES ('joao.malheiro', '63D7A7EFE39935234325AE6A54A21A89CE83B6DFE1F9645105BA15381D1AE058', 'João Malheiro', 'joaomalheiro@gmail.com', '5.png', 'GONDOMAR CITY', '2018/10');
INSERT INTO User (Username, Password, Name, Email, Profile_Pic, Bio, ParticipationDate) VALUES ('smbea', '8B4B9E7E3937E4761A731F11F9A7268997AC52FBED2B63A745E90FA49317F79E', 'Beatriz Mendes', 'smbeatriz@gmail.com', '6.png', 'Food and instagram', '2018/11');
INSERT INTO User (Username, Password, Name, Email, Profile_Pic, Bio, ParticipationDate) VALUES ('m._.duarte', '0153E07E5D380DB7EA4F8C2A569E01850C849D73828DCF9E2748315C95E34553', 'Miguel Duarte', 'miguelduarte@gmail.com', '7.png', 'NI é vida', '2018/12');

INSERT INTO Quotes (Quote) VALUES ('keep your face to the sunshine and you cannot see a shadow');
INSERT INTO Quotes (Quote) VALUES ('limit your "always" and your "nevers"');
INSERT INTO Quotes (Quote) VALUES ('spread love everywhere you go');
INSERT INTO Quotes (Quote) VALUES ('a champion is defined not by their wins but by how they can recover when they fall');
INSERT INTO Quotes (Quote) VALUES ('each person must live their life as a model for others');
INSERT INTO Quotes (Quote) VALUES ('motivation comes from working on things we care about');
INSERT INTO Quotes (Quote) VALUES ('no matter what people tell you, words and ideas can change the world');
INSERT INTO Quotes (Quote) VALUES ('with the right kind of coaching and determination you can accomplish anything');
INSERT INTO Quotes (Quote) VALUES ('if you look at what you have in life, you''ll always have more');
INSERT INTO Quotes (Quote) VALUES ('life has got all those twists and turns. you''ve got to hold on tight and off you go');
INSERT INTO Quotes (Quote) VALUES ('you are enough just as you are');
INSERT INTO Quotes (Quote) VALUES ('my mission in life is not merely to survive, but to thrive');
INSERT INTO Quotes (Quote) VALUES ('let us make our future now, and let us make our dreams tomorrow''s reality');
INSERT INTO Quotes (Quote) VALUES ('you get what you give');

INSERT INTO Post (User_ID, Title, Text, Date, Upvotes, Downvotes) VALUES (1, 'First Post', 'Por outro lado, a revolução dos costumes é uma das consequências das diversas correntes de pensamento.', '2018-11-28 14:05:22', '0', '2');
INSERT INTO Post (User_ID, Title, Text, Date, Upvotes, Downvotes) VALUES (2, 'New in here?', 'Por outro lado, a hegemonia do ambiente político é uma das consequências do investimento em reciclagem técnica.', '2018-12-01 12:22:34', '2', '1');
INSERT INTO Post (User_ID, Title, Text, Date, Upvotes, Downvotes) VALUES (3, 'What about this', 'Neste sentido, o desafiador cenário globalizado promove a alavancagem do sistema de formação de quadros que corresponde às necessidades.', '2018-11-30 17:35:55', '1', '0');
INSERT INTO Post (User_ID, Title, Text, Date, Upvotes, Downvotes) VALUES (4, 'Grande Site!', 'Adoro o aspeto deste site', '2018-12-04 09:32:45', '5', '0');
INSERT INTO Post (User_ID, Title, Text, Date, Upvotes, Downvotes) VALUES (6, 'Não entendo nada', 'Para que serve isto mesmo???', '2018-11-29 20:11:34', '0', '1');

INSERT INTO Comments (Post_ID, User_ID, Text, Date, Upvotes, Downvotes) VALUES (1, 5, 'Isto é lero lero?', '2018-11-29 23:43:43', '0', '0');
INSERT INTO Comments (Post_ID, User_ID, Text, Date, Upvotes, Downvotes) VALUES (3, 2, 'Gosto do que leio!', '2018-12-01 17:32:45', '1', '1');
INSERT INTO Comments (Post_ID, User_ID, Text, Date, Upvotes, Downvotes) VALUES (2, 3, 'LOOOOOL', '2018-12-02 04:32:23', '0', '1');
INSERT INTO Comments (Post_ID, User_ID, Text, Date, Upvotes, Downvotes) VALUES (1, 4, 'Não pode ser lero lero', '2018-11-29 01:23:34', '0', '1');