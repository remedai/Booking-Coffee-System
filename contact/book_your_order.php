<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  </head>
  <body>
    <script>




    </script>
  <div ><a style="	
 border: 2px solid #0bb5f4;
  color: #fff;
text-decoration:none;
	padding: 10px 25px;
	background:#0bb5f4;
	border:1px solid #fff;
	border-radius: 20px;
	outline: none;
	cursor:pointer;
    font-size:20px" href="/Booking Coffee System/first page -gui.php">BACK</a></div>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1> BOOKING YOUR ORDER</h1>
          </div>
          <div class="panel-body">
            <form action="connect.php" method="post">
              <div class="form-group">
                <label for="customer"> Customer </label>
                <input
                  type="text"
                  class="form-control"
                  id="customer"
                  name="customer"
                required/>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                required/>
              </div>
              <div class="form-group">
                <label for="contact">Contact</label>
                <div>
                  <label for="direct" class="radio-inline"
                    ><input
                      type="radio"
                      name="contact"
                      value="direct"
                      id="direct"			 
                    onclick="Check()"
                      required/>direct
                      
                      </label
                  >
                  <label for="online" class="radio-inline"
                    ><input
                      type="radio"
                      name="contact"
                      value="online"
                      id="online"
                    onclick="Check2()"
					          required/>online
                    
                    </label
                  >
              
                </div>
              </div>
			  <label for="">Direct</label>
			  <div  style=" border: 1px solid #000;border-top-color: #000 ;" >
			     <div class="form-group">
                <label for="p">   -Number Of Your Table</label>
                <input
                  type="number_table"
                  class="form-control"
                  id="number_table"
                  name="number_table"
				  value="0"
	
                required/>
			</div>
              </div>
            
			  <label for="">Online</label>
			  <div  style="border: 1px solid #000;border-top-color: #000 ;"  >
              <div class="form-group">
                <label for="phonenumper">-Phone Numper</label>
                <input
                  type="text"
                  class="form-control"
                  id="phonenumper"
                  name="phonenumper"
				  value="0"
          
               required />
              
           </div>
              <div class="form-group">
                <label for="address">-Address</label>
                <input
                  type="address"
                  class="form-control"
                  id="address"
                  name="address"
				  value="not have"
          
                required/>
              </div>
			</div>
			  <div class="form-group">
                <label for="your_order">Your Order</label>
                <input
                  type="your_order"
                  class="form-control"
                  id="your_order"
                  name="your_order"
				  
                required/>
              </div>
			  <div class="form-group">
                <label for="price">price</label>
                <input
                  type="price"
                  class="form-control"
                  id="price"
                  name="price"
				
                required/>
              </div>

              <div class="form-group">
                <label for="payment">payment</label>
                <div>
                  <label for="mastercar" class="radio-inline"
                    ><input
                      type="radio"
                      name="payment"
                      value="mastercar"
                      id="mastercar"			 
					 
                    required/>mastercar</label
                  >

                  <label for="cash" class="radio-inline"
                    ><input
                      type="radio"
                      name="payment"
                      value="cash"
                      id="cash"
                       required/>cash</label
                  >
              
                </div>
              </div>


              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
         
          
        </div>
      </div>
    </div>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
  
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
 
</div>
  </body>
</html>
