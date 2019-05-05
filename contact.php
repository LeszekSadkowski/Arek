<?php 
include ('includes/header.php');?>
<?php 
    include ("includes/nav.php");?>
<div class='contentWrapper'>
    <h1>Napisz do nas</h1>

    <div class='contactSectionFull'>
        <div class='contactSection'>
            <div class="formWrapper">
                <form action="send.php" method="post" id='contactForm'>
                    <div class="formRow">
                        <label for="fieldName">Imię:</label>
                        <input name='name' id='fieldName' type="text" placeholder='imię'>
                    </div>
                    <div class="formRow">
                        <label for="fieldTelephone">Telefon:</label>
                        <input name='telephone' id='fieldTelephone' type="tel" placeholder='Telefon'>
                    </div>
                    <div class="formRow">
                        <label for="fieldEmail">Email:</label>
                        <input name='e-mail' id='fieldEmail' type="email" placeholder='E-mail'>
                    </div>
                    <div class="formRow">
                        <textarea name="msg" id="fieldMessage" cols="30" rows="10"
                            placeholder='W czym możemy pomóc'></textarea>
                    </div>
                    <div class="formRow">
                        <button type="submit">Wyślij</button>
                    </div>

                </form>

            </div>
            <div class="contactData">
                <h2>Kontakt</h2>
                <p><a href="tel:508 284 784">508 284 784</a></p>
                <p><a href="tel:515 332 573">515 332 573</a></p>
                <p>ul. Zamkowa 3/7-8
                    13-200 Działdowo</p>
                <p><a href="mailto:jubiler.kieca@gmail.com">jubiler.kieca@gmail.com</a></p>
                <p><a href="http://www.jubilerkieca.pl/" target="_blank">www.jubilerkieca.pl</a></p>
            </div>
        </div>
        <div class="slider">
            <ul id='imageHolder'>
                <li><img src="" alt="" srcset=""></li>
                <li><img src="" alt="" srcset=""></li>
                <li><img src="" alt="" srcset=""></li>
                <li><img src="" alt="" srcset=""></li>
                <li><img src="" alt="" srcset=""></li>
                <li><img src="" alt="" srcset=""></li>
                <li><img src="" alt="" srcset=""></li>
                <li><img src="" alt="" srcset=""></li>
                <li><img src="" alt="" srcset=""></li>
                <li><img src="" alt="" srcset=""></li>
            </ul>
        </div>
    </div>

    </p>
</div>
<script>
document.querySelector('nav ul li:nth-child(4)').classList.add('currentPage');
</script><?php 
include ('includes/footer.php');?>