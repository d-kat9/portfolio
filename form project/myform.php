    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $visit_location = $_POST['visit-location'];
    $visit_date = $_POST['visit-date'];
    $app_type = $_POST['app-type'];
    $satisfaction = $_POST['Satisfaction']
    $comments = $_POST['comments'];
    $from = 'From: My Contact Form';
    $to = 'ekaterinadurocher@gmail.com';
    $subject = 'New Form FeedBack!';

    $body = "From: $name\n E-Mail: $email\n Message:\n $comments\n $phone\n $visit_location\n $visit_date\n $app_type\n $satisfaction";

    if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $from)) {
        echo '<p>Message Sent Successfully!</p>';
        } else {
        echo '<p>Ah! Try again, please?</p>';
        }
    }
