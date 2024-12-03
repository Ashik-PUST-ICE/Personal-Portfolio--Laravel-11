<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Skills</title>
    <style>
        /* General Styling */
        body {
            background-color: #000;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        h1, p {
            text-align: center;
        }

        /* Section Styling */
        .skills-section {
            padding: 40px 20px;
        }

        .skills-section h1 {
            font-size: 36px;
            font-weight: bold;
            color: #00d1ff;
            margin-bottom: 10px;
        }

        .skills-section p {
            font-size: 16px;
            color: #bbb;
            margin-bottom: 40px;
        }

        /* Skills Container */
        .skills-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            max-width: 1100px;
            margin: 0 auto;
            gap: 15px;
        }

        .column {
            flex: 0 0 48%; /* Two columns */
        }

        .skill-box {
            background-color: #111;
            border-radius: 8px;
            padding: 15px 20px;
            margin-bottom: 15px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .skill-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 209, 255, 0.4);
        }

        .skill-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .skill-title h3 {
            font-size: 18px;
            color: #fff;
        }

        .skill-title span {
            font-size: 14px;
            font-weight: bold;
            color: #00d1ff;
        }

        .progress-bar {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
            height: 10px;
            position: relative;
            overflow: hidden;
        }

        .progress-bar span {
            display: block;
            height: 100%;
            border-radius: 5px;
            animation: fillProgress 2s ease;
        }

        /* Skill Colors */
        .progress-c span {
            background: linear-gradient(90deg, #e74c3c, #c0392b);
        }

        .progress-cpp span {
            background: linear-gradient(90deg, #3498db, #2980b9);
        }

        .progress-python span {
            background: linear-gradient(90deg, #27ae60, #2ecc71);
        }

        .progress-java span {
            background: linear-gradient(90deg, #f39c12, #e67e22);
        }

        .progress-js span {
            background: linear-gradient(90deg, #f1c40f, #f39c12);
        }

        .progress-laravel span {
            background: linear-gradient(90deg, #9b59b6, #8e44ad);
        }

        .progress-vue span {
            background: linear-gradient(90deg, #1abc9c, #16a085);
        }

        .progress-mysql span {
            background: linear-gradient(90deg, #34495e, #2c3e50);
        }

        /* Animations */
        @keyframes fillProgress {
            from {
                width: 0%;
            }

            to {
                width: 100%;
            }
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .column {
                flex: 0 0 100%;
            }
        }
    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <section class="skills-section">

        <br>
        <br>
        <br>
        <h1>My Technical Skills</h1>
        <p>Explore my expertise in programming languages, frameworks, and databases.</p>

        <div class="skills-container">
            <!-- Left Column -->
            <div class="column">
                <div class="skill-box">
                    <div class="skill-title">
                        <h3>C</h3>
                        <span>85%</span>
                    </div>
                    <div class="progress-bar progress-c">
                        <span style="width: 85%;"></span>
                    </div>
                </div>

                <div class="skill-box">
                    <div class="skill-title">
                        <h3>C++</h3>
                        <span>80%</span>
                    </div>
                    <div class="progress-bar progress-cpp">
                        <span style="width: 80%;"></span>
                    </div>
                </div>

                <div class="skill-box">
                    <div class="skill-title">
                        <h3>Python</h3>
                        <span>90%</span>
                    </div>
                    <div class="progress-bar progress-python">
                        <span style="width: 90%;"></span>
                    </div>
                </div>

                <div class="skill-box">
                    <div class="skill-title">
                        <h3>Java</h3>
                        <span>70%</span>
                    </div>
                    <div class="progress-bar progress-java">
                        <span style="width: 70%;"></span>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="column">
                <div class="skill-box">
                    <div class="skill-title">
                        <h3>JavaScript</h3>
                        <span>75%</span>
                    </div>
                    <div class="progress-bar progress-js">
                        <span style="width: 75%;"></span>
                    </div>
                </div>

                <div class="skill-box">
                    <div class="skill-title">
                        <h3>Laravel</h3>
                        <span>90%</span>
                    </div>
                    <div class="progress-bar progress-laravel">
                        <span style="width: 90%;"></span>
                    </div>
                </div>

                <div class="skill-box">
                    <div class="skill-title">
                        <h3>Vue.js</h3>
                        <span>60%</span>
                    </div>
                    <div class="progress-bar progress-vue">
                        <span style="width: 60%;"></span>
                    </div>
                </div>

                <div class="skill-box">
                    <div class="skill-title">
                        <h3>MySQL</h3>
                        <span>85%</span>
                    </div>
                    <div class="progress-bar progress-mysql">
                        <span style="width: 85%;"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>











