    <div class="footer">
      <div class="topfooter"><!--footer(blog,links,tweets,contact)-->

          <div class="box"><!--Blog(p)-->
            <h4 class="tiltefooter">From The Blog</h4>
            <h5 id="posttitle">Post title</h5>
            <p class="pfoot">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet ultrices eros. Nullam lobortis nibh diam, vitae maximus elit iaculis id. Pellentesque non mollis nulla. Quisque sit amet vehicula eros. Pellentesque non turpis iaculis, rhoncus mi at, laoreet enim. Integer sapien velit, viverra a tortor sed, efficitur blandit erat. Donec quis condimentum odio, feugiat tristique nulla.</p>
            <a href="#">Read More</a>
          </div><!--FIN Box-->

          <div class="box"><!--Links(a)-->
            <h4>Quick Links</h4>
            <ul class="liste">
              <li>
                <a href="#">Loren ipsum dolor sit</a>
              </li>
              <li>
                <a href="#">Annet conservateur</a>
              </li>
              <li>
                <a href="#">Praesent velsem id</a>
              </li>
              <li>
                <a href="#">Curabitur hendreit est</a>
              </li>
              <li>
                <a href="#">Aliquam eget erat nec sapein</a>
              </li>
              <li>
                <a href="#">Cras id augue nunc</a>
              </li>
              <li>
                <a href="#">Sed a nulla urna</a>
              </li>
            </ul>
          </div><!--FIN Box-->

          <div class="box"><!--tweets(p)-->
            <h4>Latest Tweets</h4>
            <p class="pfoot">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet ultrices eros. Nullam lobortis nibh diam, vitae maximus elit iaculis id. Pellentesque non mollis nulla. Quisque sit amet vehicula eros.</p>
            <p class="pfoot">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet ultrices eros. Nullam lobortis nibh diam, vitae maximus elit iaculis id. Pellentesque non mollis nulla. Quisque sit amet vehicula eros.</p>
          </div><!--FIN Box-->

          <div class="box"><!--Contact(Formulaire)-->
            <h4>Contact Us</h4>
            <form action="/ma-page-de-traitement" method="post"><!--Formulaire 4 label(name,email,subject,message)-->
              <div class="label">
                <label for="name"></label>
                <input type="text" id="name" name="user_name" value="Full Name">
              </div>
              <div class="label">
                <label for="mail"></label>
                <input type="email" id="mail" name="user_mail" value="Email Adress">
              </div>
              <div class="label">
                <label for="subject"></label>
                <input type="subject" id="subject" name="subject" value="Subject">
              </div>
              <div class="label">
                <label for="msg"></label>
                <textarea id="msg" name="user_message">Message</textarea>
              </div>
              <div class="label">
                <button type="submit">Submit</button>
              </div>
            </form><!--FIN Formulaire-->
          </div><!--FIN Box-->

      </div><!--FIN topheader-->
      <div class="barrenoir"></div><!--barre noire entre topfooter & belowheader-->
      <div class="belowfooter"><!--Copyright(p)-->
        <p id="copyright">Copyright © 2020 Marius Paquet - All rights Reserved</p>
        <p id="copyright2">Intégration n-1</p>
      </div><!--FIN belowheader-->

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
