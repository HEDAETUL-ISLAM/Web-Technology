<html>
    <head >
        <title>Registration Form</title>
        <link rel="stylesheet" href="style.css">     
    </head>
    <body>
        <div class="main-block">
            
            <form action="welcome.php" method="post">
                <div class="header">
                    <h1 >Registration Form</h1>
                </div>
                <fieldset>
                    <legend>
                        <h3>Personal Information</h3>
                    </legend>
                    <div class="personal-details">
                        <div>
                            <div><label>Name*</label><input type="text" name="name"   ></div>
                            <div><label>Phone*</label><input type="text" name="phone"   ></div>
                            <div><label>Street</label><input type="text" name="street" ></div>
                            <div><label>City*</label><input type="text" name="city"   ></div>
                            <div>
                                <label>Country*</label>
                                <select class="countery">
                                    <option value=""></option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="India">India</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Vutan">Vutan</option>
                                    <option value="Srilonka">Srilonka</option>
                                    <option value="Maldip">Maldip</option>
                                    <option value="Afgan">Afgan</option>
                                </select>
                            </div>
                            <div><label>Website</label><input type="text" name="name" ></div>
                        </div>
                        <div>
                            <div>
                                <label>Gender*</label>
                                <div class="gender">
                                    <input type="radio" value="none" id="male" name="gender"   />
                                    <label for="male" >Male</label>
                                    <input type="radio" value="none" id="female" name="gender"   />
                                    <label for="female" >Female</label>
                                    <input type="radio" value="none" id="other" name="gender"   />
                                    <label for="other" >Other</label>
                                </div>
                            </div>
                            <div class="birthdate">
                                <label>Birthdate</label>
                                <div class="bdate-block">
                                    <select class="day"   >
                                        <option value=""></option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                    <select class="month"   >
                                        <option value=""></option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                    <input type="text" name="year" placeholder="year"  >
                                </div>
                            </div>
                            <div>
                                <label>Nationality*</label>
                                <select   >
                                    <option value=""></option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="India">India</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Vutan">Vutan</option>
                                    <option value="Srilonka">Srilonka</option>
                                    <option value="Maldip">Maldip</option>
                                    <option value="Afgan">Afgan</option>
                                </select>
                            </div>
                            <div>
                                <label>Marriage*</label>
                                <div class="marriage"><input type="checkbox" name="name"   ></div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                  <legend>
                    <h3>Account Details</h3>
                  </legend>
                  <div  class="account-details">
                    <div><label>Email*</label><input type="text" name="name"   ></div>
                    <div><label>Password*</label><input type="password" name="name"   ></div>
                    <div><label>Repeat email*</label><input type="text" name="name"   ></div>
                    <div><label>Repeat password*</label><input type="password" name="name"   ></div>
                  </div>
                </fieldset> 
                <fieldset>
                  <legend>
                    <h3>Term and condition</h3>
                  </legend>
                  <div class="terms-mailing">
                    <div class="checkbox">
                      <input type="checkbox" name="checkbox"><span>I accept the <a href="https://hedaetul-islam.github.io">Privacy Policy of Hedaetul.</a></span>
                    </div>
                    <div class="checkbox">
                      <input type="checkbox" name="checkbox"><span>Ok let me logged in.</a></span>
                    </div>
                  </div>
                </fieldset>
                <button type="submit">Submit</button>
            </form>
        </div>
    </body>
</html>