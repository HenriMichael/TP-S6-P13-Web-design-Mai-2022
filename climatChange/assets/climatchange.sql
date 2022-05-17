
CREATE TABLE administrateur (
    Idadministrateur int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Email varchar(250), 
    Password varchar(250)
);

CREATE TABLE inside(
    IdContent int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Title varchar(250), 
    Description varchar(250),
    Content varchar(250),
    Auteur varchar(250),
    DatePublication DATE
);



INSERT INTO inside VALUES (1, '<strong>Réchauffement climatique</strong>: l humanité sous la menace d impacts irréversibles','L humanité à aube de retombées climatiques cataclysmiques, alerte le Giec. (photos illustration)','<strong>RÉCHAUFFEMENT CLIMATIQUE</strong> - Pénurie d’eau, exode, malnutrition, extinction d’espèces... La vie sur Terre telle que nous la connaissons sera inéluctablement transformée par le dérèglement climatique quand les enfants nés en 2021 auront 30 ans, voire plus tôt, alerte un projet de rapport des experts climat de l’ONU obtenu par l’AFP.

Quel que soit le rythme de réduction des émissions de gaz à effet de serre, les impacts dévastateurs du <strong>réchauffement</strong> sur la nature et l’humanité qui en dépend vont s’accélérer, assure le Giec, et devenir douloureusement palpables bien avant 2050. “La vie sur Terre peut se remettre d’un <strong>changement climatique</strong> majeur en évoluant vers de nouvelles espèces et en créant de nouveaux écosystèmes”, note le résumé technique de 137 pages. “L’humanité ne le peut pas”.','Le HuffPost','2020-10-09');



INSERT INTO inside VALUES (2, 'Giec : les pronostics alarmants sur le <strong>réchauffement climatique</strong> en France','Les pronostics alarmants sur les conséquences du <strong>réchauffement climatique</strong> en France - © iStock','Des chiffres qui font froid dans le dos. Dans le rapport du Giec publié le 28 février, leurs prévisions concernant le r<strong>échauffement climatique</strong> sont données. Entre 3,3 et 3,6 milliards de personnes vivent dans des « contextes hautement vulnérables au <strong>changement climatique</strong> ». Parmi eux, on trouve des Français. D’après les auteurs de l’étude, le nombre de canicules va augmenter, et le Sud de l’Hexagone subira 20 à 30 jours de grande chaleur – température supérieure à 35°C – par an. Le nombre de décès dûs à une température trop élevée pourrait « doubler ou tripler pour un <strong>réchauffement</strong> de 3°C ». Qui dit chaleurs extrêmes dit incendies. Les surfaces touchées par ceux-ci pourraient « doubler ou tripler » dans l’Europe méditerranéenne si ce chiffre est atteint. Dans le cas où la température n’augmenterait « que » d’1,5°C, leur étendue ne serait que de 40 à 50%.Manque d’eau = des pertes agricoles considérables

La sécheresse touchera aussi l’Europe du Sud, où un tiers de la population risque de manquer d’eau à partir de 2°C de réchauffement. Si le chiffre passe à 3, ce risque double et « des pertes économiques importantes dans les secteurs dépendant de l’eau et de l’énergie peuvent se produire ». L’agriculture fait partie de ces derniers. Des « pertes de production substantielles sont projetées pour la plupart des régions européennes au cours du XXIe siècle et elles ne seront pas compensées par les gains de production en Europe du Nord », statue-t-on dans le rapport. L’irrigation peut être une solution à ce problème, sauf si les températures augmentent de 3°C car cela diminuerait la disponibilité en eau.', 'Julia Avellaneda','2020-10-09');




INSERT INTO inside VALUES (3, '<strong>Réchauffement climatique</strong> : définition, causes et conséquences','Planète','L atmosphère de la planète est composée de divers types de gaz, dont le diazote, le dioxygène, l argon ou encore une infime quantité de dioxyde de carbone ou CO2. Cependant, les activités humaines ont entraîné une énorme croissance de ces émissions de GES ainsi que leur accumulation dans l atmosphère, cette accumulation est la source du <strong>réchauffement climatique</strong>.

Même si l atmosphère renferme donc naturellement du dioxyde de carbone, sa proportion devrait être moins importante que celle évaluée au cours des observations du GIEC. En effet, le CO2 apparaît naturellement par la respiration chez les êtres vivants ou lors de leur décomposition. C est également le cas suite aux feux de forêt ayant une origine naturelle ou lors des éruptions volcaniques.

Au fil des années, la principale source d émission des GES est donc identifiée comme ayant une origine anthropique (due à l’Homme). Les activités de l homme ont en effet accru rapidement leur concentration dans l atmosphère.

Le CO2, responsable de 63 % du réchauffement de la planète, provient en grande partie de la combustion du pétrole, du gaz et du charbon.', 'saveForPlanet','2020-10-09');



INSERT INTO inside VALUES (4, 'Limiter le <strong>réchauffement climatique</strong> à 1,5°C est impossible sans mesure immédiate','Selon un rapport de l’ONU','Limiter le <strong>réchauffement climatique</strong> mondial à 1,5°C est impossible sans une réduction immédiate et massive des émissions de gaz à effet de serre, affirme un nouveau rapport des Nations Unies rendu public jeudi.

Ce rapport annuel intitulé « United in Science 2021 » a été élaboré par plusieurs agences de l’ONU en collaboration avec des scientifiques. Sa diffusion survient quelques semaines avant la COP26, le prochain sommet de l’ONU sur le climat qui se tiendra à Glasgow (Ecosse, Royaume-Uni) du 31 octobre au 12 novembre.

Selon le document, le <strong>changement climatique</strong> et ses conséquences ne cessent de s’aggraver, et la réduction temporaire des émissions de CO2 dans l’atmosphère entraînée par la pandémie de Covid-19 n’a pas ralenti le processus.

Ce rapport est « un diagnostic alarmant montrant à quel point nous avons dévié de la trajectoire » conduisant aux objectifs de l’Accord de Paris (signé lors de la COP21 en 2015, NDLR), qui a appelé à limiter le <strong>réchauffement planétaire</strong> à moins de 2°C au-dessus du niveau pré-industriel, et dans l’idéal à 1,5°C, a affirmé le secrétaire général des Nations Unies Antonio Guterres, dans l’avant-propos du document.', 'Fatma Bendhaou','2020-10-09');


INSERT INTO inside VALUES (5, '<strong>Réchauffement climatique</strong>: pourquoi l extinction des ours polaires est inexorable','Un ours polaire photographié en Norvège en 2013. (Photo d illustration) ','La survie de l ours polaire est suspendue à une transformation de nos modes de vie. Sans une réduction importante des émissions de gaz à effet de serre, la plupart des sous-populations d Ursus maritimus auront disparu à l horizon 2100, estiment des chercheurs de l Université de Toronto (Canada) qui ont mis en regard les projections <strong>climatiques</strong> dans la région Arctique avec les capacités de résistance de l ours blanc à un jeûne prolongé. Ils publient leurs résultats ce lundi dans la revue scientifique Nature Climate Change.','Delphine Chayet','2020-10-09');

INSERT INTO administrateur  VALUES (1, 'admin@gmail.com', 'admin');

