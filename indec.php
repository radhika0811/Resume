<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resume/CV Design</title>
    <link rel="stylesheet" href="stylee.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="resume">
    <div class="resume_left">
        <div class="resume_profile">
            <img src="image shishank.jpeg" alt="profile_pic">
        </div>
        <div class="resume_content">
            <div class="resume_item resume_info">
                <div class="title">
                    <p class="bold">
                        <?php
                        $name = "Shishank Jain";
                        echo $name;
                        ?>
                    </p>
                    <p class="regular">
                        <?php
                        $designation = "Software Engineer";
                        echo $designation;
                        ?>
                    </p>
                </div>
                <ul>
                    <li>
                        <div class="icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="data">
                            <?php
                            $number = "8171366828";
                            echo $number;
                            ?>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="data">
                            <?php
                            $email = "radhikaa245@gmail.com";
                            echo $email;
                            ?>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fab fa-linkedin"></i>
                        </div>
                        <div class="data">
                            <p>
                                <?php
                                $linkedIn = "";
                                echo $linkedIn;
                                ?>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="resume_item resume_social">
                <div class="title">
                    <p class="bold">
                        <?php
                        $card = "Subject Of Interest";
                        echo $card;
                        ?>
                    </p>
                </div>
                <ul>
                    <li>
                        <div class="data">
                            <p class="semi-bold">
                                <?php
                                $q = "HTML";
                                echo $q;
                                ?>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="data">
                            <p class="semi-bold">
                                <?php
                                $q1 = "PHP";
                                echo $q1;
                                ?>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="data">
                            <p class="semi-bold">
                                <?php
                                $q2 = "Algorithms";
                                echo $q2;
                                ?>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="data">
                            <p class="semi-bold">
                                <?php
                                $q3 = "Data Science";
                                echo $q3;
                                ?>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="resume_item resume_social">
                <div class="title">
                    <p class="bold">
                        <?php
                        $card9 = "Personal Details";
                        echo $card9;
                        ?>
                    </p>
                </div>
                <ul>
                    <li>
                        <div class="data">
                            <p>
                                <?php
                                $fname = "Father's Name: Mr. Deepak Agrawal";
                                echo $fname;
                                ?>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="data">
                            <p>
                                <?php
                                $dob = "Date Of Birth: 2 April 2000";
                                echo $dob;
                                ?>
                            </p
                        </div></li>
                        <li>
                        <div class="data">
                            <p>
                        <?php
                        $address = "Address: Shri Krishna Paradise,Mayur Vihar, Mathura";
                        echo $address;
                        ?></p></div></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="resume_right">
        <div class="resume_item resume_about">
            <div class="title">
                <p class="bold">
                    <?php
                    $part1 = "About Me";
                    echo $part1;
                    ?>
                </p>
            </div>
            <p>
                <?php
               $part2=" A generous, head strong and organized individual with 
                the passion for working and learning new technologies";
               echo $part2;
           ?>
            </p>
        </div>
        <div class="resume_item resume_education">
            <div class="title">
                <p class="bold">
                    <?php
                    $part5 = "Education";
                    echo $part5;
                    ?>
                </p>
            </div>
            <ul>
                <li>
                    <div class="date"><?php
                        $date = "2006-2016";
                        echo $date;
                        ?></div>
                    <div class="info">
                        <p class="semi-bold">
                            <?php
                            $school = "St. Dominics Senior Secondary School, Mathura ";
                            echo $school    ;
                            ?>
                        </p>
                        <p class="semi-bold">
                            <?php
                            $file = "HIGH SCHOOL";
                            echo $file;
                            ?>
                        </p>
                        <p>
                            <?php
                            $percentage = "CGPA-9.6";
                            echo $percentage;
                            ?>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="date"><?php
                        $date1 = "2016-2018";
                        echo $date1;
                        ?></div>
                    <div class="info">
                        <p class="semi-bold">
                            <?php
                            echo $school    ;
                            ?>
                        </p>
                        <p class="semi-bold">
                            <?php
                            $file1 = "INTERMEDIATE";
                            echo $file1;
                            ?>
                        </p>
                        <p>
                            <?php
                            $percentagee = "PERCENTAGE-82%";
                            echo $percentagee;
                            ?>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="date"><?php
                        $date2 = "2018-2022";
                        echo $date2;
                        ?></div>
                    <div class="info">
                        <p class="semi-bold">
                            <?php
                            $clg = "GLA University, Mathura";
                            echo $clg;
                            ?>
                        </p>
                        <p class="semi-bold">
                            <?php
                            $side = "BTECH In Computer Science";
                            echo $side;
                            ?>
                        </p>
                        <p>
                            <?php
                            $cpi = "Current CPI-7.90";
                            echo $cpi;
                            ?>
                        </p>
                        <p>
                            <?php
                            $clubs = "Clubs - Abacus";
                            echo $clubs;
                            ?>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="resume_item resume_skills">
            <div class="title">
                <p class="bold">skill's</p>
            </div>
            <ul>
                <li>
                    <div class="skill_name">
                        HTML
                    </div>
                    <div class="skill_progress">
                        <span style="width: 80%;"></span>
                    </div>
                    <div class="skill_per">80%</div>
                </li>
                <li>
                    <div class="skill_name">
                        CSS
                    </div>
                    <div class="skill_progress">
                        <span style="width: 70%;"></span>
                    </div>
                    <div class="skill_per">70%</div>
                </li>
                <li>
                    <div class="skill_name">
                        PHP
                    </div>
                    <div class="skill_progress">
                        <span style="width: 50%;"></span>
                    </div>
                    <div class="skill_per">90%</div>
                </li>
                <li>
                    <div class="skill_name">
                        Python
                    </div>
                    <div class="skill_progress">
                        <span style="width: 60%;"></span>
                    </div>
                    <div class="skill_per">60%</div>
                </li>
                <li>
                    <div class="skill_name">
                        JAVA
                    </div>
                    <div class="skill_progress">
                        <span style="width: 88%;"></span>
                    </div>
                    <div class="skill_per">88%</div>
                </li>
            </ul>
        </div>

        <div class="resume_item resume_hobby">
            <div class="title">
                <p class="bold">Hobby</p>
            </div>
            <ul>
                <li><i class="fas fa-book"></i></li>
                <li><i class="fas fa-gamepad"></i></li>
                <li><i class="fas fa-music"></i></li>
                <li><i class="fab fa-pagelines"></i></li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>