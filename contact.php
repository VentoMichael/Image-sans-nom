<?php
$title = "Contact";
$first_menu = "nav-not_active";
$second_menu = "nav-not_active";
$third_menu = "nav-active";
$active = "nav-active";
require("header.php");
?>
    <div class="container__googlemap">
        <div class="gmap_canvas">
            <iframe width="100%" height="400" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=place%20vivegnis%206&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>
    <div class="contact__container">
        <form action="#" method="get" class="form">
            <div class="container__nameSurname">
                <div class="form__container">
                    <label class="label" for="name">Name</label>
                    <input id="name" name="name" class="input" type="text" required>
                </div>
                <div class="form__container">
                    <label class="label" for="surname">Surname</label>
                    <input id="surname" name="surname" class="input" type="text" required>
                </div>
            </div>
            <div class="container__nameSurname">
                <div class="form__container">
                    <label class="label" for="email">E-mail</label>
                    <input id="email" name="email" class="input" type="email" required>
                </div>
                <div class="form__container container">
                    <label class="label" for="meet-select">Why </label>
                    <div class="dropdown">
                        <select name="meet" id="meet-select" class="dropdown-select">
                            <option value="">--Please choose an option--</option>
                            <option value="exhibitions">See exhibitions</option>
                            <option value="talk">Meet to talk</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form__container textarea_container">
                <label class="label" for="message">Message</label>
                <textarea name="message" cols="30" rows="7" id="message" class="textarea" required></textarea>
            </div>
            <div class="submit__container">
                <input class="submit" type="submit" value="Send">
            </div>
        </form>
        <section class="informations__container">
            <h2 class="hidden">
                Contact informations
            </h2>
            <section class="contact__information contact__information__shedule">
                <h3 class="contact__title__schedule">Schedule & Availability</h3>
                <p>We are open during exhibition periods and by appointment</p>
            </section>
            <span class="contact__informations__bar__separator"></span>
            <section class="contact__information contact__information__place">
                <h3 class="contact__title__place">Place</h3>
                <p>We are open during exhibition periods and by appointment</p>
            </section>
        </section>
    </div>

<?php
require("footer.php");
?>