INSERT INTO User (ID, Username, Password, Name, Email, Bio, Profile_Pic, Posts, Comments, Upvotes, Downvotes, ParticipationDate) VALUES (1, 'diogoyaguas', '8034efdefd3f3c9a870a54dd1dc3a3230cf8b48a6f2f7cfaa309c3631fbbe201', 'Diogo Yaguas', 'diogo.yaguas@hotmail.com', '20 anos - Espinho', '1.png', 0, 0, 0, 0, '2018/09');
INSERT INTO User (ID, Username, Password, Name, Email, Bio, Profile_Pic, Posts, Comments, Upvotes, Downvotes, ParticipationDate) VALUES (2, 'joanasmramos', 'bf136913b026621105fd11e7b1f8cb21a03071d48d9b5520346e4107c0da1e92', 'Joana Ramos', 'joanasmramos98@gmail.com', 'LOVE CATS', '2.png', 0, 0, 0, 0, '2018/09');
INSERT INTO User (ID, Username, Password, Name, Email, Bio, Profile_Pic, Posts, Comments, Upvotes, Downvotes, ParticipationDate) VALUES (3, 'mrpinemyapple', '1a78e982b1185e2322ea747925b45cbf78534b9963d49d924ba6f2391d010bde', 'Gonçalo Nuno Bernardo', 'mrpinemyapple@gmail.com', 'ANANÁS E DRAGS', '3.png', 0, 0, 0, 0, '2018/09');
INSERT INTO User (ID, Username, Password, Name, Email, Bio, Profile_Pic, Posts, Comments, Upvotes, Downvotes, ParticipationDate) VALUES (4, 'mafaldafalcaotvf', '0217f78a5f51a5bb8f6d49c7b81c84c63e37c1be9ec29591eca1971355b87545', 'Mafalda Falcão', 'mafaldafferreira@fe.up.pt', 'Ensino LTW', '4.png', 0, 0, 0, 0, '2018/12');
INSERT INTO User (ID, Username, Password, Name, Email, Bio, Profile_Pic, Posts, Comments, Upvotes, Downvotes, ParticipationDate) VALUES (5, 'joao.malheiro', '63d7a7efe39935234325ae6a54a21a89ce83b6dfe1f9645105ba15381d1ae058', 'João Malheiro', 'joaomalheiro@gmail.com', 'GONDOMAR CITY', '5.png', 0, 0, 0, 0, '2018/10');
INSERT INTO User (ID, Username, Password, Name, Email, Bio, Profile_Pic, Posts, Comments, Upvotes, Downvotes, ParticipationDate) VALUES (6, 'smbea', '8b4b9e7e3937e4761a731f11f9a7268997ac52fbed2b63a745e90fa49317f79e', 'Beatriz Mendes', 'smbeatriz@gmail.com', 'Food and instagram', '6.png', 0, 0, 0, 0, '2018/11');
INSERT INTO User (ID, Username, Password, Name, Email, Bio, Profile_Pic, Posts, Comments, Upvotes, Downvotes, ParticipationDate) VALUES (7, 'm._.duarte', '0153e07e5d380db7ea4f8c2a569e01850c849d73828dcf9e2748315c95e34553', 'Miguel Duarte', 'miguelduarte@gmail.com', 'NI é vida', '7.png', 0, 0, 0, 0, '2018/12');

INSERT INTO Quotes (ID, Quote) VALUES (1, 'keep your face to the sunshine and you cannot see a shadow');
INSERT INTO Quotes (ID, Quote) VALUES (2, 'limit your "always" and your "nevers"');
INSERT INTO Quotes (ID, Quote) VALUES (3, 'spread love everywhere you go');
INSERT INTO Quotes (ID, Quote) VALUES (4, 'a champion is defined not by their wins but by how they can recover when they fall');
INSERT INTO Quotes (ID, Quote) VALUES (5, 'each person must live their life as a model for others');
INSERT INTO Quotes (ID, Quote) VALUES (6, 'motivation comes from working on things we care about');
INSERT INTO Quotes (ID, Quote) VALUES (7, 'no matter what people tell you, words and ideas can change the world');
INSERT INTO Quotes (ID, Quote) VALUES (8, 'with the right kind of coaching and determination you can accomplish anything');
INSERT INTO Quotes (ID, Quote) VALUES (9, 'if you look at what you have in life, you''ll always have more');
INSERT INTO Quotes (ID, Quote) VALUES (10, 'life has got all those twists and turns. you''ve got to hold on tight and off you go');
INSERT INTO Quotes (ID, Quote) VALUES (11, 'you are enough just as you are');
INSERT INTO Quotes (ID, Quote) VALUES (12, 'my mission in life is not merely to survive, but to thrive');
INSERT INTO Quotes (ID, Quote) VALUES (13, 'let us make our future now, and let us make our dreams tomorrow''s reality');
INSERT INTO Quotes (ID, Quote) VALUES (14, 'you get what you give');

