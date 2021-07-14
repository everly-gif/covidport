<?php session_start();
?><!doctype html>
<html lang="en">
  <head>
    <title>CovidPort-Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/home.css">
</head>


  <body>
    <?php include './partials/header.php';?>
    
    
    <div id="slider">
        
        <figure>
            
            <img src="images/masks.jpg">
            <img src="images/corona.jpg">
            <img src="images/vaccination.jpg">
            <img src="images/masks.jpg">
            
            
            
        </figure>
       

    </div>
   

    <div class="accordion container1 container" id="accordionExample">
        <div class="card border-0">
            <div class="card-header grey" id="headingTwo">
                <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Where was Corona originated ?
                </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    COVID‐19 was initiated regionally at Wuhan of China. COVID‐19 started from one city of China in December 2019, but in a short span of time, it covered almost all over the world.
                </div>
            </div>
        </div>

        <div class="card border-0">
            <div class="card-header yellow" id="headingThree">
                <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    What are the types of coronavirus?
                </button>
            </h2>
        </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Coronaviruses (CoVs) are a family of viruses that cause respiratory and intestinal illnesses in humans and animals.[1] They usually cause mild colds in people but the emergence of the severe acute respiratory syndrome (SARS) epidemic in China in 2002–2003 and the Middle East respiratory syndrome (MERS) on the Arabian Peninsula in 2012 show they can also cause severe disease.</p>
                    <p>Since December 2019, the world has been battling another coronavirus. Severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) is the virus responsible for the current outbreak of coronavirus disease (COVID-19), which was first identified in Wuhan, China, following reports of serious pneumonia.</p>
                </div>
            </div>
            </div>
            <div class="card border-0">
            <div class="card-header grey" id="headingFour">
                <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    What is different about the new coronavirus?
                </button>
                </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                    <p>The new SARS-CoV-2, is most closely related to a group of SARS-CoVs found in humans, bats, pangolins and civets.
                    Even though there are many similarities between the new COVID-19 and the virus that caused the SARS epidemic, there are also differences resulting from changes in their genomes.</p> 
                    <p>This includes how they are passed from one individual to another, and the differing symptoms of coronaviruses. Early reports suggest that the new coronavirus is more contagious than the virus that caused SARS but less likely to cause severe disease.</p>
                </div>
            </div>
            </div>
            
            <div class="card border-0">
            <div class="card-header yellow" id="headingFive">
                <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                   How does Corona cause illness?
                </button>
                </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                <div class="card-body">
                    Coronaviruses infect the lungs and airways. Most people with COVID-19 have mild disease and never require hospitalisation. For people who develop severe disease, pneumonia is the most common form of illness. Acute COVID-19 disease is harmful because it prevents the normal passage of oxygen from the lungs into the bloodstream.<br>
                    Coronaviruses enter the human body by being inhaled or via direct touch to the mouth, nose and eyes. They bind to and infect the cells lining the upper and lower airways and lungs. On average, symptoms will develop five days after infection, but this can range from two to 12 days. The time between infection and symptoms developing is called the incubation period.<br> In an unknown number of people, the infection may resolve itself without the individual experiencing any symptoms at all.<br> This is probably due to a fast and effective response by the immune system.
                </div>
            </div>
            </div>
            <div class="card border-0">
                <div class="card-header grey" id="headingSix">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                     What are the initial symptoms of COVID?
                    </button>
                </h2>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                <div class="card-body">
                  <p>Symptoms generally occur after the virus causes direct damage to the cells of the airways and lung, or when the virus triggers an immune response. Irritation of the airway produces a sore throat and cough and sometimes a blocked or runny nose. A cough is a reflex to clear the airway of perceived phlegm, though COVID-19 usually produces a dry cough.</p>
                 <p>As part of the immune response to infection, signalling molecules called cytokines are produced. Cytokines help to mediate immunity through communication between cells, but they can also have a number of adverse effects during the course of illness. They contribute to fever and fatigue, muscle aches, headache and a loss of appetite. Diarrhoea, nausea and vomiting are rarer but may occur when the virus is present in the gut. The duration of symptoms ranges from one to three weeks depending on the severity of illness.</p>
                </div>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-header yellow" id="heading7">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                        What is Convalescent Plasma?
                    </button>
                </h2>
                </div>
                <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample">
                <div class="card-body">
                    Convalescent refers to anyone recovering from a disease. Plasma is the yellow, liquid part of blood that contains antibodies. Antibodies are proteins made by the body in response to infections. Convalescent plasma from patients who have already recovered from coronavirus disease 2019 (COVID-19) may contain antibodies against COVID-19. Giving this convalescent plasma to hospitalized people currently fighting COVID-19 may help them recover.
                </div>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-header yellow" id="heading8">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                        I Have Fully Recovered From COVID-19. Am I Eligible to Donate Plasma?
                    </button>
                </h2>
                </div>
                <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionExample">
                <div class="card-body">
                    People who have fully recovered from COVID-19 for at least two weeks are encouraged to consider donating plasma, which may help save the lives of other patients. COVID-19 convalescent plasma must only be collected from recovered individuals if they are eligible to donate blood. Individuals must have had a prior diagnosis of COVID-19 documented by a laboratory test and meet other donor qualifications. Individuals must have complete resolution of symptoms for at least 14 days prior to donation. A negative lab test for active COVID-19 disease is not necessary to qualify for donation. 
                </div>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-header yellow" id="heading9">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                        How to donate plasma?
                    </button>
                </h2>
                </div>
                <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordionExample">
                <div class="card-body">
                   <p>To get yourself registered for plasma donation, call on 1031 or go on register yourself at <a href="www.delhifightscorona.in">www.delhifightscorona.in</a>, which is India’s first plasma bank.</p>
                    <p>A pre-donation health check will be done on the phone itself to see if you qualify. If everything is found to be okay, a car will be sent to your house to pick you up or if you want to come in your own vehicle, travel reimbursement will be given. You need to come to ILBS’ Plasma Bank, which is a non-COVID area.</p>
                    <p>Here you will be tested again for the antibodies and have a few blood tests. The process takes about one and a half hours to check. Once all the tests come normal, you will be asked to come and donate. The donation itself takes about 20-25 minutes. Once you’ve donated you need to rest for about 15 minutes, have a refreshing drink and food which will be provided to you free of cost. Then you can go back and do your routine work.</p>
                </div>
                </div>
            </div>
            <div class="card border-0">
                <div class="card-header yellow" id="heading10">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                        Who shouldn't donate plasma?
                    </button>
                </h2>
                </div>
                <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordionExample">
                <div class="card-body">
                   <p>One shouldn’t donate plasma if you are:</p>
                    <ul>
                        <li>Below 18 years and above 65</li>
                        <li>Below 50 kgs of weight</li>
                        <li>Ever been pregnant in your life</li>
                        <li>You are suffering from any life-threatening diseases like kidney failure,<br> on insulin for diabetes, cancer or you have just changed your medication for controlling hypertension, diabetes</li>
                        <li>You have a tattoo or major surgery in the past six months</li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-header yellow" id="heading11">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                        What are the different types of Covid-19 test?
                    </button>
                </h2>
                </div>
                <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordionExample">
                <div class="card-body">
                   
                    <ul>
                        <li>Polymerase chain reaction (PCR) tests are sent away to a lab to diagnose disease</li>
                        <li>Lateral flow tests (LFTs) can diagnose Covid-19 on the spot, but aren’t as accurate as PCR tests</li>
                        <li>Antibody (or serology) tests can’t diagnose active infection, but they can help to tell if a person has immunity to Covid-19</li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-header yellow" id="heading12">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                        How to get the right COVID Test?
                    </button>
                </h2>
                </div>
                <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordionExample">
                <div class="card-body">
                    The right test, depends on the goal, such as confirming an active COVID infection; identifying asymptomatic or pre-symptomatic individuals who might be shedding virus, or determining whether someone previously had COVID. 
                </div>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-header yellow" id="heading13">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                        What is COVID Antibody Test?
                    </button>
                </h2>
                </div>
                <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordionExample">
                <div class="card-body">
                    SARS-CoV-2 antibody (often referred to as serology) tests look for antibodies in a sample to determine if an individual has had a past infection with the virus that causes COVID-19.
                </div>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-header yellow" id="heading14">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                        What are Rapid Diagnostic Test?
                    </button>
                </h2>
                </div>
                <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Rapid diagnostic tests (RDT) detect the presence of viral proteins (antigens) expressed by the COVID-19 virus in a sample from the respiratory tract of a person.</p>
                    <p>If the target antigen is present in sufficient concentrations in the sample, it will bind to specific antibodies fixed to a paper strip enclosed in a plastic casing and generate a visually detectable signal, typically within 30 minutes.</p>
                </div>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-header yellow" id="heading15">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                        What are symptoms of long Covid?
                    </button>
                </h2>
                </div>
                <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordionExample">
                <div class="card-body">
                   <p>The symptoms of long Covid vary but can include ongoing fatigue, shortness of breath, memory loss or problems with concentration (dubbed "brain fog"), insomnia, chest pain or dizziness.</p>  
                </div>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-header yellow" id="heading16">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                        Which environment causes more spread of Covid?
                    </button>
                </h2>
                </div>
                <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#accordionExample">
                <div class="card-body">
                   <p>The “Three C's” are a useful way to think about this. They describe settings where transmission of the COVID-19 virus spreads more easily:</p>  
                    <ul>
                        <li>Crowded places</li>
                        <li>Close-contact settings, especially where people have conversations very near each other</li>
                        <li>Confined and enclosed spaces with poor ventilation</li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-header yellow" id="heading17">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                        Why is it important to get vaccinated even if there are new variants of the virus?
                    </button>
                </h2>
                </div>
                <div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#accordionExample">
                <div class="card-body">
                   <p>Vaccines are a critical tool in the battle against COVID-19, and there are clear public health and lifesaving benefits to using the tools we already have. We must not put off getting vaccinated because of our concerns about new variants, and we must proceed with vaccination even if the vaccines may be somewhat less effective against some of the COVID-19 virus variants. We need to use the tools we have in hand even while we continue to improve those tools. We are all safe only if everyone is safe.</p>  
                </div>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-header yellow" id="heading18">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                       What should I do if I have symptoms of COVID-19? 
                    </button>
                </h2>
                </div>
                <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#accordionExample">
                <div class="card-body">
                   <ul>
                       <li>If you present symptoms related to COVID-19, seek medical advice. Call by phone first if possible and give information about pre-existing health conditions and medicines that you are taking.<br> Follow the instructions of the health-care worker and monitor your symptoms regularly.<br></li>
                       <li>If you have difficulty breathing, contact health emergencies immediately as this may be due to a respiratory infection. Call by phone first if possible to learn what to do next.<br></li>
                       <li>If you live with others, make sure that you isolate yourself as soon as you suspect infectionby using the space that you identified in advance.<br> You and other members of the household should also wear a medical mask as much as possible if these are available.<br></li>
                       <li>If you live with others and home care for COVID-19 is advised by your health-care worker, other household members should follow available guidance on home care for patients with COVID-19 presenting with mild symptoms and management of their contacts.<br></li>
                       <li>If you live alone and home care for COVID-10 is advised by your health-care worker, ask your family, friends, neighbours, health-care worker or a local volunteer organisation to check in on you regularly and to provide support as needed following existing guidance for caregivers.<br></li>
                   </ul>  
                </div>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-header yellow" id="heading19">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                        What can I do to prevent infection?
                    </button>
                </h2>
                </div>
                <div id="collapse19" class="collapse" aria-labelledby="heading19" data-parent="#accordionExample">
                <div class="card-body">
                   <p>To prevent infection, there are a five things that you can do.</p>  
                   <ol>
                       <li>Wash your hands frequently and thoroughly with soap and water and dry them thoroughly.</li>
                       <li>Cover your mouth and nose with a flexed elbow or tissue when coughing and sneezing.</li>
                       <li>Avoid touching your eyes, nose and mouth.</li>
                       <li>Keep physical distance from others.</li>
                       <li>Clean and disinfect frequently touched surfaces every day.</li>
                   </ol>
                </div>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-header yellow" id="heading20">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                        What precautions need to be taken while visiting someone in a health care?
                    </button>
                </h2>
                </div>
                <div id="collapse20" class="collapse" aria-labelledby="heading20" data-parent="#accordionExample">
                <div class="card-body">
                   <p>If you have been in contact with someone suspected or confirmed with COVID-19, or are feeling unwell, do not visit any health or long-term care facility.</p>
                    <p>Follow the facility guidelines on any visit requirements, including screening and wearing a mask.</p>
                    <p>Clean your hands before entering and try to keep at least a 1 metre distance from others.</p>
                    <p>If you are 60 or over, or have a chronic condition like heart disease, take extra precautions by wearing a medical mask during your visit.</p>  
                </div>
                </div>
            </div>




  </div>
  
     <?php include './partials/footer.php';?>
    <!-- Optional JavaScript -->
    <script>
    $('#carouselExampleControls').carousel({
     interval: 1000,
      cycle: true
     }); </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>