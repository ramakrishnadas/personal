<?php include_once("order.php") ?>

<!DOCTYPE html>
<html>
    <head>
      <title>Office Work</title>
      <meta charset="UTF-8"> 
      <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700" rel="stylesheet">
      <link rel="stylesheet" href="./styles.css" type="text/css">
      
    </head>
    <body>
        <header>
            <h1>Office Work</h1> 
            <nav>
              <ul id="menu">
                  <li><a id="menu-item1" href="#about-us">About Us</a></li>
                  <li><a id="menu-item2" href="#services">Services</a></li>
                  <li><a id="menu-item3" href="#how-we-work">How We Work</a></li>
                  <li><a id="menu-item4" href="#prices">Prices</a></li>
                  <li><a id="menu-item5" href="#confidentiality">Confidentiality</a></li>
                  <li><a id="menu-item6" href="#contact">Contact</a></li>
              </ul>
            </nav>
        </header>
        <section id="main">
            <h2>How may we help you?</h2>
            <form method="POST" action="order.php">
              <div id="service-selection">
                <h4>Select the service(s) you require:</h4>
                <input type="checkbox" id="transcription" name="transcription">
                <label for="transcription">Transcription</label>
                <input type="checkbox" id="translation" name="translation">
                <label for="translation">Translation</label>
                <input type="checkbox" id="subtitling" name="subtitling">
                <label for="subtitling">Subtitling</label>
                <input type="checkbox" id="captioning" name="captioning">
                <label for="captioning">Captioning</label>
              </div>
              <div id="turnaround">
                <h4>Select your preferred turnaround time: </h4>
                <input type="radio" id="72-hour" name="delivery" value="72-hour delivery" checked>
                <label for="72-hour">72-hour delivery</label>
                <input type="radio" id="48-hour" name="delivery" value="48-hour delivery">
                <label for="48-hour">48-hour delivery</label>
                <input type="radio" id="24-hour" name="delivery" value="24-hour delivery">
                <label for="24-hour">24-hour delivery</label>
              </div>
              <div id="special-requirements">
                <h4>Specify whatever formatting, timestamping, etc., you expect in the final product:</h4>
                <label for="special"><label>
                <textarea id="special" name="special" wrap="hard" placeholder="I'd like timestamping every 2 minutes on the transcription of my audio..."></textarea>
              </div>
              <div class="wrapper">
                <div id="email-address">
                  <label for="email">Email: </label>
                  <input type="text" id="email" name="email" required>
                </div>
                <div id="upload">
                  <label for="file">Upload your file: </label>
                  <input type="file" id="file" name="file" required>
                </div>
              </div>  
                <div id="submit">
                  <input type="submit" value="Submit"></button>
                </div>
                <div class="spacer"></div>
            </form>
        </section>
        <section id="about-us">
          <h2>About Us</h2>
          <p>We are a small team of native speakers of Spanish and English. We provide gramatically correct and coherent documents. Every member in our staff has at least 3 years of experience in translation between these two languages and transcription, subtitling and captioning in both langauges. We are professional and our turnaround times are very fast.</p>
        </section>
        <section id="services">
          <h2>Services</h2>
          <div id="all-services">
            <div id="translation">
              <h3>Translation</h3>
              <p>We provide an accurate translation from Spanish to English or English to Spanish of your document, be it an interview, a seminar, a website, subtitles... you name it! Our translations are done entirely by persons, not the Internet or any translation software.</p>
            </div>
            <div id="transcription">
              <h3>Transcription</h3>
              <p>If transcribing an audio or video is what you need, we're here for you. We produce a meticulous transcription of your audio or video (in English and/or Spanish). We don't use any kind of speech recognition software for this purpose. Every minute of your audio or video will be transcribed directly by a person.</p>
            </div>
            <div id="subtitling">
              <h3>Subtitling</h3>
              <p>Do you have a video that needs subtitling? No worries! We've got your back. We deliver accurate subtitles with perfect on-screen time (they'll remain on the screen long enough to be read and as the words are being spoken).</p>
            </div>
            <div id="captioning">
              <h3>Captioning</h3>
              <p>Sometimes, video subtitling must be done taking into consideration the hearing-impaired. What does this mean? Captioning includes adding any sound events happening in the video in order to provide a better understanding of what's going on to hard-of-hearing viewers. We also provide this service.</p>
            </div>
        </div>
        </section>
        <section id="how-we-work">
            <h2>How We Work</h2>
            <div id="steps">
              <div id="first-step">
                <p>Send us your file by email and include a detailed description of what services you require and any specifications you may have.</p>
              </div>
              <div id="second-step">
                <p>We'll check your file and send you a written quotation by email.</p>
              </div>
              <div id="third-step">
                <p>Once the price is agreed, we'll start working on your file. We'll maintain communication with you if necessary.</p>
              </div>
              <div id="fourth-step">
                <p>We'll deliver the job to you after deligently proofreading it. If you require a revision on your file, we are more than willing to comply so that the final product is exactly what you expected.</p>
              </div>
            </div>
            <h3>What should you expect?</h3>
            <p class="what-to-expect"><span>Translation and Transcription:</span> A Word or PDF document (depending on your preference) with basic formatting that is gramatically correct and a genuine representation of your original file. The document will include bolded speaker tags and any special requirements you request (such as timestamps, special formatting, et cetera).</p>
            <p class="what-to-expect"><span>Subtitling and Captioning:</span> An SRT document (a file in .srt format, which is the most popular subtitle format) that is done following the conventional rules for subtitling. This document will provide your video with gramatically correct subtitles that have appropriate on-screen time.</p>
            <p class="what-to-expect">In order to deliver our professional high-standard work, we require you to supply us with high quality material. That is, it is ideal that you provide high-quality audios or videos with negligible background noise or gramatically correct and coherent text documents, depending on the case, so that we can deliver the product you expect. Otherwise, we will always do our best and communicate with you to clear any doubts but do not guarantee that the job will be perfect since we'd be parting from poor-quality material.</p>
        </section>
        <section id="prices">
            <h2>Prices</h2>
            <table>
                <tr>
                    <th>Services</th>
                    <th>Translation</th>
                    <th>Transcription</th>
                    <th>Subtitling</th>
                    <th>Captioning</th>
                </tr>
                <tr>
                    <td>72-hour delivery*</td>
                    <td>$0.03/word</td>
                    <td>$0.5/min</td>
                    <td>$0.5/min</td>
                    <td>$0.5/min</td>
                </tr>
                <tr>
                    <td>48-hour delivery*</td>
                    <td>$0.045/word</td>
                    <td>$0.75/min</td>
                    <td>$0.75/min</td>
                    <td>$0.75/min</td>
                </tr>
                <tr>
                    <td>24-hour delivery*</td>
                    <td>$0.06/word</td>
                    <td>$1/min</td>
                    <td>$1/min</td>
                    <td>$1/min</td>
                </tr>
                <tr>
                    <td>Special requirements</td>
                    <td>$1/page</td>
                    <td>$0.5/min</td>
                    <td>$0.5/min</td>
                    <td>$0.5/min</td>
                </tr>
            </table>
            <div id="additional">
              <h3>*Additional information:</h3>
              <ul>
                <li><span>24-hour delivery</span> is limited to files under 10 pages (for Translation)<br>and under 30 minutes (for Transcription, Subtitling and Captioning).</li> <br>
                <li><span>48-hour delivery</span> is limited to files under 20 pages (for Translation)<br>and under 60 minutes (for Transcription, Subtitling and Captioning).</li> <br>
                <li><span>72-hour delivery</span> is limited to files under 30 pages (for Translation)<br>and under 90 minutes (for Transcription, Subtitling and Captioning).</li> <br>
                <li>Any projects greater than 30 pages (for Translation)<br>or 90 minutes (for our other services) can be discussed by email.</li> <br>
                <li><span>Special requirements</span> include timestamping, special formatting,<br>following guidelines provided by you, et cetera.</li> 
              </ul>
            </div>
        </section>
        <section id="confidentiality">
            <h2>Confidentiality</h2>
            <p>We make sure your files are safe with us. We do not post any part of your files online nor do we share them with any third parties. After finishing our work with your file and making sure you're happy with the final product, we delete any information related to your file from our databases in order to maintain your privacy.</p>
        </section>
        <section id="contact">
            <h2>Contact</h2>
            <p>Email: rama.k.d.b.p@gmail.com</p>
        </section>
        <footer>

        </footer>
        <script src="script.js" type="text/javascript"></script>
    </body>
</html>