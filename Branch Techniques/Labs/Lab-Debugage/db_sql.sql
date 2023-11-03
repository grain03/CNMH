CREATE  DATABASE labdebugage;

CREATE TABLE labdebugage.stagiaires (
  id int(11) NOT NULL,
  full_name varchar(50) NOT NULL,
  email varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO labdebugage. stagiaires (id, full_name, email) VALUES
(3, 'imrane sarsri', 'sarsri.imrane@gmail.com'),
(14, 'Mary Johnson', 'mary.johnson@email.com'),
(17, 'Zachary Sharp', 'xihec@mailinator.com'),
(18, 'Desiree Bryan', 'cowozemo@mailinator.com');