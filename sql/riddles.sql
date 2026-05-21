DROP TABLE IF EXISTS questions;

CREATE TABLE questions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question VARCHAR(255) NOT NULL,
    hint VARCHAR(255) NOT NULL,
    answer VARCHAR(100) NOT NULL,
    roomId INT NOT NULL
);

INSERT INTO questions (question, hint, answer, roomId) VALUES

('Welke kleur heeft de sleutel op tafel?', 'Kijk goed naar de tafel.', 'goud', 1),
('Hoeveel stoelen staan in de kamer?', 'Tel alle stoelen.', '4', 1),
('Welk woord staat op de muur?', 'Kijk achter de kast.', 'escape', 1),

('Welke code staat op de kluis?', 'Zoek naar cijfers.', '4281', 2),
('Welke kleur heeft de deur?', 'Kijk naar de uitgang.', 'rood', 2),
('Wat ligt onder het bed?', 'Kijk laag bij de grond.', 'zaklamp', 2);