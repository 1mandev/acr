<?php include('mail-handler.php'); require_once $_SERVER['DOCUMENT_ROOT'].'/server-config.php'; include('header.php'); ?>

<!-- about us -->
<section class="about-us section__primary">
                <div class="section__header">
                    <svg>
                        <use xlink:href="assets/icons/sprite.svg#acr-Advice">
                        </use>
                    </svg>

                    <h4 class="section__header--title">about us</h4>
                </div>

                <div class="about-us__content">
                    <p>
                    ActualCashRewards.com is the consolidation & continued publication of crimes and events that have resulted in actual cash rewards being offered. ActualCashRewards.com is the the way that we have come up with to possibly help, & keep, active crimes and events in front of the public. 
                    Since the publicity of most of the events that offer rewards, usually exists for short time, (such as a one day newspaper article) ACR is hoping to provide a way that extends and prolongs the publication & existence of a reward being offered for the help & assistance in solving these crimes and events. We feel that the people, businesses and law enforcement agencies, need a way that's dedicated to keeping their event & reward alive. </p>
                    <p>
                    ACR feels that to be one of those people, businesses and law enforcement agencies, and have their press and publicity of their event to be fleeting and forgotten, after the one day of publication in the local newspaper, and online.
                    </p>
                </div>
            </section>

            <!-- how it works -->
            <section class="hw section__primary" id="how-it-works">
                <div class="section__header">
                    <svg>
                        <use xlink:href="assets/icons/sprite.svg#acr-Process">
                        </use>
                    </svg>

                    <h4 class="section__header--title">how it works</h4>
                </div>

                <div class="hw__content">
                    <p>
                    As mentioned, ACR is the consolidation & continued publication of crimes and events that have resulted in actual cash rewards being offered. Pictures and reward information is taken from any and all places to find reward information. Sometimes pictures and text copy is gained from other websites. Our hope and intention, is to assist with keeping these events & crimes available on ACR, and with additional fresh publicity, to help solve, or assist in solving, these crimes and events. One day, we believe that someone, having seen the picture of a missing teenager on ACR, will recognize that teenager, and assist with helping that teenagers find home again. Or maybe that website visitor will see the reward offered for the sweet 67 vette that was stolen, and that has an owner heartbroken over missing it, and see that vette and report it to the authorities. 
                    </p>
                    <p>
                    And ACR might be responsible for playing a small part in helping that happen. Who knows...maybe ACR will help solve a murder someday..! Any & all contact information available, and that we can find, is included with each reward panel. </p>
                    <p>
                        If you would choose to NOT have your crime, event or reward offered, on ACR regardless of reason, we will gladly & quickly remove it. Simply send us a contact us message, and we will remove your crime, event or reward panel within 48hrs.
                    </p>
                </div>
            </section>

            <!-- contact-form -->
            <section class="contact__form section__primary" id="contact-us">
                <div id="contact-area">
                    <div class="section__header">
                        <svg>
                            <use xlink:href="./icons/sprite.svg#acr-email">
                            </use>
                        </svg>

                        <h4 class="section__header--title">contact us & add your reward</h4>
                    </div>
                    <?php if(isset($_SESSION['mailsent'])){ ?>
                        <div class="popup-trigger"></div>
                        <div class="popup" role="alert">
                            <div class="popup-container">
                                <a href="#0" class="popup-close  -replace">Close</a>
                                <div class="popup__content">
                                    <svg>
                                        <use xlink:href="assets/icons/sprite.svg#acr-email">
                                        </use>
                                    </svg>
                                    <h4>your information is sent.</h4>
                                </div>
                            </div>
                        </div>

                    <?php
                        unset($_SESSION['mailsent']);
                    } ?>
                    <form method="post" action="mail-handler.php" enctype="multipart/form-data">
                        <div class="checkbox">
                            <input type="checkbox" id="reward-checkbox" name="reward-checkbox">
                            <label for="reward-checkbox">
                                Add your reward, Include all info, contact, location, amount of reward, website, email
                                etc.
                            </label>
                        </div>

                        <div class="checkbox">
                            <input type="checkbox" id="featured-reward-checkbox" name="featured-reward-checkbox">
                            <label for="featured-reward-checkbox">
                                Check this box for FEATURED rewards. Featured Rewards are $10/Month through paypal.
                            </label>
                        </div>

                        <div class="field">
                            <label for="Name">Name:</label>
                            <input type="text" name="name" id="Name" required />
                        </div>
                        <div class="field">
                            <label for="Phone">Phone:</label>
                            <input type="tel" name="phone" id="Phone" />
                        </div>
                        <div class="field">
                            <label for="Email">Email:</label>
                            <input type="email" name="email" id="Email" />
                        </div>
                        <div class="field">
                            <label for="Website">Website:</label>
                            <input type="text" name="website" id="Website" />
                        </div>
                        <div class="field">
                            <label for="Subject">Subject:</label>
                            <input type="text" name="subject" id="Subject" required />
                        </div>
                        <div class="field">
                            <label for="contact-img">File:</label>
                            <input type="file" name="contact-img" id="contact-img" />
                        </div>
                        <div class="field">
                            <label for="Message">Message:</label>
                            <textarea name="message" rows="10" cols="20" id="Message" required></textarea>
                        </div>
                        <div class="field-submit">
                            <input type="submit" name="send-mail" value="Submit" class="submit-button" />
                        </div>
                    </form>

                    <div style="clear: both;"></div>
                </div>
            </section>
        </main>

<?php include('aside.php') ?>
<?php include('footer.php')?>