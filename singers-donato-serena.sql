create database singersdonatoserena;
use singersdonatoserena;

create table Usuario(
id integer,
nombre varchar(50),
clave varchar(20),
primary key(id)
);

create table Cantante(
id integer,
nombre varchar(50),
imagen varchar(150),
genero varchar(50),
descripcion varchar(1500),
primary key (id)
);

insert into Usuario(id, nombre, clave) values(1, 'admin1', '123'),
(2, 'admin2', '123'),
(3, 'admin3', '123');
insert into Cantante (id, nombre, imagen, genero, descripcion) values 
(1, 'Danna Paola', 'Recursos/img/Danna Paola.jpg', 'pop', 'Danna Paola Rivera Munguía es una actriz, cantante, modelo y compositora mexicana. 
Fecha de nacimiento: 23 de junio de 1995 (edad 25 años), Ciudad de México, México.'),
(2, 'Chayanne' , 'Recursos/img/Chayanne.jpg' , 'balada romantica' , 'Elmer Figueroa Arce, conocido como Chayanne, es un cantante, compositor, bailarín y actor puertorriqueño. Ha vendido más de 50 millones de álbumes en todo el mundo, lo que lo convierte en uno de los artistas latinos con mayores ventas. 
Fecha de nacimiento: 28 de junio de 1968 (edad 52 años), Río Piedras.'),
(3, 'Bob Dylan' , 'Recursos/img/Bob Dylan.jpg' , 'rock' , 'Bob Dylan, registrado al nacer como Robert Allen Zimmerman, es un músico, compositor, cantante y poeta estadounidense, ampliamente considerado como una de las figuras más prolíficas e influyentes en la música popular del siglo XX y de comienzos del siglo XXI. 
Fecha de nacimiento: 24 de mayo de 1941 (edad 79 años), Duluth, Minnesota, Estados Unidos.'),
(4, 'El Polaco' , 'Recursos/img/El Polaco.jpg' , 'cumbia' , 'Ezequiel Iván Cwirkaluk canta cumbia bajo el seudónimo El Polaco. Tuvo una relación con su colega Karina, de la cual nació su hija Sol Celeste, en 2007.
Comenzó su carrera en la música siendo el vocalista de Una de Kal.
Fecha de Nacimiento: 23 de mayo de 1987, Villa Caraza, provincia de Buenos Aires.'),
(5, 'Lola Indigo' , 'Recursos/img/Lola Indigo.jpg' , 'pop', 'Miriam Doblas Muñoz, popularmente conocida como Lola Índigo, es una cantante y bailarina española. Con su primer sencillo, «Ya no quiero ná», alcanzó la certificación de doble disco de platino en diciembre de 2018.
Fecha de nacimiento: 1 de abril de 1992 (edad 28 años), Madrid, España.'),
(6, 'Freddie Mercury' , 'Recursos/img/Freddie Mercury.jpg' , 'rock' , 'Freddie Mercury fue un cantante, compositor, pianista, diseñador gráfico y músico británico de origen parsi e indio, conocido por haber sido el vocalista principal de la banda de rock Queen. Como intérprete, ha sido reconocido por su poderosa voz y extravagantes puestas en escena. 
Fecha de nacimiento: 5 de septiembre de 1946, Stone Town, Tanzania.'),
(7, 'Luciano Pereyra' , 'Recursos/img/Luciano Pereyra.jpg' , 'balada romantica' , 'Luciano Pereyra es un cantante y compositor argentino.
Su primer contacto con la música fue en 1984 a sus 3 años de edad, cuando tarareó una canción que había aprendido en la radio. Ese mismo año, recibió una guitarra para Navidad. Al año siguiente, en 1985, Luciano concursó en un programa de televisión del antiguo ATC (actualmente Canal 7 Argentina).
Fecha de Nacimiento: 21 de septiembre de 1981 en la ciudad de Luján en la Provincia de Buenos Aires.'),
(8, 'Gilda' , 'Recursos/img/Gilda.jpg' , 'cumbia' , 'Míriam Alejandra Bianchi, conocida por su nombre artístico Gilda, fue una cantante y compositora argentina de cumbia.
Fecha de nacimiento: 11 de octubre de 1961, Buenos Aires.'),
(9, 'Edurne' , 'Recursos/img/Edurne.jpg' , 'pop' , 'Edurne García Almagro más conocida como Edurne, es una cantante, compositora, modelo, actriz y presentadora española de televisión. Se dio a conocer como finalista de la cuarta edición del concurso Operación Triunfo emitido en Telecinco.
Fecha de nacimiento: 22 de diciembre de 1985 (edad 34 años), Madrid, España.'),
(10, 'John Lennon' , 'Recursos/img/John Lennon.jpg' , 'rock' , 'John Winston Ono Lennon, de nacimiento John Winston Lennon, fue un artista, músico, multinstrumentista, cantautor, compositor, poeta, dibujante, escritor, pacifista, activista y actor inglés, conocido por ser uno de los miembros fundadores de la banda de rock The Beatles.
Fecha de nacimiento: 9 de octubre de 1940, Liverpool, Reino Unido.'),
(11, 'Abel Pintos' , 'Recursos/img/Abel Pintos.jpg' , 'balada romantica' , 'Abel Federico Pintos es un cantante, compositor y productor argentino de folclore y pop latino. Comenzó su carrera musical a los siete años, al ser escuchado por Raúl Lavié en un homenaje a José de San Martín realizado en su colegio.
Fecha de nacimiento: 11 de mayo de 1984 (edad 36 años), Bahía Blanca'),
(12, 'La Princesita' , 'Recursos/img/La Princesita.jpg' , 'cumbia' , 'Karina Jésica Tejeda más conocida como Karina o La Princesita es una cantante y compositora argentina. 
Fecha de nacimiento: 30 de enero de 1986 (edad 34 años), Florida.'),
(13, 'Charly Garcia' , 'Recursos/img/Charly Garcia.jpg' , 'rock' , 'Carlos Alberto García, conocido por su nombre artístico Charly García es un cantautor, compositor, músico y productor argentino de rock. 
Fecha de nacimiento: 23 de octubre de 1951 (edad 68 años), Buenos Aires.'),
(14, 'TINI' , 'Recursos/img/TINI.jpg' , 'pop' , 'Martina Stoessel, más conocida como Tini Stoessel o simplemente TINI, es una actriz, cantante, bailarina y modelo argentina. Comenzó a hacerse conocida por su personaje de Violetta Castillo en la serie original de Disney Channel Latinoamérica, Violetta. 
Fecha de nacimiento: 21 de marzo de 1997 (edad 23 años), Buenos Aires.'),
(15, 'Ricardo Arjona' , 'Recursos/img/Ricardo Arjona.jpg' , 'balada romantica' , 'Édgar Ricardo Arjona Morales, conocido artísticamente como Ricardo Arjona, es un cantautor, compositor, arreglista, músico y productor musical guatemalteco.
Fecha de nacimiento: 19 de enero de 1964 (edad 56 años), Jocotenango, Guatemala.'),
(16, 'Leo Mattioli' , 'Recursos/img/Leo Mattioli.jpg' , 'cumbia' , 'Leonardo Guillermo Mattioli, más conocido como Leo Mattioli, fue un cantante de cumbia y compositor argentino. Uno de los máximos exponentes de la Cumbia Argentina. Con una carrera repleta de éxitos, tras su muerte, se convirtió en una leyenda de la música Argentina. 
Fecha de nacimiento: 13 de agosto de 1972, Ciudad de Santa Fe.');

