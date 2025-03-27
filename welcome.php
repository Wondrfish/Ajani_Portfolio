<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="welcome.css">
</head>
<body>
    <div class="portfolio-container">
        <h1>My Portfolio</h1>
        <div class="profile-header">
            <div class="profile-about-container">
                <div class="about-me">
                    <div class="section about-me-left">
                        <h2>About Me</h2>
                        <p>Hi, I'm Ajani Johnson, a software engineer with 5 years of experience building web applications. <bold>I have a particular interest in AI systems, computer vision, and crafting innovative projects</bold></p>
                    </div>
                </div>
                <img src="https://media.licdn.com/dms/image/v2/D4E35AQEuRyFTPOGyOQ/profile-framedphoto-shrink_400_400/profile-framedphoto-shrink_400_400/0/1712576025766?e=1743649200&v=beta&t=jxnXfuBiZ5WCKPucL1cDToqrKttvW8tXJ6JwOQqN4CM" alt="Ajani Johnson" class="profile-pic">
            </div>
        </div>
    </div>
    
    <div class="project">
        <?php
            $projects = [
                ['name' => 'SEE-food', 'description' => 'Food Classifier with TensorFlow & Keras A deep learning model for food image classification using TensorFlow and Keras.', 'github' => 'https://github.com/Wondrfish/SEEFood'],
                ['name' => 'WONDRtranscribe', 'description' => 'Amazon Q - speech to text', 'github' => 'https://github.com/Wondrfish/WONDRtranscribe'],
                ['name' => 'Project 3', 'description' => 'OCR for nutition labels in Rust and Go', 'github' => 'https://github.com/wondrfish'],
            ];
        ?>
        <div class="project-grid">
            <?php
            foreach ($projects as $project) {
                echo '<div class="project-box">';
                echo '<div class="project-image">';
                echo '<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" alt="Screenshot of ' . htmlspecialchars($project['name']) . '">';
                echo '</div>';
                echo '<div class="project-content">';
                echo '<h3>' . htmlspecialchars($project['name']) . '</h3>';
                echo '<p>' . htmlspecialchars($project['description']) . '</p>';
                echo '<a href="' . htmlspecialchars($project['github']) . '" target="_blank">View on GitHub</a>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
    <div class="section">
        <h2>Tech Stack</h2>
        <div class="tech-stack-grid">
            <?php
            $techStack = [
                'Frontend' => [
                    ['name' => 'HTML5', 'description' => 'Structuring web content'],
                    ['name' => 'CSS', 'description' => 'Designing web pages'],
                    ['name' => 'JavaScript', 'description' => 'Programming language']
                ],
                'Backend' => [
                    ['name' => 'PHP', 'description' => 'Server-side language'],
                    ['name' => 'GOLang', 'description' => 'Programming language'],
                    ['name' => 'Python', 'description' => 'Programming language']
                ],
                'Database' => [
                    ['name' => 'MySQL', 'description' => 'Relational database'],
                    ['name' => 'MongoDB', 'description' => 'NoSQL database'],
                    ['name' => 'PostgreSQL', 'description' => 'Relational database']
                ],
                'DevOps' => [
                    ['name' => 'Docker', 'description' => 'Containerizing applications'],
                    ['name' => 'Kubernetes', 'description' => 'Container orchestration'],
                    ['name' => 'Git', 'description' => 'Version control']
                ],
                'Cloud' => [
                    ['name' => 'AWS', 'description' => 'Amazon Web Services '],
                    ['name' => 'Google Cloud', 'description' => 'Google\'s cloud computing services']
                ]
            ];

            $devIcons = [
                'HTML5' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg',
                'CSS' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg',
                'JavaScript' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg',
                'PHP' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg',
                'GOLang' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/go/go-original.svg',
                'Python' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg',
                'MySQL' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg',
                'MongoDB' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg',
                'PostgreSQL' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg',
                'Kubernetes' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/kubernetes/kubernetes-plain.svg',
                'Git' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg',
                'AWS' => "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/amazonwebservices/amazonwebservices-original-wordmark.svg",
                'Google Cloud' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/googlecloud/googlecloud-original.svg',
                'Docker' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg'
                ];

                foreach ($techStack as $category => $technologies) {
                    echo '<div class="tech-stack-category">';
                    echo '<h3>' . htmlspecialchars($category) . '</h3>'; // Display the category name
                    echo '<div class="tech-stack-items">'; // Dynamic grid for items
                    foreach ($technologies as $tech) {
                        $icon = isset($devIcons[$tech['name']]) ? $devIcons[$tech['name']] : 'https://via.placeholder.com/40'; // Fallback icon
                        $description = isset($tech['description']) ? $tech['description'] : 'No description available.';
                        echo '<div class="tech-stack-item">';
                        echo '<div class="tech-stack-content">';
                        echo '<img src="' . htmlspecialchars($icon) . '" alt="' . htmlspecialchars($tech['name']) . ' Icon">';
                        echo '<div class="tech-stack-text">';
                        echo '<span>' . htmlspecialchars($tech['name']) . '</span>';
                        echo '<p class="tech-description">' . htmlspecialchars($description) . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-content">
                <p class="copyright">&copy; <?php echo date('Y'); ?> Ajani Johnson. All rights reserved.</p>
                <div class="footer-links">
                    <a href="https://www.linkedin.com/in/ajani-johnson-682935262/" class="footer-link" target="_blank">LinkedIn</a>
                    <a href="https://github.com/Wondrfish" class="footer-link" target="_blank">GitHub</a>
                    <a href="https://bsky.app/profile/wondrfish.bsky.social" class="footer-link" target="_blank">BlueSky</a>
                    <a href="mailto:Ajanimjohnson@gmail.com" class="footer-link" target="_blank">Email</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>