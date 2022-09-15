<html>
<body>
<div class="container">
    <div class="content">
      <div class="cover"></div>
      <div>
        <h2>Account Activation Ticket For You !</h2>
        <div class="hr"></div>
        <p>
        Hello,
          <br>
          <br>
          Thank you for registering on Ticket For You click the link below to confirm your email and activate your account:

        </p>
        <button type="button"><a href="<?php echo base_url('basic/activate/').$id.'/'. $activation;?>">Click here to activate</a></button>
        <p>
        Kind regards <br>
		Good job. <br>
		Ticket For You <br>
        </p>
        <div class="hr"></div>
        <p class="remarks">If you have received this email in error, please <a href="#">report</a>.</p>
      </div>
    </div>
    <div class="footer">
      <p>
        Tickets For You
        <br>
        <br>
        <a href="#">Login</a>｜<a href="#">About</a>｜<a href="#" >Unsubscribe</a>
      </p>
    </div>
</div>
</body>
</html>
<style>

body {
  font-family: sans-serif;
  background: rgb(71,106,168);
  background: linear-gradient(0deg, rgba(71,106,168,1) 0%, rgba(114,153,226,1) 52%, rgba(123,231,214,1) 100%);
  }

h2{
  text-align: center;
}

h4{
  color: #FFFFFF;
}

p{
  font-size: 15px;
  padding: 20px;
}

button{
  width: 60%;
  height: 50px;
  text-align: center;
  background-color: #42d4bd;
  color: #ffffff;
  border-radius: 50px;
  border: none;
  font-size: 18px;
  font-weight: bold;
  position: relative;
  left: 50%;
  transform: translateX(-50%);
  cursor: pointer; 
}

.container{
  width: 100%;
  max-width: 550px;
  min-width: 300px;
  position: relative; 
  left: 50%;
  transform: translateX(-50%);
}

.content{
  background-color: #FFFFFF;
  box-shadow: 2px 2px 8px #444444;
}

.cover{
  background: url('<?= base_url() ?>assets/images/logo.png');
  background-size: 95%;
  background-repeat: no-repeat;
  width: 100%;
  height: 230px;
  background-color:rgb(71,106,168);
}

.hr{
  width: 100%;
  height: 0.75px;
  background-color: #E5E5E5;
}

.remarks{
  color: #B3B3B3;
  font-size: 12px;
}

.footer{
  text-align: center;
}

.footer a, .footer p{
  color: #FFFFFF;
  font-size: 12px;
}
</style>