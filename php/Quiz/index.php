<?php
    $country = $country_error="";
    $poertress = $poertress_error="";
    $bird = $bird_error="";
    $flower = $flower_error="";
    $indepandent = $indepandent_error="";
    $result = 0;

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $country = $_POST['country'];
        $poertress = $_POST['poertress'];
        $flower = $_POST['flower'];
        $indepandent = $_POST['indepandent'];
        $bird = $_POST['bird'];
        if($country != "Bangladesh"){
            $country_error="name of your country Bangladesh.";
        }
        else{
            $result+=1;
        }

        if($poertress != "Kazi Nazrul"){
            $poertress_error="name of your national poetress Kazi Nazrul.";
        }
        else{
            $result+=1;
        }

        if($bird != "Doel"){
            $bird_error="name of your national bird Doel.";
        }
        else{
            $result+=1;
        }

        if($flower != "Lily"){
            $flower_error="name of your national flower Lily.";
        }
        else{
            $result+=1;
        }

        if($indepandent != "26 march"){
            $indepandent_error="date of yor indepandent 26 march.";
        }
        else{
            $result+=1;
        }
    }
    
    

?>

<html>
    <title>Online Quiz</title> 
    <body>
        <div >
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"> 
                <div style=" height: 100%; width: 60%; position: fixed; z-index: 1; top: 0; overflow-x: hidden; padding-top: 20px; left: 0; background-color:whitesmoke">
                    <fieldset>
                        <legend >
                            <h2 >Answare the question</h2>
                        </legend>
                        <div >
                            <div >
                                <div style="margin-bottom:2%">
                                    <label>What is the name of your country?</label>
                                    <div required>
                                        <input type="radio" name="country" value="Bangladesh" <?php if((isset($_POST['country'])) && ($_POST['country']=="Bangladesh")) ?> required>
                                        <label >Bangladesh</label>
                                        <input type="radio" name="country" value="Nepal"  <?php if((isset($_POST['country'])) && ($_POST['country']=="Nepal")) ?>  required>
                                        <label >Nepal</label>
                                        <input type="radio" name="country" value="India" <?php if((isset($_POST['country'])) && ($_POST['country']=="India")) ?> required>
                                        <label >India</label>
                                        <input type="radio" name="country" value="Japan"  <?php if((isset($_POST['country'])) && ($_POST['country']=="Japan")) ?>  required>
                                        <label >Japan</label>
                                    </div>
                                </div>
                                <div style="margin-bottom:2%">
                                    <label>What is the name of your national poetress?</label>
                                    <div required>
                                        <input type="radio" name="poertress" value="Rabindranath"  <?php if((isset($_POST['poertress'])) && ($_POST['poertress']=="Rabindranath")) ?>  required>
                                        <label >Rabindranath</label>
                                        <input type="radio" name="poertress" value="Jashim Uddin" <?php if((isset($_POST['poertress'])) && ($_POST['poertress']=="Jashim Uddin")) ?> required>
                                        <label >Jashim Uddin</label>
                                        <input type="radio" name="poertress" value="Samsur rahman"  <?php if((isset($_POST['poertress'])) && ($_POST['poertress']=="Samsur rahman")) ?> required>
                                        <label >Samsur rahman</label>
                                        <input type="radio" name="poertress" value="Kazi Nazrul" <?php if((isset($_POST['poertress'])) && ($_POST['poertress']=="Kazi Nazrul")) ?> required>
                                        <label >Kazi Nazrul</label>
                                    </div>
                                </div>
                                <div style="margin-bottom:2%">
                                    <label>What is the name of your national bird?</label>
                                    <div required>
                                        <input type="radio" name="bird" value="Tia"  <?php if((isset($_POST['bird'])) && ($_POST['bird']=="Tia")) ?>  required>
                                        <label >Tia</label>
                                        <input type="radio" name="bird" value="Doel" <?php if((isset($_POST['bird'])) && ($_POST['bird']=="Doel")) ?> required>
                                        <label >Doel</label>
                                        <input type="radio" name="bird" value="Moyna" <?php if((isset($_POST['bird'])) && ($_POST['bird']=="Moyna")) ?> required>
                                        <label >Moyna</label>
                                        <input type="radio" name="bird" value="Crow"  <?php if((isset($_POST['bird'])) && ($_POST['bird']=="Crow")) ?> required>
                                        <label >Crow</label>
                                    </div>
                                </div>
                                <div style="margin-bottom:2%">
                                    <label>What is the name of your national flower?</label>
                                    <div required>
                                        <input type="radio" name="flower" value="Jui"  <?php if((isset($_POST['flower'])) && ($_POST['flower']=="Jui")) ?>  required>
                                        <label >Jui</label>
                                        <input type="radio" name="flower" value="Joba" <?php if((isset($_POST['flower'])) && ($_POST['flower']=="Joba")) ?> required>
                                        <label >Joba</label>
                                        <input type="radio" name="flower" value="Lily" <?php if((isset($_POST['flower'])) && ($_POST['flower']=="Lily")) ?> required>
                                        <label >Lily</label>
                                        <input type="radio" name="flower" value="Beli"  <?php if((isset($_POST['flower'])) && ($_POST['flower']=="Beli")) ?>  required>
                                        <label >Beli</label>
                                    </div>
                                </div>
                                <div style="margin-bottom:2%">
                                    <label>What is the date of yor indepandent day?</label>
                                    <div required>
                                        <input type="radio" name="indepandent" value="16 dec"  <?php if((isset($_POST['indepandent'])) && ($_POST['indepandent']=="16 dec")) ?>  required>
                                        <label >16 dec</label>
                                        <input type="radio" name="indepandent" value="21 feb" <?php if((isset($_POST['indepandent'])) && ($_POST['indepandent']=="21 feb")) ?> required>
                                        <label >21 feb</label>
                                        <input type="radio" name="indepandent" value="26 march" <?php if((isset($_POST['indepandent'])) && ($_POST['indepandent']=="26 march")) ?> required>
                                        <label >26 march</label>
                                        <input type="radio" name="indepandent" value="14 dec"  <?php if((isset($_POST['indepandent'])) && ($_POST['indepandent']=="14 dec")) ?>  required>
                                        <label >14 dec</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <button type="submit" style="width: 60px; padding: 10px 0; margin: 10px auto; border-radius: 5px; border: none; font-size: 14px; font-weight: 600; cursor: pointer;">Submit</button>
                    </fieldset>
                </div>
                <div style="  height: 100%; width: 40%; position: fixed; z-index: 1; top: 0; overflow-x: hidden; padding-top: 20px; right: 0; background-color:whitesmoke">
                    <fieldset >
                        <legend>
                        <h2 >Result</h2>
                        </legend>
                        <div>
                            <label >Point is     <?php echo $result; ?> </label><br>
                            <label ><?php echo($country_error);?></label><br>
                            <label ><?php echo($bird_error);?></label><b></b>
                            <label ><?php echo($flower_error);?></label><br>
                            <label ><?php echo($poertress_error);?></label><br>
                            <label ><?php echo($indepandent_error);?></label><br>
                        </div>

                    </fieldset>
                </div>
            </form>
        </div>
    </body>
</html>