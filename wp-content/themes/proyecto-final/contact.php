<?php /* Template Name: Contact Page*/?>

<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package proyecto-final
 */

get_header();
?>



<section class="contact bg-gray">
    <div class="container-fluid">
        <div class="row">
            <form class="form-contact" action="sendEmail.php">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="mail" type="email" class="form-control" id="email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input name="subject" type="text" class="form-control" id="subject" placeholder="">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control" id="message" rows="3"></textarea>
                </div>
                <button class="btn btn-default">Send</button>
            </form>
        </div>
    </div>
</section>