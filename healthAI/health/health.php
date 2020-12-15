<!DOCTYPE html>
<html>
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}
/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>
<style>
    #header
    {
        margin: 100;
    }
</style>
<div id = "header">
    <title>Health Analysis</title>
    <h1>
        Welcome to Health Analyzer
    </h1>
</div>
<style>
    #tab
    {
        margin: 100;
        background-color: aqua;
    }
</style>
<div id="tab">
<style>
        #myTab
        {
            background-color: aqua;
        }
</style>
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link" id="home1" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="summary1" data-toggle="tab" href="#summary" role="tab" aria-controls="summary" aria-selected="true">Summary</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="Analysis1" data-toggle="tab" href="#Analysis" role="tab" aria-controls="Analysis" aria-selected="true">Analysis</a>
    </li>
</ul>
<div class="tab-content">
    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home">
    <style>
            #home
            {
                background-color:white;
                width: 1600px;
                padding: 10px;
                border: 1px solid gray;
                margin: 100;
            }
            </style>
        <div>
        <!DOCTYPE html>
                <html>
                <head>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                </head>
                <body>
        </div>
        <h3>Health Analyzer</h3>
        <style>
            #hhh 
            {
                margin: 100;
                text-align: center;
                background-color:white;
                width: 1510px;
                padding: 5px;
                border: 5px solid gray;
            }
        </style>
        <div id ="hhh">
                <p>Kindly look to WHO Guidelines: :Given Links</p><br>
                <?php
                echo <<<HTML
                <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/question-and-answers-hub/q-a-detail/coronavirus-disease-covid-19">Covid-19: FAQ</a><br>
                HTML;
                echo <<<HTML
                <a href="https://covid19.who.int/?gclid=EAIaIQobChMIoZ__4sTQ7QIV130rCh3tKQgSEAAYASACEgKm7fD_BwE">Covid-19: DASHBOARD</a><br>
                HTML;
                ?>
        </div>
    </body>
    </html>
    <div class="tab-pane active" id="summary" role="tabpanel" aria-labelledby="summary">
            <style>
            #summary
            {
                background-color:white;
                width: 1510px;
                padding: 15px;
                border: 10px solid gray;
                margin: 150;
            }
            </style>
            <h3>SUMMARY</h3>
            <div>
                    <?php
                    $fname=$_POST['name'];
                    $temp =$_POST['Body_Temperature'];
                    $headache = $_POST['Headache'];
                    $bodypain = $_POST['BodyPain'];
                    $easeofsneeze = $_POST['EaseofSneeze'];
                    $drycough= $_POST['Cough'];
                    $throatpain= $_POST['Throat'];
                    $suffocation= $_POST['Suffocation'];
                    $smellpower= $_POST['Smell'];
                    $tastepower= $_POST['Taste'];
                    $stomachpain= $_POST['Stomach'];
                    $bodyweakness= $_POST['Body'];
                    $mentalweakness= $_POST['Mental'];
                    $skinrash= $_POST['Rash'];
                    $breathinglevel= $_POST['Breathing'];
                    $age= $_POST['Age'];
                    $sleep= $_POST['Sleep'];
                    $shivering= $_POST['Shivering'];
                    $patient= $_POST['patient'];
                    $healthinput = array($temp,$headache,$bodypain,$easeofsneeze,$drycough,$throatpain,$suffocation,$smellpower,$tastepower,$stomachpain,$bodyweakness,$mentalweakness,
                    $skinrash,$breathinglevel,$shivering,$age,$patient,$sleep);
                    $wt=array(0.052177,0.052421,0.052142,0.052153,0.053012,.0569111,0.052768,0.0525601,0.052003,0.051794,0.052420,0.0518639,0.0512548,0.0536043,0.0523512,0.052629,
                    0.0530474,0.52577);
                    function answer($healthinput,$wt,$fname)
                    {
                    $sum=0;
                    $sum1=0;
                    for ($i=0; $i <18 ; $i++) 
                    { 
                        $sum=$sum+$wt[$i];
                    }
                    for ($i=0; $i <18 ; $i++) 
                    { 
                        $sum1=$sum1+$wt[$i]*$healthinput[$i];
                    }
                    $p= $sum1/$sum*100;
                    if ($p<=40) 
                    {
                        
                        echo "<h5>Name: $fname</h5>";
                        echo "Probality of Viral infection: $p % <br>";
                        echo "Condition: Safe<br>";
                        echo "Advise: Keep following latest guidelines given by WHO.<br>";
                    }
                    if ($p>40 AND $p<=50) 
                    {
                        echo "<h5>Name: $fname</h5>";
                        echo "Probality of Viral infection: $p % <br>";
                        echo "Condition: Primary stage of Infection<br>";
                        echo "Advise: Start having Vitamin C tablets and Citric fruits to over come Infection<.br>";
                    }
                    if ($p>50 AND $p<=60) 
                    {
                        echo "<h5>Name: $fname</h5>";
                        echo "Probality of Viral infection: $p % <br>";
                        echo "Condition: Secondry Stage of Infection<br>";
                        echo "Advise: It is Advisable that you start to wear mask and keep physical distance with your family members.<br>";
                    }
                    if ($p>60 AND $p<=70) 
                    {
                        echo "<h5>Name: $fname</h5>";
                        echo "Probality of Viral infection: $p % <br>";
                        echo "Condition: Tirtiary Stage of Infection<br>";
                        echo "Advise: It is highly recommended that you visit near by clinic or hospital.<br>";
                    }
                    if ($p>70 AND $p<=80) 
                    {
                        echo "<h5>Name: $fname</h5>";
                        echo "Probality of Viral infection: $p % <br>";
                        echo "Condition: Infected <br>";
                        echo "Advise: Visit your nearest hospital for Viral infection check up as soon as possible.<br>";
                    }
                    if ($p>80) 
                    {
                        echo "<h5>Name: $fname</h5>";
                        echo "Probality of Viral infection: $p % <br>";
                        echo "Condition: Highly Infected <br>";
                        echo "Advise: You are at critical condition it is highly advisable to keep yourself quarintined and visit a good hospital for treatment.<br>";
                    }
                    }
                    answer($healthinput,$wt,$fname);
                    ?>
            </div>
    </div>
    <div class="tab-pane active" id="Analysis" role="tabpanel" aria-labelledby="Analysis">
            <style>
            #Analysis
            {
                background-color:white;
                width: 1510px;
                padding: 15px;
                border: 10px solid gray;
                margin: 150;
            }
            </style>
            <h3>ANALYSIS</h3>
        <div>
        <?php
                $temp =$_POST['Body_Temperature'];
                $headache = $_POST['Headache'];
                $bodypain = $_POST['BodyPain'];
                $easeofsneeze = $_POST['EaseofSneeze'];
                $drycough= $_POST['Cough'];
                $throatpain= $_POST['Throat'];
                $suffocation= $_POST['Suffocation'];
                $smellpower= $_POST['Smell'];
                $tastepower= $_POST['Taste'];
                $stomachpain= $_POST['Stomach'];
                $bodyweakness= $_POST['Body'];
                $mentalweakness= $_POST['Mental'];
                $skinrash= $_POST['Rash'];
                $breathinglevel= $_POST['Breathing'];
                $age= $_POST['Age'];
                $sleep= $_POST['Sleep'];
                $shivering= $_POST['Shivering'];
                $patient= $_POST['patient'];
                $healthinput = array($temp,$headache,$bodypain,$easeofsneeze,$drycough,$throatpain,$suffocation,$smellpower,$tastepower,$stomachpain,$bodyweakness,$mentalweakness,
                $skinrash,$breathinglevel,$shivering,$age,$patient,$sleep);
                $wt1=array(0.052177,0.052421,0.052142,0.052153,0.053012,.0569111,0.052768,0.0525601,0.052003,0.051794,0.052420,0.0518639,0.0512548,0.0536043,0.0523512,0.052629,
                0.0530474,0.52577);
                $wt2=array(0.052177,0.052421,0.052142,0.052153,0.053012,.0569111,0.052768,0.0525601,0.052003,0.051794,0.052420,0.0518639,0.0512548,0.0536043,0.0523512,0.052629,
                0.0530474,0.52577);
                $wt3=array(0.052177,0.052421,0.052142,0.052153,0.053012,.0569111,0.052768,0.0525601,0.052003,0.051794,0.052420,0.0518639,0.0512548,0.0536043,0.0523512,0.052629,
                0.0530474,0.52577);
                $wt4=array(0.052177,0.052421,0.052142,0.052153,0.053012,.0569111,0.052768,0.0525601,0.052003,0.051794,0.052420,0.0518639,0.0512548,0.0536043,0.0523512,0.052629,
                0.0530474,0.52577);
                $wt5=array(0.052177,0.052421,0.052142,0.052153,0.053012,.0569111,0.052768,0.0525601,0.052003,0.051794,0.052420,0.0518639,0.0512548,0.0536043,0.0523512,0.052629,
                0.0530474,0.52577);
                function pie($healthinput,$wt)
                {
                $sum=0;
                $sum1=0;
                for ($i=0; $i <18 ; $i++) 
                { 
                    $sum=$sum+$wt[$i];
                }
                for ($i=0; $i <18 ; $i++) 
                { 
                    $sum1=$sum1+$wt[$i]*$healthinput[$i];
                }
                return ($sum1/$sum*100);
                }
                $p1 = pie($healthinput,$wt1);
                $p2 = pie($healthinput,$wt2);
                $p3 = pie($healthinput,$wt3);
                $p4 = pie($healthinput,$wt4);
                $p5 = pie($healthinput,$wt5);
                $p = $p1+$p2+$p3+$p4+$p5+0.0000001;
                $d1 = $p1/$p*100;
                $d2 = $p2/$p*100;
                $d3 = $p3/$p*100;
                $d4 = $p4/$p*100;
                $d5 = $p5/$p*100;
                $dataPoints = array
                (
                array("y" => $d1, "legendText" => "Covid19", "label" => "Covid19"),
                array("y" => $d2, "legendText" => "HIV", "label" => "HIV"),
                array("y" => $d3, "legendText" => "Dengue", "label" => "Dengue"),
                array("y" => $d4, "legendText" => "Maleria", "label" => "Maleria"),
                array("y" => $d5, "legendText" => "NormalFlue", "label" => "NormalFlue"),
                );
                echo "Probality of Covid infection: $d1 % <br>";
                echo "Probality of HIV infection: $d2 % <br>";
                echo "Probality of Dengue infection: $d3 % <br>";
                echo "Probality of Maleria infection: $d4 % <br>";
                echo "Probality of NormalFlue infection: $d5 % <br>";
            ?>
        </div>
    </div>
</div>
<div>
    <button class="btn" style="width:100%"><i class="fa fa-download"></i> Download</button>
</div>
<footer id="footer">
    <style>
        #footer
        {
            margin: 100;
            text-align: center;
        }
    </style>
			<h6><b><div class="copyright">
				&copy; Team HealthAI
			</div></b></h6>
</footer>
</html>