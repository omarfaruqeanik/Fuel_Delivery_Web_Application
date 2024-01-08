<html>
<head>
<style>
.succes {
  background-color: #4BB543;
}
.succes-animation {
  animation: succes-pulse 2s infinite;
}

.danger {
  background-color: #CA0B00;
}
.danger-animation {
  animation: danger-pulse 2s infinite;
}

.custom-modal {
  position: relative;
  width: 350px;
  min-height: 250px;
  background-color: #fff;
  border-radius: 30px;
  margin: 40px 10px;
}
.custom-modal .content { 
  position: absolute;
  width: 100%;
  text-align: center;
  bottom: 0;
}
.custom-modal .content .type {
  font-size: 18px;
  color: #999;
}
.custom-modal .content .message-type {
  font-size: 24px;
  color: #000;
}
.custom-modal .border-bottom {
  position: absolute;
  width: 300px;
  height: 20px;
  border-radius: 0 0 30px 30px;
  bottom: -20px;
  margin: 0 25px;
}
.custom-modal .icon-top {
  position: absolute;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  top: -30px;
  margin: 0 125px;
  font-size: 30px;
  color: #fff;
  line-height: 100px;
  text-align: center;
}
@keyframes succes-pulse { 
  0% {
    box-shadow: 0px 0px 30px 20px rgba(75, 181, 67, .2);
  }
  50% {
    box-shadow: 0px 0px 30px 20px rgba(75, 181, 67, .4);
  }
  100% {
    box-shadow: 0px 0px 30px 20px rgba(75, 181, 67, .2);
  }
}
@keyframes danger-pulse { 
  0% {
    box-shadow: 0px 0px 30px 20px rgba(202, 11, 0, .2);
  }
  50% {
    box-shadow: 0px 0px 30px 20px rgba(202, 11, 0, .4);
  }
  100% {
    box-shadow: 0px 0px 30px 20px rgba(202, 11, 0, .2);
  }
}


.page-wrapper {
  height: 100vh;
  background-color: #eee;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 80px 0;
}
body { margin:0; font-family: 'Roboto';}
@media only screen and (max-width: 800px) {
  .page-wrapper {
    flex-direction: column;
  }
}
</style>
  </head>
  <body>
  <div class="page-wrapper">
  <div class="custom-modal">
    <div class="succes succes-animation icon-top"><i class="fa fa-check"></i></div>
    <div class="succes border-bottom"></div>
    <div class="content">
      <p class="type">Thanks For Your Order</p>
      <p class="message-type">Order Placed Succesfully</p>
      <a href="/" class="btn btn-info" role="button">Back To Home Page</a>
    </div>
  </div>
</div>

</body>
</html>