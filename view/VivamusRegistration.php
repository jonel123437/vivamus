<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/style.css">
        <title>Vivamus</title>
    </head>
    <body>
        <div class="topnav nav">
            <div class="">
                <img class="vivamusLogo" src="../assets/vivamusLogo.png" alt="logo">
            </div>
            <div class=" topnav">
                <a class="border" href="#">Bibendum</a>
                <a class="border" href="#">Sollicitudin</a>
                <a class="border" href="#">Metus</a>
                <a class="" href="#">Egestas</a>
            </div>
            <div class="topnav searchdiv">
                <input class="searchBar" id="search" type="text">
                <label for="search" class="search">
                    <img  src="../assets/vivamusSearchIcon.png" alt="search icon">
                </label>
            </div>
        </div>
            <div class="content">
                <div class="headerText">
                    <div class="head">
                        <p> In euismod sapien eu maximus tempus</p>
                    </div>
                    <div class="subHead">
                        <p>Vestibulum bibendum posuere dui, in pharetra est hendrerit ac. <br>
                            Integer posuere metus lacus</p>
                    </div>
                </div>
                <div id="content_container" style="gap: 25px; display: flex; flex-direction: column; align-items: center;">
                    <div class="stepper_container">
                        <button id="step1" class="step active">1</button>
                        <button id="step2" class="step">2</button>
                        <button id="step3" class="step">3</button>
                    </div>
                    <div id="about_you">
                        <p class="title">About you</p>
                        <form class="about_container" id="donationForm" aria-required="true">
                            <div class="aboutgroup">
                                <div style="display: flex; gap: 25px;">
                                    <div style="text-align: left; margin-top: 12px;">
                                        <label class="form_label" for="f_name">First name*</label>
                                        <input class="required-field" id="f_name" name="f_name" type="text" required>
                                    </div>
                                    <div style="text-align: left; margin-top: 12px;">
                                        <label class="form_label" for="l_name">Last name*</label>
                                        <input class="required-field" id="l_name" name="l_name" type="text" required>
                                    </div>
                                </div>
                                <div style="text-align: left; margin-top: 12px;">
                                    <label class="form_label" for="email">Email Address*</label>
                                    <input class="required-field" id="email" name="email" type="email" required>
                                </div>
                                <div style="text-align: left; margin-top: 12px;">
                                    <label class="form_label" for="number">Mobile number*</label>
                                    <input class="required-field" id="number" name="phoneNum" type="number" required>
                                </div>
                            </div>



                            <div class="dontaion" style="display: none;" id="donationForm">
                                <div>
                                    <div style="display: flex; justify-content: space-evenly; background-color: #31a9ca;">
                                        <div class="tabs">
                                            <p style="font-size: 2rem;">PayPal</p>
                                        </div>
                                        <div class="tabs">
                                            <p style="font-size: 2rem;">Credit Card</p>
                                        </div>
                                    </div>
                                    <div class="donation_group">
                                        <div style="text-align: left; display: flex; flex-direction: column; margin-top: 10px;">
                                            <label for="amount">Donation amount*</label>
                                            <input style="width: 50%;" type="text" name="amount">
                                        </div>
                                        <div style="text-align: left; display: flex; flex-direction: column; margin-top: 10px;">
                                            <label for="holder_name">Card Holder Name*</label>
                                            <input type="text" name="holder_name">
                                        </div>
                                        <div style="text-align: left; display: flex; flex-direction: column; margin-top: 10px;">
                                            <label for="card_no">Credit Card No*</label>
                                            <input type="text" name="card_no">
                                        </div>
                                        <div style="text-align: left; display: flex; flex-direction: column; margin-top: 10px;">
                                            <label for="sec_code">Card Security Code*</label>
                                            <input style="width: 50%;" type="text" name="sec_code">
                                        </div>
                                        <div style="text-align: left; display: flex; flex-direction: column; margin-top: 10px;">
                                            <label for="expire_date">Expiry Date*</label>
                                            <input style="width: 50%;" type="text" name="expire_date">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="comment">
                                <div class="messagecontain">
                                    <label for="message">Your message</label>
                                    <textarea name="message" id="message"></textarea>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" name="anonymous" id="anonymous">
                                    <label for="anonymous">Keep me anonymous</label>
                                </div>
                            </div>
                           
                        </form>
                    </div>
                    <div class="buttoncontain">
                        <button class="backButton">Back</button>
                        <button class="nextButton" disabled>Next</button>
                        <button id="backButton">Back</button>
                        <button id="nextButton" disabled>Next</button>
                        <button type="submit" class="finishButton">Finish</button>
                    </div>
                </div>
            </div>

        <footer class="footer">
            <div class="circle_container">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
            <div class="links">
                <ul>
                    <li>
                        <a href="">Pellentesque</a><span> |</span>
                        <a href="">Et interdum</a><span> |</span>
                        <a href="">Neque</a><span> |</span>
                        <a href="">Integer</a><span> |</span>
                        <a href="">Ullamcorper</a><span> |</span>
                        <a href="">Sagittis</a>
                    </li>
                </ul>
            </div>
            <div style="text-align: center; margin-top: 6rem;">
                <p style="color: white;">Copyright © 2015 Proin eget ipsum libero <br>All Rights Reserved.</p>
            </div>
        </footer>
        
        <script>
            function checkFields() {
                const inputs = document.querySelectorAll('#donationForm input');
                const allFilled = Array.from(inputs).every(input => input.value.trim() !== '');
                document.getElementById('nextButton').disabled = !allFilled;
            }

            document.querySelectorAll('#donationForm input').forEach(input => {
                input.addEventListener('input', checkFields);
            });
        </script>
        <script>
            // Function to check if all required fields are filled
            function checkFields() {
                const requiredFields = document.querySelectorAll('.required-field');
                const allFilled = Array.from(requiredFields).every(field => field.value.trim() !== '');
                
                // Enable the button if all fields are filled
                document.querySelector('.nextButton').disabled = !allFilled;
            }

            // Attach the function to input fields' event listeners
            document.querySelectorAll('.required-field').forEach(input => {
                input.addEventListener('input', checkFields);
            });
        </script>

        <script src="../assets/js/index.js"></script>
        <script src="../assets/js/formValidation.js"></script>
    </body>
</html>