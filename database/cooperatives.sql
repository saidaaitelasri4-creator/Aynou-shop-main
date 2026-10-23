CREATE TABLE IF NOT EXISTS cooperatives (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(150) NOT NULL,
    ville VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    image VARCHAR(255) NOT NULL
);

INSERT INTO cooperatives (nom, ville, description, image) VALUES
('Coopérative Argan Tiznit', 'Tiznit', 'Spécialisée dans la production et la valorisation de l''huile d''argan naturelle et des cosmétiques traditionnels.', 'argane1.jpg'),
('Coopérative Féminine Igoukak', 'Agadir', 'Coopérative féminine produisant des huiles biologiques de haute qualité et des produits du terroir.', 'argane2.jpg'),
('Coopérative Tafraout Authenticité', 'Tafraout', 'Œuvre à la préservation du patrimoine local et à la fabrication de produits naturels durables.', 'argane3.jpg'),
('Coopérative Al Amal des Produits du Terroir', 'Souss-Massa', 'Pionnière dans la commercialisation de produits du terroir agricoles avec une haute qualité et des normes certifiées.', 'argane4.jpg'),
('Coopérative Oasis Verte', 'Tétouan', 'Production de miel naturel et de ses dérivés ainsi que d''huiles essentielles.', 'argane5.jpg');