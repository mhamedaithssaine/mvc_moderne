CREATE DATABASE mvc_php_postgresql;

USE mvc_php_postgresql;

CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE articles (
    id SERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO articles (title, content)
VALUES ('The Rise of Electric Vehicles', 'Electric vehicles (EVs) are gaining traction as the world shifts toward greener and more sustainable transportation options. With growing concerns about climate change and the environmental impact of fossil fuels, EVs are seen as a viable solution to reduce carbon emissions. Leading car manufacturers are ramping up production, and governments are offering incentives to encourage consumers to make the switch to electric cars.');
/* 2025-02-04 15:42:54 [5 ms] */ 
INSERT INTO articles (title, content)
VALUES ('Exploring the Wonders of Space Travel', 'Space travel has fascinated humanity for centuries. In recent years, private companies such as SpaceX, Blue Origin, and Virgin Galactic have made significant advancements in space exploration. From sending humans to the moon to launching reusable rockets, the future of space travel looks promising. As technology continues to improve, the possibility of colonizing other planets may become a reality within our lifetime.');
/* 2025-02-04 15:42:55 [5 ms] */ 
INSERT INTO articles (title, content)
VALUES ('The Impact of Social Media on Society', 'Social media has changed the way people communicate, share information, and interact with each other. While platforms like Facebook, Twitter, and Instagram offer a sense of connection, they also bring challenges such as misinformation, cyberbullying, and mental health issues. As social media continues to grow, it is crucial to examine its effects on society and find ways to mitigate its negative impacts.');
/* 2025-02-04 15:42:57 [5 ms] */ 
INSERT INTO articles (title, content)
VALUES ('The Importance of Sustainable Farming Practices', 'Sustainable farming practices are essential for the long-term health of our planet and food systems. By using techniques like crop rotation, reduced pesticide use, and organic farming, we can reduce environmental damage and ensure that future generations have access to healthy food. Governments, farmers, and consumers all play a role in supporting sustainable agriculture.');
/* 2025-02-04 21:42:48 [60 ms] */ 