<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futuristic Hello World</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Courier New', monospace;
            background: linear-gradient(45deg, #0a0a0a, #1a1a2e, #16213e);
            background-size: 400% 400%;
            animation: gradientShift 8s ease infinite;
            overflow: hidden;
            height: 100vh;
            position: relative;
        }

        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Animated background particles */
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            width: 2px;
            height: 2px;
            background: #00ffff;
            border-radius: 50%;
            animation: float 20s infinite linear;
            box-shadow: 0 0 10px #00ffff, 0 0 20px #00ffff, 0 0 30px #00ffff;
        }

        @keyframes float {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                transform: translateY(-100vh) rotate(360deg);
                opacity: 0;
            }
        }

        /* Main container */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
            z-index: 10;
        }

        /* Holographic frame */
        .holo-frame {
            position: relative;
            padding: 60px;
            background: rgba(0, 255, 255, 0.03);
            border: 2px solid rgba(0, 255, 255, 0.3);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            box-shadow:
                0 0 50px rgba(0, 255, 255, 0.2),
                inset 0 0 50px rgba(0, 255, 255, 0.05);
            animation: frameGlow 3s ease-in-out infinite alternate;
        }

        @keyframes frameGlow {
            0% {
                border-color: rgba(0, 255, 255, 0.3);
                box-shadow:
                    0 0 50px rgba(0, 255, 255, 0.2),
                    inset 0 0 50px rgba(0, 255, 255, 0.05);
            }

            100% {
                border-color: rgba(0, 255, 255, 0.8);
                box-shadow:
                    0 0 80px rgba(0, 255, 255, 0.4),
                    inset 0 0 80px rgba(0, 255, 255, 0.1);
            }
        }

        /* Corner decorations */
        .holo-frame::before,
        .holo-frame::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            border: 2px solid #00ffff;
        }

        .holo-frame::before {
            top: -2px;
            left: -2px;
            border-right: none;
            border-bottom: none;
            animation: cornerPulse1 2s infinite;
        }

        .holo-frame::after {
            bottom: -2px;
            right: -2px;
            border-left: none;
            border-top: none;
            animation: cornerPulse2 2s infinite;
        }

        @keyframes cornerPulse1 {

            0%,
            100% {
                opacity: 0.3;
                transform: scale(1);
            }

            50% {
                opacity: 1;
                transform: scale(1.1);
            }
        }

        @keyframes cornerPulse2 {

            0%,
            100% {
                opacity: 0.3;
                transform: scale(1);
            }

            50% {
                opacity: 1;
                transform: scale(1.1);
            }
        }

        /* Main text */
        .hello-text {
            font-size: 4rem;
            font-weight: bold;
            background: linear-gradient(45deg, #00ffff, #ff00ff, #ffff00, #00ffff);
            background-size: 400% 400%;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            text-align: center;
            text-shadow: 0 0 30px rgba(0, 255, 255, 0.5);
            animation: textGlow 4s ease-in-out infinite, textShift 8s ease infinite;
            letter-spacing: 0.1em;
            position: relative;
        }

        @keyframes textGlow {

            0%,
            100% {
                filter: brightness(1) blur(0px);
                transform: scale(1);
            }

            50% {
                filter: brightness(1.2) blur(1px);
                transform: scale(1.05);
            }
        }

        @keyframes textShift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Subtitle */
        .subtitle {
            margin-top: 20px;
            font-size: 1.2rem;
            color: #00ffff;
            text-align: center;
            opacity: 0.8;
            animation: subtitleFade 3s ease-in-out infinite alternate;
            letter-spacing: 0.2em;
        }

        @keyframes subtitleFade {
            0% {
                opacity: 0.6;
            }

            100% {
                opacity: 1;
            }
        }

        /* Typing effect */
        .typing-text {
            margin-top: 30px;
            font-size: 1rem;
            color: #00ff00;
            font-family: 'Courier New', monospace;
            text-align: center;
            min-height: 1.5em;
        }

        .cursor {
            display: inline-block;
            background-color: #00ff00;
            width: 2px;
            animation: blink 1s infinite;
        }

        @keyframes blink {

            0%,
            50% {
                opacity: 1;
            }

            51%,
            100% {
                opacity: 0;
            }
        }

        /* Grid overlay */
        .grid {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                linear-gradient(rgba(0, 255, 255, 0.1) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 255, 255, 0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: gridMove 20s linear infinite;
            pointer-events: none;
        }

        @keyframes gridMove {
            0% {
                transform: translate(0, 0);
            }

            100% {
                transform: translate(50px, 50px);
            }
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .hello-text {
                font-size: 2.5rem;
            }

            .holo-frame {
                padding: 40px 30px;
                margin: 20px;
            }

            .subtitle {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="particles" id="particles"></div>
    <div class="grid"></div>

    <div class="container">
        <div class="holo-frame">
            <div class="hello-text">HELLO WORLD</div>
            <div class="subtitle">WELCOME TO THE FUTURE</div>
            <div class="typing-text" id="typingText"></div>
        </div>
    </div>

    <script>
        // Create floating particles
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 50;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';

                // Random starting position
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 20 + 's';
                particle.style.animationDuration = (Math.random() * 10 + 15) + 's';

                // Random colors
                const colors = ['#00ffff', '#ff00ff', '#ffff00', '#00ff00'];
                const color = colors[Math.floor(Math.random() * colors.length)];
                particle.style.background = color;
                particle.style.boxShadow = `0 0 10px ${color}, 0 0 20px ${color}, 0 0 30px ${color}`;

                particlesContainer.appendChild(particle);
            }
        }

        // Typing animation
        function typeWriter() {
            const texts = [
                "Initializing neural networks...",
                "Quantum processors online...",
                "Reality matrix loaded...",
                "Welcome, human...",
                "The future is now."
            ];

            let textIndex = 0;
            let charIndex = 0;
            const typingElement = document.getElementById('typingText');

            function type() {
                if (textIndex < texts.length) {
                    if (charIndex < texts[textIndex].length) {
                        typingElement.innerHTML = texts[textIndex].substring(0, charIndex + 1) + '<span class="cursor">|</span>';
                        charIndex++;
                        setTimeout(type, 100);
                    } else {
                        setTimeout(() => {
                            charIndex = 0;
                            textIndex++;
                            if (textIndex >= texts.length) {
                                textIndex = 0;
                            }
                            setTimeout(type, 500);
                        }, 2000);
                    }
                }
            }

            type();
        }

        // Holographic glitch effect
        function glitchEffect() {
            const frame = document.querySelector('.holo-frame');
            const text = document.querySelector('.hello-text');

            setInterval(() => {
                if (Math.random() > 0.95) {
                    frame.style.transform = `translate(${Math.random() * 4 - 2}px, ${Math.random() * 4 - 2}px)`;
                    text.style.textShadow = `${Math.random() * 10 - 5}px 0 #ff00ff, ${Math.random() * 10 - 5}px 0 #00ffff`;

                    setTimeout(() => {
                        frame.style.transform = 'translate(0, 0)';
                        text.style.textShadow = '0 0 30px rgba(0, 255, 255, 0.5)';
                    }, 100);
                }
            }, 50);
        }

        // Mouse interaction
        function addMouseEffects() {
            document.addEventListener('mousemove', (e) => {
                const frame = document.querySelector('.holo-frame');
                const rect = frame.getBoundingClientRect();
                const centerX = rect.left + rect.width / 2;
                const centerY = rect.top + rect.height / 2;

                const deltaX = (e.clientX - centerX) / 20;
                const deltaY = (e.clientY - centerY) / 20;

                frame.style.transform = `rotateX(${-deltaY}deg) rotateY(${deltaX}deg)`;
            });

            document.addEventListener('mouseleave', () => {
                const frame = document.querySelector('.holo-frame');
                frame.style.transform = 'rotateX(0deg) rotateY(0deg)';
            });
        }

        // Initialize everything
        document.addEventListener('DOMContentLoaded', () => {
            createParticles();
            typeWriter();
            glitchEffect();
            addMouseEffects();
        });
    </script>
</body>

</html>