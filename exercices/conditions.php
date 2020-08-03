<?php

// 1.1 - Clean your room Exercise

$room_is_filthy = true;

if ($room_is_filthy == true) {
    echo "Yuk, room is dirty : let's clean it up !";
    // cleanup_room();
    // echo "<br>Room is now clean !";
    $room_is_filthy = false;
} else {
    echo "<br>Nothing to do, room is neat.";
}

// 1.2 - Improve it

$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

$room_filthiness = $possible_states[0];

if ($room_filthiness == "health hazard") {
    echo "<br>Yuk, Room is Disgusting! Let's clean it up !";
} elseif ($room_filthiness == "filthy") {
    echo "<br>Yuk, Room is dirty : let's clean it up !";
} elseif ($room_filthiness == "dirty") {
    echo "<br>Yuk, Room is dirty : let's clean it up !";
} else {
    echo "<br>Nothing to do, room is neat.";
}


// 2 - Display a different greeting message depending on the time of the day

$time = date("H:i");

if ($time >= "05:00" and $time <= "09:00") {
    echo "<br>Good morning !";
}

if ($time >= "09:01" and $time <= "12:00") {
    echo "<br>Good day !";
}

if ($time >= "12:01" and $time <= "16:00") {
    echo "<br>Good afternoon !";
}

if ($time >= "16:01" and $time <= "21:00") {
    echo "<br>Good evening !";
}

if ($time >= "21:01" and $time <= "04:59") {
    echo "<br>Good night !";
}

// 3.1 - Display a different greeting according to the user's age

if (isset($_GET["age"])) {
    // Form processing

    if ($_GET["age"] < 12) {
        echo "<br>Hello Kiddo !";
    }
    if ($_GET["age"] >= 12 && $_GET["age"] < 18) {
        echo "<br>Hello Teenager !";
    }
    if ($_GET["age"] >= 18 && $_GET["age"] < 115) {
        echo "<br>Hello Adult !";
    }
    if ($_GET["age"] >= 115) {
        echo "<br>WOW! Still alive ? Are you a robot, like me ? Can I hug you ?";
    }
}
// Form (incomplete)
?>
<form method="get" action="">
    <label for="age">Your age</label>
    <input type="" name="age">
    <input type="submit" name="submit" value="Greet me now">
</form>


<?php
// 3.2 - Display a different greeting according to the user's age and gender

if (isset($_GET["age"]) && isset($_GET["gender"])) {
    // Form processing

    if ($_GET["gender"] == "male") {
        if ($_GET["age"] < 12) {
            echo "<br>Hello Boy !";
        }
        if ($_GET["age"] >= 12 && $_GET["age"] < 18) {
            echo "<br>Hello Teen Boy !";
        }
        if ($_GET["age"] >= 18 && $_GET["age"] < 115) {
            echo "<br>Hello Mr. !";
        }
        if ($_GET["age"] >= 115) {
            echo "<br>WOW! Still alive ? Are you a man robot, like me ? Can I hug you ?";
        }
    }

    if ($_GET["gender"] == "female") {
        if ($_GET["age"] < 12) {
            echo "<br>Hello Girl !";
        }
        if ($_GET["age"] >= 12 && $_GET["age"] < 18) {
            echo "<br>Hello Teen Girl !";
        }
        if ($_GET["age"] >= 18 && $_GET["age"] < 115) {
            echo "<br>Hello Mrs. !";
        }
        if ($_GET["age"] >= 115) {
            echo "<br>WOW! Still alive ? Are you a woman robot, like me ? Can I hug you ?";
        }
    }
}

?>

<form method="get" action="">
    <label for="age">Your age :</label>
    <input type="" name="age">
    <label for="gender">Your gender :</label>
    <input type="radio" name="gender" value="male">Male</input>
    <input type="radio" name="gender" value="female">Female</input>
    <input type="submit" name="submit" value="Greet me now">
</form>


<?php
// 4 - Display a different greeting according to the user's age, gender and mothertongue

if (isset($_GET["age"]) && isset($_GET["gender"]) && isset($_GET["language"])) {
    // Form processing
    if ($_GET["language"] == "yes") {
        if ($_GET["gender"] == "male") {
            if ($_GET["age"] < 12) {
                echo "<br>Hello Boy !";
            }
            if ($_GET["age"] >= 12 && $_GET["age"] < 18) {
                echo "<br>Hello Teen Boy !";
            }
            if ($_GET["age"] >= 18 && $_GET["age"] < 115) {
                echo "<br>Hello Mr. !";
            }
            if ($_GET["age"] >= 115) {
                echo "<br>WOW! Still alive ? Are you a man robot, like me ? Can I hug you ?";
            }
        }

        if ($_GET["gender"] == "female") {
            if ($_GET["age"] < 12) {
                echo "<br>Hello Girl !";
            }
            if ($_GET["age"] >= 12 && $_GET["age"] < 18) {
                echo "<br>Hello Teen Girl !";
            }
            if ($_GET["age"] >= 18 && $_GET["age"] < 115) {
                echo "<br>Hello Mrs. !";
            }
            if ($_GET["age"] >= 115) {
                echo "<br>WOW! Still alive ? Are you a woman robot, like me ? Can I hug you ?";
            }
        }
    }

    if ($_GET["language"] == "no") {
        if ($_GET["gender"] == "male") {
            if ($_GET["age"] < 12) {
                echo "<br>Aloha Boy !";
            }
            if ($_GET["age"] >= 12 && $_GET["age"] < 18) {
                echo "<br>Aloha Teen Boy !";
            }
            if ($_GET["age"] >= 18 && $_GET["age"] < 115) {
                echo "<br>Aloha Mr. !";
            }
            if ($_GET["age"] >= 115) {
                echo "<br>Aloha! Still alive ? Are you a man robot, like me ? Can I hug you ?";
            }
        }

        if ($_GET["gender"] == "female") {
            if ($_GET["age"] < 12) {
                echo "<br>Aloha Girl !";
            }
            if ($_GET["age"] >= 12 && $_GET["age"] < 18) {
                echo "<br>Aloha Teen Girl !";
            }
            if ($_GET["age"] >= 18 && $_GET["age"] < 115) {
                echo "<br>Aloha Mrs. !";
            }
            if ($_GET["age"] >= 115) {
                echo "<br>Aloha! Still alive ? Are you a woman robot, like me ? Can I hug you ?";
            }
        }
    }
}

?>

<form method="get" action="">
    <label for="age">Your age :</label>
    <input type="" name="age">
    <label for="gender">Your gender :</label>
    <input type="radio" name="gender" value="male">Male</input>
    <input type="radio" name="gender" value="female">Female</input>
    <label for="gender">Do you speak English ? :</label>
    <input type="radio" name="language" value="yes">Yes</input>
    <input type="radio" name="language" value="no">No</input>
    <input type="submit" name="submit" value="Greet me now">
</form>

<?php

// 5 - The Girl Soccer team