INSERT INTO Post (ID, User_ID, Title, Text, Date, Upvotes, Downvotes) VALUES (1, 1, 'First Post', 'Por outro lado, a revolução dos costumes é uma das consequências das diversas correntes de pensamento.', '2018-11-28 14:05:22', 0, 2);
INSERT INTO Post (ID, User_ID, Title, Text, Date, Upvotes, Downvotes) VALUES (2, 2, 'New in here?', 'Por outro lado, a hegemonia do ambiente político é uma das consequências do investimento em reciclagem técnica.', '2018-12-01 12:22:34', 2, 1);
INSERT INTO Post (ID, User_ID, Title, Text, Date, Upvotes, Downvotes) VALUES (3, 3, 'What about this', 'Neste sentido, o desafiador cenário globalizado promove a alavancagem do sistema de formação de quadros que corresponde às necessidades.', '2018-11-30 17:35:55', 1, 0);
INSERT INTO Post (ID, User_ID, Title, Text, Date, Upvotes, Downvotes) VALUES (4, 4, 'Grande Site!', 'Adoro o aspeto deste site', '2018-12-04 09:32:45', 5, 0);
INSERT INTO Post (ID, User_ID, Title, Text, Date, Upvotes, Downvotes) VALUES (5, 6, 'Não entendo nada', 'Para que serve isto mesmo???', '2018-11-29 20:11:34', 0, 1);

INSERT INTO UpPost (User_ID, Post_ID) VALUES (1, 2);
INSERT INTO UpPost (User_ID, Post_ID) VALUES (1, 4);
INSERT INTO UpPost (User_ID, Post_ID) VALUES (2, 4);
INSERT INTO UpPost (User_ID, Post_ID) VALUES (3, 4);
INSERT INTO UpPost (User_ID, Post_ID) VALUES (5, 4);
INSERT INTO UpPost (User_ID, Post_ID) VALUES (6, 4);
INSERT INTO UpPost (User_ID, Post_ID) VALUES (3, 3);
INSERT INTO UpPost (User_ID, Post_ID) VALUES (2, 2);

INSERT INTO DownPost (User_ID, Post_ID) VALUES (4, 1);
INSERT INTO DownPost (User_ID, Post_ID) VALUES (3, 1);
INSERT INTO DownPost (User_ID, Post_ID) VALUES (1, 2);
INSERT INTO DownPost (User_ID, Post_ID) VALUES (4, 5);

INSERT INTO Comments (ID, Post_ID, User_ID, Text, Date, Upvotes, Downvotes) VALUES (1, 1, 5, 'Isto é lero lero? https://www.youtube.com/watch?v=J85ck3UrpMs', '2018-11-29 23:43:43', 0, 0);
INSERT INTO Comments (ID, Post_ID, User_ID, Text, Date, Upvotes, Downvotes) VALUES (2, 3, 2, 'Gosto do que leio!', '2018-12-01 17:32:45', 1, 1);
INSERT INTO Comments (ID, Post_ID, User_ID, Text, Date, Upvotes, Downvotes) VALUES (3, 2, 3, 'LOOOOOL', '2018-12-02 04:32:23', 0, 1);
INSERT INTO Comments (ID, Post_ID, User_ID, Text, Date, Upvotes, Downvotes) VALUES (4, 1, 4, 'Não pode ser lero lero', '2018-11-29 01:23:34', 0, 1);

INSERT INTO UpComment (User_ID, Comment_ID) VALUES (3, 2);

INSERT INTO DownComment (User_ID, Comment_ID) VALUES (6, 2);
INSERT INTO DownComment (User_ID, Comment_ID) VALUES (2, 3);
INSERT INTO DownComment (User_ID, Comment_ID) VALUES (7, 4);